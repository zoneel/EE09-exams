<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styl2.css" />
        <title>Klub wedkowania</title>
    </head>
    <body>
        <section id="baner">
            <h2>Wedkuj z nami</h2>
        </section>

        <section id="lewy">
            <img src="ryba2.jpg" alt="Szczupak" />
        </section>
        <section id="prawy">
            <h3>Ryby spokojnego żeru (biale)</h3>
            **el skripto** <br />
            <?php 
                $conn = mysqli_connect('localhost','root','','wedkowanie');
                $kwe = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 2;";
                $zap = mysqli_query($conn, $kwe);

                while($row= mysqli_fetch_row($zap)){
                    echo $row[0].". ".$row[1]." wystepuje w: ".$row[2]."<br />";
                }
                mysqli_close($conn);
            ?>
            <ol>
                <li><a href="https://wedkuje.pl/" target="_top">Odwiedz takze</a></li><br />
                <li><a href="https://pzw.org.pl/" target="_blank">Polski zwiazek wedkarski</a></li>

            </ol>
        </section>

        <section id="stopka">
            <p>
                Strone wykonal: zonel
            </p>
        </section>
    </body>
</html>