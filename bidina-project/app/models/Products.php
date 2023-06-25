<?php 
class Products {

    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function affichageProduct()
    {
        $sql = 'SELECT * FROM `products`';
        $this -> db -> query($sql);
        
       return $this -> db -> resultSet();
    }


    public function affichageProductLimit()
    {
        $sql = 'SELECT * FROM `products` LIMIT 8';
        $this -> db -> query($sql);
        
       return $this -> db -> resultSet();
    }


    public function addProduct($data)
    { 
       
        $sql = 'INSERT INTO `products` (`titre`, `sold`, `allPrix`, `categoris`, remise, new,img) VALUES (:titre, :sold, :allPrix, :categoris, :remise, :new, :img)';
        $this -> db -> query($sql);
        $this -> db -> bind(':titre', $data['titre']);
        $this -> db -> bind(':img', $data['img']);
        $this -> db -> bind(':sold', $data['sold']);
        $this -> db -> bind(':allPrix', $data['allPrix']);
        $this -> db -> bind(':remise', $data['remise']);
        $this -> db -> bind(':new', $data['new']);
        $this -> db -> bind(':categoris', $data['categoris']);

        // Execute
        if ($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editeProduct($data,$id)
    { 
        $sql = "UPDATE products SET titre = :titre ,sold = :sold, allPrix = :allPrix, categoris = :categoris, remise = :remise, new = :new , img = :img WHERE id_product = '$id'";
        $this->db->query($sql);
        // $this -> db -> bind(':id', $data['id']);
        $this -> db -> bind(':titre', $data['titre']);
        $this -> db -> bind(':sold', $data['sold']);
        $this -> db -> bind(':remise', $data['remise']);
        $this -> db -> bind(':new', $data['new']);
        $this -> db -> bind(':allPrix', $data['allPrix']);
        $this -> db -> bind(':categoris', $data['categoris']);
        $this -> db -> bind(':img', $data['img']);
    

        //Execute function
        if ($this -> db-> execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getprodById($id){
        $this->db->query('SELECT * FROM `products` WHERE id_product = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
        
        return $row;
        
    }


    public function deleteProduct($id)
    {
        $this->db->query('DELETE FROM products WHERE id_product = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    //crate function get  product by categoris return rowcount
    public function countProdByCategoris($categoris)
  {
    $sql = "SELECT COUNT(*) AS produit FROM products WHERE categoris = '$categoris'";
    $this->db->query($sql);
    $result = $this->db->resultSet();
    return $result[0]->produit;
  }
   
  // creat function get count all product
    public function countAllProd()
    {
        $sql = "SELECT COUNT(*) AS produit FROM products";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result[0]->produit;
    }

}