<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		 parent::__construct();
		 $this->load->model('backoffice/LoginAdmin', 'LoginAdmin');
		 $this->load->model('backoffice/Statistique', 'Statistique');
		 $this->load->model('backoffice/CRUDplat');
	}
	public function index()
	{
		$this->load->view('home');
		
	}
	public function logAdmin()
	{
		$this->load->view('backoffice/login');
	}
	public function home(){
		$this->load->view('backoffice/menu');
	}
	public function login()
	{
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model('backoffice/LoginAdmin','login');
		      $contact = $this->input->post('contact');
		      $pass = $this->input->post('mdp');
		      $exists = $this->LoginAdmin->login($contact, $pass);

		      if (isset($exists)) {
		           // $_SESSION['user'] = $exists;
		           $this->load->library('form_validation');
		           $this->load->library('session');
		           $this->session->set_flashdata('idAdmin',$exists);  
		           $data['idAdmin'] = $this->session->userdata('user_id');
			  
				   $this->home();

				   

		      } else {
		           $data['error'] = " Veuillez vérifier vos informations";
		           $this->load->view('backoffice/login', $data);
		      }
		 } else 
		 {
		      $this->load->view('backoffice/login');
		 }
	}
	public function historique()
	{
		$data = array();
		$this->load->model('backoffice/Historique');
		$data['historique'] = $this->Historique->historique_commande();
		$this->load->view('backoffice/historique',$data);
	}
	public function statistique()
	{
		$data = array();
		$data['numUser'] = $this->Statistique->statistique_user();
		$data['numUserActif'] = $this->Statistique->statistique_active_user();

		$this->load->view('backoffice/statistique',$data);
	}
	public function listPlat() {
        $data['plats'] = $this->CRUDplat->getPlats();
        $this->load->view('backoffice/RUDplat', $data);
    }

    public function createPlat() {
        $this->load->view('backoffice/Cplat');
    }

    public function storePlat() {
        $nomPlat = $this->input->post('nomPlat');
        $typeRegime = $this->input->post('typeRegime');
        $this->CRUDplat->createPlat($nomPlat, $typeRegime);
		$this->load->view('backoffice/RUDplat');
    }

    public function editPlat($idPlat) {
        $data['plat'] = $this->CRUDplat->getPlat($idPlat);
        $this->load->view('backoffice/Uplat', $data);
    }

    public function updatePlat($idPlat) {
        $nomPlat = $this->input->post('nomPlat');
        $typeRegime = $this->input->post('typeRegime');
        $this->CRUDplat->updatePlat($idPlat, $nomPlat, $typeRegime);
		$this->load->view('backoffice/RUDplat');
		
    }

    public function deletePlat($idPlat) {
        $this->CRUDplat->deletePlat($idPlat);
		$data['plats'] = $this->CRUDplat->getPlats();
		$this->load->view('backoffice/RUDplat',$data);

    }

}
