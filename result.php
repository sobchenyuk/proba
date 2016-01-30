<?php
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_SESSION['answer3'];

if (($answer1 == 4)&&($answer2 == 6)&&($answer3 == 8)){
    echo "<h2>Вы ответели верно</h2><br>";
    echo "<p>Ваш результат:</p><br>";
    echo "<b>Вопрос 1:</b> $answer1<br>";
    echo "<b>Вопрос 2:</b> $answer2<br>";
    echo "<b>Вопрос 3:</b> $answer3<br>";
    echo "<br>";
    echo "<a href='test1.php'>Пройдите тест заново</a><br>";
}else{
    echo "<h2>Вы ответели не верно</h2><br>";
    echo "<p>Ваш результат:</p><br>";
    echo "<b>Вопрос 1:</b> $answer1<br>";
    echo "<b>Вопрос 2:</b> $answer2<br>";
    echo "<b>Вопрос 3:</b> $answer3<br>";
    echo "<br>";
    echo "<a href='test1.php'>Пройдите тест заново</a><br>";
}

session_destroy();
?>



