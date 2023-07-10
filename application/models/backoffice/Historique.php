<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Historique extends CI_Model
{
     public function historique_commande() {
          $sql = "SELECT * form commande";
          $base= $this->db;
          $query = $base->query($sql);
          return $query->result_array();
     }
     
}