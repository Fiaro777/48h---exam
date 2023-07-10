<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginClientController extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('Frontoffice/LoginClient', 'LoginClient');
     }
     
     //affiche l'accueil du client 
     public function accueil()
     {
          echo 'Mety';
          $this->load->view('admin/accueil');
          $this->load->view('client/accueil');

     }
     //authentification côté client
     public function login()
     {
         
          if ($this->input->server('REQUEST_METHOD') == 'POST') {
               $contact = $this->input->post('contact');
               $pass = $this->input->post('mdp');

               $exists = $this->LoginClient->login($contact, $pass);

               if (isset($exists)) {
                    // $_SESSION['user'] = $exists;
                    $this->load->library('form_validation');
                    $this->load->library('session');
                    $this->session->set_flashdata('idUser',$exists);  
                    $refa_ampesaina_le_session=$this->session->flashdata('idUser');          
                    //$this->accueil();
                    
                     echo $refa_ampesaina_le_session;
               } else {
                    $data['error'] = " Veuillez vérifier vos informations";
                    $this->load->view('client/login', $data);
               }
          } else 
          {
               $this->load->view('client/login');
          }
     }
}
