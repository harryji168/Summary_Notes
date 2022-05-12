
harryji@ubuntu:~/codecore_group_project$ git fetch
remote: Enumerating objects: 135, done.
remote: Counting objects: 100% (114/114), done.
remote: Compressing objects: 100% (23/23), done.
remote: Total 57 (delta 42), reused 43 (delta 33), pack-reused 0
Unpacking objects: 100% (57/57), 1.78 MiB | 3.60 MiB/s, done.
From https://github.com/vkub1/codecore_group_project
   c2b12e4..6dda9fc  master     -> origin/master
   4139b8c..c178ad4  dev        -> origin/dev
   4d3f376..50340c0  facilities -> origin/facilities
 * [new branch]      stripe     -> origin/stripe
harryji@ubuntu:~/codecore_group_project$ git pull
Updating c2b12e4..6dda9fc
Fast-forward
 app/controllers/enrollments_controller.rb |  2 +-
 app/views/bookings/edit.html.erb          |  2 +-
 app/views/bookings/new.html.erb           |  2 +-
 app/views/courses/_form.html.erb          |  6 ------
 app/views/courses/show.html.erb           | 14 ++++++++++----
 app/views/facilities/index.html.erb       | 10 ++++++----
 app/views/users/admin.html.erb            |  3 ++-
 app/views/welcome/index.html.erb          |  4 +++-
 8 files changed, 24 insertions(+), 19 deletions(-)



Gemfile 
 gem 'stripe'

 app/assets/images/chuck-norris.gif 

# app/controllers/bookings_controller.rb 
   before_action :find_course, except: [:index, :calendar, :thanks ]  




# app/views/layouts/application.html.erb 
       
    <%# stripe %>
    <script src="https://js.stripe.com/v3/"></script>   
    <%# stripe %>
    
  don't need this line
    <script src="checkout.js" defer></script>
    <link rel="stylesheet" href="checkout.css" />

# config/routes.rb 

get 'bookings/thanks', { to: 'bookings#thanks', as: 'thanks' }