
<h2 class="admin-title"><?php echo $_GET['user_id'] ? 'Cập nhật ' : 'Thêm mới'?></h2>
<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
<div class="form-group">
    
<label for="username">Tên người dùng</label>
<input type="text" name="username" id="username"
                    value="<?= isset($account["username"])
                        ? htmlspecialchars($account["username"])
                        : "" ?>"
                    placeholder="Mời bạn nhập user" required>
                    
<label for="role">Vai trò</label>
<select name="role" id="role">
    <option value="user" <?= ($data["account"]["role"] == 'user') ? 'selected' : '' ?>>User</option>
    <option value="admin" <?= ($data["account"]["role"] == 'admin') ? 'selected' : '' ?>>Admin</option>
</select>

</div>
<button type="submit" class="blue waves-effect waves-light btn"
name="addOrUpdate" style="margin-top:10px"><?php echo $_GET['id'] ? 'Cập nhật' : 'Thêm mới '?></button>
</form>
<br />
<a href="/">Quay lại danh sách phim</a>

<style>
    /* Tổng thể */
body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    color: white;
    text-align: center;
    padding: 20px;
}

/* Tiêu đề */
h1, h2 {
    font-size: 26px;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Form chính */
form {
    background: #1e1e1e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
    max-width: 400px;
    margin: auto;
}

/* Ô nhập liệu */
.form-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    text-align: left;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #6a11cb;
    border-radius: 6px;
    background-color: #1e1e1e;
    color: white;
    outline: none;
    transition: 0.3s;
}

input:focus {
    border-color: #2575fc;
    box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
}

/* Nút bấm */
button {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
    font-size: 16px;
    font-weight: bold;
}

button:hover {
    background: linear-gradient(to right, #2575fc, #6a11cb);
    box-shadow: 0px 4px 10px rgba(106, 17, 203, 0.3);
}

/* Link quay lại */
a {
    display: inline-block;
    margin-top: 15px;
    color: #2575fc;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

</style>
