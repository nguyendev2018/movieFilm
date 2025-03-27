<?php
namespace User;

use Engine\Base;

class UserModel extends Base
{
<<<<<<< HEAD
/**
 * Đăng nhập với tài khoản người dùng
 *
 * @param string $username
 * @param string $password
 *
 * @return array|null
 */
    public function getUser($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $params = ["username" => $username, "password" => md5($password)];
        return $this->database->query($query, $params);
    }
/**
 * Kiểm tra xem tên tài khoản đã tồn tại hay chưa
 *
 * @param string $username
 *
 * @return bool
 */
    private function isUsernameTaken($username)
    {
        $query  = "SELECT COUNT(*) FROM users WHERE username = :username";
        $params = ["username" => $username];
        $result = $this->database->query($query, $params);
        return $result['COUNT(*)'] > 0; 
    }
/**
 * Đăng ký tài khoản người dùng mới
 *
 * @param string $username
 * @param string $password
 *
 * @return bool
 */
    public function register($username, $password)
    {
        $existUser = $this->isUsernameTaken($username);
        if ($existUser) {
            return false;
        } else {
            $hashedPassword = md5($password);
            $query = "INSERT INTO users (username, password) VALUES (:username, :password)";

            $params = ["username" => $username, "password" => $hashedPassword];

            return $this->database->query($query, $params);
        }
    }
    
    /**
    * Đặt lại mật khẩu cho tài khoản người dùng
    *
    * @param string $username
    * @param string $password
    *
    * @return bool
    */
    public function resetPassword($username, $password)
    {
        // Kiểm tra xem tên người dùng đã tồn tại chưa?
        $existUser = $this->isUsernameTaken($username);
        if ($existUser) {
        //Băm mật khẩu để bảo mật
        $hashedPassword = md5($password);
        $query = "UPDATE users SET password = :password WHERE username = :username";

        $params = array("username" => $username, "password" => $hashedPassword);

        return $this->database->query($query, $params);
        } else {
            return false; // Tên tài khoản không tồn tại
        }
    }
}
=======
    /**
     * Lấy thông tin người dùng qua email và mật khẩu
     *
     * @param string $email
     * @param string $password
     * @return array|null
     */
    public function getUser($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $params = array("email" => $email, "password" => md5($password));
        return $this->database->query($query, $params);
    }



    /**
     * Kiểm tra xem email đã tồn tại chưa
     *
     * @param string $email
     * @return bool
     */
    private function isEmailTaken($email)
    {
        $query = "SELECT COUNT(*) as count FROM users WHERE email = :email";
        $params = array("email" => $email);
        $result = $this->database->query($query, $params);
        return $result[0]['count'] > 0;
    }

    /**
     * Đăng ký tài khoản mới
     *
     * @param string $username
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function register($username, $email, $password)
    {
        if ($this->isEmailTaken($email)) {
            return false; // Email đã tồn tại
        }

        $hashedPassword = md5($password);
        $query = "INSERT INTO users (user_name, email, password) VALUES (:username, :email, :password)";
        $params = array("username" => $username, "email" => $email, "password" => $hashedPassword);
        return $this->database->query($query, $params);
    }

    public function resetPassword($username, $password)
        {
            // Kiểm tra xem tên người dùng đã tồn tại chưa?
            $existUser = $this->isUsernameTaken($username);
            if ($existUser) {
            //Băm mật khẩu để bảo mật
            $hashedPassword = md5($password);
            $query = "UPDATE users SET password = :password WHERE username =

            :username";

            $params = array("username" => $username, "password" =>

            $hashedPassword);

            return $this->database->query($query, $params);
        } else {
            return false; // Tên tài khoản không tồn tại
        }
    }   

}
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
