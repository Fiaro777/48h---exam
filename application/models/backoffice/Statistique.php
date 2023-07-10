<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Statistique extends CI_Model
{

     public function statistique_user() {
          $sql = "SELECT count(idUser) as numUser from user";
          $base= $this->db;
          $query = $base->query($sql);
          return $query->result_array();
     }
     public function statistique_active_user(){
        $sql = "SELECT count(idUser) as actif from user where etatRegime='en cours'";
        $base= $this->db;
        $query = $base->query($sql);
        return $query->result_array();
     }
     public function statistique_commande(){
        $sql = "SELECT count(idCommande),commande from commande group by idCommande";
        $base= $this->db;
        $query = $base->query($sql);
        return $query->result_array();
     }
}