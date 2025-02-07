<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nom = $_GET["first_name"] ?? $_POST["first_name"] ?? "anonyme";
    
    echo "<p>bonjour, $nom </p>"
    
    ?>
    
    <form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
    </form>
    
</body>
</html>
