<?php

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllUsers()
    {
        $sql = "SELECT* FROM users WHERE role NOT IN ('admin')";
        $this->db->query($sql);

        return $this->db->resultSet();
    }




    // insert the donner input in the data

    public function signup($data)
    {

        $sql = 'INSERT INTO users (`fullName`, `email`, `phone`, `adress`, `password`, `confirm_password`) VALUES (:fullName,:email ,:phone ,:adress , :password, :confirm_password)';
        $this->db->query($sql);
        // bind value
        $this->db->bind(':fullName', $data['fullName']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':confirm_password', $data['confirm_password']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function signin($email, $password)
    {
        $sql = 'SELECT * FROM users WHERE email = :email and password = :password';
        $this->db->query($sql);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);

        $row = $this->db->single();


        if ($row->password) {
            return $row;
        } else {
            return false;
        }
    }

    // find user by email
    public function findUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $this->db->query($sql);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // find user by id    
    public function gitUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }



    // PROFIL $$$$$$$$$$$$$$$$$$$$$$

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmailAndReturnUserData($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        $res = $this->db->resultSet();

        return $res;
    }



    public function editeProfile($data, $id)
    {
        $sql = "UPDATE users SET fullName = :fullName ,email = :email  ,phone = :phone, adress = :adress WHERE id = '$id'";
        $this->db->query($sql);
        $this->db->bind(':fullName', $data['fullName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':adress', $data['adress']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //creat function contact us
    public function contactUs($data)
    {
        $sql = "INSERT INTO contact (name, email,subject, message) VALUES (:name, :email,:subject, :message)";
        $this->db->query($sql);
        $this->db->bind(':name', $data['yourName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':message', $data['message']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //creat function get all message
    public function getAllMessage()
    {
        $sql = "SELECT * FROM contact";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }


    // creat function get count all product
    public function countAllUser()
    {
        $sql = "SELECT COUNT(*) AS user FROM users WHERE role NOT IN ('admin')";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result[0]->user;
    }


    //creat methode count all message
    public function countAllMessage()
    {
        $sql = "SELECT COUNT(*) AS message FROM contact";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result[0]->message;
    }
}
