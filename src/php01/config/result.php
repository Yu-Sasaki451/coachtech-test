<?php

$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);

echo "私の名前は、".$name. "<br />";
echo "ご希望商品は、".$choices."ですね". "<br />";
echo "ご注文数".$number;
