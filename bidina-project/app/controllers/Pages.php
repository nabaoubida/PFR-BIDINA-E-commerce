<?php
class Pages extends Controller
{

  public function __construct()
  {
    $this->prodModel = $this->model('Products');
    $this->userModel = $this->model('User');
    $this->panierModel = $this->model('Panier');
  }

  // methode the affichage index 
  public function index()
  {
    $products = $this->prodModel->affichageProductLimit();
    @$paniers = $this->panierModel->getCountQuantityProdInPanier($_SESSION['user_id']);

    $data = [
      'products' => $products,
      'paniers' => $paniers,
    ];

    $this->view('pages/index', $data);
  }

  
  

  public function viewAll()
  {
    $products = $this->prodModel->affichageProduct();

    $data = [
      'products' => $products,
    ];

    $this->view('pages/viewAll', $data);
  }

  public function categorie()
  {
    $this->view('pages/categorie');
  }
  public function gallery()
  {
    $this->view('pages/gallery');
  }


  public function panier()
  {
    
    @$prods = $this->panierModel->getprodToPanierById($_SESSION['user_id']);
    @$paniers = $this->panierModel->getCountQuantityProdInPanier($_SESSION['user_id']);

    $data = [
      'prods' => $prods,
      'paniers' => $paniers,
    ];
    
    $this->view('pages/panier', $data);
  }


  public function contact()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // process form
      $data = [
        'yourName' => trim(htmlspecialchars($_POST['yourName'])),
        'email' => trim(htmlspecialchars($_POST['email'])),
        'subject' => trim(htmlspecialchars($_POST['subject'])),
        'message' => trim(htmlspecialchars($_POST['message'])),
        'yourName_err' => '',
        'email_err' => '',
        'subject_err' => '',
        'message_err' => '',
      ];


      // validation with regix
      $nameValidation = "/^[a-zA-Z' ]*$/";
      $textValidation = "/^[a-zA-Z0-9' ]*$/";
      $emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

      // validate your name input
      if (empty($data['yourName'])) {
        $data['yourName_err'] = 'Enter Your Name';
      } elseif (!preg_match($nameValidation, $data['yourName'])) {
        $data['yourName_err'] = 'Your Name can only contain letters .';
      }

      // validate subject input
      if (empty($data['subject'])) {
        $data['subject_err'] = 'Enter your Subject';
      } elseif (!preg_match($textValidation, $data['subject'])) {
        $data['subject_err'] = 'Subject can only contain letters .';
      }

      // validate email input
      if (empty($data['email'])) {
        $data['email_err'] = 'Enter your email';
      } elseif (!preg_match($emailValidation, $data['email'])) {
        $data['email_err'] = 'E-mail can only contain letters .';
      }


      // validate message input
      if (empty($data['message'])) {
        $data['message_err'] = 'Enter your Message';
      } elseif (!preg_match($textValidation, $data['message'])) {
        $data['message_err'] = 'Message can only contain letters and numbers .';
      }

      // Make sure errors are empty
      if (empty($data['yourName_err']) && empty($data['email_err']) && empty($data['subject_err']) && empty($data['message_err'])) {

        if ($this->userModel->contactUs($data)) {
          redirect('pages/contact');
        } else {
          echo 'something went wonrg';
        }
      } else {
        // Load view with errors
        $this->view('pages/contact', $data);
      }
    } else {
      $data = [
        'yourName' => '',
        'email' => '',
        'subject' => '',
        'message' => '',
        'yourName_err' => '',
        'email_err' => '',
        'subject_err' => '',
        'message_err' => '',
      ];
      $this->view('pages/contact', $data);
    }
  }
}
