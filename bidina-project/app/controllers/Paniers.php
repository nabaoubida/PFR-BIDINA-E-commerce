<?php

//creat class Panier controller
class Paniers extends Controller
{
    public function __construct()
    {

        $this->panierModel = $this->model('Panier');
    }

    //creat function to add produit to panier
    public function addToPanier()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            $row = $this->panierModel->getAllProdFromPanier();
            foreach ($row as $key) {
                if ($key->id_product == $_POST['id_product'] && $key->id_user == $_SESSION['user_id']) {
                    $data['quantity'] = $key->quantity + $_POST['quantity'];
                    $this->panierModel->updateQuantityProdFromPanier($key->id_product, $_SESSION['user_id'], $data['quantity']);
                    redirect('pages/panier');
                    return;
                }
            }
            if ($this->panierModel->insertPanier($data)) {
                redirect('pages/panier');
            } else {
                die('something went wonrg');
            }
        }
    }

    //delete produit from panier by id produit and id user

    public function deleteProdFromPanier($id_product)
    {
        $id_user = $_SESSION['user_id'];
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->panierModel->deleteProdFromPanierById($id_product, $id_user)) {
                redirect('pages/panier');
            } else {
                die('something went wonrg');
            }
        }
    }


    
}
