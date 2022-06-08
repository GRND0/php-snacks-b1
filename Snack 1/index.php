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
    $risultato_calendario = [
    [ 
        "casa" => "Virtus",
        "ospiti" => "Lotto",
        "punteggio_casa" => "32",
        "punteggio_ospiti" => "22",
    ],
    [ 
        "casa" => "Olimpia Milano",
        "ospiti" => "Cantù",
        "punteggio_casa" => "22",
        "punteggio_ospiti" => "12",
    ],
    [ 
        "casa" => "Scauri Basket",
        "ospiti" => "Roma Wolves",
        "punteggio_casa" => "34",
        "punteggio_ospiti" => "25",
    ],
    [ 
        "casa" => "Virtus",
        "ospiti" => "Lotto",
        "punteggio_casa" => "76",
        "punteggio_ospiti" => "55",
    ],
];
?>
   <?php  for ($i = 0; $i < count($risultato_calendario); $i++ ) { 
            $risultato = $risultato_calendario[$i];
            ?>
     <h2> <?php echo $risultato["casa"]?> <?php echo $risultato["ospiti"]?> | <?php echo $risultato["punteggio_casa"]?> - <?php echo $risultato["punteggio_ospiti"] ?> </h2>

    <?php } ?>
    
</body>
</html>