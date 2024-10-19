<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
    <div class="login-container">
        <h2>Đăng Nhập</h2>
        <form action="#" method="get" class="login-form">
            <label style="cursor: text;">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" placeholder="Nhập email">
            </label>
            <label style="cursor: text;">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Nhập mật khẩu">
            </label>
            <label style="background: none; padding: 0;">
                <input type="checkbox" name="" id="" style="width: fit-content; cursor: pointer;">
                Nhớ lần đăng nhập.
            </label>
            <label class="btn-submit">
                <input type="submit" value="Đăng nhập">
            </label>
        </form>
        <div>
            <div class=""><a href="register.html">Đăng ký</a></div>
            <div class="forgot-password"><a href="forgetpassword.html">Bạn quên mật khẩu?</a></div>
        </div>
    </div>

</body>

</html>