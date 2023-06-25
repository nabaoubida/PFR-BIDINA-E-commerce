<?php
class DashAdmProd extends Controller
{

  public function __construct()
  {
    $this->prodModel = $this->model('Products');
  }


  public function dashProd()
  {

    $products = $this->prodModel->affichageProduct();
    $categoris = $this->prodModel->countProdByCategoris('table');
    $categoris1 = $this->prodModel->countProdByCategoris('poufs');
    $categoris2 = $this->prodModel->countProdByCategoris('Bibliothéque');
    $categoris3 = $this->prodModel->countProdByCategoris('soucle');
    $categoris4 = $this->prodModel->countProdByCategoris('Chair');
    
    // die(var_dump($categoris));
    // exit;

    $data = [
      'products' => $products,
      'categoris'=> $categoris,
      'categoris1'=> $categoris1,
      'categoris2'=> $categoris2,
      'categoris3'=> $categoris3,
      'categoris4'=> $categoris4
    ];

    $this->view('dashAdmProd/dashProd',$data);
  }


  public function addProd()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'titre' => trim(htmlspecialchars($_POST['titre'])),
        'sold' => trim(htmlspecialchars($_POST['sold'])),
        'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
        'remise' => trim(htmlspecialchars($_POST['remise'])),
        'new' => trim(htmlspecialchars($_POST['new'])),
        'categoris' => trim(htmlspecialchars($_POST['categoris'])),
        'img' => $_FILES['img']['name'],
        'error_titre' => '',
        'error_sold' => '',
        'error_allPrix' => '',
        'error_categoris' => '',

      ];
    


      $terget = dirname(APPROOT) . "/public/img/imgProducts/" . $data['img'];
      move_uploaded_file($_FILES['img']['tmp_name'], $terget);

      // die(var_dump($_FILES['img']['tmp_name']));

      $validationPrix = "/^\d{0,8}(\.\d{1,4})?$/";
      $validationTitre =  "/^[a-zA-Z' ]*$/";

      //validation the titre product
      if (empty($data['titre'])) {
        $data['error_titre'] = 'Enter title product';
      } elseif (!preg_match($validationTitre, $data['titre'])) {
        $data['error_titre'] = 'titre can only contain letters';
      }

      //validation the sold product
      if (empty($data['sold'])) {
        $data['error_sold'] = 'Enter Sold product';
      } elseif (!preg_match($validationPrix, $data['sold'])) {
        $data['error_sold'] = 'Sold can only contain letters';
      }

      //validation the allPrix product
      if (empty($data['allPrix'])) {
        $data['error_allPrix'] = 'Enter title product';
      } elseif ($data['sold'] > $data['allPrix']) {
        $data['error_allPrix'] = 'All Pris can only be more than a sold';
      }

      
      // Make sure errors are empty
      if (empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix'])) {
        // function add Product
        if ($this->prodModel->addProduct($data)) {
          // $data['date_Prod']
          redirect('dashAdmProd/dashProd');
        } else {
          die('something went wonrg');
        }
      } else {
        // Load view with errors
        $this->view('dashAdmProd/addProd', $data);
      }
    } else {
      // load form
      // echo 'load form';
      // init data
      $data = [
        'titre' => '',
        'sold' => '',
        'allPrix' => '',
        'remise' => '',
        'new' => '',
        'error_titre' => '',
        'error_sold' => '',
        'error_allPrix' => '',
      ];
    }
    $this->view('dashAdmProd/addProd', $data);
  }


 


  public function editeProd($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $product = $this->prodModel->getprodById($id);
      
      $_SESSION['img'] = $product->img;
      //  echo $_SESSION['img'];
      //  exit;
      $this->view('dashAdmProd/editeProd', (array) $product);


    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (!empty($_FILES['img']['name'])) {

        $img = $_FILES['img']['name'];


        if (file_exists(dirname(APPROOT) . '/public/img/imgProducts/' . $_SESSION['img'])) {
          unlink(dirname(APPROOT) . '/public/img/imgProducts/' . $_SESSION['img']);
        }
        $_SESSION['img'] = $img;
        $terget = dirname(APPROOT) . "/public/img/imgProducts/" . $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $terget);
      }


      $data = [
        'titre' => trim(htmlspecialchars($_POST['titre'])),
        'sold' => trim(htmlspecialchars($_POST['sold'])),
        'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
        'categoris' => trim(htmlspecialchars($_POST['categoris'])),
        'remise' => trim(htmlspecialchars($_POST['remise'])),
        'new' => trim(htmlspecialchars($_POST['new'])),
        'img' => $_SESSION['img'],
        'error_titre' => '',
        'error_sold' => '',
        'error_allPrix' => '',
      ];
      if (empty($data['titre'])) {
        $data['error_titre'] = 'wrong';
      }
      if (empty($data['sold'])) {
        $data['error_sold'] = 'wrong';
      }
      if (empty($data['allPrix'])) {
        $data['error_allPrix'] = 'wrong';
      }

      if (empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix'])) {
        // $data =  $_POST;
        if ($this->prodModel->editeProduct($data, $id)) {
          redirect('/dashAdmProd/dashProd');
        }
      } else {

        $data = [
          'titre' => '',
          'sold' => '',
          'allPrix' => '',
          'remise' => '',
          'new' => '',
          'img' => '',
          'categoris' => '',
          'error_titre' => '',
          'error_sold' => '',
          'error_allPrix' => '',
        ];
      }
    }
  }

  //creat method delete product by id
  public function deleteProd($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $this->prodModel->getprodById($id);
      $this->prodModel->deleteProduct($id);
      redirect('/dashAdmProd/dashProd');
    } else {
      die('Something went wrong');
    }
  }

// creat function session

public function creatSessionProd($produit)
{
  $_SESSION['date_Prod'] = $produit-> date_Prod;
}



}
