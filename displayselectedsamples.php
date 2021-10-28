<?php 

if ($strsamples == 'Yes'){
    
    if(!isset($_POST['topic'])){
        $samples = "<p>I have experience in writing content about ... Here are some of my writing samples:";
        echo $samples."<br>"; 
    }

    if(isset($_POST['topic']))

    {

    $l = count($_POST['topic']);
    for ($x=0;$x<$l;$x++)
    {
    
    if ($_POST['topic'][$x]=='realestate'){
        $samples = "<p>I have experience in writing content about <strong>real estate</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $realestatesamples; 
    }     
    if ($_POST['topic'][$x]=='marketing'){
        $samples = "<p>I have experience in writing content about <strong>marketing</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $marketingsamples;
    }
    if ($_POST['topic'][$x]=='travel'){
        $samples = "<p>I have experience in writing content about <strong>travel</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $travelsamples;
    }
    if ($_POST['topic'][$x]=='pestcontrol'){
        $samples = "<p>I have experience in writing content about <strong>pest control</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $pestcontrolsamples;
    }
    if ($_POST['topic'][$x]=='seooptimization'){
        $samples = "<p>I have experience in writing content about <strong>search engine optimization</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $seosamples;
    }
    if ($_POST['topic'][$x]=='cleaning'){
        $samples = "<p>I have experience in writing content about <strong>cleaning services</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $cleaningsamples;
    }
    if ($_POST['topic'][$x]=='dental'){
        $samples = "<p>I have experience in writing content about <strong>dentists and dental care</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $dentalsamples;
    }
    if ($_POST['topic'][$x]=='medical'){
        $samples = "<p>I have experience in writing <strong>medical and health content</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $medical;
    } 
    if ($_POST['topic'][$x]=='gardening'){
        $samples = "<p>I have experience in writing content about <strong>gardening</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $gardening;
    }
    if ($_POST['topic'][$x]=='renovations'){
        $samples = "<p>I have experience in writing content about <strong>renovations</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $renovations;
    } 
    if ($_POST['topic'][$x]=='wordpress'){
        $samples = "<p>I have experience in writing content about <strong>WordPress</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $wordpress;
    }
    if ($_POST['topic'][$x]=='weightloss'){
        $samples = "<p>I have experience in writing content about <strong>weight loss</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $weightloss;
    }
    if ($_POST['topic'][$x]=='pets'){
        $samples = "<p>I have experience in writing content about <strong>pets</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $pets;
    }
    if ($_POST['topic'][$x]=='sport'){
        $samples = "<p>I have experience in writing content about <strong>sport</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $sport;
    } 
    if ($_POST['topic'][$x]=='ppc'){
        $samples = "<p>I have experience in writing content about <strong>Pay per Click advertising</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $ppc;
    } 
    if ($_POST['topic'][$x]=='aquariums'){
        $samples = "<p>I have experience in writing content about <strong>aquariums and fish keeping</strong>. Here are some of my writing samples:";
        echo $samples."<br>";
        echo $aquariums;
    }

    }
    }
}


?>