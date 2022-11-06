<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.container {
  width: 500px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
    </style>
</head>
<body>
    <div class="header">
        <?php include 'header.php';?>
    </div>
    <h1>Create an employee account</h1>
    <div class="container">
    <form action="connect.php" method="post">

                <label>Name</label>
                <input
                  type="text"
                  name="name"    
                /><br />

                <label>Password</label>
                <input
                  type="password"
                  name="password"
                /><br />

                <label>Email</label>
                <input
                  type="text"
                  name="email"    
                /><br />

                <label>Phone number</label>
                <input
                  type="text"
                  name="phone_number"    
                /><br />

                <label>Street</label>
                <input
                  type="text"
                  name="street"    
                /><br />

                <label>City</label>
                <input
                  type="text"
                  name="city"    
                /><br />

                <label>Zip Code</label>
                <input
                  type="text"
                  name="zip code"    
                /><br />

                <label>State</label>
                <input
                  type="text"
                  name="state"    
                /><br />
</div>
                <div>
              <input type="submit"/>
              </div>
            </form>
</body>
</html>