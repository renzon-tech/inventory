<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>Login Page</title>

</head>
<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">
        <div class="logo-circle"></div>

        <div class="logo-text">
            <h1>GUSSMANN</h1>
            <p>INTEGRATED SOLUTIONS PHIL. INC.</p>
        </div>
    </div>

    <div class="nav-links">
        <a href="#">HOME</a>
        <a href="#">FLEET MANAGEMENT</a>
        <a href="#">ABOUT US</a>
        <a href="#">CUSTOMER BILLS</a>
        <a href="#">DOWNLOAD</a>
        <a href="#" class="demo-btn">REQUEST DEMO</a>
        <a href="#">LOG IN</a>
    </div>

</div>

<!-- LOGIN FORM -->

<div class="container">

    <div class="login-box">

        <div class="user-icon"></div>

        <div class="input-box">
            <input type="text" placeholder="Username">
        </div>

        <div class="input-box">
            <input type="password" placeholder="Password">
        </div>

        <button class="login-btn" onclick="login()">
            LOG IN
        </button>

    </div>

</div>

<script>

function login(){

    let username = document.querySelector('input[type="text"]').value;
    let password = document.querySelector('input[type="password"]').value;

    if(username == "" || password == ""){

        alert("Please fill all fields");

    }else{

        alert("Login Successfully");

    }

}

</script>

</body>
</html>