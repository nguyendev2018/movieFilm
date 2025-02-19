<?php
namespace User;

use Engine\Base;

class UserController extends Base
{
    public function login()
    {
        $userModel = new UserModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loginMode = $_POST['loginMode'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($loginMode === 'true') {
                $user = $userModel->getUser($email, $password);
                if ($user) {
                    session_regenerate_id(true);
                    $_SESSION['logged'] = true;
                    $_SESSION['user'] = $user[0];
                    header('Location: /home');
                    exit;
                } else {
                    $_SESSION['error_message'] = "Sai email hoặc mật khẩu!";
                    $this->output->load('user/loginOrRegister');
                }
            } else {
                $username = $_POST['username'];
                $registerSuccess = $userModel->register($username, $email, $password);
                if ($registerSuccess) {
                    $_SESSION['message'] = "Đăng ký thành công.";
                } else {
                    $_SESSION['error'] = "Email đã được sử dụng!";
                }
                header('Location: /');
                exit;
            }
        }
        $this->output->load('user/loginOrRegister');
    }

    public function logout()
    {
        unset($_SESSION['logged'], $_SESSION['user']);
        header('Location: /');
        exit;
    }
}
