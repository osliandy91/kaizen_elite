
<?php
include_once "head.php";

$section = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($section) {
    case 'about':
        include_once "about.php";
        break;
    case 'faq':
        include_once "faq.php";
        break;
    case 'contact':
        include_once "contact_form.php";
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


