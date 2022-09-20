https://stackoverflow.com/questions/5172261/where-and-why-do-we-use-tostring-in-php

19

In addition to all existing answers, here's an example, :

class Assets{

  protected 
    $queue = array();

  public function add($script){
    $this->queue[] = $script;
  }

  public function __toString(){    
    $output = '';    
    foreach($this->queue as $script){
      $output .= '<script src="'.$script.'"></script>';
    }    
    return $output;
  }

}


$scripts = new Assets();
It's a simple class that helps you manage javascripts. You would register new scripts by calling $scripts->add('...').

Then to process the queue and print all registered scripts simply call print $scripts;.

Obviously this class is pointless in this form, but if you implement asset dependency, versioning, checks for duplicate inclusions etc., it starts to make sense (example).

The basic idea is that the main purpose of this object is to create a string (HTML), so the use of __toString in this case is convenient...

Share
Improve this answer
