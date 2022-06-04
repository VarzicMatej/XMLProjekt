<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHMZ - Vremenska prognoza</title>
</head>

<body>
    <header>
        <h1>Vremenska prognoza</h1>
    </header>

    <p>Podaci preuzeti sa stranica Državnog hidrometeorološkog zavoda (<a href="https://meteo.hr/proizvodi.php?section=podaci&param=xml_korisnici" target=”_blank”>poveznica</a>)</p>
    <h2>Prikaz podataka Državnog hidrometeorološkog zavoda:</h2>  <hr><br>

    <p>
        <h3>Prognoza po regijama</h3>

        <?php 
        $data = simplexml_load_file("https://prognoza.hr/regije_danas.xml");
        
        
            echo "<h4> Istočna Hrvatska: </h4>", $data->istocna,"<br> ";
            echo "<h4> Središnja Hrvatska: </h4>", $data->sredisnja, "<br> ";
            echo "<h4> Sjeverni Jadran: </h4>", $data->sjjadran, "<br> ";
            echo "<h4> Gorska Hrvatska: </h4>", $data->gorska, "<br> ";
            echo "<h4> Dalmacija: </h4>", $data->dalmacija, "<br> ";
            echo "<h4> Istra: </h4>", $data->istra, "<br> "; 
        ?> 
    </p>

<details>
        <summary>Trenutno vrijeme u Hrvatskoj</summary>
    
        <table>
            <?php
            $xml=simplexml_load_file("https://vrijeme.hr/hrvatska_n.xml");
            ?>
            <tr>
                <th>Grad</th>
                <th>Temperatura (°C)</th>
                <th>Vlaga (%)</th>
                <th>Tlak (hPa)</th>
                <th>Vrijeme</th>
            </tr>
            <?php
            
            foreach ($xml->Grad as $grad) {
            
                ?> <tr id="data"> <?php
                
                $ime = $grad->GradIme;
                $podatci = $grad->Podatci;
                $temp = $podatci->Temp;
                $vlaga = $podatci->Vlaga;
                $tlak = $podatci->Tlak;
                $vrijeme = $podatci->Vrijeme;
                
                ?> <td> <?php
                echo $ime;
                ?> </td> <?php
                ?> <td> <?php
                echo $temp;
                ?> </td> <?php
                ?> <td> <?php
                echo $vlaga;
                ?> </td> <?php
                ?> <td> <?php
                echo $tlak;
                ?> </td> <?php
                ?> <td> <?php
                echo $vrijeme;
                ?> </td> <?php
            
            
                ?> </tr> <?php
            }
            
        
                ?>
        </table>
        <hr>
    </details>

    <details>
        <summary>Trenutno vrijeme u Europi</summary>
            
        <table>
            <?php
            $xml1=simplexml_load_file("https://vrijeme.hr/europa_n.xml");
            ?>
            <tr>
                <th>Grad</th>
                <th>Temperatura (°C)</th>
                <th>Vlaga (%)</th>
                <th>Tlak (hPa)</th>
                <th>Vrijeme</th>
            </tr>
            <?php
            
            foreach ($xml1->Grad as $grad1) {
            
                ?> <tr id="data"> <?php
                
                $ime1 = $grad1->GradIme;
                $podatci1 = $grad1->Podatci;
                $temp1 = $podatci1->Temp;
                $vlaga1 = $podatci1->Vlaga;
                $tlak1 = $podatci1->Tlak;
                $vrijeme1 = $podatci1->Vrijeme;
                
                ?> <td> <?php
                echo $ime1;
                ?> </td> <?php
                ?> <td> <?php
                echo $temp1;
                ?> </td> <?php
                ?> <td> <?php
                echo $vlaga1;
                ?> </td> <?php
                ?> <td> <?php
                echo $tlak1;
                ?> </td> <?php
                ?> <td> <?php
                echo $vrijeme1;
                ?> </td> <?php
            
            
                ?> </tr> <?php
            }
            
        
                ?>
        </table>
        <hr>
    </details>

    <footer style="height: 100px"></footer>
</body>
</html>
