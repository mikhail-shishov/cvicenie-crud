<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/db/qna.php');

session_start();

$id = $_GET["id"];
$qna = new QnA();

$row = $qna->getQnAById(intval($id));

if (!$row) {
    echo "Otázka s daným ID nebola najdena.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qna->updateQnA($id, $_POST['otazka'], $_POST['odpoved']);
    header("Location: ../index.php");
    exit;
} else {
    echo "Chyba";
}