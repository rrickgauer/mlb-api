<?php

include_once('includes.php');
include_once('Modules.php'); // filters, sorts, sortType, perPage, page
include_once('Parser.php');

$p1 = new Parser();
$sort = $p1->getSorts();


switch ($p1->getModule()) {
  case Constants::Modules['Pitching']:
    $pitch = new Pitching($p1->getFilters(), $p1->getSorts(), 100, 0);
    $pitch->returnData();
    break;

  case Constants::Modules['Fielding']:
    $fielding = new Fielding($p1->getFilters(), $p1->getSorts(), 100, 0);
    $fielding->returnData();
    break;

  default:
    ApiFunctions::returnDefaultDisplay();
    break;
}


exit;





?>