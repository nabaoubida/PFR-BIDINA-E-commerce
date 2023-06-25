<?php

class Users extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function signup()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            $data = [
                'fullName' => trim(htmlspecialchars($_POST['fullName'])),
                'email' => trim(htmlspecialchars($_POST['email'])),
                'phone' => trim(htmlspecialchars($_POST['phone'])),
                'adress' => trim(htmlspecialchars($_POST['adress'])),
                'password' => trim(htmlspecialchars($_POST['password'])),
                'confirm_password' => trim(htmlspecialchars($_POST['confirm_password'])),
                'fullName_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'adress_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];


            // validation with regix

            $nameValidation = "/^[a-zA-Z' ]*$/";
            $phoneValidation = "/^[0-9]*$/";
            $passwordValidation = "/^(.{0,6}|[^a-z]*|[^\d]*)$/i";
            $emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            // validate first name input
            if (empty($data['fullName'])) {
                $data['fullName_err'] = 'Enter your First Name';
            } elseif (!preg_match($nameValidation, $data['fullName'])) {
                $data['fullName_err'] = 'First Name can only contain letters .';
            }

            // validate email input
            if (empty($data['email'])) {
                $data['email_err'] = 'Enter your email';
            } elseif (!preg_match($emailValidation, $data['email'])) {
                $data['email_err'] = 'E-mail can only contain letters .';
            } else {
                //check mail
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // validate phone input
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Enter your phone';
            } elseif (!preg_match($phoneValidation, $data['phone'])) {
                $data['phone_err'] = 'Phone can only contain letters .';
            }

            // validate adress input
            if (empty($data['adress'])) {
                $data['adress_err'] = 'Enter your adress';
            } elseif (!preg_match($nameValidation, $data['adress'])) {
                $data['adress_err'] = 'adress can only contain letters .';
            }

            // validate password input
            if (empty($data['password'])) {
                $data['password_err'] = 'Enter your password';
            } elseif (!preg_match($passwordValidation, $data['password'])) {
                $data['password'] = 'Password must be at least 6 characters.';
            }

            // validate coonfirm password input
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Enter your Confirm Password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Password is not match';
                }
            }
            // Make sure errors are empty
            if (empty($data['fullName_err']) && empty($data['email_err']) && empty($data['phone_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {

                // creat count signup
                if ($this->userModel->signup($data)) {
                    redirect('users/signin');
                } else {
                    echo 'something went wonrg';
                }
            } else {
                // Load view with errors
                $this->view('users/signup', $data);
            }
        } else {
            // load form
            // echo 'load form';
            // init data
            $data = [
                'fullName' => '',
                'email' => '',
                'phone' => '',
                'adress' => '',
                'password' => '',
                'confirm_password' => '',
                'fullName_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'adress_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            $this->view('users/signup', $data);
        }
    }


    public function signin()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form

            $data = [
                'email' => trim(htmlspecialchars($_POST['email'])),
                'password' => trim(htmlspecialchars($_POST['password'])),
                'email_err' => '',
                'password_err' => '',
                'fullName' => '',
                'role' => '',

            ];

            // validate email input
            if (empty($data['email'])) {
                $data['email_err'] = 'Enter your email';
            }

            // validate password input
            if (empty($data['password'])) {
                $data['password_err'] = 'Enter your password';
            }


            // check for user / email
            if (!$this->userModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'User Not found';
            }


            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {

                $user = $this->userModel->signin($data['email'], $data['password']);
                if ($user) {
                    $data['role'] = $user->role;
                    $this->creatSessionUser($user);
                    // if user found
                    if (($data['email'] == 'admin@gmail.com') && ($data['role'] == 'admin')) {
                        $_SESSION['user_role'] == $user->role;
                        return redirect('dashboardAdmin/dashAdm');
                    } else {
                        return redirect('pages/productDet/' . $_SESSION['id_product']);
                    }
                } else {
                    // if user not found
                    $data['password_err'] = 'Password Incorrect';
                    $this->view('users/signin', $data);
                }
            } else {
                // Load view with errors
                $this->view('users/signin', $data);
            }
        } else {
            // load form
            // echo 'load form';
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
                'fullName' => '',
                'role' => '',

            ];

            $this->view('users/signin', $data);
        }
    }
    // the session makes server identify the information user;
    public function creatSessionUser($user)
    {
        $_SESSION['user_id'] = $user->id; // the id came from model
        $_SESSION['user_fullName'] = $user->fullName;
        $_SESSION['user_lastName'] = $user->lastName;
        $_SESSION['user_fullName'] = $user->fullName;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_phone'] = $user->phone;
        $_SESSION['user_role'] = $user->role;

        redirect('pages/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_password']);
        unset($_SESSION['user_role']);
        
        session_destroy();
        redirect('pages/index');
    }
}
