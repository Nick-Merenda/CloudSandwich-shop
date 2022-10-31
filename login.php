<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="header">
        <?php include 'header.php';?>
    </div>
    <h1>Customer Login</h1>
    <form action="connect.php" method="post">
              
        <div>
          <label>Name</label>
          <input
            type="text"
            name="name"    
          />
        </div>
        

        <div>
          <label>Password</label>
          <input
            type="password"
            name="password"
          />
        </div>

        <input type="submit"/>
      </form>
<h2>Don't have an account? Create one by clicking below!</h2>
      <button id="register">Register an account</button>

<script type="text/javascript">
    document.getElementById("register").onclick = function () {
        location.href = "customerRegister.php";
    };
</script>
</body>
</html>