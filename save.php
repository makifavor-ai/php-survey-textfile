
<?php
$nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
$language = htmlspecialchars($_POST['language'], ENT_QUOTES, 'UTF-8');
$language_free = htmlspecialchars($_POST['language_free'], ENT_QUOTES, 'UTF-8');
$language_reason = htmlspecialchars($_POST['language_reason'], ENT_QUOTES, 'UTF-8');
$experience = htmlspecialchars($_POST['experience'], ENT_QUOTES, 'UTF-8');
$using_now = htmlspecialchars($_POST['using_now'], ENT_QUOTES, 'UTF-8');
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');

$data = $nickname . ',' . $language . ',' . $language_free . ',' . $language_reason . ',' . $experience . ',' . $using_now . ',' . $comment . "\n";

file_put_contents('data.txt', $data, FILE_APPEND);

header('Location: result.php');
exit();
?>