<?php 
$jsonVeri=file_get_contents("https://finans.truncgil.com/today.json");
$veri=json_decode($jsonVeri,1);


?>

<table>
    <tr>
        <td>Döviz</td>
        <td>Alış</td>
        <td>Satış</td>
    </tr>

    <tr>
        <td>Dolar</td>
        <td><?=$veri["USD"]["Alış"]?></td>
        <td><?=$veri["USD"]["Satış"]?></td>
    </tr>

    <tr>
        <td>Euro</td>
        <td><?=$veri["EUR"]["Alış"]?></td>
        <td><?=$veri["EUR"]["Satış"]?></td>
    </tr>

</table>

