# export sort by desc
 

```
 has_many :bids do
    object.bids.order(updated_at: :DESC)
 end  
 ```