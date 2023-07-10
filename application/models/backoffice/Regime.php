<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Regime extends CI_Model
{
// CRUD plat
     public function createPlat($nomPlat,$typeRegime) {
          $sql = "INSERT INTO plat (nomPlat,typeRegime) VALUES ('$nomPlat','$";
          $base= $this->db;
          $query = $base->query($sql);
     }
     
}