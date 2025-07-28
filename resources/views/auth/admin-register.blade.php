<form method="POST" action="{{ route('admin.register.submit') }}">
    @csrf
    <div>
        <label>Tên:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Mật khẩu:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label>Xác nhận mật khẩu:</label>
        <input type="password" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">Đăng ký</button>
    </div>

</form>
