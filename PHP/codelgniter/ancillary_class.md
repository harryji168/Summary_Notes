Creating Ancillary Classes
In some cases you may want to develop classes that exist apart from your controllers but have the ability to utilize all of CodeIgniter’s resources. This is easily possible as you’ll see.

get_instance()
get_instance()
Returns:	Reference to your controller’s instance
Return type:	CI_Controller
Any class that you instantiate within your controller methods can access CodeIgniter’s native resources simply by using the get_instance() function. This function returns the main CodeIgniter object.

Normally, to call any of the available methods, CodeIgniter requires you to use the $this construct: