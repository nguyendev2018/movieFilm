<?php
namespace User;

use Engine\Base;

class UserController extends Base
{
    public function login()
    {
/**
 * Thêm tệp JavaScript ".js" vào.
 */
        $this->output->addJs("js/Notify");
        $user_model = new UserModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loginMode = $_POST['loginMode'];
            $username  = $_POST['username'];
            $password  = $_POST['password'];

            if ($loginMode === 'true') {
                $user = $user_model->getUser($username, $password);
                if ($user) {
                    session_regenerate_id(true);
                    $this->session->set("logged", true);
                    $_SESSION['username'] = $username; // Lưu tên người dùng
                    $_SESSION['role'] = $user['role']; // Lưu role vào session
                    header('Location: /');
                    exit;
                } else {
                    $_SESSION['error_message'] = "Sai tài khoản hoặc mật khẩu!";
                    $this->output->load('user/loginOrRegister');
                }
            } else if ($loginMode === 'false') {
                try {
                    $user = $user_model->register($username, $password);
                    if ($user) {
                        $_SESSION['message'] = "Đăng ký thành công.";
                    } else {
                        $_SESSION['error'] = "Tên tài khoản đã tồn tại!";
                    }
                } catch (\Exception $e) {
                    $this->console->addDebugInfo("Error during register: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi không mong muốn xảy ra, vui lòng thử lại sau!";
                }
                header('Location: /');
                exit;
            } else if (isset($_POST['newPassword'])) {
                // Xử lý đặt lại mật khẩu
                try {
                    $username = $_POST['username'];
                    $password = $_POST['newPassword'];
                    $user = $user_model->resetPassword($username, $password);
                    if ($user) {
                        $_SESSION['message'] = "Đặt lại mật khẩu thành công.";
                    } else {
                        $_SESSION['error'] = "Tài khoản không tồn tại trong hệ thống.";
                    }
                } catch (\Exception $e) {
                // Có lỗi không mong muốn xảy ra
                    $this->console->addDebugInfo("Error during reset password: " . $e->getMessage());
                    $_SESSION['error'] = "Có lỗi không mong muốn xảy ra, vui lòng thử lại sau!";
                }
                header('Location: /');
                exit;
            }
        } else {
            // Load login view
            $this->output->load('user/loginOrRegister');
        }
    }
/**
 * Đăng xuất người dùng hiện tại bằng cách hủy session đã lưu và chuyển về trang chủ.
 */
    public function logout()
    {
        unset($_SESSION['logged']);
        return header('Location: /');
    }
}
