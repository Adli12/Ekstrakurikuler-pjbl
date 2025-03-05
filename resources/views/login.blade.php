<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- bootrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="container-content">
            <h2>sign in</h2>
            <p id="text">login to your account</p>

            @if(session('loginError'))
                <div class="alert alert-danger">
                    {{ session('loginError') }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-grup">
                    <label for="username">username</label>
                    <input type="text" name="username" placeholder="Please enter your Username" autofocus required>
                    @if($errors->has('username'))
                        <p class="error-message">{{ $errors->first('username')  }}</p>
                    @endif
                </div>
                <div class="form-grup">
                    <label for="password">password</label>
                    <input type="password" name="password" placeholder="Please enter your password" required>
                    @if($errors->has('password'))
                        <p class="error-message">{{ $errors->first('password')  }}</p>
                    @endif
                </div>
                <div class="form-footer">
                    <label for="">
                        <input type="checkbox" name="remember">remember me
                    </label>
                    <a href="#">forget password?</a>
                </div>
                <button type="submit" class="btn-login">login <i class="bi bi-arrow-right"></i></button>
            </form>
            <div class="account">
                <p>not registered yet? <a href="">create an account</a></p>
            </div>
        </div>
        <div class="image-container">
            <img src="img/auth.jpg" alt="auth">
        </div>
    </div>
</body>

</html>