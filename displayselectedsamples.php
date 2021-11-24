<?php 

function GetBold($topicname){
    $topicresult = "<p>I have experience in writing content about <strong> $topicname</strong>. Here are some of my writing samples:";
    return $topicresult;
}

if ($strsamples == 'yes'){
    
    if(!isset($_POST['topic']) and empty($_POST['no-topic'])){
        $samples = GetBold('...');
        echo $samples."<br>"; 
    }
    if (!isset($_POST['topic']) and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        }
    
    if(isset($_POST['topic']))

    {

    $l = count($_POST['topic']);
    for ($x=0;$x<$l;$x++)
    {
    
    if ($_POST['topic'][$x]=='realestate' and empty($_POST['no-topic'])){
        $samples = GetBold('real estate');
        echo $samples."<br>";
        echo $realestatesamples; 
    }
    if ($_POST['topic'][$x]=='realestate' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $realestatesamples; 
    }      
    if ($_POST['topic'][$x]=='marketing' and empty($_POST['no-topic'])){
        $samples = GetBold('marketing');
        echo $samples."<br>";
        echo $marketingsamples;
    }
    if ($_POST['topic'][$x]=='marketing' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $marketingsamples;
    }
    if ($_POST['topic'][$x]=='travel' and empty($_POST['no-topic'])){
        $samples = GetBold('travel');
        echo $samples."<br>";
        echo $travelsamples;
    }
    if ($_POST['topic'][$x]=='travel' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $travelsamples;
    }
    if ($_POST['topic'][$x]=='pestcontrol' and empty($_POST['no-topic'])){
        $samples = GetBold('pest control');
        echo $samples."<br>";
        echo $pestcontrolsamples;
    }
    if ($_POST['topic'][$x]=='pestcontrol' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $pestcontrolsamples;
    }
    if ($_POST['topic'][$x]=='seooptimization' and empty($_POST['no-topic'])){
        $samples = GetBold('search engine optimization');
        echo $samples."<br>";
        echo $seosamples;
    }
    if ($_POST['topic'][$x]=='seooptimization' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $seosamples;
    }
    if ($_POST['topic'][$x]=='cleaning' and empty($_POST['no-topic'])){
        $samples = GetBold('cleaning services');
        echo $samples."<br>";
        echo $cleaningsamples;
    }
    if ($_POST['topic'][$x]=='cleaning' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $cleaningsamples;
    }
    if ($_POST['topic'][$x]=='dental' and empty($_POST['no-topic'])){
        $samples = GetBold('dentists and dental care');
        echo $samples."<br>";
        echo $dentalsamples;
    }
    if ($_POST['topic'][$x]=='dental' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $dentalsamples;
    }
    if ($_POST['topic'][$x]=='medical' and empty($_POST['no-topic'])){
        $samples = GetBold('medical and health content');
        echo $samples."<br>";
        echo $medical;
    }
    if ($_POST['topic'][$x]=='medical' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $medical;
    } 
    if ($_POST['topic'][$x]=='gardening' and empty($_POST['no-topic'])){
        $samples = GetBold('gardening');
        echo $samples."<br>";
        echo $gardening;
    }
    if ($_POST['topic'][$x]=='gardening' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $gardening;
    }
    if ($_POST['topic'][$x]=='renovations' and empty($_POST['no-topic'])){
        $samples = GetBold('renovations');
        echo $samples."<br>";
        echo $renovations;
    }
    if ($_POST['topic'][$x]=='renovations' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $renovations;
    }
    if ($_POST['topic'][$x]=='wordpress' and empty($_POST['no-topic'])){
        $samples = GetBold('WordPress');
        echo $samples."<br>";
        echo $wordpress;
    }
    if ($_POST['topic'][$x]=='wordpress' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $wordpress;
    }
    if ($_POST['topic'][$x]=='weightloss' and empty($_POST['no-topic'])){
        $samples = GetBold('weight loss');
        echo $samples."<br>";
        echo $weightloss;
    }
    if ($_POST['topic'][$x]=='weightloss' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $weightloss;
    }
    if ($_POST['topic'][$x]=='pets' and empty($_POST['no-topic'])){
        $samples = GetBold('pets');
        echo $samples."<br>";
        echo $pets;
    }
    if ($_POST['topic'][$x]=='pets' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $pets;
    }
    if ($_POST['topic'][$x]=='sport' and empty($_POST['no-topic'])){
        $samples = GetBold('sport');
        echo $samples."<br>";
        echo $sport;
    } 
    if ($_POST['topic'][$x]=='sport' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $sport;
    }
    
    if ($_POST['topic'][$x]=='ppc' and empty($_POST['no-topic'])){
        $samples = GetBold('PPC');
        echo $samples."<br>";
        echo $ppc;
    }
    if ($_POST['topic'][$x]=='ppc' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $ppc;
    }
  
    if ($_POST['topic'][$x]=='aquariums' and empty($_POST['no-topic'])){
        $samples = GetBold('aquariums and fish keeping');
        echo $samples."<br>";
        echo $aquariums;
    }
    if ($_POST['topic'][$x]=='aquariums' and !empty($_POST['no-topic'])){
        $samples = GetBold($_POST['no-topic']);
        echo $samples."<br>";
        echo $aquariums;
    }
    
    }
    }
}


?>