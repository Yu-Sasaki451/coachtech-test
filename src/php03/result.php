<?php

require_once('config/status_code.php');

$answer_code = isset($_POST['answer_code']) ? htmlspecialchars($_POST['answer_code'],ENT_QUOTES):null;
$option = isset($_POST['option']) ? htmlspecialchars($_POST['option'],ENT_QUOTES):null;

if (empty($option)){
    header('location:index.php');
    exit;
}

foreach($status_code as $status_cod){
    if($status_cod['code']===$answer_code){
        $code = $status_cod['code'];
        $description = $status_cod['description'];
        break;
    }
}
$result = ($option===$code);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03"></a>
                Status code QUIZ
            </h2>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if ($result):?>
                <h2 class="result__text-correct">正解YEAH</h2>
                <?php else:?>
                <h2 class="result__text-incorrect">不正解YEAH</h2>
                <?php endif;?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <?php echo $code?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <?php echo $description?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>