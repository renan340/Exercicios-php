    <?php
    setcookie("login", "",  time()-1);
    echo "usuario desconectado";
    header ("Refresh:3, exerc2.php");
    ?>