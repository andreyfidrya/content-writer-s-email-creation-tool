<?php 

function GetBold($topicname){
    $topicresult = "<p>I have experience in writing content about <strong> $topicname</strong>. Here are some of my writing samples:";
    return $topicresult;
}

if ($strsamples == 'yes'){
    
    if(!isset($_POST['topic'])){
        $samples = GetBold('...');
        echo $samples."<br>"; 
    }

    if(isset($_POST['topic']))

    {

    $l = count($_POST['topic']);
    for ($x=0;$x<$l;$x++)
    {
    
    if ($_POST['topic'][$x]=='realestate'){
        $samples = GetBold('real estate');
        echo $samples."<br>";
        echo $realestatesamples; 
    }     
    if ($_POST['topic'][$x]=='marketing'){
        $samples = GetBold('marketing');
        echo $samples."<br>";
        echo $marketingsamples;
    }
    if ($_POST['topic'][$x]=='travel'){
        $samples = GetBold('travel');
        echo $samples."<br>";
        echo $travelsamples;
    }
    if ($_POST['topic'][$x]=='pestcontrol'){
        $samples = GetBold('pest control');
        echo $samples."<br>";
        echo $pestcontrolsamples;
    }
    if ($_POST['topic'][$x]=='seooptimization'){
        $samples = GetBold('search engine optimization');
        echo $samples."<br>";
        echo $seosamples;
    }
    if ($_POST['topic'][$x]=='cleaning'){
        $samples = GetBold('cleaning');
        echo $samples."<br>";
        echo $cleaningsamples;
    }
    if ($_POST['topic'][$x]=='dental'){
        $samples = GetBold('dental care');
        echo $samples."<br>";
        echo $dentalsamples;
    }
    if ($_POST['topic'][$x]=='medical'){
        $samples = GetBold('medical and health content');
        echo $samples."<br>";
        echo $medical;
    } 
    if ($_POST['topic'][$x]=='gardening'){
        $samples = GetBold('gardening');
        echo $samples."<br>";
        echo $gardening;
    }
    if ($_POST['topic'][$x]=='renovations'){
        $samples = GetBold('renovations');
        echo $samples."<br>";
        echo $renovations;
    } 
    if ($_POST['topic'][$x]=='wordpress'){
        $samples = GetBold('WordPress');
        echo $samples."<br>";
        echo $wordpress;
    }
    if ($_POST['topic'][$x]=='weightloss'){
        $samples = GetBold('weight loss');
        echo $samples."<br>";
        echo $weightloss;
    }
    if ($_POST['topic'][$x]=='pets'){
        $samples = GetBold('pets');
        echo $samples."<br>";
        echo $pets;
    }
    if ($_POST['topic'][$x]=='sport'){
        $samples = GetBold('sport');
        echo $samples."<br>";
        echo $sport;
    } 
    if ($_POST['topic'][$x]=='ppc'){
        $samples = GetBold('Pay per Click advertising');
        echo $samples."<br>";
        echo $ppc;
    } 
    if ($_POST['topic'][$x]=='aquariums'){
        $samples = GetBold('aquariums and fish keeping');
        echo $samples."<br>";
        echo $aquariums;
    }

    }
    }
}


?>