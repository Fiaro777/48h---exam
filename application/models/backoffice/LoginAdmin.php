<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginAdmin extends CI_Model
{
// fonction qui prend un client si le compte existe dans la base
     public function login($mail, $password) {
          $sql = "SELECT idAdmin FROM Admin WHERE email = '".$mail."'";
          //echo $sql;
          $array = $this->db->query($sql);
          if($array->result_array())
          {
               return 1;
          }
          $data = $this->db->query($sql);
          return 0;
     }
}