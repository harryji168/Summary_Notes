

  params = ActionController::Parameters.new({
            auction: {          
                status: "published"
            }
        })

        permitted = params.require(:auction).permit(:status)
        permitted            # => <ActionController::Parameters {"name"=>"Francesco", "age"=>22} permitted: true>
        permitted.permitted? # => true

        @auction.update!(permitted)




https://api.rubyonrails.org/classes/ActionController/Parameters.html