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
  <main class=" d-flex flex-column justify-content-center m-5">
    <div class="form-container">
        <h2>Login</h2>
        <form id="loginForm" action="/submit" method="POST">
            @csrf
            <input name="email" type="text" id="username" placeholder="Email" required>
            <input name = "password" type="password" id="password" placeholder="Password" required>
            <button class="  log-reg-btn" type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="{{ url('register') }}">Register here</a></p>
    </div>
  </main>
  
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>



