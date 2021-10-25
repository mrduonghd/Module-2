<?php
namespace App\Controllers;

use App\Models\UserModel;

class LoginController {
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function login($request) {
        $name = $request['name'];
        $password = $request['password'];
        $isAccountExits = $this->userModel->checkAccount($name, $password);
        if ($isAccountExits['SL'] != 0) {
            $_SESSION['isLogin'] = true;
            header('location: index.php');
        } else {

            echo "Account not exist";
        }
    }

    function logout() {
        $_SESSION['isLogin'] = false;
        header('location:login.php');
    }
}