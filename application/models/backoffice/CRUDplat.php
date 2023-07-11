<?php 

class CRUDPlat extends CI_Model {
    public function getPlats() {
        return $this->db->get('plat')->result();
    }
    public function getIngredients() {
        return $this->db->get('ingredient')->result();
    }
    
    public function getPlat($idPlat) {
        return $this->db->get_where('plat', array('idPlat' => $idPlat))->row();
    }

        public function insertPlat($data)
        {
            $this->db->insert_batch('combinations', $data);
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
    public function getChartGenre()
        {

            $query = $this->db->query("SELECT count(genre) as num,genre FROM user group by genre");
            return $query->result();
        }
        public function getChartActive()
        {

            $query = $this->db->query("SELECT count(idUser) as num,etatRegime FROM user group by etatRegime");
            return $query->result();
        }
    
    

    
}