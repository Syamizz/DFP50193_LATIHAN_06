<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MUHAMMAD SYAMIL BIN SHAMSUDDIN</h1>

    <?php
    $helai=0;
    $baju=17;
    for ($duit=50; $duit>$baju; $duit-=$baju){
        $helai++;
    }
    echo "$helai helai baju yang boleh dibeli. Baki duit =RM $duit";
    ?>

</body>
</html>