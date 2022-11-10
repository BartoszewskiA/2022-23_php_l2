<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <form method="get">
        <label for="a">a=</label>
        <input name="a" type="number" />
        <label for="b">b=</label>
        <input name="b" type="number" />
        <label for="c">c=</label>
        <input name="c" type="number" />
        <input type="submit" />
    </form>
    <br>
    <h2>Wynik:</h2>
    <!-- <?php
            if (
                isset($_GET['a']) && is_numeric($_GET['a']) &&
                isset($_GET['b']) && is_numeric($_GET['b']) &&
                isset($_GET['c']) && is_numeric($_GET['c'])
            ) {
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
                echo "a=" . $a . "<br>";
                echo "b=" . $b . "<br>";
                echo "c=" . $c . "<br>";
                echo "suma=" . $a + $b + $c;
            }
            ?> -->


    <?php

    if (
        isset($_GET['a']) && is_numeric($_GET['a']) &&
        isset($_GET['b']) && is_numeric($_GET['b']) &&
        isset($_GET['c']) && is_numeric($_GET['c'])
    ) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $delta = $b * $b - 4 * $a * $c;
        echo "delta=" . round($delta, 3) . "<br>";
        if ($delta > 0) {
            $x1 = (-$b - sqrt($delta)) / (2 * $a);
            $x2 = (-$b + sqrt($delta)) / (2 * $a);
            echo "x1=" . round($x1, 3) . "<br>";
            echo "x2=" . round($x2, 3) . "<br>";
        } elseif ($delta == 0) {
            $x0 = (-$b) / (2 * $a);
            echo "x0=" . round($x0, 3) . "<br>";
        } else {
            echo "Brak rozwiązań<br>";
        }
    } else {
        echo "wprowadź dane";
    }
    ?>
</body>

</html>