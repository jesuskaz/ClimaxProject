<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Poster extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('PosteFilmModel');
        }
        function index()
        {
            $this->load->view('index.php'); 
        }
        
        function loginAdmin()
        {
            $this->load->view('login.php');
        }
        function espaceAdmin()
        {
            $this->load->view('espaceAdmin.php');
        }

        function loginFinance()
        {
            $this->load->view('loginFinance.php');
        }
        public function espaceFin()
        {
            $this->load->view('espaceFin.php');
        }

        function posteFilm()
        {
            $this->load->view('posteFilm.php');
        }
        function datatables()
        {
            $this->load->view('datatables.php');
        }
        public function uploader()
        {  
            // Check form submit or not
            if($this->input->post('upload') != NULL)
            {
                $data = array();

                // Count total files
                $countFiles = count($_FILES['files']['name']);
                
                // Looping all files
                for($i = 0; $i < $countFiles; $i++)
                {
                    if(!empty($_FILES['files']['name'][$i]))
                    {
                        // Define new $_FILES array -$_FILES['file']
                        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                        // Set preference
                        $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                        $config['max_size'] = 10000000;
                        // $config['max_width'] = 2048;
                        // $config['max_height'] = 2048;
                        $config['file_name'] = $_FILES['files']['name'][$i];
                        $config['encrypt_name'] = false;
                    
                        // Load upload library
                        $this->load->library('upload', $config);
                        //$this->upload->initialize($config);
    
                        if($this->upload->do_upload('file'))
                        {
                            // Get data about the file
                           $uploadData = $this->upload->data();
                           chmod($uploadData['full_path'], 0777);
                           $filename = $uploadData['file_name'];

                           // Insert to database
                           $insert[$i]['file_name'] = $uploadData['file_name'];
                           //$error = array('error' => $this->upload->display_errors());
                           //$this->load->view('posteFilm', $error);
                           $data['filenames'][] = $filename;
                        }
                    }
                }
                
                $titre = $this->input->post('titre');
                $type = $this->input->post('type');
                $heureDebut = $this->input->post('heureDebut');
                $heureFin = $this->input->post('heureFin');
                $dateDiff = $this->input->post('jourDiffusion');
                $desc = $this->input->post('des');

                //echo $insert[1]['file_name'];

                $collection = array(
                    'titre' => $titre,
                    'type' => $type,
                    'heureDebut' => $heureDebut,
                    'heureFin' => $heureFin,
                    'jourDiff' => $dateDiff,
                    'affiche1' => $insert[0]['file_name'],
                    'affiche2' => $insert[1]['file_name'],
                    'affiche3' => $insert[2]['file_name'],
                    'description' => $desc,
                );
                $this->PosteFilmModel->insertion($collection);
                $this->load->view('posteFilm', $data);
            }
            else
            {
                //$error =  array('error' => $this->upload->display_error());
                $this->load->view('posteFilm');
                //$data = array('upload_data' => $this->upload->data());
                //echo '<br/><h1>Upload Success</h1>';
                //$this->load->view('upload_success', $data);
            }

        }

        public function selectData()
        {
            $data["element" ] = $this->PosteFilmModel->getData();
            $this->load->view('datatables', $data);

        }
        function generateurHashage()
        {
            $this->load->view('a.php');
        }
        public function getElementUpdate()
        {
           $user_id = $this->uri->segment(3);
           $data["user_data"] = $this->PosteFilmModel->updateElement($user_id);
           $data["element" ] = $this->PosteFilmModel->getData();
           $this->load->view('dataupdate', $data);
        }

        public function update()
        {

            if($this->input->post('modifier') != NULL)
            {
                $data = array();

                // Count total files
                $countFiles = count($_FILES['files']['name']);
                
                // Looping all files
                for($i = 0; $i < $countFiles; $i++)
                {
                    if(!empty($_FILES['files']['name'][$i]))
                    {
                        // Define new $_FILES array -$_FILES['file']
                        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                        // Set preference
                        $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                        $config['max_size'] = 10000000;
                        // $config['max_width'] = 2048;
                        // $config['max_height'] = 2048;
                        $config['file_name'] = $_FILES['files']['name'][$i];
                        $config['encrypt_name'] = false;
                    
                        // Load upload library
                        $this->load->library('upload', $config);
                        //$this->upload->initialize($config);
    
                        if($this->upload->do_upload('file'))
                        {
                            // Get data about the file
                           $uploadData = $this->upload->data();
                           chmod($uploadData['full_path'], 0777);
                           $filename = $uploadData['file_name'];

                           // Insert to database
                           $insert[$i]['file_name'] = $uploadData['file_name'];
                           //$error = array('error' => $this->upload->display_errors());
                           //$this->load->view('posteFilm', $error);
                           $data['filenames'][] = $filename;
                           '<pre>';
                           print_r($data);
                           '</pre>';
                        }
                    }
                }
                
                $titre = $this->input->post('titre');
                $type = $this->input->post('type');
                $heureDebut = $this->input->post('heureDebut');
                $heureFin = $this->input->post('heureFin');
                $dateDiff = $this->input->post('jourDiffusion');
                $desc = $this->input->post('des');
                $hidden_id = $this->input->post('hidden_id');

                echo $insert[1]['file_name'];

                $collection = array(
                    'titre' => $titre,
                    'type' => $type,
                    'heureDebut' => $heureDebut,
                    'heureFin' => $heureFin,
                    'jourDiff' => $dateDiff,
                    'affiche1' => $insert[0]['file_name'],
                    'affiche2' => $insert[1]['file_name'],
                    'affiche3' => $insert[2]['file_name'],
                    'description' => $desc,
                );
                $this->PosteFilmModel->update_data($collection, $hidden_id);
                $this->load->view('posteFilm', $data);
            }
            else
            {
                //$error =  array('error' => $this->upload->display_error());
                $this->load->view('posteFilm');
                //$data = array('upload_data' => $this->upload->data());
                //echo '<br/><h1>Upload Success</h1>';
                //$this->load->view('upload_success', $data);
            }

        }
        public function delete()
        {
            $user_id = $this->uri->segment(3);
            $this->PosteFilmModel->delete_data($user_id);
            $this->load->view("datatables", $user_id);
        }
    }
?>