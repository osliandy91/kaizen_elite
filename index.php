
<?php
include_once "head.php";

$section = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($section) {
    case 'about_me':
        include_once "section_about.php";
        break;
    default:
        include_once "section_1.php";
        include_once "section_2.php";
        include_once "section_3.php";
        break;
}
include_once "footer_card.php";
include_once "footer.php";

?>


