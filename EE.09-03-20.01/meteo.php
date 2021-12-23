<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Prognoza pogody Poznan</title>
    <link rel="stylesheet" href="styl4.css" />

</head>
<body>
    <section id="blewy">
        <p>maj, 2019r.</p>
    </section>
    <section id="bsrod">
        <h2>Prognoza dla Poznania</h2>
    </section>
    <section id="bprawy">
        <img src="logo.png" alt="prognoza" />
    </section>

    <section id="lewy">
        <a href="kwerendy.txt">Kwerendy</a>
    </section>
    <section id="prawy">
        <img src="obraz.jpg" alt="Polska, Poznan" />
    </section>

    <section id="glowny">
        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEN - TEMPERATURA</th>
                <th>OPADY [MM/H]</th>
                <th>CISNIENIE [hPa]</th>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost","root","","prognoza");
                $kwe = "SELECT * FROM pogoda WHERE miasta_id = '2' ORDER BY data_prognozy DESC;";
                $zap = mysqli_query($conn, $kwe);

                while($row = mysqli_fetch_row($zap)){
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "<td>{$row[4]}</td>";
                    echo "<td>{$row[5]}</td>";
                    echo "<td>{$row[6]}</td>";

                    echo "</tr>";
                }
                mysqli_close($conn);
            ?>





        </table>
    </section>

    <section id="stopka">
        <p>Stronę wykonał: zonel</p>
    </section>




</body>
</html>