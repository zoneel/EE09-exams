<?php
    if(isset($_POST["guzior"])){
        $lowis = $_POST["lowisko"];
        $datka = $_POST["data"];
        $sedzka = $_POST["sedzia"];
    
        $conn = mysqli_connect("localhost","root","","wedkarstwo");
        $zap = "INSERT INTO zawody_wedkarskie(`Lowisko_id`,`data_zawodow`,`sedzia`) VALUES ('{$lowis}','{$datka}','{$sedzka}');";
        $kwe = mysqli_query($conn, $zap);
        $kwe;
        if(!$kwe){
            echo "kwerenda się nie wykonała";
        }else{
            echo "kwerenda wykonana";
        }
        mysqli_close($conn);
    }
?>