builde processing

# edit gem file
```
gem 'active_model_serializers'
```

```
bundle
```

# builde Controllers
```
rails g controller api/application --no-assets --no-helper --skip-template-engine --no-request-specs
```

# modify  `app/controllers/api/application_controller.rb`

```
class Api::ApplicationController < ApplicationController
    skip_before_action :verify_authenticity_token
    private

    def authenticate_user!
      unless current_user.present?
        render(json: { status: 401 }, status: 401)
      end
    end
end
```


# general version 
```
rails g controller api/v1/products --no-assets --no-helper --skip-template-engine --no-request-specs
```

# `app/controllers/api/v1/products_controller.rb`

add "Api::"  in first line

```
class Api::V1::ProductsController < Api::ApplicationController
    before_action :authenticate_user!, except: [:index,:show]
    before_action :find_product, only: [:show, :destroy, :update]

      def index
        products = Product.order(created_at: :desc)
        render json: products
      end

      def show
        render json: @product
      end

      def create
        product = Product.new product_params
        product.user = current_user
        if product.save
          render json: { id: product.id }
        else
          render(
            json: { errors: product.errors },
            status: 422 
          )
        end
      end

      def destroy
        @product.destroy
        render json: { status: 200 }, status: 200
      end

      def update
        if @product.update product_params
          render json: @product
        else
          render(
            json: { errors: @product.errors },
            status: 422 
          )
        end
      end

      private

      def find_product
        @product ||= Product.find params[:id]
      end

      def product_params
        params.require(:product).permit(:title, :description)
      end
end
```


# generate session 

```
rails g controller api/v1/sessions --no-assets --no-helper --skip-template-engine --no-request-specs 
```

add "Api::"  in first line

class 
```
Api::V1::SessionsController < Api::ApplicationController
    def create
        user = User.find_by(email: params[:email])
        if user&.authenticate(params[:password])
          session[:user_id] = user.id
          render json: { id: user.id }
        else
          render(
            json: { status: 404 },
            status: 404 
          )
        end
      end

      def destroy
        session[:user_id] = nil
        render(json: { status: 200 }, status: 200)
      end
end
```

```ruby 
gem 'active_model_serializers'
```
Another approach to customize the JSON response to use ActiveModel

```
rails g serializer product
```


# `app/serializers/product_serializer.rb`

```
class ProductSerializer < ActiveModel::Serializer   
  attributes :id, :title, :description, :price, :created_at, :updated_at
  belongs_to :user, key: :seller
  class UserSerializer < ActiveModel::Serializer
    attributes(
      :id,
      :first_name,
      :last_name,
      :full_name,
      :email
    )
  end 
  has_many :reviews
  class ReviewSerializer < ActiveModel::Serializer
    attributes :id, :body, :rating
  end  
end
```

edit router.rb
```
  # labs for rails api
  namespace :api, defaults: {format: :json} do
    namespace :v1 do
      resources :products
      resource :session, only: [:create, :destroy]
    end
  end
```


# test 
```
rails s
```
```brower
http://localhost:3000/api/v1/products
```


![Screenshot from 2021-10-28 17-00-39](https://user-images.githubusercontent.com/21187699/139352102-347ea2c8-c733-424e-8466-b8edeeb43a22.png)
