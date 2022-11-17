<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>

<body>
    <?php
    if (isset($_GET["tab"])) {
        $suma = 0;
        $tab = $_GET["tab"];
        // print_r($tab);
        echo '<table>';
        echo '<thead>';
        echo '<td>Nazwa towaru</td>';
        echo '<td>Sztuk</td>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($tab as $klucz => $wartosc) {
            if(!empty($wartosc)>0){
                $suma += $wartosc;
                echo '<tr>';
                echo "<td>$klucz</td>";
                echo "<td>$wartosc</td>";
                echo '<tr>';
            }
        }
        echo '</tbody>';
        echo '<tfood>';
        echo "<td>Suma=</td>";
        echo "<td>$suma</td>";
        echo '<tfood>';
        echo '</table>';
    } else {
        echo "Brak danych";
    }

    ?>
</body>

</html>