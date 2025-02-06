<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Blog System</title>
</head>
<body>
    <style>
        body 
        {
            background-image: url({{ asset('image/blog.png') }});
        }
    </style>
    <main class=" d-flex flex-column justify-content-center m-5 ">
        <div class="form-container">
            <h2>Register</h2>
            <form id="registerForm" action="" class=" rounded-circle" method="POST">
                {{ csrf_field() }}
                <input type="text" name="name" id="username" placeholder="Username" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                <button class=" log-reg-btn" type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="{{ url('login') }}">Login here</a></p>
        </div>
    </main>
  
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>







