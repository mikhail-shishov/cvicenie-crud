<?php
$page_title = 'Pridavanie';
?>

<?php include_once 'parts/header.php' ?>

<?php require_once 'db/qna.php';
$qna = new QnA();
?>

<div class="container">
    <form action="/cvicenie-crud/db/create-qna.php" class="form" method="post">
        <label class="form-label">
            <span>Nová otázka</span>
            <input type="text" name="otazka" id="otazka" required>
        </label>
        <label class="form-label">
            <span>Nová odpoveď</span>
            <textarea cols="30" rows="10" name="odpoved" id="odpoved" required></textarea>
        </label>
        <input type="submit" class="btn" value="Vytvoriť">
    </form>
</div>

<?php include_once 'parts/footer.php' ?>