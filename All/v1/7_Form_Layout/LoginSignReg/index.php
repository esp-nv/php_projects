<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
  <div id="login-register">

    <div id="box">
      <label for="sign-up-toggle">Sign Up</label>
      <input type="checkbox" id="sign-up-toggle">
      <label for="login-toggle">Login</label>
      <input type="checkbox" id="login-toggle">
      <div id="login-panel">
        <form action="POST">
          <input type="text" placeholder="First Name">
          <input type="text" placeholder="Last Name">
          <input type="email" placeholder="Email">
          <input type="password" placeholder="Password">
        </form>
        <button><p>Sign Up</p><p>Login</p></button>
      </div>
    </div>
  </div>
</div>
        <footer>
            <a href="../index.php">Home page - Admin forms</a>
        </footer>
    </body>
</html>
