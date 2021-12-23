<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Panel Administratora</title>
    <link rel="stylesheet" href="styl4.css"/>
</head>
<body>
    <section id="baner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </section>

    <section id="lewy">
        <h4>Użytkownicy</h4>
        <?php
            $conn = mysqli_connect("localhost","root","","dane4");
            $kwe = 'SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby WHERE id < "31";';
            $zap = mysqli_query($conn, $kwe);

            while($dane=mysqli_fetch_row($zap)){
                $wiek = 2021-$dane[3];
                echo $dane[0].". ";
                echo $dane[1]." ".$dane[2]." ".$wiek." lat<br/>";


            }
            mysqli_close($conn);
        
        
        ?>
        <a href="settings.html">Inne ustawienia</a>
    </section>
    <section id="prawy">
        <h4>Podaj id użytkownika</h4>
        <form method="POST" action="">
            <input type="number" name="id"/>
            <input type="submit" id="guzior" value="ZOBACZ"/>
            <hr>
            <?php 
                $conn = mysqli_connect("localhost","root","","dane4");
                $kwe = "SELECT osoby.id, osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby JOIN hobby WHERE osoby.Hobby_id = hobby.id AND osoby.id = {$_POST['id']};";
                $zap = mysqli_query($conn, $kwe);

                while($dane=mysqli_fetch_row($zap)){
                        echo "<h2>".$_POST['id'].". ".$dane[1]." ".$dane[2]."</h2><br/>";
                        echo "<img src='{$dane[5]}' alt='{$_POST['id']}'/>";
                        echo "<br/>Rok urodzenia: {$dane[3]}<br/>";
                        echo "Opis: {$dane[4]}<br/>";
                        echo "Hobby: {$dane[6]}<br/>";


                }
                mysqli_close($conn);
            
            ?>
        </form>
    </section>

    <section id="stopka">
        Stronę wykonał: zonel
    </section>

</body>
</html>