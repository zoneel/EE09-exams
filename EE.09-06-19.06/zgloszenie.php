<?php
    $ratownik = $_POST['ratownik'];
    $dysp = $_POST['dyspozytor'];
    $addr = $_POST['adres']; 

    $conn = mysqli_connect("localhost", "root", "", "ratownictwo");
    $kwe = "INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia) VALUES ('{$ratownik}','{$dysp}','{$addr}','0',CURRENT_TIME);";

    echo $ratownik, $dysp, $addr;

    $query = mysqli_query($conn, $kwe);
    $query;
    mysqli_close($conn);
?>