<?php
$page_title = 'CRUD test';
?>

<?php include_once 'parts/header.php' ?>

<div class="container">
    <a href="create.php" class="link">Prídať novú otázku</a>
    <?php require_once 'db/qna.php';
    $qna = new QnA();
    $qna->getQnA();
    ?>
</div>

<?php include_once 'parts/footer.php' ?>