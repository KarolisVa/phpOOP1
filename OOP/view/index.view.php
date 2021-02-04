<?php use OOP\Transportas?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAAA</title>
</head>
<body>
    <?php
    ini_set('display_errors', 'on');

    $masina = new Transportas("Nissan", "Qashqai");
    $masina->keistiTransportas(null, null, 1000, 2000, true, 690, 300, "aprasymo nera", 6);
    print_r($masina->gautiViska());
    $masina->paziuretiArYraVariklis();
    echo "<br>";
    echo "<br>";
    $dviratis = new Transportas("Boyer", "Mountainer");
    $dviratis->keistiTransportas(null, null, 200, 60, false, null, null, "aprasymo nera irgi", 1);
    print_r($dviratis->gautiViska());
    $dviratis->paziuretiArYraVariklis();
    echo "<br>";
    echo "<br>";
    $motociklas = new Transportas("Biker", "Streeter v2");
    $motociklas->keistiTransportas(null, null, 1200, 150, true, 520, 250, "aprasymo nera irgi dar karta", 2);
    print_r($motociklas->gautiViska());
    $motociklas->paziuretiArYraVariklis();

    
    ?>
</body>
</html>