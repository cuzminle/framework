<?

namespace app\models;

use vendor\core\base\Model;

class UserModel extends Model
{

    public $attributes = [
        'login' => '',
        'password' => '',
        'email' => '',
        'name' => ''
    ];

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
            ['email'],
            ['name']
        ],
        'email' => [
            ['email']
        ],
        'lengthMin' => [
            ['password', 6]
        ]   
    ];

    public function checkUnique()
    {
        $user = \R::findOne('users', 'login = ? OR email = ? LIMIT 1',
        [$this->attributes['login'], $this->attributes['email']]);
        if($user)
        {
            if($user->login == $this->attributes['login'])
                $this->errors['unique'][] = 'This login alraedy taken';
            if($user->login == $this->attributes['email'])
                $this->errors['unique'][] = 'This email alraedy taken';
            return false;
        }
        else return true;
    }

    public function login()
    {
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if($login && $password)
        {
            $user = \R::findOne('users', 'login = ? LIMIT 1', [$login]);
            if($user)
            {
                if(password_verify($password, $user->password))
                {
                    foreach($user as $k => $v)
                    {
                        if($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
                }
            }
        }
        return false;
    }

}

?>