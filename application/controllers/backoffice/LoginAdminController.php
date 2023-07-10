<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginAdminController extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('backoffice/LoginAdmin', 'LoginAdmin');
     }
       public function accueil()
     {
          echo 'Mety';
          $this->load->view('backoffice/menu');
     }

     public function login()
     {
         
          // if ($this->input->server('REQUEST_METHOD') == 'POST') {
          //      $contact = $this->input->post('contact');
          //      $pass = $this->input->post('mdp');

          //      $exists = $this->LoginAdmin->login($contact, $pass);

          //      if (isset($exists)) {
          //           // $_SESSION['user'] = $exists;
          //           $this->load->library('form_validation');
          //           $this->load->library('session');
          //           $this->session->set_flashdata('idAdmin',$exists);  
          //           $data['idAdmin'] = $this->session->userdata('user_id');
               
                    $this->load->view('backoffice/menu');

                    

          //      } else {
          //           $data['error'] = " Veuillez vérifier vos informations";
          //           $this->load->view('backoffice/login', $data);
          //      }
          // } else 
          // {
          //      $this->load->view('backoffice/login');
          // }
     }
}
