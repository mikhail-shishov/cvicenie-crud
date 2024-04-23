<?php
$page_title = 'Zmena obsahu';
?>

<?php include_once 'parts/header.php' ?>

<?php require_once 'db/qna.php';
    $qna = new QnA();
    $id = $_GET['id'];
    $row = $qna->getQnAById($id);
    $question = $row['otazka'];
    $answer = $row['odpoved'];
?>

<div class="container">
    <form action="/cvicenie-crud/db/edit-qna.php?id=<?php echo $id;?>" class="form" method="post">
        <input type="hidden" value="<?php echo $row['id']; ?>">
        <label class="form-label">
            <span>Otázka č. <?php echo $id;?></span>
            <input type="text" name="otazka" id="otazka" value="<?php echo htmlspecialchars($question);?>" required>
        </label>
        <label class="form-label">
            <span>Odpoveď</span>
            <textarea cols="30" rows="10" name="odpoved" id="odpoved" required><?php echo htmlspecialchars($answer);?></textarea>
        </label>
        <input type="submit" class="btn" value="Uložiť">
        <a class="link" href="index.php">Späť</a>
    </form>
</div>

<?php include_once 'parts/footer.php' ?>