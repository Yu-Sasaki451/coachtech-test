<?php

require_once('config/status_code.php');

$random_numbers = array_rand($status_code,4);

foreach ($random_numbers as $index){
    $options[] = $status_code[$index];
}
$question = $options[array_rand($options,1)];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status code QUIZ
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に該当するコードを選びやがれ</p>
                <p class="question__text">
                <?php echo $question['description']?>
                </p>
            </div>
        </div>
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code']?>">
            <div class="quiz-form__item">
                <?php foreach($options as $option):?>
                <div class="quiz-form__group">
                    <input class="quiz-form__radio" id="<?php echo $option['code']?>" type="radio" name="option" value="<?php echo $option['code']?>">
                    <label class="quiz-form__label" for="<?php echo $option['code']?>">
                        <?php echo $option['code']?>
                    </label>
                </div>
                <?php endforeach;?>
            </div>
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">回答送信</button>
            </div>
        </form>
    </main>
</body>
</html>