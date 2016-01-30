<p>Вопрос 2:</p>
<p>3 + 3 = ?</p>

<form method="post">
    <input type="text" name="answer2"/>
    <input type="submit"/>
</form>

<?php
if (empty($_POST['answer2'])){
    echo "Введите данные";
}elseif (!is_numeric($_POST['answer2'])){
    echo "Ошибка!данные введены не корекно";
}else {
    session_start();
    $answer2 = $_POST['answer2'];
    $_SESSION['answer2'] = $answer2;
    echo "<b>Ваш ответ принят.</b> ";
    echo "Результаты теста вы получите по окончанию прохождения<br>";
    echo "<a href='test3.php'>Перейти на следующий вопрос</a>";
}
?>