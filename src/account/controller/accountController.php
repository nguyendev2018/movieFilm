<?php
namespace Account;

use Engine\Base;

class AccountController extends Base
{
    /**
     * Hiển thị danh sách tài khoản
     */
    public function index(): void
    {
        $account_model = new AccountModel();
        $data = array();
        $limit = 10;
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        // Lấy danh sách tài khoản
        $data["users"] = $account_model->getAllAccounts($limit, $offset);
        $totalAccounts = $account_model->countAllAccounts();
        $data["totalPages"] = ceil($totalAccounts / $limit);

        // Xử lý xóa tài khoản
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user_id = $_POST["user_id"];
            try {
                $account_model->deleteAccountById($user_id);
                $_SESSION['message'] = "Xóa tài khoản thành công.";
            } catch (\Exception $e) {
                $_SESSION['error'] = "Đã xảy ra lỗi: " . $e->getMessage();
            }
            header("Location: /account");
            exit;
        }

        // Xử lý tìm kiếm tài khoản
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_GET['keyword'] ?? '';
            if ($keyword) {
                $result = $account_model->filterAccount($keyword);
                $data["users"] = empty($result) ? array() : (isset($result[0]) ? $result : array($result));
            }
        }

        $this->output->addJs("js/Notify");
        $this->output->load("account/listAccount", $data);
    }

    /**
     * Tạo hoặc cập nhật tài khoản
     */
    public function createOrUpdateAccount(): void

{

    // $data = [];
    // $account_model = new AccountModel();

    // // Lấy user_id từ GET nếu có
    // $user_id = isset($_GET["user_id"]) ? (int) $_GET["user_id"] : null;
    // if ($user_id) {
    //     $data["users"] = $account_model->findAccountById($user_id);
    // } else {
    //     $data["users"] = [
    //         "username" => "",
    //         "role" => "",
    //     ];
    // }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Lấy dữ liệu từ form
    //     $username = isset($_POST["username"]);
    //     $role = isset($_POST["role"]) ? trim($_POST["role"]) : null;
    //     $user_id = isset($_POST["user_id"]) ? (int) $_POST["user_id"] : null;

    //     // Kiểm tra dữ liệu hợp lệ
    //     if (!$user_id || !$username || !$role) {
    //         $_SESSION["error"] = "Vui lòng nhập đầy đủ thông tin!";
    //         header("Location: /account");
    //         exit;
    //     }

    //     try {
    //         // Cập nhật tài khoản
    //         $account_model->updateAccountById($user_id, $username, $role);
    //         $_SESSION["message"] = "Cập nhật tài khoản thành công.";
    //         header("Location: /account");
    //         exit;
    //     } catch (\Exception $e) {
    //         $_SESSION["error"] = "Lỗi khi cập nhật: " . $e->getMessage();
    //         header("Location: /account/createOrUpdateAccount?user_id=" . $user_id);
    //         exit;
    //     }
    // }

    $account_model = new AccountModel();
    $user_id = isset($_GET["user_id"]) ? (int) $_GET["user_id"] : null;
    $data["account"] = $user_id ? $account_model->findAccountById($user_id) : ["username" => "", "role" => ""];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"] ?? "");
        $role = trim($_POST["role"] ?? "");
        $user_id = isset($_POST["user_id"]) ? (int) $_POST["user_id"] : null;

        // Kiểm tra dữ liệu hợp lệ
        if (empty($username) || empty($role)) {
            $_SESSION["error"] = "Vui lòng nhập đầy đủ thông tin!";
            header("Location: /account");
            exit;
        }

        try {
            // Nếu có user_id -> cập nhật, nếu không có -> tạo mới
            if ($user_id) {
                $account_model->updateAccountById($user_id, $username, $role);
                $_SESSION["message"] = "Cập nhật tài khoản thành công.";
            } else {
                $account_model->create($username, "default_password", $role);
                $_SESSION["message"] = "Thêm tài khoản mới thành công.";
            }

            header("Location: /account");
            exit;
        } catch (\Exception $e) {
            $_SESSION["error"] = "Lỗi khi xử lý: " . $e->getMessage();
            header("Location: /account/createOrUpdateAccount?user_id=" . $user_id);
            exit;
        }
    }



    $this->output->load("account/createOrUpdateAccount", $data);
}


}
