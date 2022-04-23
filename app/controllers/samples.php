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