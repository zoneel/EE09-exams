<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <title>Rozgrywki futbolowe</title>
        <link rel="stylesheet" href="styl.css" />
    </head>
    <body>
        <section id="baner">
            <h2>Światowe rozgrywki piłkarskie</h2>
            <img src="obraz1.jpg" alt="boisko" />
        </section>

        <section id="mecze">
                <?php 
                    $conn = mysqli_connect("localhost","root","","egzamin");
                    $kwe = "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG';";
                    $que = mysqli_query($conn, $kwe);

                    while($row=mysqli_fetch_row($que)){
                        echo "<section class='bloki'>";
                        echo "<h3>{$row[0]} - {$row[1]}</h3>";
                        echo "<h4>{$row[2]}</h4>";
                        echo "<p>w dniu: {$row[3]}</p>";
                        echo "</section>";
                    }
                    mysqli_close($conn);
                ?>
        </section>

        <section id="glowny"><h2>Reprezentacja polski</h2></section>
        
        <section id="lewy">
            <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy,
            4-napastnicy)</p>
            <form method="POST">
                <input type="number" name="nazw" />
                <input type="submit" name="gu" value="Sprawdź" />
            </form>

            <ul>
                <?php
                    if(isset($_POST["gu"])){
                        $pozycja = $_POST["nazw"];
                        $conn = mysqli_connect("localhost","root","","egzamin");
                        $kwe = "SELECT imie, nazwisko FROM zawodnik where pozycja_id = '{$pozycja}';";
                        $que = mysqli_query($conn, $kwe);
    
                        while($row=mysqli_fetch_row($que)){
                            echo "<li>{$row[0]} {$row[1]}</li>";
                        }
                        mysqli_close($conn);
                    }

                ?>
            </ul>
        </section>
        <section id="prawy">
            <img src="zad1.png" alt="piłkarz" />
            <p>Autor: zonel</p>
        </section>
    </body>
</html>