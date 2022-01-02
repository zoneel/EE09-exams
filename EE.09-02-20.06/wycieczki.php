<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <title>Wycieczki i urlopy</title>
        <link rel="stylesheet" href="styl3.css" />
    </head>
    <body>
        <section id="baner">
            <h1>BIURO PODRÓŻY</h1>
        </section>
        
        <section id="lewy">
            <h2>KONTAKT</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon 555666777</p>
        </section>
        <section id="srodek">
            <h2>GALERIA</h2>
            <?php 
                $conn = mysqli_connect("localhost", "root","","egzamin3");
                $kwe = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
                $que = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($que)){
                    echo "<img src='{$row[0]}' alt='{$row[1]}'>";
                }
            
            ?>
        </section>
        <section id="prawy">
            <h2>PROMOCJE</h2>
            <table>
                <tr>
                    <th>Jesień</th>
                    <th>Grupa 4+</th>
                    <th>Grupa 10+</th>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </section>

        <section id="dane">
            <h2>LISTA WYCIECZEK</h2>
            <?php 
                $conn = mysqli_connect("localhost", "root","","egzamin3");
                $kwe = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki where dostepna = 1;";
                $que = mysqli_query($conn, $kwe);

                while($row=mysqli_fetch_row($que)){
                    echo "{$row[0]}. {$row[1]}, {$row[2]}, cena: {$row[3]},<br />";
                }
                mysqli_close($conn);
            ?>
        </section>

        <section id="stopka">
            <p>Stronę wykonał: zonel</p>
        </section>
    </body>
</html>