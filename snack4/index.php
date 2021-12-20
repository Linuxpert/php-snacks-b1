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
        
     function getArreyOfIntegers($min, $max, $nItems)
     {
        $numArrey = [];

        while (count($numArrey) < $nItems){
            $number = rand($min, $max);

            if(!in_array($number, $numArrey)){
                $numArrey[] = $number;
            }
        }

        for($i=0;$i < count($numArrey);$i++){
            echo "<p>" . $numArrey[$i] . "</p>";
        }

        return $numArrey;
     };
        
      getArreyOfIntegers(1, 100, 15);

      

    ?>

    

</body>
</html>