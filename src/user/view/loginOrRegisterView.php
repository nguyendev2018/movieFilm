    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-7 col-lg-5">
        <div class="login-wrap p-4 p-md-5" id="authForm">
        <form id="authForm" action="" method="POST">
            <h2 id="formTitle" class="text-center text-dark">ĐĂNG NHẬP</h2>
            <input type="hidden" name="loginMode" value="">
            <div class="form-group">
            <label for="labelname">Tên tài khoản</label>
            <input type="text" id="labelname" class="form-control" name="username" placeholder="Tên tài khoản" required>
            </div>
            <div class="form-group">
            <label for="username">Mật khẩu</label>
            <input type="password" class="form-control " name="password" placeholder="Mật khẩu" required>
            </div>

            <!-- Hiển thị lỗi nếu có -->
            <?php if (isset($_SESSION['error_message'])): ?>
                <p class="error-message" style="color: red;">
                    <?php echo $_SESSION['error_message']; ?>
                </p>
                <!-- Unset lỗi sau khi hiển thị -->
                <?php unset($_SESSION['error_message']); ?>
            <?php endif; ?>
            <div class="form-group">
	            	<button id="loginOrRegister" type="submit" class=" btn">ĐĂNG NHẬP</button>
	            </div>
            <a href="#" class="w-100 d-block text-info text-center mt-10" id="forgotPasswordLink">Quên Mật Khẩu?</a>
            <a href="#" class="w-100 d-block text-primary text-center mt-10" id="toggleLink">Chưa có tài khoản? Đăng ký ngay</a>
        </form>
    </div>
        </div>
    </div>

<!-- Form tên tài khoản để đặt lại mật khẩu -->
<div class="row justify-content-center mt-30 mb-30" id="forgotPasswordForm" style="display: none;">
<div class="col-md-7 col-lg-5">
<div class="login-wrap p-4 p-md-5" id="authForm">
<h4 class="text-center text-dark"> ĐẶT LẠI MẬT KHẨU </h4>
        <form id="forgotPasswordForm" action="" method="POST">
            <div class="form-group">
            <label for="taikhoan">Tài khoản</label>
            <input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản cần đổi mật khẩu" id="taikhoan" required>
            </div>
            <div class="form-group">
            <label for="pass">Mật khẩu</label>
            <input type="password" name="newPassword" class="form-control" placeholder="Mật khẩu mới" id="pass" required>
            </div>
            <button type="submit" class=" btn ">Xác nhận đặt lại mật khẩu</button>
        </form>
        <a href="#" class="mt-20 d-block" id="backToLoginLink">Quay lại Đăng nhập</a>
</div>
</div>
</div>

<!-- Hiển thị thông báo nếu có -->
<?php if (isset($_SESSION['message'])): ?>
    <script>
    // Chạy function JS showNotification() trong file Notify.js
    showNotification('<?php echo $_SESSION['message']; ?>', 'success');

    // Unset thông báo sau khi hiển thị
    <?php unset($_SESSION['message']); ?>
    </script>
<?php endif; ?>
<!-- Hiển thị lỗi nếu có -->
<?php if (isset($_SESSION['error'])): ?>
    <script>
    // Chạy function JS showNotification() trong file Notify.js
    showNotification('<?php echo $_SESSION['error']; ?>', 'error');
    // Unset lỗi sau khi hiển thị
    <?php unset($_SESSION['error']); ?>
    </script>
<?php endif; ?>
<script>
const toggleLink = document.getElementById('toggleLink');
const submitButton = document.getElementById('loginOrRegister');
const formTitle = document.getElementById('formTitle');
const authForm = document.getElementById('authForm');
const loginMode = document.querySelector('input[name="loginMode"]');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const forgotPasswordForm = document.getElementById('forgotPasswordForm');
const backToLoginLink = document.getElementById('backToLoginLink');

let isLoginMode = true; // Flag theo dõi
loginMode.value = isLoginMode;

toggleLink.addEventListener('click', function (event) {
    event.preventDefault(); // Ngăn chặn hành vi nhấp chuột mặc định
    // Chuyển đổi giữa đăng nhập và đăng ký
    isLoginMode = !isLoginMode;
    loginMode.value = isLoginMode;
    if (isLoginMode) {
        formTitle.textContent = 'ĐĂNG NHẬP';
        submitButton.textContent = 'ĐĂNG NHẬP';
        authForm.querySelector('input[name="username"]').placeholder = "Tên tài khoản";
    } else {
        formTitle.textContent = 'ĐĂNG KÝ';
        submitButton.textContent = 'ĐĂNG KÝ';
        authForm.querySelector('input[name="username"]').placeholder = "Tên tài khoản mới";

    }
    // Cập nhật text
    toggleLink.textContent = isLoginMode ? 'Chưa có tài khoản? Đăng ký ngay' : 'Đã có tài khoản? Đăng nhập ngay';
});
forgotPasswordLink.addEventListener('click', function (event) {
    event.preventDefault();
    authForm.style.display = 'none';
    forgotPasswordForm.style.display = 'flex';
});
backToLoginLink.addEventListener('click', function (event) {
    event.preventDefault();
    forgotPasswordForm.style.display = 'none';
    authForm.style.display = 'block';
});
</script>
