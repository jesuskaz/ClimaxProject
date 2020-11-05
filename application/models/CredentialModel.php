<?php
    class CredentialModel extends CI_Model
    {
        public function getAdmin($pseudo, $pwd)
        {
            //$arra["login"] = 
            $query = $this->db->get_where('admin', ["login"=>$pseudo, "mdp"=>$pwd])->row();
            return $query;
        }
    }
?>