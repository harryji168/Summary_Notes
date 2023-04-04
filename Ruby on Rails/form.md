# select box
 <%=  collection_select(:post,  :facility_id, Facility.order(full_address: :asc), :id, :full_address, 
                    {:prompt => 'Please select the Facility'})
                  %>
# check box

                 <%=  form.collection_check_boxes :facility_id, Facility.order(full_address: :asc), :id, :full_address do |t| %>
                     <%= t.check_box %>
                     <%= t.text %>
                 <% end %>

# input box                
                <%# form.text_field :facility_id, :class=>'form-control' %>

# text area

              <%= label_tag :comment %>
                <%= form.text_area :comment , :class=>'form-control' %>    