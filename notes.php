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


// Padded table
              
function pad($length, $value){
    
    if(strlen($value) < $length){
        for($i = strlen($value); $i < $length; $i++ ) {
            $value.=" ";
        }
    }
    return $value;
    
}


foreach($xml as $object){
    echo " | ".pad(40, $object->first_name." ".$object->last_name)." | ".pad(40,  $object->email)." | ".pad(10, $object->gender)." | \n";
}


// ex
//  | Sande Carbonell                          | scarbonellr0@cnbc.com                    | Female     |
//  | Danya Ashwood                            | dashwoodr1@xinhuanet.com                 | Genderfluid |
//  | Edlin Vamplus                            | evamplusr2@hp.com                        | Male       |
//  | Harwell Lucken                           | hluckenr3@yelp.com                       | Male       |
