<?php
    class Credential extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            // Load model
            $this->load->model('CredentialModel');
        }
        public function validateAdmin()
        {
            $username = $this->input->post('login');
            $pwd = md5($this->input->post('password'));

            $data = $this->CredentialModel->getAdmin($username, $pwd);
            if($data)
            {
                $session_data = array(
                    'username' => $username

                );

                $this->session->set_userdata($session_data);
                redirect('credential/enter');
            }
            else
            {
                $this->session->set_flashdata('error', 'Les données saisies ci-haut sont incorrectes');
                redirect("poster/loginAdmin");
            }
        }
        function deconnecter()
        {
            $this->session->unset_userdata('username');
            redirect('poster/index');   
        }
        public function enter()
        {
            if($this->session->userdata('username'))
            {
                redirect('poster/espaceAdmin');
            }
            else
            {
                //echo $this->session->userdata('usernamae');
                redirect('poster/login');
            }
        }
    }
?>