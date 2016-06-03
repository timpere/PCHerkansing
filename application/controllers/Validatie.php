<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validatie extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Validate','',TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
//        $this->load->library('session');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/registreer');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/registreergelukt');
            $this->load->view('templates/footer');
        }

    }

    function check_database($wachtwoord)
    {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');

        //query the database
        $result = $this->validate->login($email, $wachtwoord);

        if($result)
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Verkeerd Gebruikersnaam of Wachtwoord');
            return false;
        }
    }
}
?>
