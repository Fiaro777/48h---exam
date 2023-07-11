<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Regime extends CI_Model
{
// CRUD plat
     public function createPlat($donnees) {
          
               $this->db->insert('Regime', $donnees); 
               return $this->db->insert_id();   
       }
       ?>
     }
     
}