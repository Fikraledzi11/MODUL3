<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Form sederhana</title>
</head>
<body>
    <h2>Form input</h2>
    <form method  = "post" action = "">
        Nama: <input type = "text" name = "name" required><br><br>
        Email: <input type = "email" name = "email" required><br><br>
        <input type = "submit" value = "kirim">
    </form>   

       <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =  htmlspecialchars($_POST["name"]);
        $email=  htmlspecialchars($_POST["email"]);
        echo "<h3>Data yang Dikirim :</h3>";
        echo "Name:" . $name ."<br>";
        echo "Email:" . $email. "<br>";
    }
    ?>
</body>
</html>