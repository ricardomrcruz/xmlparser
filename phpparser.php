<?php



$xml = simplexml_load_file("dataset.xml") or die('cant load xml');

echo "_____________________________________________\n";


foreach($xml as $object){
    echo $object->first_name."\n";
}


echo "_____________________________________________\n";

foreach($xml as $object){
    echo " | ".$object->first_name." | ".$object->last_name." | ". $object->email." | ". $object->gender." | \n";
}

echo "_____________________________________________\n";

function pad($length, $value){
    
    if(strlen($value) < $length){
        for($i = strlen($value); $i < $length; $i++ ) {
            $value.=" ";
        }
    }
    return $value;
}

 

echo "_____________________________________________\n";

foreach($xml as $object){
    echo " | ".pad(40, $object->first_name." ".$object->last_name)." | ".pad(40,  $object->email)." | ".pad(10, $object->gender)." | \n";
}



?>