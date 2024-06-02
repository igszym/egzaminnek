<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h1>Pensjonat pod dobrym humorem</h1>

    </div>
    <div id="glowny">
        <div id="lewy">
            <a href="index.html">GŁÓWNA</a>
            <br>
            <img src="1.jpeg" alt="pokoje">

        </div>
        <div id="srodkowy">
            <a href="cennik.php">CENNIK</a><br>
            <table>
                <?php
                $con = new PDO("mysql:host=localhost;dbname=pokoje","root","");
                $zapytanie = $con ->query("SELECT * FROM `pokoje`");
                $dane = $zapytanie -> fetchAll();
                foreach($dane as $row){
                    echo "<tr>"."<td>".$row['id']."</td>"."<td>".$row['nazwa']."</td>"."<td>".$row['cena']."</td>";
                }
                $con = NULL;
                ?>
            </table>

        </div>
        <div id="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <br>
            <img src="3.jpeg" alt="pokoje">

        </div>
    </div>
    <div id="stopka">
    <p>Strone opracował: 111222333</p>

    </div>

    
</body>
</html>