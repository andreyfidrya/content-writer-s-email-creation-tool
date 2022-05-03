<?php 

$notopic = htmlspecialchars($_POST['no-topic']);


function GetBold($topicname){
    $topicresult = "<p>I have experience in writing content about <strong> $topicname</strong>. Here are some of my writing samples:<br>";
    return $topicresult;
}

if ($_POST['samples']  == 'yes'){
    
    if(!isset($_POST['topic']) and empty($_POST['no-topic'])){
        $samplesbold = GetBold('...');
        echo  $samplesbold."<br>"; 
    }
    if (!isset($_POST['topic']) and !empty($_POST['no-topic'])){
        $samplesbold = GetBold($notopic);
        echo  $samplesbold."<br>";
        }
    
    if(isset($_POST['topic']))

    {
$topicselected = $_POST['topic'];
//Вывод выбранных samples в cover letter
foreach ($topicselected as $key => $topic):

    $samplesbold = GetBold($topic);
    echo $samplesbold."<br>";
    $params = [
        'nichename' => $topic
    ];
    $samples = selectAll('samples', $params);

    foreach ($samples as $key => $sample):
    echo $sample['sampleurl']."<br>";
    endforeach;
   
endforeach;
    }
}


?>