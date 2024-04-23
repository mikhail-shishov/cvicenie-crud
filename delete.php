<?php
$page_title = 'Vymazanie';
?>

<?php include_once 'parts/header.php' ?>

<?php require_once 'db/qna.php';
    $qna = new QnA();
    $id = $_GET['id'];
    $qna->deleteQnA($id);
?>

<div class="container">
    <p>Otazka č. <?php echo $id;?> bola vymazaná.</p>
    <a class="link" href="index.php">Späť</a>
</div>

<?php include_once 'parts/footer.php' ?>