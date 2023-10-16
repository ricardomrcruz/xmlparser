<?php 


$xml = simplexml_load_file("dataset.xml") or die('cant load xml');


// the whole object

foreach($xml as $object){
    print_r($object);
}

// printing one attribute of the object

foreach($xml as $object){
    echo $object->first_name."\n";
}


// ex
// Bartlett
// Griswold
// Loralie
// Morena
// Guthrie


// printing a table like not ordered spatially
foreach($xml as $object){
    echo " | ".$object->first_name." | ".$object->last_name." | ". $object->email." | ". $object->gender." | \n";
}

// ex
// | Guthrie | Reary | grearyrl@networksolutions.com | Genderfluid |
//  | Maye | Cohani | mcohanirm@ask.com | Polygender |
//  | Missy | Suckling | msucklingrn@auda.org.au | Female |
//  | Elvira | Bendan | ebendanro@squidoo.com | Female |
//  | Zachariah | Simounet | zsimounetrp@wikipedia.org | Male |
//  | Ansell | Blaycock | ablaycockrq@ca.gov | Male |
//  | Kerwinn | Cressey | kcresseyrr@paypal.com | Male |





