<?php define('__ROOT__', dirname(dirname(__FILE__)));
// error_reporting(E_ALL);
// ini_set("display_errors", "On");
require_once(__ROOT__ . '/db/database.php');

class QnA extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function updateQnA($id, $question, $answer)
    {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
            exit;
        }
        $sql = "UPDATE qna SET otazka = :question, odpoved = :answer WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':otazka', $question);
        $statement->bindParam(':odpoved', $answer);
        $statement->execute();
    }

    public function getQnAById($id)
    {
        if (!is_numeric($id)) {
            echo "ID otázky musí byť číslo.";
            exit;
        }
        $sql = "SELECT * FROM qna WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getQnA()
    {
        $sql = "SELECT * FROM qna";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<div class='qna-block'>";
            echo "<button class='qna-question'>" . $row["otazka"] . "</button>";
            echo "<div class='qna-answer'>" . $row["odpoved"] . "</div>";
            echo "<div class='qna-edit'>";
            echo "<a class='link' href='/cvicenie-crud/edit.php?id=" . $row["id"] . "'>Editovať</a>";
            echo "<a class='link' href='/cvicenie-crud/delete.php?id=" . $row["id"] . "'>Vymazať</a>";
            echo "</div>";
            echo "</div>";
        }
    }

    public function deleteQnA($id) {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
        }
        $sql = "DELETE FROM qna WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}