<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Lista przyjaciół</title>
        <link rel="stylesheet" href="styl.css" />
    </head>
    <body>
        <section id="baner">
            <h1>Portal Społecznościowy - moje konto</h1>
        </section>

        <section id="glowny">
            <h2>Moje zainteresowania</h2>
            <ul>
                <li>muzyka</li>
                <li>film</li>
                <li>komputery</li>
            </ul>
            <h2>Moi znajomi</h2>

            <?php 
                $conn = mysqli_connect("localhost","root","","dane");
                $kwe = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE hobby_id IN (1,2,6);";
                $que = mysqli_query($conn, $kwe);

                while($row = mysqli_fetch_row($que)){
                    echo "<section class='zdj'><img src='{$row[3]}' /></section>";
                    echo "<section class='opis'><h3>{$row[0]} {$row[1]}</h3><br /> Ostatni wpis: {$row[2]}</section>";
                    echo "<section class='linia'><hr></section>";
                }
            
            ?>
        </section>

        <section id="stopka1">
            Stronę wykonał: zonel
        </section>
        <section id="stopka2">
            <a href="mailto:ja@portal.pl">Napisz do mnie</a>
        </section>

    </body>
</html>