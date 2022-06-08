<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    $checkname = strlen($name) > 3;
    $checkmailat = strpos($mail, "@");
    $checkmaildot = strpos($mail, ".");
    $checkage = is_numeric($age);
        if ($checkname && $checkmailat && $checkmaildot && $checkage) {
        echo "Accesso riuscito" ; 
    } else {
        echo "Accesso negato"; 
    };
    
    
    ?>
</body>
</html>