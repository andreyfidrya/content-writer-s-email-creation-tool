<?php 


if ($strsamples == 'Yes'){
    echo $samples."<br>";
    if ($_POST['topic']=='realestate'){
        echo $realestatesamples;
    }
    if ($_POST['topic']=='marketing'){
        echo $marketingsamples;
    }
    if ($_POST['topic']=='travel'){
        echo $travelsamples;
    }
    if ($_POST['topic']=='pestcontrol'){
        echo $pestcontrolsamples;
    }
    if ($_POST['topic']=='seooptimization'){
        echo $seosamples;
    }
    if ($_POST['topic']=='cleaning'){
        echo $cleaningsamples;
    }
    if ($_POST['topic']=='dental'){
        echo $dentalsamples;
    }
    if ($_POST['topic']=='medical'){
        echo $medical;
    } 
    if ($_POST['topic']=='gardening'){
        echo $gardening;
    }
    if ($_POST['topic']=='renovations'){
        echo $renovations;
    } 
    if ($_POST['topic']=='wordpress'){
        echo $wordpress;
    }
    if ($_POST['topic']=='weightloss'){
        echo $weightloss;
    }
    if ($_POST['topic']=='pets'){
        echo $pets;
    }
    if ($_POST['topic']=='sport'){
        echo $sport;
    } 
    if ($_POST['topic']=='ppc'){
        echo $ppc;
    } 
    if ($_POST['topic']=='aquariums'){
        echo $aquariums;
    }
}


?>