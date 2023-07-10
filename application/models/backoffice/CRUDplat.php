<?php 

class CRUDPlat extends CI_Model {
    public function getPlats() {
        return $this->db->get('plat')->result();
    }

    public function getPlat($idPlat) {
        return $this->db->get_where('plat', array('idPlat' => $idPlat))->row();
    }

    public function createPlat($nomPlat, $typeRegime) {
        $data = array(
            'nomPlat' => $nomPlat,
            'typeRegime' => $typeRegime
        );
        $this->db->insert('plat', $data);
    }

    public function updatePlat($idPlat, $nomPlat, $typeRegime) {
        $data = array(
            'nomPlat' => $nomPlat,
            'typeRegime' => $typeRegime
        );
        $this->db->where('idPlat', $idPlat);
        $this->db->update('plat', $data);
    }

    public function deletePlat($idPlat) {
        $this->db->where('idPlat', $idPlat);
        $this->db->delete('plat');
    }
}