<?php

class PlatController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CRUDPlat');
    }

    public function listPlat() {
        $data['plats'] = $this->CRUDPlat->getPlat();
        $this->load->view('backoffice/RUDplat', $data);
    }

    public function createPlat() {
        $this->load->view('plat/create');
    }

    public function storePlat() {
        $nomPlat = $this->input->post('nomPlat');
        $typeRegime = $this->input->post('typeRegime');
        $this->PlatModel->createPlat($nomPlat, $typeRegime);
        redirect('plat');
    }

    public function editPlat($idPlat) {
        $data['plat'] = $this->PlatModel->getPlat($idPlat);
        $this->load->view('plat/edit', $data);
    }

    public function updatePlat($idPlat) {
        $nomPlat = $this->input->post('nomPlat');
        $typeRegime = $this->input->post('typeRegime');
        $this->PlatModel->updatePlat($idPlat, $nomPlat, $typeRegime);
        redirect('plat');
    }

    public function deletePlat($idPlat) {
        $this->PlatModel->deletePlat($idPlat);
        redirect('plat');
    }
}