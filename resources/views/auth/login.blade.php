<!DOCTYPE html>
<html>
<head>
    <title>Login Perpustakaan</title>
    <style>
        body {
            background:#1e40af;
            font-family: Arial;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .login-box {
            background:white;
            padding:30px;
            border-radius:12px;
            width:300px;
        }
        input, button {
            width:100%;
            padding:10px;
            margin-top:10px;
        }
        button {
            background:#2563eb;
            color:white;
            border:none;
            border-radius:8px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h3>🔐 Login Admin</h3>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>Login</button>
    </form>
</div>

</body>
</html>
