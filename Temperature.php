<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <h2>Probleme Temperature</h2>
    <p>
    Write a program that prints the temperature closest to 0 among input data. If two numbers are equally close to zero, positive integer has to be considered closest to zero (for instance, if the temperatures are -5 and 5, then display 5).
    </p>
    <?php 
         //$array_temperature = [7, 8, -5, 2, -2, 3];
        //$array_temperature = [-12, -5, -137];
         $array_temperature = [];
       
        if ($array_temperature == null) 
        {
            echo '0';
        }else
        {
            $min = null;
            for ($i=0; $i < count($array_temperature) ; $i++) { 
                $temp_value = $array_temperature[$i];
                
                if ($min == null || (abs($temp_value) < abs($min)) || ($temp_value == $min) and ($temp_value > 0)) 
                {
                    $min = $temp_value;
                
                }
            }
            echo $min;
        }
        
        
    ?>
    <?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
// fscanf(STDIN, "%d", $n);
// $inputs = explode(" ", fgets(STDIN));//array te
// if ($n == null) 
//         {
//             echo '0';
//         }else
//         {
//             $min = null;
//             for ($i=0; $i < $n ; $i++) { 
//                 $t = intval($inputs[$i]); 
                
//                 if ($min == null || (abs($t) < abs($min)) || ($t == $min) and ($t > 0)) 
//                 {
//                     $min = $t;
//                 }else{
//                      $min = 'Negativ temperature no valid';
//
//             }
//             echo $min;
//         }

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));


?>
</body>
</html>