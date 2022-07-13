# Rails ActiveRecord data types


The ActiveRecord data types available in Rails 5.

- :primary_key
- :string
- :text
- :integer
- :bigint
- :float
- :decimal
- :numeric
- :datetime
- :time
- :date
- :binary
- :boolean
These data types are used in instances such as migrations.

```ruby
def change
  create_table :categories do |t|
    t.string :title
    t.boolean :is_subcategory
    t.string :permalink
    t.timestamps
  end
end
```

# Required 
```
null: false
```

# unique
```
unique: true
```
# unique within another field

?


rails generate migration add_index_to_table_name column_name:uniq

```ruby
class CreateFoobars < ActiveRecord::Migration
  def change
    create_table :foobars do |t|
      t.string :name, index: {unique: true}
    end
  end
end
```