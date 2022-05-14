<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Owner extends REST_Controller {

    function __construct()
    {
        header('Access-Control-Allow-Origin: *'); 
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers", "Content-Type, Authorization, X-Requested-With");
        // Construct the parent class
        parent::__construct();

        $this->load->database();
        $this->load->model("OwnerModel", "owner");
        $this->load->model("PetTypeModel", "pettype");

        

        //die("dfdf");
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function pettype_get()
    {
        
        $data = $this->pettype->lists();
        
        $id = $this->get('id');        
        
        // If the id parameter doesn't exist return all the users

        if ($id === NULL)
        {
            // Check if the users data store contains users (in case the database result returns NULL)
            if ($data)
            {
                // Set the response and exit
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }
            else
            {
                // Set the response and exit
                $this->response([
                    'status' => FALSE,
                    'message' => 'No pets were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }

        // Find and return a single record for a particular user.

        $id = (int) $id;

        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // Get the user from the array, using the id as key for retrieval.
        // Usually a model is to be used for this.

        //$data = NULL;

        if (!empty($data))
        {
            $data = $this->pettype->getbyid($id);
     
        }
        
        if (!empty($data))
        {
            $this->set_response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'No pets could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function owners_get()
    {
        // Users from a data store e.g. database
        // $users = [
        //     ['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
        //     ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
        //     ['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        // ];
        // $data["pettype"] = $this->pettype->lists();
        // print_r($data["pettype"]);
        $data["owners"] = $this->owner->lists();

        $id = $this->get('id');

        // If the id parameter doesn't exist return all the users

        if ($id === NULL)
        {
            // Check if the users data store contains users (in case the database result returns NULL)
            if ($data)
            {
                // Set the response and exit
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }
            else
            {
                // Set the response and exit
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }

        // Find and return a single record for a particular user.

        $id = (int) $id;

        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // Get the user from the array, using the id as key for retrieval.
        // Usually a model is to be used for this.
        //print_r($data);
        //$data = NULL;

        if (!empty($data))
        {
           
            foreach ($data as $key => $value)
            {

                foreach ($value as $key1 => $value1)
                {
                    //print_r($value1->id);
                    //echo $id.'<p>';
                    if($value1->id == $id){
                        $data = $value1;
                        //print_r($data);
                       // die("df");
                    }
                }
            //print_r($value[0]);
            //echo  $value;
                // if (isset($value['id']) && $value['id'] === $id)
                // {
                    
                //     $data = $value;
                //     echo $value;
                //    // print_r($data);
                // }
            }
        }

        if (!empty($data))
        { 
            $this->set_response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function owners_post()  //Create new
    {
        
      $field = array(
        'id' => 0,
        'owner_name'=>$this->post('name'),
        'pet_type_name'=>$this->post('pets')
        );
        $this->db->insert("owners", $field);
        $message = [       
            'id' => 0, // Automatically generated by the model
            'owner_name' => $this->post('name'),
            'pet_type_name' => $this->post('pets')
        ];

        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function owners_put()   //Update
    {
        
       $id= $this->put('id');
       $field = array(
        'owner_name'=>$this->put('owner_name'),
        'pet_type_name'=>$this->put('pet_type_name')
        );
        $this->db->where("id", $id);
        $this->db->update("owners", $field);
        $message = [
            'id' =>$id,  
            'owner_name' => $this->put('owner_name'),
            'pet_type_name' => $this->put('pet_type_name')
        ];

        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function owners_delete()
    {
        $id = $_GET['id'];

       // echo ($_GET['id']);
        //Validate the id.
        if ($id <= 0)
        {
            // Set the response and exit
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // $this->some_model->delete_something($id);
        $this->db->where("id", $id);
        $this->db->delete("owners");
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
    }

}
