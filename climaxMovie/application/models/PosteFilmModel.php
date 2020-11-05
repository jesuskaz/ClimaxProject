<?php
   class PosteFilmModel extends CI_Model
   {
      // Insertion de données dans la table
      public function insertion($collection)
      {
         $this->db->insert('film', $collection);
      }
      // Selection des element dans la table   
      public function getData()
      {
         $query = $this->db->get('film');
         return $query;
      }
      // Recuperation de l'id pour un champ donnée
      public function updateElement($id)
      {
         $this->db->where("id", $id);
         $query = $this->db->get('film');
         // SELECT * FROM film WHERE id = $id
         return $query;
      }
      // Modification des elements de la table
      public function update_data($data, $id)
      {
         $this->db->where('id', $id);
         $this->db->update('film', $data);
      }
      //Suppression des elements de la table

      public function delete_data($id)
      {
         $this->db->where("id", $id);
         $this->db->delete("film");
      }
   }
?>