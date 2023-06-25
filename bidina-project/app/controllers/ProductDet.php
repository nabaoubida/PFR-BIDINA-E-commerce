<?php

//creat class product detail controller
class ProductDet extends Controller
{
  public function __construct()
  {
    $this->prodModel = $this->model('Products');
    $this->panierModel = $this->model('Panier');
  }

  //method affiche le detaille d'un produit
  public function productDet($id)
  {
    
    @$products = $this->prodModel->getprodById($id);
    @$paniers = $this->panierModel->getCountQuantityProdInPanier($_SESSION['user_id']);

    $data = [
      'products' => $products,
      'paniers' => $paniers,
    ];
    

    $this->view('pages/productDet', $data);
  }
  
}
