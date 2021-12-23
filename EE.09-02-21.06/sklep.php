<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Warzywniak</title>
        <link rel="stylesheet" href="styl2.css" />
    </head>

    <body>
        <section id="lewy">
            <h1>Internetowy sklep z eko-warzywami</h1>
        </section>
        <section id="prawy">
            <ol>
                <li>warzywa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl/" about="_blank">soki</a></li>
            </ol>
        </section>

        <section id="glowny">
            <?php 
                $conn = mysqli_connect("localhost","root","","dane2");
                $kwe = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty where rodzaje_id = 1 OR rodzaje_id = 2;";
                $que = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($que)){
                    echo "<div class='produkt'>";
                    echo "<img src='{$row[4]}' alt='warzywniak' /><br />";
                    echo "<h5>{$row[0]}</h5><br/>";
                    echo "<p>opis: {$row[2]}</p><br />";
                    echo "<p>na stanie: {$row[1]}</p><br/>";
                    echo "<h2>{$row[3]} zł</h2>";


                    echo "</div>";
                }
                mysqli_close($conn);
            
            ?>
        </section>

        <section id="stopka">
            <form action="sklep.php" method="POST">
                Nazwa: <input type="text" name="nazka" />
                Cena: <input type="text" name="cena" />
                <input type="submit" name="guzior" value="Dodaj produkt" /> <br />
                Stronę wykonał: zonel

            </form>

            <?php 
                if(isset($_POST["guzior"])){
                    $conn = mysqli_connect("localhost","root","","dane2");
                    $na = $_POST['nazka'];
                    $ce = $_POST['cena'];
                    $kwe = "INSERT INTO Produkty(`Rodzaje_id`,`Producenci_id`,`nazwa`,`ilosc`,`opis`,`cena`,`zdjecie`) VALUES ('1','4','{$na}','10','','{$ce}','owoce.jpg');";
    
                    mysqli_query($conn, $kwe);
                }
               
            ?>
        </section>

</body>
</html>