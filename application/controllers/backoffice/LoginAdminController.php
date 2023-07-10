<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginAdminController extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('backoffice/LoginAdmin', 'LoginAdmin');
     }
     
     //affiche l'accueil du client 
     public function accueil()
     {
          echo 'Mety';
          $this->load->view('backoffice/menu');
     }
     //authentification côté client
     public function login()
     {
         
          if ($this->input->server('REQUEST_METHOD') == 'POST') {
               $contact = $this->input->post('contact');
               $pass = $this->input->post('mdp');

               $exists = $this->LoginAdmin->login($contact, $pass);

               if (isset($exists)) {
                    // $_SESSION['user'] = $exists;
                    $this->load->library('form_validation');
                    $this->load->library('session');
                    $this->session->set_flashdata('idAdmin',$exists);  
                    $refa_ampesaina_le_session=$this->session->flashdata('idAdmin');          
                    $this->accueil();
                    

               } else {
                    $data['error'] = " Veuillez vérifier vos informations";
                    $this->load->view('admin/login', $data);
               }
          } else 
          {
               $this->load->view('admin/login');
          }
     }
}
