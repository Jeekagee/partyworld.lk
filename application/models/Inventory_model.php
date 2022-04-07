<?php
class Inventory_model extends CI_Model {

    

    public function inventory(){
        $sql = "SELECT id, product_id, name, quantity FROM products";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function single_product($p_id){
        $sql = "SELECT * FROM products WHERE id = $p_id";
        $query = $this->db->query($sql);
        $row = $query->first_row();
        return $row;
    }
}
?>