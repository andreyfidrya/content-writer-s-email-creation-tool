<?php

$spamword = htmlspecialchars($_POST['msg-spamword']);

if (!empty($_POST['msg-spamword']) and $_POST['spamword']=='yes'){
    echo $spamword."<br>";
    }

?>