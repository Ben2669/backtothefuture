<?php

$presentTime = new DateTimeImmutable("now");
$presentTimeBis = $presentTime->format("M-d-Y A h:i");

$destinationTime = new DateTimeImmutable("2015-10-21 10:30");

$timeInterval = $presentTime->diff($destinationTime);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back to the Future</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <section>
        <div class="line">
            <div class="column">
                MONTH
            </div>
            <div class="column">
                DAY
            </div>
            <div class="column large">
                YEAR
            </div>
            <div class="column half">
                <?= $presentTime->format("A");?>
            </div>
            <div class="column">
                HOUR
            </div>
            <div class="column">
                MIN
            </div>
        </div>
        <div class="line double">
            <div class="column-bis">
                <?= $presentTime->format("M");?>
            </div>
            <div class="column-bis">
                <?= $presentTime->format("d");?>
            </div>
            <div class="column-bis large">
                <?= $presentTime->format("Y");?>
            </div>
            <div class="column-bis half spec">

            </div>
            <div class="column-bis">
                <?= $presentTime->format("h");?>
            </div>
            <div class="column-bis">
                <?= $presentTime->format("i");?>
            </div>
        </div>
        <div class="line">
            <div class="timesection">
                PRESENT TIME
            </div>
        </div>
    </section>

    <div class="separate">
    </div>

    <section>
        <div class="line">
            <div class="column">
                MONTH
            </div>
            <div class="column">
                DAY
            </div>
            <div class="column large">
                YEAR
            </div>
            <div class="column half">
                <?= $destinationTime->format("A");?>
            </div>
            <div class="column">
                HOUR
            </div>
            <div class="column">
                MIN
            </div>
        </div>
        <div class="line double">
            <div class="column-bis ter">
                <?= $destinationTime->format("M");?>
            </div>
            <div class="column-bis ter">
                <?= $destinationTime->format("d");?>
            </div>
            <div class="column-bis large ter">
                <?= $destinationTime->format("Y");?>
            </div>
            <div class="column-bis half spec">

            </div>
            <div class="column-bis ter">
                <?= $destinationTime->format("h");?>
            </div>
            <div class="column-bis ter">
                <?= $destinationTime->format("i");?>
            </div>
        </div>
        <div class="line">
            <div class="timesection">
                DESTINATION TIME
            </div>
        </div>
    </section>
</main>

<div style="font-size: 2em">
    Il y a <?= $timeInterval->y;?> années, <?= $timeInterval->m;?> mois, <?= $timeInterval->d;?> jours, <?= $timeInterval->h;?> heures et <?= $timeInterval->i;?> minutes qui séparent ces deux dates !
</div>

</body>

</html>
