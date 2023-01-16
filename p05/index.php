
<?php
    session_start();
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_GET['login']))
    {
        $_SESSION['user'] = $_GET['login'];
        $_SESSION['time'] = time();
    }


    if(isset($_SESSION['user']))
    {
        $ileDini = round((time()-$_SESSION['time'])/(60*60*24));
        if($ileDini==1)
            $opis =" dnia";
        else
            $opis = " dni";
        echo "<div>";
        echo "Zalogowany: ".$_SESSION['user']." od: ".$ileDini.$opis;
        echo "</div>";
        echo '<form action="wyloguj.php">';
        echo '<input type="submit" value="Wyloguj"/>';
        echo '</form>';
    }
    else
    {
        echo 'Niezalogowano';
        echo '<form>';
        echo '<label>Login: </label>';
        echo '<input name="login" type="text"/>';
        echo '<input type="submit"/>';
        echo '</form>';
    }
    ?>
  </body>
</html>