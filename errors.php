<?php 

if ($_POST['clientname'] == 'yes' && empty($client)) {
    $errors[] = "Enter the client's name in the field about the client";
}
if ($_POST['spamword'] == 'yes' && empty($spamword)) {
    $errors[] = "Enter the spam word in the field about spam word";
}

/*if ($strsamples != 'Yes' && $strsamples != 'No'){
    $errors[] = 'Enter either Yes or No in the field about samples';
}*/
/*if ($strwp != 'Yes' && $strwp != 'No'){
    $errors[] = 'Enter either Yes or No in the field about WordPress skills';
}*/
/*if ($strseo != 'Yes' && $strseo != 'No'){
    $errors[] = 'Enter either Yes or No in the field about SEO skills';
}*/
/*if ($strtype != 'Hourly' && $strtype != 'Fixed' && $strtype != 'Budget'){
    $errors[] = 'Enter either Hourly, Fixed or Budget in the field about a job type';
}*/

?>