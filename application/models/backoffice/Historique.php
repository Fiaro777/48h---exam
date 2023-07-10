<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Historique extends CI_Model
{
     public function __construct() {
          parent::__construct();
          $this->load->database(); // Charge la bibliothèque de la base de données
      }

     public function historique_commande() {
          $sql = "SELECT c.regime,c.prixRegime,u.username,c.dateCommande from commande as c join user as u on c.idUser = u.idUser  ";
          $base= $this->db;
          $query = $base->query($sql);
          return $query->result_array();
     }
     
}