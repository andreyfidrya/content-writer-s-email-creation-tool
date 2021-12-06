<?php 

if (empty($_POST['clientname']))
{
    $errors[] = "Select Yes or No in the question - Does the job have spam word?";
} else
if ($_POST['clientname'] == 'yes' && empty($client)) {
    $errors[] = "Enter the client's name in the field about the client";
}

if (empty($_POST['spamword']))
{
    $errors[] = "Select Yes or No in the question - Does the job have spam word?";
} else
if ($_POST['spamword'] == 'yes' && empty($spamword)) {
    $errors[] = "Enter the spam word in the field about spam word";
}

if (empty($_POST['samples'])){
    $errors[] = 'Select either Yes or No in the question about samples';
}
if (empty($_POST['wordpress'])){
    $errors[] = 'Select either Yes or No in the question about WordPress skills';
}
if (empty($_POST['seo'])){
    $errors[] = 'Select either Yes or No in the question about SEO skills';
}
if (empty($_POST['jobtype'])){
    $errors[] = 'Select either Hourly, Fixed or Budget in the question about a job type';
}
if ($_POST['jobtype'] == 'fixed' and empty($_POST['msg-price'])){
    $errors[] = 'Specify the price for Fixed project';
}
if ($_POST['jobtype'] == 'budget' and empty($_POST['msg-price'])){
    $errors[] = 'Specify the price for Budget project';
}

?>