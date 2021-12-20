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
        $arreyMatch = [
            [
                "homeTeam" => "Olimpia",
                "awayTeam" => "Cantù",
                "homePoints" => "55",
                "awayPoint" => "60",
            ],
            [
                "homeTeam" => "Lakers",
                "awayTeam" => "Chicago Bulls",
                "homePoints" => "102",
                "awayPoint" => "98",
            ],
            [
                "homeTeam" => "Boston Celtics",
                "awayTeam" => "New York Knicks",
                "homePoints" => "104",
                "awayPoint" => "56",
            ],
            [
                "homeTeam" => "Cleveland",
                "awayTeam" => "Houston Rockets",
                "homePoints" => "110",
                "awayPoint" => "109",
            ],
            [
                "homeTeam" => "Miami Heat",
                "awayTeam" => "Orlando Magic",
                "homePoints" => "45",
                "awayPoint" => "69",
            ],
        ];

        // var_dump($arreyMatch);
        echo "<br>";
        
        for($i=0; $i<count($arreyMatch); $i++){

            echo $arreyMatch[$i]["homeTeam"] . " -" . $arreyMatch[$i]["awayTeam"] . " | " . $arreyMatch[$i]["homePoints"] . "-" . $arreyMatch[$i]["awayPoint"] . "<br>";
            // echo $arreyMatch[$i]["homeTeam"] . " - " . $arreyMatch[$i]["awayTeam"];
        };
    ?>


</body>
</html>