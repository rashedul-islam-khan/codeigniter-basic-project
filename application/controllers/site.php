<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


    public function index()
    {
        $this->home();
    }



    public function home()
    {
        $this->load->model("model_get");
        $data["results"] = $this->model_get->getData("home");

        $this->load->view("site_header",$data);
        $this->load->view("site_nav");
        $this->load->view("content_home",$data);
        $this->load->view("site_footer");
    }



    public function about()
    {
        $this->load->model("model_get");
        $data["results"] = $this->model_get->getData("about");

        $this->load->view("site_header",$data);
        $this->load->view("site_nav");
        $this->load->view("content_about",$data);
        $this->load->view("site_footer");
    }



    public function contact()
    {
         $data["message"] = "";
        $this->load->model("model_get");
        $data["results"] = $this->model_get->getData("contact");

        $this->load->view("site_header",$data);
        $this->load->view("site_nav");
        $this->load->view("content_contact",$data);
        $this->load->view("site_footer");
    }



    public function send_email(){
        $this->load->library("form_validation");

        $this->form_validation->set_rules("fullName", "Full Name", "required");
        $this->form_validation->set_rules("email", "Email Address", "required|valid_email");
        $this->form_validation->set_rules("message", "Message", "required");

        if ($this->form_validation->run() == FALSE) {
            $data["message"] =  "";
            $this->load->view("site_header",$data);
            $this->load->view("site_nav");
            $this->load->view("content_contact",$data);
            $this->load->view("site_footer");
        } else {
            $data["message"] =  "The email has successfully been sent!";

            $this->load->library("email");
            $this->email->from(set_value("email"),set_value("fullName"));
            $this->email->to("rashedulislam.work@gmail.com");
            $this->email->subject("Message from our form");
            $this->email->message(set_value("message"));

            $this->email->send();

            //echo $this->email->print_debugger();

            $this->load->model("model_get");
            $data["results"] = $this->model_get->getData("about");

            $this->load->view("site_header",$data);
            $this->load->view("site_nav");
            $this->load->view("content_contact", $data);
            $this->load->view("site_footer");
        }
    }




    public function login()
    {
        $this->load->model("model_get");
        $data["results"] = $this->model_get->getData("login");

        $this->load->view("site_header",$data);
        $this->load->view("site_nav");
        $this->load->view('login');
        $this->load->view("site_footer");
    }





    public function products()
    {
        if ($this->session->userdata('is_logged_in')) {
                $this->load->model("model_get");
                $data["results"] = $this->model_get->getData("product");

                $this->load->view("site_header",$data);
                $this->load->view("site_nav");
                $this->load->view("content_product",$data);
                $this->load->view("site_footer");
        } else{
            redirect("site/restricted");
        }
    }

    

    public function restricted(){

        $this->load->model("model_get");
        $data["results"] = $this->model_get->getData("restricted");

        $this->load->view("site_header",$data);
        $this->load->view("site_nav");
        $this->load->view('restricted');
        $this->load->view("site_footer");
    }



    public function login_validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("email","Email","required|trim|valid_email|callback_validate_credentials");
        $this->form_validation->set_rules("password","Password","required|md5|trim");

        if ($this->form_validation->run()) {

            $data = array(
                'email' => $this->input->post('email') , 
                'is_logged_in' => 1 
                );

            $this->session->set_userdata($data);
            redirect("site/products");
        } else
        {
            $this->load->view('login');
        }
    }




    public function validate_credentials(){

            $this->load->model('model_users');

            if ($this->model_users->can_log_in()){
                return true;
            } else{
                $this->form_validation->set_message('validate_credentials','Incorrect Username or Password.');
                return false;
            }
     }



    public function logout(){

       $this->session->sess_destroy();
       redirect('site/login');
    }


    
}

?>