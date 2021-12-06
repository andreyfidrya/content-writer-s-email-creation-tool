<?php 

if ($_POST['wordpress'] == 'yes'){
    echo $wp."<br>";
}

if ($_POST['seo'] == 'yes'){
        echo $seo."<br>";
}

if ($_POST['jobtype'] == 'hourly'){
    echo $hourly."<br>";
}
if ($_POST['jobtype'] == 'fixed'){
    $price = htmlspecialchars($_POST['msg-price']);
    $fixed = "<p>My price is $price of original content (research + writing).";
    echo $fixed."<br>";
} 
if ($_POST['jobtype'] == 'budget'){
    $price = htmlspecialchars($_POST['msg-price']);
    $budget = "<p>The budget = $price sounds good to me.";
    echo $budget."<br>";
}

?>