<?php
//db.php

// Connect to database:

$link = mysqli_connect("bioteknikdagarna.org.mysql", "bioteknikdagarn", "NL2XrT5T", "bioteknikdagarn");
mysqli_set_charset('utf8', $link);


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;

} else {
    
    $firstname = $secondname = $mail = $pnum = $uni = $number = $prio1 = $prio2 = $prio3 = $prio4 = "";
    if (isset($_POST['firstname'])) $firstname = mysqli_real_escape_string($link, $_POST['firstname']);
    if (isset($_POST['lastname'])) $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
    if (isset($_POST['mail'])) $mail = mysqli_real_escape_string($link, $_POST['mail']);
    if (isset($_POST['pnum'])) $pnum = mysqli_real_escape_string($link, $_POST['pnum']);
    if (isset($_POST['uni'])) $uni = mysqli_real_escape_string($link, $_POST['uni']);
    if (isset($_POST['number'])) $number = mysqli_real_escape_string($link, $_POST['number']);
    if (isset($_POST['prio1'])) $prio1 = mysqli_real_escape_string($link, $_POST['prio1']);
    if (isset($_POST['prio2'])) $prio2 = mysqli_real_escape_string($link, $_POST['prio2']);
    if (isset($_POST['prio3'])) $prio3 = mysqli_real_escape_string($link, $_POST['prio3']);
    if (isset($_POST['prio4'])) $prio4 = mysqli_real_escape_string($link, $_POST['prio4']);
    
    $query = "
        INSERT INTO studiebesok2016 (firstname, lastname, email, pnum, uni, num, prio1, prio2, prio3, prio4) VALUES (\"$firstname\", \"$lastname\", \"$mail\", \"$pnum\", \"$uni\", \"$number\", \"$prio1\", \"$prio2\", \"$prio3\", \"$prio4\")            
        ";
    
    $result = mysqli_query($link, $query);
    
    $error = mysqli_error($link); 
    if ($error) {
        echo "<p>Något gick fel med anmälan. Skicka dina klagobrev till webb@bioteknikdagarna.org. <br> SQL error: ";
        echo $error;
        echo "</p>";
    } else {
    
        echo "<h1>Studiebesöksanmälan färdig</h1><p>Anmälan klar för ";
        echo $firstname . " " . $lastname . ". Om du gjorde något fel så går det att göra om anmälan.</p>";
    }
}
  



?>