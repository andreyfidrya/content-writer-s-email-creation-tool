<?php
include SITE_ROOT . "/app/database/db.php";

$errMsg = [];

$nichename = '';
$sampleurl = '';

$niches = selectAll('niches');
$samples = selectAll('samples');

// Код для формы создания sample
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sample-create'])){

$sampleurl = trim($_POST['sampleurl']);
$nichename = trim($_POST['nichename']);
// Массив ошибок при создании sample
if($sampleurl === ''){
    $errMsg[] = "Sample URL field is empty";
}
if($nichename === 'Select a niche:'){
    $errMsg[] = "A niche for sample URL field is not selected";    
}
if(mb_strlen($sampleurl, 'UTF8') < 9){
    $errMsg[] = "Sample URL field has to contain at least 9 symbols";
}

$existence = selectOne('samples', ['nichename' => $nichename, 'sampleurl' => $sampleurl]);
        if($existence['nichename'] === $nichename && $existence['sampleurl'] === $sampleurl){
            $errMsg[] = "Such a sample already exists";
        }

if(empty($errMsg)){
$sample = [
    'sampleurl' => $sampleurl,
    'nichename' => $nichename   
];
insert('samples', $sample);
header('location:' . BASE_URL . 'admin/samples/index.php');
}
}
// Апдейт samples
if($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $sample = selectOne('samples', ['id' => $id]);
    $sampleurl = $sample['sampleurl'];
    $nichename = $sample['nichename'];     
}

if($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['sample-edit'])){

$nichename = trim($_POST['nichename']);
$sampleurl = trim($_POST['sampleurl']);

// Массив ошибок при редактировании sample
if($sampleurl === ''){
    $errMsg[] = "Sample URL field is empty. Wait 3 seconds and try again!";
    header('Refresh: 3; URL=http://localhost/cover-letter/admin/samples/index.php');       
}
if(mb_strlen($sampleurl, 'UTF8') < 9){
    $errMsg[] = "Sample URL field has to contain at least 9 symbols. Wait 3 seconds and try again!"; 
    header('Refresh: 3; URL=http://localhost/cover-letter/admin/samples/index.php');               
}
$existence = selectOne('samples', ['nichename' => $nichename, 'sampleurl' => $sampleurl]);
if($existence['nichename'] === $nichename && $existence['sampleurl'] === $sampleurl){
    $errMsg[] = "Such a sample already exists. Wait 3 seconds and try again!";
    header('Refresh: 3; URL=http://localhost/cover-letter/admin/samples/index.php');
        }

if(empty($errMsg)){

                $sampleupdated = [
                'nichename' => $nichename,
                'sampleurl' => $sampleurl                         
            ];
        $id = $_POST['id'];
        update('samples', $id, $sampleupdated);
        header('location:' . BASE_URL . 'admin/samples/index.php');
}
}
// Удаление samples
if($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('samples', $id);
    header('location: ' . BASE_URL . 'admin/samples/index.php');     
}

// Код для вывода samples по выбранной niche в админке 
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['get-samples-for-niches']))
{
$nicheselected = trim($_POST['nichename']);
$samplesselected = [
    'nichename' => $nicheselected
]; 
$samples = selectAll('samples',$samplesselected);
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['get-samples-for-niches']) && $_POST['nichename'] === 'All niches')
{
$samples = selectAll('samples');
}