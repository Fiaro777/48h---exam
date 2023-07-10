<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeController extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('backoffice/Regime');
     }
     
    public function C_regime() {
    $donnees = (
        'colonne1' => 'valeur1',
        'colonne2' => 'valeur2',
        // Ajoutez d'autres colonnes et valeurs ici
    );
    
    $id_insertion = $this->NomDuModele_model->inserer_donnees($donnees); // Appelle la fonction d'insertion du modèle

    if ($id_insertion) {
        echo "Données insérées avec succès. ID d'insertion : " . $id_insertion;
    } else {
        echo "Échec de l'insertion des données.";
    }
}
}
   
     }
}


























?>