<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
</head>
<body>
<div class="header">
        <?php include 'header.php';?>
    </div>
    <h1>Employee Login</h1>
    <form action="connect.php" method="post">
              
        <div>
          <label>Name</label>
          <input
            type="text"
            name="empName"    
          />
        </div>
        

        <div>
          <label>Password</label>
          <input
            type="password"
            name="empPassword"
          />
        </div>

        <input type="submit"/>
      </form>
<h2>Don't have an account? Create one by clicking below!</h2>
      <button id="register">Register an employee account</button>

<script type="text/javascript">
    document.getElementById("register").onclick = function () {
        location.href = "employeeRegister.php";
    };
</script>
</body>
</html>