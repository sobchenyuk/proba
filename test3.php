<p>Вопрос 3:</p>
<p>4 + 4 = ?</p>

<form method="post">
    <input type="text" name="answer3"/>
    <input type="submit"/>
</form>

<?php
if (empty($_POST['answer3'])){
    echo "Введите данные";
}elseif (!is_numeric($_POST['answer3'])){
    echo "Ошибка!данные введены не корекно";
}else {
    session_start();
    $answer3 = $_POST['answer3'];
    $_SESSION['answer3'] = $answer3;
    echo "<b>Ваш ответ принят.</b> ";
    echo "Результаты теста вы получите по окончанию прохождения<br>";
    echo "<a href='result.php'>Перейти на следующий вопрос</a>";
}
?>