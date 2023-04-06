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
            if($user->validate($data) && $user->checkUnique())
                echo 'OK';
            else 
            {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if($user->save('users'))
            {
                $_SESSION['success'] = 'Success';
            }
            else 
            {
                $_SESSION['error'] = 'Error';
            }
            redirect();
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