<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css"/>
</head>
<body>
    <section id="logo">
        <img src="wzor.png" alt="wzór BMI"/>
    </section>
    <section id="baner"><h1>Oblicz swoje BMI</h1></section>

    <section id="glowny">
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartosc minimalna</th>
                <th>Wartosc maksymalna</th>
            </tr>

            <?php 
                $conn = mysqli_connect("localhost", "root", "", "egzamin");
                $kwe = 'SELECT informacja, wart_min, wart_max FROM bmi;';
                $zap = mysqli_query($conn, $kwe);

                while($row = mysqli_fetch_row($zap))
                {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
            ?>
        </table>
    </section>

    <section id="lewy">
        <h2>Podaj wagę i wzrost</h2>
        <form method="POST">
            Waga: <input type="number" name="waga" min="1"><br>
            Wzrost w cm: <input type="number" name="wzrost" min="1"><br>
            <input type="submit"  name="lesgo" value="Oblicz i zapamiętaj wynik"/>
            <?php 

                echo "skrypt nr 2";
                if(isset($_POST["lesgo"])){

                    if(!$_POST["waga"] || !$_POST["wzrost"]){
                        echo "nic nie jest wykonywane";

                    }
                    else{
                        $waga = $_POST["waga"];
                        $wzrost = $_POST["wzrost"];
                        $bmi = ($waga / pow($wzrost, 2))*10000;
                        echo "<br>Twoja waga: ".$waga."<br>";
                        echo "Twój wzrost: ".$wzrost."<br>";
                        echo "Twoje BMI: ".$bmi."<br>";

                        if($bmi < 18){
                            echo "niedowaga";
                            $bmiid = 1;
                        }elseif($bmi >= 19 && $bmi <= 25){
                            echo "waga prawidlowa";
                            $bmiid = 2;
                        }elseif($bmi >= 26 && $bmi <= 30){
                            echo "nadwaga";
                            $bmiid = 3;
                        }elseif($bmi >= 31 && $bmi <= 100){
                            echo "otylosc";
                            $bmiid = 4;
                        }
                        $date = date("Y-m-d");
                        $conn = mysqli_connect("localhost", "root", "", "egzamin");
                        $kwe = 'INSERT INTO wynik (`bmi_id`,`data_pomiaru`,`wynik`) VALUES ('.$bmiid.','.$date.','.$bmi.');';
                        $zap = mysqli_query($conn, $kwe);
                        echo "<br>".$date;
                    }

                }
            
            ?>
        </form>
    </section>
    <section id="prawy">
        <img src="rys1.png" alt="ćwiczenia"/>
    </section>

    <section id="stopka">
        Autor: zonel
        <a href="kwerendy.txt">Zobacz kwerendy</a>
    </section>

</body>
</html>