<?php 

if (empty($client)) {
    $errors[] = 'Enter either No or the client name in the field about the client';
}
if ($strsamples != 'Yes' && $strsamples != 'No'){
    $errors[] = 'Enter either Yes or No in the field about samples';
}
if ($strwp != 'Yes' && $strwp != 'No'){
    $errors[] = 'Enter either Yes or No in the field about WordPress skills';
}
if ($strseo != 'Yes' && $strseo != 'No'){
    $errors[] = 'Enter either Yes or No in the field about SEO skills';
}
if ($strtype != 'Hourly' && $strtype != 'Fixed' && $strtype != 'Budget'){
    $errors[] = 'Enter either Hourly, Fixed or Budget in the field about a job type';
}

?>