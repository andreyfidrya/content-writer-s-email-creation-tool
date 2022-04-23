<?php

include SITE_ROOT . "/app/database/db.php";

$errMsgNiche = '';

$nichename = '';


$niches = selectAll('niches');

//Форма создания niches  
if($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['niche-create'])){
    
$nichename = trim($_POST['nichename']);

if($nichename === ''){
    $errMsgNiche = "Niche field is empty";
}elseif (mb_strlen($nichename, 'UTF8') < 2){
    $errMsgNiche = "Niche field has to contain at least 2 symbols";
}else{
    $existence = selectOne('niches',['nichename' => $nichename]);
    if($existence['nichename'] === $nichename){
        $errMsgNiche = "Such a niche already exists";
    }else{            
            $niche = [
            'nichename' => $nichename               
            ];
        insert('niches', $niche);
        header('location:' . BASE_URL . 'admin/niches/index.php');
        }
    }
}else{
    $nichename = '';   
}

// Апдейт niches
if($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $niche = selectOne('niches', ['id' => $id]);
    $nichename = $niche['nichename'];     
}

if($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['niche-edit'])){

$nichename = trim($_POST['nichename']);

if($nichename === ''){
    $errMsgNiche = "Niche field is empty";
}elseif (mb_strlen($nichename, 'UTF8') < 2){
    $errMsgNiche = "Niche field has to contain at least 2 symbols";
}else{
    $existence = selectOne('niches',['nichename' => $nichename]);
    if($existence['nichename'] === $nichename){
        $errMsgNiche = "Such a niche already exists";
    }else{
                $niche = [
                'nichename' => $nichename                         
            ];
        $id = $_POST['id'];
        update('niches', $id, $niche);
        header('location:' . BASE_URL . 'admin/niches/index.php');
        }
    }
}
//Удаление niche
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('niches', $id);
    header('location: ' . BASE_URL . 'admin/niches/index.php');
}
