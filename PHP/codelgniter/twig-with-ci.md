not work

http://acmeextension.com/integrate-twig-with-codeigniter/

How to Integrate Twig with CodeIgniter [Step by Step]
￼ By: Sunil Kumar |  In: PHP  |  Last Updated: 2018/06/02
￼
Recently I started a CodeIgniter project and thought to use Twig in this project as a Templating Engine. Because PHP is developed for business logic implementation. There are a lot of dedicated libraries available for templating only. and twig is one of them.
Twig is one of the most popular templating engine in PHP. It is fast, secure and flexible  I am using Twig since last 4 years with Symfony and it is just awesome.
In this article, I will explain the Step by step process to integrate Twig with CodeIgniter.

Step 1. Download CodeIgniter
If you already have CI(CodeIgniter) project you can skip this step. If you are starting a new CI project you can download the latest version of CodeIgniter from here.

Step 2. Install Composer
We are using the composer to install the Twig library with our CodeIgniter Project. If you haven’t installed composer you can follow these steps to install composer.

Why You Should be Using Templating Engine Instead of PHP

Step 3. Twig Installation
#1. Add the following code in your composer.json file which is present in the root directory of your project

"config": {
    "vendor-dir": "application/vendor"
},
"require": {
    "twig/twig": "~1.0"
}
#2. Now run the composer file using –

php composer.phar install
If you do not have composer.phar file downloaded, you can download using

wget https://getcomposer.org/composer.phar
You will see your libraries getting installed one by one.
￼
#3. Now enable composer_autoload in the config file(/application/config/config.php)

$config['composer_autoload'] = TRUE;
#4.

Make another config document in application/config and name it twig.php and add the subsequent code:
$config['twig']['template_dir'] = VIEWPATH;
$config['twig']['template_ext'] = 'php';
$config['twig']['environment']['autoescape'] = TRUE;
$config['twig']['environment']['cache'] = FALSE;
$config['twig']['environment']['debug'] = FALSE;
#5. Create a new library(/application/libraries/) and name it Twig.php. and add the following code:

class Twig {
    private $CI;
    private $_config = array();
    private $_twig;
    private $_twig_loader;
    public function __construct(){
        log_message('debug', 'Twig: library initialized');
        $this->CI =& get_instance();
        $this->_config = $this->CI->config->item('twig');
        try {
            $this->_twig_loader = new Twig_Loader_Filesystem($this->_config['template_dir']);
        } catch (Exception $e) {
            show_error(htmlspecialchars_decode($e->getMessage()), 500, 'Twig Exception');
        }
        if($this->_config['environment']['cache'] === true){
            $this->_config['environment']['cache'] = APPPATH.'cache/twig';
        }
        $this->_twig = new Twig_Environment($this->_twig_loader, $this->_config['environment']);
    }
    public function render($template, $data = array()){
        $template = $this->addExtension($template);
        return $this->_twig->render($template, $data);
    }
    public function display($template, $data = array()){
        $this->_twig->display($template, $data);
    }
    private function addExtension($template){
        $ext = '.'.$this->_config['template_ext'];
        if(substr($template, -strlen($ext)) !== $ext){
            return $template .= $ext;
        }
        return $template;
    }
}
#6. Create a core file to extend Codeigniter Loader. In this example is MY_Loader.php. (/application/core/MY_Loader.php)

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Loader extends CI_Loader {
    public function view($template, $data = array(), $return = FALSE) {
        $CI =& get_instance();
        try {
            $output = $CI->twig->render($template, $data);
        } catch (Exception $e) {
            show_error(htmlspecialchars_decode($e->getMessage()), 500, 'Twig Exception');
        }
        // Return the output if the return value is TRUE.
        if ($return === TRUE) {
            return $output;
        }
        // Otherwise append to output just like a view.
        $CI->output->append_output($output);
    }
}
#7. Add the twig.php config file and the Twig.php library to your autoload configuration (/application/config/autoload.php).

$autoload['libraries'] = array('Twig');
$autoload['config'] = array('twig');
That’s it.
Now we are all done with the setup part. You can use Twig syntax in your project. I am also adding a sample project for all the above changes for your reference. You can download this sample project here.

Conclusion
So you integrated Twig with your CodeIgniter Project. Twig does not affect your existing view Syntex so you can use your existing view file as it is without any problem.