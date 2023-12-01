
<?php
require_once('./utils/Crud.php');

class User extends Crud
{


    public $email;
    public $token;
    public $username;
    public $fname;
    public $lname;
    public $pwd;
    public $billing_address_id;
    public $shipping_address_id;
    public $role_id;

    public $table = 'user';

    public function getUsers()
    {

        return $this->getAll($this->table);
    }



    public function getUserById($id)
    {

        return $this->getById($this->table, $id);
    }

    // public function getByemail($email) {

    // return $this->getByOneColumn($this->table, $email);
    // }

    public function ajouterUserAddress($addressParams)
    {
        // Insérer l'adresse et retourner l'ID de l'adresse
        $request = "INSERT INTO address (street_name, street_nb,city, province, zipcode, country ) VALUES (:street_name, :street_nb, :city, :province, :zipcode, :country)";



        return parent::add($request, $addressParams);
    }

    public function ajouterUserRole($roleParams)
    {
        // Insérer le role et retourner l'ID de l'adresse
        $request = "INSERT INTO role (name, description ) VALUES (:name, :description)";
        $roleParams = [];
        return parent::add($request, $roleParams);
    }



    public function ajouterUser($userdata)
    {
       
        // Insérer l'utilisateur avec les ID 
        $request = " INSERT INTO $this->table (email, token, username, fname, lname, pwd, billing_address_id, shipping_address_id, role_id) VALUES (:email, '', :username, :fname, :lname, :pwd, 1, 1, 3)";


        $userdata = [
            'email' => $userdata['email'],

            'username' => $userdata['username'],
            'fname' => $userdata['fname'],
            'lname' => $userdata['lname'],
            'pwd' => $userdata['pwd'],

        ];
        return parent::add($request, $userdata);
    }




    // public function updateUser($userdata)
    // {
    //modifier par exp:email
    //$this->email= $userdata['email'];
    /* $userdata = [
                
                'email' => $this->email,
                'token' => $this->token,
                'username' => $this->username,
                'fname' => $this->fname,
                'lname' =>$this->lname,
                'pwd' =>this->pwd,
                'billing_address_id' =>$this->billing_address_id
                'shipping_address_id' =>$this->shipping_address_id
                'role_id' =>$this->$role_id 
            ]; */

    //     var_dump($userdata);
    //     echo'</br></br>';
    //     $request = "UPDATE user SET email = :email,username = :username, fname = :fname, lname = :lname,pwd= :pwd, billing_address_id =: billing_address_id, shipping_address_id=: shipping_address_id,role_id=:role_id WHERE id = :id";
    //     parent::updateById($request, $userdata);
    // };

    public function deleteUser($id)
    {
        return parent::delete($this->table, $id);
    }
}




?>

