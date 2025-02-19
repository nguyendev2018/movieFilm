<div class="wrapper">
    <div class="wrapper-auth">
        <h2 id="formTitle">Đăng nhập</h2>
        <form id="authForm" action="" method="POST">
            <input type="hidden" name="loginMode" value="true">
            <input type="text" name="username" placeholder="Tên tài khoản" style="display: none;">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" style="display: none;">
            
            <!-- Thông báo lỗi nếu mật khẩu không khớp -->
            <p id="passwordError" style="color: red; display: none;">Mật khẩu và mật khẩu nhập lại không khớp!</p>

            <?php if (isset($_SESSION['error_message'])): ?>
                <p class="error-message" style="color: red;">
                    <?php echo $_SESSION['error_message']; ?>
                </p>
                <?php unset($_SESSION['error_message']); ?>
            <?php endif; ?>

            <button type="submit" id="loginOrRegister">Đăng nhập</button>
            <a href="#" id="toggleLink">Chưa có tài khoản? Đăng ký ngay</a>
        </form>
    </div>
</div>

<script>
    const toggleLink = document.getElementById('toggleLink');
    const submitButton = document.getElementById('loginOrRegister');
    const formTitle = document.getElementById('formTitle');
    const authForm = document.getElementById('authForm');
    const loginMode = document.querySelector('input[name="loginMode"]');
    const usernameField = authForm.querySelector('input[name="username"]');
    const confirmPasswordInput = document.querySelector('input[name="confirm_password"]');
    const passwordInput = document.querySelector('input[name="password"]');
    const passwordError = document.getElementById('passwordError');

    let isLoginMode = true;

    toggleLink.addEventListener('click', function (event) {
        event.preventDefault();
        isLoginMode = !isLoginMode;
        loginMode.value = isLoginMode ? 'true' : 'false';
        formTitle.textContent = isLoginMode ? 'Đăng nhập' : 'Đăng ký';
        submitButton.textContent = isLoginMode ? 'Đăng nhập' : 'Đăng ký';
        usernameField.style.display = isLoginMode ? 'none' : 'block';
        confirmPasswordInput.style.display = isLoginMode ? 'none' : 'block';
        passwordError.style.display = 'none'; // Ẩn thông báo lỗi khi chuyển chế độ
        toggleLink.textContent = isLoginMode ? 'Chưa có tài khoản? Đăng ký ngay' : 'Đã có tài khoản? Đăng nhập ngay';
    });

    confirmPasswordInput.addEventListener('input', function() {
        // Kiểm tra xem mật khẩu và mật khẩu nhập lại có khớp không
        if (passwordInput.value === confirmPasswordInput.value) {
            submitButton.disabled = false; // Kích hoạt nút đăng ký
            passwordError.style.display = 'none'; // Ẩn thông báo lỗi
        } else {
            submitButton.disabled = true; // Vô hiệu hóa nút đăng ký
            passwordError.style.display = 'block'; // Hiển thị thông báo lỗi
        }
    });
</script>
