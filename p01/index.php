<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css"
          href="styl.css">
    <title></title>
</head>

<body>
    <?php
    $kolumn = 3;
    $wierszy = 5;
    $ile =0;
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    for ($i = 1; $i <= $kolumn; $i++)
        echo '<td>' . "Kolumna " . $i . '</td>';
    echo '</tr>';
    echo '</tbody>';

    for ($j = 0; $j < $wierszy; $j++) {
        echo '<tr>';
        for ($i = 1; $i <= $kolumn; $i++)
            //echo '<td>' . ($kolumn * $j) + $i . '</td>';
            echo '<td>' . ++$ile . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    ?>

    <table>
        <thead>
            <tr>
                <th> Kolumna 1
                <th> Kolumna 2
                <th> Kolumna 3
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> 1
                <td> 1
                <td> 3
            </tr>
            <tr>
                <th> 4
                <td> 5
                <td> 6
            </tr>
            <tr>
                <th> 7
                <td> 8
                <td> 9
            </tr>
            <tr>
                <th> 10
                <td> 11
                <td> 12
            </tr>
        </tbody>
    </table>
</body>

</html>