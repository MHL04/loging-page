<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Finance Mobile Application-UX/UI Design Screen One</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="./style.css">

<style>* {
  font-family: "Poppins";
}

body {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  overflow-y: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #dde5f4;
  height: 100vh;
}

.screen-1 {
  background: #f1f7fe;
  padding: 2em;
  display: flex;
  flex-direction: column;
  border-radius: 30px;
  box-shadow: 0 0 2em #e6e9f9;
  gap: 2em;
}
.screen-1 .logo {
  margin-top: -3em;
}
.screen-1 .email {
  background: white;
  box-shadow: 0 0 2em #e6e9f9;
  padding: 1em;
  display: flex;
  flex-direction: column;
  gap: 0.5em;
  border-radius: 20px;
  color: #4d4d4d;
  margin-top: -3em;
}
.screen-1 .email input {
  outline: none;
  border: none;
}
.screen-1 .email input::-moz-placeholder {
  color: black;
  font-size: 0.9em;
}
.screen-1 .email input:-ms-input-placeholder {
  color: black;
  font-size: 0.9em;
}
.screen-1 .email input::placeholder {
  color: black;
  font-size: 0.9em;
}
.screen-1 .email ion-icon {
  color: #4d4d4d;
  margin-bottom: -0.2em;
}
.screen-1 .password {
  background: white;
  box-shadow: 0 0 2em #e6e9f9;
  padding: 1em;
  display: flex;
  flex-direction: column;
  gap: 0.5em;
  border-radius: 20px;
  color: #4d4d4d;
}
.screen-1 .password input {
  outline: none;
  border: none;
}
.screen-1 .password input::-moz-placeholder {
  color: black;
  font-size: 0.9em;
}
.screen-1 .password input:-ms-input-placeholder {
  color: black;
  font-size: 0.9em;
}
.screen-1 .password input::placeholder {
  color: black;
  font-size: 0.9em;
}
.screen-1 .password ion-icon {
  color: #4d4d4d;
  margin-bottom: -0.2em;
}
.screen-1 .password .show-hide {
  margin-right: -5em;
}
.screen-1 .login {
  padding: 1em;
  background: #3e4684;
  color: white;
  border: none;
  border-radius: 30px;
  font-weight: 600;
}
.screen-1 .footer {
  display: flex;
  font-size: 0.7em;
  color: #5e5e5e;
  gap: 14em;
  padding-bottom: 10em;
}
.screen-1 .footer span {
  cursor: pointer;
}

button {
  cursor: pointer;
}</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="screen-1">
  <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300" height="300" viewbox="0 0 640 480" xml:space="preserve">
    <g transform="matrix(3.31 0 0 3.31 320.4 240.4)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(61,71,133); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(0.98 0 0 0.98 268.7 213.7)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(1.01 0 0 1.01 362.9 210.9)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(0.92 0 0 0.92 318.5 286.5)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(0.16 -0.12 0.49 0.66 290.57 243.57)">
      <polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
    </g>
    <g transform="matrix(0.16 0.1 -0.44 0.69 342.03 248.34)">
      <polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
    </g>
  </svg>
  <?php
  //code pour champ obligatoire
  $emailErr=$passwordErr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailErr="email is required";
    }else{
        $email=test_imput($_POST["email"]);
    }
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
    if(empty($_POST["password"])){
        $passwordErr="password is required";}
        else{
            $password=test_imput($_POST["password"]);
        }
    

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="email">
    <label for="email">Email Address</label>
    <div class="sec-2">
      <ion-icon name="mail-outline"></ion-icon>
      <input type="email" name="email" placeholder="Username@gmail.com"
      class="error">* <?php echo $emailErr;?>/>
        
      <br>

    </div>
  </div>
  <div class="password">
    <label for="password">Password</label>
    <div class="sec-2">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="pas" type="password" name="password" placeholder="Enter yout password"
      class="error">* <?php echo $passwordErr;?>/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <button class="login">Login </button>
  <div class="footer"><span>Signup</span><span>Forgot Password?</span></div>
</div>
</form>
<!-- partial -->


<?php
//code pour champ facultatif
// $email=$password="";
// if($_SERVER["REQUEST_METHOD"]=="POST"){
// $email=test_imput($_POST["email"]);
// $password=test_imput($_POST["password"]);}
// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }








?>


  
</body>
</html>
