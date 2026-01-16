<?php
namespace App\controller;

use PDO;

require __DIR__ . '/../../vendor/autoload.php';

use App\core\BaseController;

class AuthController extends BaseController
{



    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "REGISTER POST OK";
            echo "<pre>";
    print_r($_POST);
    echo "</pre>";
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            echo "REGISTER DELETE OK";
            
            return;
        }

        echo "<h2>Register</h2>
              <form method='POST'>
                <input name='username'>
                <input name='email'>
                <input type='password' name='password'>
                <button>Register</button>
                </form>
                "
              
              ;
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "LOGIN POST OK";
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            echo "LOGIN DELETE OK";
            return;
        }
        echo "<h2>Login</h2>
              <form method='POST'>
                <input name='username'>
                <input type='password' name='password'>
                <button>Login</button>
              </form>
              <form method='DELETE'>
                <button>delete</button>
              </form>
              ";
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
        exit;
    }

    public function dashboard()
    {
        echo "<h1>Dashboard</h1>";
    }

    public function index()
    {
        echo $this->render('create_user', [
            'name' => 'Ali',
            'LastName' => 'joe'
        ]);
    }
}
