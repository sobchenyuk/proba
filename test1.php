<p>Вопрос 1:</p>
<p>2 + 2 = ?</p>

<form  method="post">
    <input type="text" name="answer1"/>
    <input type="submit"/>
</form>

<?php
if (empty($_POST['answer1'])){
    echo "Введите данные";
}elseif (!is_numeric($_POST['answer1'])){
    echo "Ошибка!данные введены не корекно";
}else {
    session_start();
    $answer1 = $_POST['answer1'];
    $_SESSION['answer1'] = $answer1;
    echo "<b>Ваш ответ принят.</b> ";
    echo "Результаты теста вы получите по окончанию прохождения<br>";
    echo "<a href='test2.php'>Перейти на следующий вопрос</a>";
}
?>
