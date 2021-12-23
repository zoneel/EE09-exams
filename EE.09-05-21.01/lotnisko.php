<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Port lotniczy</title>
    <link rel="stylesheet" href="styl5.css"/>
</head>
<body>
    <section id="baner1">
        <img src="zad5.png" alt="logo lotnisko"/>
    </section>
    <section id="baner2">
        <h1>Przyloty</h1>
    </section>
    <section id="baner3">
        <h3>przydatne linki</h3>
        <a href="kwerendy.txt" target=_blank>Pobierz...</a>
    </section>

    <section id="glowny">
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
        
        <?php 
            $conn = mysqli_connect("localhost","root","","egzamin"); //łącze z bazą danych
            $kwe = 'SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;'; //kwerenda
            $zap = mysqli_query($conn, $kwe); //wykonuje zapytanie

            while($row = mysqli_fetch_row($zap)){ //pętla która pozwala wyświetlić wszystkie dane tej kwerendy
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "</tr>";
            }
            mysqli_close($conn); //zamykam połączenie
        ?>
        </table>
    </section>

    <section id="stopka1">
            <?php 
                if(!isset($_COOKIE["ciastko"])){ //warunek sprawdza czy utworzone już jest cookie o naziwe ciastko
                    echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
                    setcookie("ciastko","wartosc",time()+2*60*60); 
                    // ^tworzy cookie o nazwie "ciastko" o wartości "wartosc" na 2 godziny
                }
                else{
                    echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
                }
            ?>

    </section>
    <section id="stopka2"> Autor: zonel</section>

</body>
</html>