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
    echo $fixed."<br>";
} 
if ($_POST['jobtype'] == 'budget'){
    echo $budget."<br>";
}

?>