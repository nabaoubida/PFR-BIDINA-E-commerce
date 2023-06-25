<?php
class Panier
{   
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }


    // creat method insert produit to panier
    public function insertPanier($data)
    {
        $sql = 'INSERT INTO `panier`( `img`, `titre`, `sold`, `allPrix`, `quantity`, `id_product`,`id_user`) VALUES (:img, :titre, :sold, :allPrix,:quantity, :id_product, :id_user)';
        $this->db->query($sql);
        $this->db->bind(':img', $data['img']);
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':sold', $data['sold']);
        $this->db->bind(':allPrix', $data['allPrix']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':id_product', $data['id_product']);
        $this->db->bind(':id_user',  $_SESSION['user_id']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

     // creat method affiche prod to panier by id user
     public function getprodToPanierById($id){
        $this->db->query('SELECT * FROM `panier` WHERE id_user = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->resultSet();
        // die(var_dump($row));
         return $row;
        
    }

    //creat methode delete produit from panier
    public function deleteProdFromPanierById($id_product,$id_user){
        $sql = 'DELETE FROM `panier` WHERE id_product = :id and id_user = :id_user';
        $this->db->query($sql);
        $this->db->bind(':id', $id_product);
        $this->db->bind(':id_user', $id_user);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //creat methode get all produit from panier
    public function getAllProdFromPanier(){
        $this->db->query('SELECT * FROM `panier`');
        $row = $this->db->resultSet();
        // die(var_dump($row));
         return $row;
        
    }
    
    //creat methode update quantity produit from panier
    public function updateQuantityProdFromPanier($id_product,$id_user,$quantity){
        $sql = 'UPDATE `panier` SET quantity = :quantity WHERE id_product = :id_product and id_user = :id_user';
        $this->db->query($sql);
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':id_product', $id_product);
        $this->db->bind(':id_user', $id_user);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


  //creat function get count all product in panier
    public function getCountQuantityProdInPanier($id_user){
        $sql = "SELECT COUNT(*) AS produit FROM panier WHERE id_user = '$id_user'";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        // die(var_dump($result));
        return $result[0]->produit;
        
    }

    //creat method delete All from Panier
    public function deleteAllProdFromPanier($id_user){
        $sql = 'DELETE FROM `panier` WHERE id_user = :id_user';
        $this->db->query($sql);
        $this->db->bind(':id_user', $id_user);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
         


    
}
