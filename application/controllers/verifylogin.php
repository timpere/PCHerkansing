<?php
class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        //$this->load->model('Profiel_model','',TRUE);
    }

    function index()
    {
        echo 'kaas';
//        //This method will have the credentials validation
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
//        $this->form_validation->set_rules('wachtwoord', 'Wachtwoord', 'trim|required|xss_clean|callback_check_database');
//
//        if($this->form_validation->run() == FALSE)
//        {
//            //Field validation failed.  User redirected to login page
//            $this->load->view('mijnprofiel/login_view');
//        }
//        else
//        {
//            //Go to private area
//            redirect('home', 'refresh');
//        }
//
//    }
//
//    function check_database($wachtwoord)
//    {
//        //Field validation succeeded.  Validate against database
//        $email = $this->input->post('email');
//
//        //query the database
//        $result = $this->Persoon->login($email, $wachtwoord);
//
//        if($result)
//        {
//            $sess_array = array();
//            foreach($result as $row)
//            {
//                $sess_array = array(
//                    'id' => $row->id,
//                    'email' => $row->email
//                );
//                $this->session->set_userdata('logged_in', $sess_array);
//            }
//            return TRUE;
//        }
//        else
//        {
//            $this->form_validation->set_message('check_database', 'Invalid username or password');
//            return false;
//        }
    }
}
?>
