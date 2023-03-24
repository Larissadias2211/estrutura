<?php 
// $fruta01 = '🍓';
// $fruta02 = '🍇';
// $fruta03 = '🥥';
 
// $frutas = array();
// $frutas[0] = "🍓";
// $frutas[1] = "🍇";
// $frutas[2] = "🥥";
 
$frutas = ["🍓", "🍇","🥥"];
$frutas[3] = "🍍";
array_push($frutas, "🍒");
 
// echo gettype($frutas);
echo count($frutas);
 
echo "<h1>Minhas comidas favoritas</h1>";
 
// $qtd = count($frutas);
 
// $contador = 0;
 
// while($contador < $qtd){
//     // echo "$contador <br>";
//     echo $frutas[$contador];
//     $contador++;
// }

for($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i];
}

$frutas = ["🍓","🍇","🥥","🍍","🍒","🥝","🍉"]

?>