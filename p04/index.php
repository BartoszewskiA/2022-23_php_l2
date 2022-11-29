<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
     <form method="get">
        <label for="Towar">Towar</label>
        <input name="Towar" type="text" />
        <label for="b">b=</label>
        <input name="Sztuk" type="number" />
        <input type="submit" />
    </form>
    <?php

    function podsumowanie($t,$szt)
    {
        echo "<p>podsumowanie</p>";
      echo "<p>$t</p>";
      echo "<p>$szt</p>";
    }

    if(isset($_GET['Towar']) && 
      (is_string($_GET['Towar']))  && strlen($_GET['Towar']) &&
            (is_numeric($_GET['Sztuk'])))
      {
        podsumowanie($_GET['Towar'], $_GET['Sztuk']);
        setcookie("towar", $_GET['Towar'],time()+3600*24*3);
        setcookie("sztuk", $_GET['Sztuk'], time() + 3600 * 24 * 3);
      } 
      elseif(isset($_COOKIE['towar']) && isset($_COOKIE['sztuk']))
      {
        podsumowanie($_COOKIE['towar'], $_COOKIE['sztuk']);
      }
      else
      {
        echo "<p>brak anych</p>";
      }
    
    ?>
  </body>
</html>