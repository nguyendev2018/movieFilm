<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7">
<div class="contact-form">
<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">

<h2 class="admin-title">Cập nhật</h2>
<div class="form-group">
     <!-- Thêm input hidden để lưu user_id -->
     <input type="hidden" name="user_id" value="<?= isset($data['account']['user_id']) ? $data['account']['user_id'] : '' ?>">

<label for="username">Tên người dùng</label>
<input type="text" name="username" id="username"
                    value="<?= isset($data['account']['username'])
                        ? htmlspecialchars($data['account']['username'])
                        : "" ?>"
                    placeholder="Mời bạn nhập user" required>

<label for="role">Vai trò</label>
<select name="role" id="role" class="form-control">
    <option value="user" <?= ($data["account"]["role"] == 'user') ? 'selected' : '' ?>>User</option>
    <option value="admin" <?= ($data["account"]["role"] == 'admin') ? 'selected' : '' ?>>Admin</option>
</select>

</div>
<div class="d-flex justify-content-between align-items-baseline mt-30">
<button type="submit" class="blue waves-effect waves-light btn"
name="addOrUpdate" style="margin-top:10px">Cập nhật</button>
<a href="/account">Quay lại danh sách tài khoản</a>

</div>

</form>
</section>
