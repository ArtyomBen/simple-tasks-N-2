<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //1.
    // $word = ['aaasasa', 'Adasasd', 'adasdas', 'adasasd', 'adasd'];
    // $count = 0;
    //  foreach ($word as $value) {
    //     $some = substr ($value, 0, 1);
    //     if (($some === 'a' || $some === 'A')) {
    //         array_pop ($word);
    //         echo 'words: ' . $count += 1 ;
    //     }
    //   }
      //   else {
      //     echo '<br>its a pity<br>';
      // }

      //1.1.
    //  $array = ['dadas', 'das', 'kfds'];
    //  $newArray = array_pop ($array);
    //  echo 'cut word: ' . $newArray;
     
    //2.
    // $x1 = 2;
    // $y1 = 3;
    // $z1 = 1;
    // $x2 = 5;
    // $y2 = 1;
    // $z2 = 4;
    // $d = sqrt(pow($x2 - $x1, 2) + (pow ($z1 - $y1, 2)) + pow($z2 -$y2, 2));
    // echo 'distance: ' . $d;
    //3.
    // $people = ["Peter", "Joe", "Glenn", "Cleveland"];
    // $arraySlice = array_slice($people, -2, 1)[0];
    // echo 'penultimate: ' . $arraySlice . '<br>';

    //4.
    //option 1
    // $array = [8, 31, 32, 2, 34, 98, 12, 3, 7, 6, 109, 12, 1, 122];
    // $max = $array[0];
    // $min = $array[0];
    // $length = count ($array);
    // for ($i = 1; $i < $length; $i++){
    //     if ($max < $array[$i]){
    //         $max = $array[$i];
    //     }else if ($min > $array[$i]){
    //         $min = $array[$i];
    //     }
    // }
    // echo 'max integer: ' . $max . '<br>';
    // echo 'min integer: ' . $min . '<br>';

    ////option 2
    // $array = [541, 8, 31, 32, 2, 34, 98, 12, 3, 7, 6, 670, 109, 12, 1];
    // $length = count($array);
    // for ($i = 0; $i < $length; $i++) {
    //   for ($y = $i + 1; $y < $length; $y++) {
    //     if ($array[$i] > $array[$y]) {
    //       $max = $array[$i];
    //       $array[$i] = $array[$y];
    //       $array[$y] = $max;
    //     }
    //   }
    // }
    // $max = $array[$length - 1];
    // $min = $array[0];
    // echo 'max integer: ' . $max . '<br>';
    // echo 'min integer: ' . $min . '<br>';

    //6
    // $array = [1, 3, 3, 1, 1, 8, 3, 6, 8, 3];
    // $newArray = [];
    // $some = array_count_values ($array);
    // foreach ($some as $key => $value){
    //   $newArray[] = $value;
    //   // echo $value . 'value: <br>';
    //   // echo $key . 'key:  <br>';
    //   $length = count ($newArray);
    // }
    //  $max = $newArray[0];
    // for ($i = 1; $i < $length; $i++) {
    //   if ($max < $newArray[$i]){
    //     $max = $newArray[$i];
    //     echo $newArray[$i];
    //   }
    // }
    // echo $max;
      // $newArray = [];
      // $x = $array[0];
      //   $length = count($array);
      //   for ($i = 1; $i < $length; $i++){
      //       if ($some = $x == $array[$i]){
      //         echo 'newArray: ' . $some  . '<br>';
      //     }
         
      //     }
    ?>
</body>
</html>