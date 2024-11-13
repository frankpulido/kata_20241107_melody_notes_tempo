<?php
declare(strict_types=1);
require_once "chord.php";
/*
Kata 46 per l'especialitat fullstackPHP 7-11-24
Imagina que estàs assajant acords de guitarra(o de qualsevol instrument musical) i vols una eina que et mostri diferents acords en intervals de temps definits.
Per tant, el nostre programa necessitarà saber l'interval de temps que passarà entre un acord i altre i els acords a passar.
Per exemple: vull practicar els acords "Si","La","Do" i vull que es mostri un diferent cada 5 segons.
Pista: sleep()
Kata 46 de la especialidad fullstackPHP 7-11-24
Imagina que estás ensayando acordes de guitarra (o de cualquier instrumento musical) y quieres una herramienta que te muestre distintos acordes en intervalos de tiempo definidos.
Por tanto, nuestro programa necesitará saber el intervalo de tiempo que pasará entre un acorde y otro y los acordes a pasar.
Por ejemplo: quiero practicar los acordes "Si","La","Do" y quiero que se muestre un distinto cada 5 segundos.
Pista: sleep()
*/

$length = 0;
CONST notes = ['Do','Re','Mi','Fa','Sol','La','Si'];

$notes = [];
$tempos = [];
$chord = new Chord($notes, $tempos);

echo PHP_EOL;
$length = (int) readline("De cuantas notas está compuesta la melodía? ");
echo PHP_EOL;
echo "A continuación le pediremos que nos indique una a una las notas que componen la melodía y el intervalo de tiempo que debe transcurrir hasta la siguiente nota" . PHP_EOL;
echo "Para facilitar la entrada de datos nos indicará las notas con números enteros :" . PHP_EOL;
echo PHP_EOL;
for ($i = 0; $i < count(notes); $i++) {
    echo notes[$i] . " = [$i]".PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;


for ($i = 0; $i < $length; $i++) {
    echo "Indique el número correspondiente a la nota (0-7) : ";
    $note = (int) readline();
    $notes [] = notes[$note];
    echo PHP_EOL;
    echo "Y el intervalo de tiempo que sigue a la nota $note? : ";
    $tempos [] = (int) readline();
    echo PHP_EOL;
}


echo PHP_EOL;
$chord = new Chord($notes, $tempos);
echo "A continuación reproducimos la melodía indicada :" . PHP_EOL;
$chord->play();

?>