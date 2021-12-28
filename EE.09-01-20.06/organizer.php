<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Organizer</title>
        <link rel="stylesheet" href="styl6.css" />
    </head>
    <body>
        <section id="baner1">
            <h2>MÓJ ORGANIZER</h2>
        </section>
        <section id="baner2">
            <form method="POST" action="">
                Wpis wydarzenia: <input type="text" name="wpis" /><br />
                <input type="submit" name="guzik" value="ZAPISZ" />
            </form>

            <?php 
                if(isset($_POST["guzik"])){               
                    $zmienna = $_POST["wpis"];
                    $conn = mysqli_connect("localhost","root","","egzamin6");
                    $zap = "UPDATE zadania SET wpis = '{$zmienna}' WHERE dataZadania = '2020-08-27';";
                    $que = mysqli_query($conn, $zap);
                    $que;
                }               
            ?>
        </section>
        <section id="baner3">
            <img src="logo2.png" alt="Mój organizer" />
        </section>

        <section id="glowny"> 
            <?php 
                $conn = mysqli_connect("localhost","root","","egzamin6");
                $zap = "SELECT dataZadania, miesiąc, wpis FROM zadania;";
                $que = mysqli_query($conn,$zap);

                while($row=mysqli_fetch_row($que)){
                    echo "<section class='blok'>";
                    echo "<h6>{$row[0]}, {$row[1]}</h6>";
                    echo "<p>{$row[2]}</p>";
                    echo "</section>";
                }
                mysqli_close($conn);
            ?>
        </section>

        <section id="stopka">
            <?php 
                $conn = mysqli_connect("localhost","root","","egzamin6");
                $zap = "SELECT miesiąc, rok FROM zadania where dataZadania = '2020-08-01';";
                $que = mysqli_query($conn,$zap);

                while($row=mysqli_fetch_row($que)){
                    echo "<h1>miesiąc: {$row[0]}, rok: {$row[1]}</h1>";
                }
                mysqli_close($conn);
            ?>
            <p>Stronę wykonał: zonel</p>
        </section>
    </body>
</html>