<!DOCTYPE html>
<html>
<head>
    <title>From sederhana</title>
</head>
<body>
         <h2>Form input</h2>
    <form method  = "get" action = "">
        Nama: <input type = "text" name = "name" required><br><br>
        Email: <input type = "email" name = "email" required><br><br>
        <input type = "submit" value = "submit">
    </form>   

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="GET" && isset ($_GET['name'])&& isset ($_GET['email'])){
        $name =  htmlspecialchars($_GET['name']);
        $email=  htmlspecialchars($_GET['email']);
        echo "<h3>hasil input:</h3>";
        echo "Name:" . $name ."<br>";
        echo "Email:" . $email;
    }
    ?>
</body>
</html>