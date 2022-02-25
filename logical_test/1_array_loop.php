<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $aplikasi[1] = 'gitAkademik';
    $aplikasi[2] = 'gitFinansi';
    $aplikasi[3] = 'gitPerizinan';
    $aplikasi[4] = 'eCamopuz';
    $aplikasi[5] = 'eOviz';

    $i = 0;
    while ($i < count($aplikasi)) {
        echo $aplikasi[$i] . "<br>";
        $i++;
    }
    ?>
</body>

</html>