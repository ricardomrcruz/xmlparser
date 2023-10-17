<?php
header('Content-Type: text/xml');

include 'dbconnect.php';

$limit =  intval($_GET["limit"]);

$xml = new DomDocument('1.0'); // Cree un noveau XML document
$xml->formatOutput = true; // Define Format pour lisibilité

class CategoriesData
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function display_categories()
    {
        $categories_display = $this->pdo->prepare("SELECT * FROM ps_category");
        $categories_display->execute();
        return $categories_display->fetchALll(PDO::FETCH_ASSOC);
    }
}


$category = $xml->createElement("category");
$xml->appendChild($category);

$categoryData = new CategoriesData($pdo);

$rows = $categoryData->display_categories();

foreach ($row as $rows) {


    $image = $row['img_category'];
    $name = $row['name_category'];
    $idcat = $row['id_category'];


    $xml .= "<id>" . $idcat . "</id>";
    $xml .= "<name>" . $idcat . "</name>";
    $xml .= "<image>" . $idcat . "</image>";
}


// THIS OR THIS, YOU GOTTA TEST

foreach ($rows as $row) {
    $category = $xml->createElement("category");
    $categories->appendChild($category);

    $id = $xml->createElement("id", $row['id_category']);
    $category->appendChild($id);

    $name = $xml->createElement("name", $row['name_category']);
    $category->appendChild($name);

    $image = $xml->createElement("img", $row['img_category']);
    $category->appendChild($image);
}


// <category>
//     <id><id>
//     <name><name>
//     <img><img>
// <category>



echo $xml->saveXML(); //generation XML content
