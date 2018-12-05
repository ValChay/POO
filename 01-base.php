<?php

require('Counter.php');

class JsonSerializer
{

    public function serialize()
    {
        return "la données\n";
    }

    public function unserialize()
    {
        return ["data" => "donnée donnée donnée"];
    }
}

// instanciation de la classe dans une variable*

$serializer = new JsonSerializer();

$count = new Counter(5);
//echo $count->total();
$nombre = $count->nbre;
while ($count->nbre < 18){
    $count->count();

        echo $count->total()."\n";



}

