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

$sample = [
    'sampleurl' => $sampleurl,
    'nichename' => $nichename   
];

insert('samples', $sample);
header('location:' . BASE_URL . 'admin/samples/index.php');
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