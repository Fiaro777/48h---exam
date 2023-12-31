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
	public function logClient()
	{
		$this->load->view('Frontoffice/login');
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
	public function activite()
	{
		$this->load->view('backoffice/activite');
	}
	public function listPlat() {
        $data['plats'] = $this->CRUDplat->getPlats();
        $this->load->view('backoffice/RUDplat', $data);
    }
	public function listSport() {
        $data['sport'] = $this->CRUDplat->getSport();
        $this->load->view('backoffice/Cregime', $data);
    }
	public function listIngredient() {
        $data['ingredients'] = $this->CRUDplat->getPlats();
        $this->load->view('backoffice/Cplat', $data);
    }

	public function getIngredients()
	{
		$ingredients = $this->db->get('ingredient')->result();
		header('Content-Type: application/json');
		echo json_encode($ingredients);
	}
	
    public function createPlat() {
        $this->load->view('backoffice/Cplat');
    }

    public function storePlat() {
        $nomPlat = $this->input->post('nomPlat');
        $typeRegime = $this->input->post('typeRegime');
        $this->CRUDplat->createPlat($nomPlat, $typeRegime);
		$data['plats'] = $this->CRUDplat->getPlats();
		$this->load->view('backoffice/RUDplat',$data);

    }

	public function storeRegime() {
        $idPlat = $this->input->post('idPlat');
        $typeRegime = $this->input->post('typeRegime');
		$idSport = $this->input->post('idSport');
        $dureeSport = $this->input->post('dureeSport');
        $minPoids = $this->input->post('minPoids');
        $maxPoids = $this->input->post('maxPoids');
        $prixRegime = $this->input->post('prixRegime');


        $this->CRUDplat->createRegime($idPlat, $typeRegime,$idSport,$dureeSport,$minPoids,$maxPoids,$prixRegime);
		$data['regimes'] = $this->CRUDplat->getRegime();
		$this->load->view('backoffice/RUDRegime',$data);

    }
	
	public function storeComposition()
    {
        
        $this->load->model('CRUDplat');

        // Données des ingrédients à insérer
        $selectedValues = $this->input->post('dynamic_input');
        $quantities = $this->input->post('quantite');
        
        $data = array();
        for ($i = 0; $i < count($selectedValues); $i++) {
            $data[] = array(
                'plat_id' => $platId,
                'ingredient' => $selectedValues[$i],
                'quantite' => $quantities[$i]
            );
        }

        $this->CRUDplat->insertPlat($data);
    }

	public function displayChart()
    {
        
	   $this->load->model('CRUDplat');

	   $genderData = $this->CRUDplat->getChartGenre();

	   header('Content-Type: application/json');
	   echo json_encode($genderData);
	}
	
	public function ActiveChart()
    {
        
	   $this->load->model('CRUDplat');

	   $ActiveData = $this->CRUDplat->getChartActive();

   header('Content-Type: application/json');
	   echo json_encode($ActiveData);
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
	public function deconnexion() {
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('login');
	}

	public function AjouterRegime() {
		$data['plats'] = $this->CRUDplat->getPlats();
        $data['sports'] = $this->CRUDplat->getSport();
		$this->load->view('backoffice/Cregime',$data);

    }

}
