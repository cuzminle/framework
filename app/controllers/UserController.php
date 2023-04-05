<?
namespace app\controllers;
use app\models\UserModel;

class UserController extends AppController
{
    public function signUpAction()
    {
        if(!empty($_POST))
        {
            $data = $_POST;
            $user = new UserModel();
            $user->load($data);
            if($user->validate($data))
                echo 'OK';
            else echo 'NO';
            debug($data);
            die;
        }
    }

    public function loginAction()
    {

    }

    public function logoutAction()
    {

    }
}

?>