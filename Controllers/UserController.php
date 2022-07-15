<?php

class UserController extends BaseController
{
    private $userModel;
    public function __construct()
    {

        $this->loadModel('UserModel');
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $select = ["id", "name", "birthday", "phone"];
        $order = ['id'];
        $limit = 100;
        $user = $this->userModel->getALL($select, $order, $limit);
        $this->view("admin.users.index", ['user' => $user]);
    }

    public function show()
    {
        $id = $_GET['id'];
        if ($id) {
            $user = $this->userModel->findById($id);
            $this->view('admin.users.showUser', ['user' => $user]);
        }
    }

    public function find()
    {
        $name = $_POST['name'];
        $user = $this->userModel->findByName($name);
        $this->view('admin.users.searchUser', ['user' => $user]);
    }

    public function formCreate()
    {
        $this->view('admin.users.addUser');
    }

    public function create()
    {
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password_r = $_POST['password_r'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        echo $name;
        echo "<br>";
        echo $birthday;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $password_r;
        echo "<br>";
        echo $address;
        echo "<br>";
        echo $gender;
        echo "<br>";
        return $this->view('admin.users.test');
    }

    public function update()
    {
        return $this->view('admin.users.updateUser');
    }

    public function delete()
    {
    }
}