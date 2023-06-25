<?php

class Command
{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // creat method insert produit to command
    public function insertCommand($id_user)
    {
        $id_user = $_SESSION['user_id'];
        $sql = "INSERT INTO command (img,titre,prix,quantity,id_user,id_product) SELECT img,titre,sold,quantity,id_user,id_product FROM panier WHERE id_user = $id_user";
        $this->db->query($sql);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        } 
    }

    //creat method get all command

    public function getAllCommand()
    {
        $sql = 'SELECT * FROM command';
        $this->db->query($sql);
        $row = $this -> db -> resultSet();

        return $row;

    }


    //creat methode count all command
    public function countAllCommand()
    {
        $sql = "SELECT COUNT(*) AS command FROM command";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result[0]->command;
    }


}