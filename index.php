<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="header">
        <?php include 'header.php';?>
    </div>
    <h1>Cloud Sandwich Shop</h1>
    <button id="createOrder">Create a Sandwich</button>

<script type="text/javascript">
    document.getElementById("createOrder").onclick = function () {
        location.href = "login.php";
    };
</script>
</body>
</html>