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

        $nameUser = $_GET["nome"];
        $mailUser = $_GET["mail"];
        $ageUser = $_GET["age"];

        $at = strpos($mailUser , "@");
        $dot = strpos($mailUser , ".");
        $isMailOk = $at !== false && $dot !== false;

        $ageNumber = is_numeric($ageUser);
    ?>

    <h2>
        <?php

            echo strlen($nameUser) . "<br>";
            if(strlen($nameUser) > 3 && $isMailOk && $ageNumber){
                echo "Accesso riuscito";
            }else {
                echo "Accesso negato";
            };
        ?>
    </h2>

</body>
</html>