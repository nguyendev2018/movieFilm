<?php
namespace Account;

use Engine\Base;

class AccountModel extends Base
{
    /**
     * Lấy danh sách tất cả tài khoản
     *
     * @return array
     */
    public function getAllAccounts($limit, $offset): array
    {
        $query = "SELECT * FROM `users` ORDER BY user_id ASC LIMIT :limit OFFSET :offset";
        return $this->database->query($query, ['limit' => $limit, 'offset' => $offset]);
    }

    /**
     * Đếm tổng số tài khoản
     *
     * @return int
     */
    public function countAllAccounts(): int
    {
        return $this->database->query("SELECT COUNT(*) as total FROM `users`")['total'];
    }

    /**
     * Tạo tài khoản mới
     */
    public function create(string $username, string $password, string $role) {
        $query = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
        $params = [
            'username' => $username,
            // 'password' => password_hash($password, PASSWORD_BCRYPT), // Hash mật khẩu
            'role' => $role
        ];
        return $this->database->query($query, $params);

    }




    /**
     * Tìm tài khoản theo ID
     */
    public function findAccountById(int $user_id)
    {
        
        // $query = "SELECT * FROM users WHERE user_id = :user_id";
        // $result = $this->database->query($query, ['user_id' => $user_id]);
        // return $result[0] ?? null;  // Trả về tài khoản đầu tiên nếu có

        return $this->database->query("SELECT * FROM `users` WHERE user_id = $user_id");
    }

    /**
     * Cập nhật thông tin tài khoản
     */
    public function updateAccountById(int $user_id, string $username,string $role)
    {
        $query = "UPDATE users SET username = :username,  role = :role WHERE user_id = :user_id";
        $params = [
            'username' => $username,
            'role' => $role,
            'user_id' => $user_id
        ];
          // Debug xem dữ liệu có đúng không
          try {
            $this->database->query($query, $params);
            return true;
        } catch (\PDOException $e) {
            die("Lỗi SQL: " . $e->getMessage());
        }

        return $this->database->query($query, $params);

    }

    public function filterAccount(string $keyword)
{
    $query = "SELECT * FROM `users`
        WHERE `username` LIKE ?
        OR `user_id` LIKE ?
        OR `role` LIKE ?";
    // Thêm giá trị cho placeholder thứ 3
    $params = ["%$keyword%", "%$keyword%", "%$keyword%"];

    return $this->database->query($query, $params);
}


    /**
     * Xóa tài khoản theo ID
     */
    public function deleteAccountById(int $user_id)
    {
        $query = "DELETE FROM `users` WHERE user_id = $user_id";
        return $this->database->query($query);
    }
}
