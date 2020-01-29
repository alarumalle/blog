<?php


class Users extends Controller
{

    /**
     * Users constructor.
     */
    //konstruktor kutsub mudeli
    public function __construct()
    {
        $usersModel = $this->model('User');
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           // filtriga issue, lisame hiljem. $_POST = filter_input(INPUT_POST, FILTER_SANITIZE_STRING);
        }
        $data = array(
            //trim puhastab tyhikutest
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => $_POST['password'],
          'confirm_password' => $_POST['confirm_password'],
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        );
        if (empty($data['name'])){
            $data['name_err'] = 'Please enter your name';
        }
        $this->view('users/register', $data);
    }
}