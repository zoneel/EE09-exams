<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Video on Demand</title>
    <link rel="stylesheet" href="styl3.css"/>
</head>
<body>
    <section id="baner1">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </section>
    <section id="baner2">
        <table>
            <tr>
                <th>Kryminał</th>
                <th>Horror</th>
                <th>Przygodowy</th>

            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>

        </table>
    </section>

    <section id="polecamy">
        <h3>Polecamy</h3>
        <?php 
            $conn = mysqli_connect("localhost", "root", "", "dane3");
            $kwe = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18,22,23,25);";
            $zap = mysqli_query($conn, $kwe);

            while($row=mysqli_fetch_array($zap)){
                echo "<section class = 'film'>";
                echo "<h4>{$row[0]}, {$row[1]}</h4>";
                echo "<img src='{$row[3]}'/>";
                echo "<p>{$row[2]}</p></section>";
                
            }
            mysqli_close($conn);

        ?>
    </section>

    <section id="fantastyczne">
        <h3>Filmy fantastyczne</h3>
        <?php 
            $conn = mysqli_connect("localhost", "root", "", "dane3");
            $kwe = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE rodzaje_id = 12;";
            $zap = mysqli_query($conn, $kwe);

            while($row=mysqli_fetch_array($zap)){
                echo "<section class = 'film'>";
                echo "<h4>{$row[0]}, {$row[1]}</h4>";
                echo "<img src='{$row[3]}'/>";
                echo "<p>{$row[2]}</p></section>";
                
            }
            mysqli_close($conn);

        ?>
    </section>

    <section id="stopka">
        <form method="POST" action="">
            Usun film nr.: <input type="number" name="numer"/><br/>
            <input type="submit" name="guzior"/><br/>
            Stronę wykonał: <a href="ja@poczta.com">zonel</a>
        </form>

        <?php
        if(isset($_POST['guzior'])){
            $ktory = $_POST['numer'];
            $conn = mysqli_connect("localhost", "root", "", "dane3");
            $kwe = "DELETE FROM produkty WHERE id={$ktory}";
            $zap = mysqli_query($conn, $kwe);

            if($kwe){
                echo "usunieto film ";
            }
            else{
                echo "nie znaleziono filmu";

            }
        }
        ?>
    </section>

</body>
</html>