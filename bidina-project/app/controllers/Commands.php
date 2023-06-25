<?php

class Commands extends Controller{

    public function __construct()
    {
       $this->commandModel = $this->model('Command');
       $this->panierModel = $this->model('Panier');
    }


    //ceart method insert produit from panier to command

    public function insertCommand()
    {
        $id_user = $_SESSION['user_id'];
        $this->commandModel->insertCommand($id_user);
        $this->deleteAllProdFromPanier($id_user);
        $this->view('pages/command');
    }


    // creat method delete all product from panier
    public function deleteAllProdFromPanier()
    {
        $id_user = $_SESSION['user_id'];
        $this->panierModel->deleteAllProdFromPanier($id_user);
        $this->view('pages/command');

    }

    
    

}

