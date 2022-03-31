<?php

include SITE_ROOT . "/app/database/db.php";

$errMsg = [];

$nichename = '';


$niches = selectAll('niches');

//Форма создания niches  
if($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['niche-create'])){
    
$nichename = trim($_POST['nichename']);


$existence = selectOne('niches',['nichename' => $nichename]);
        if($existence['nichename'] === $nichename){
            $errMsg = "Такая niche уже есть в базе";
        }else{            
            $niche = [
            'nichename' => $nichename               
            ];
        insert('niches', $niche);
        header('location:' . BASE_URL . 'admin/niches/index.php');
        }
}else{
    $nichename = '';   
}

// Апдейт категории
if($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $niche = selectOne('niches', ['id' => $id]);  
    $id = $niche['id'];
    $nichename = $niche['nichename'];
}

if($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['niche-edit'])){
    $nichename = trim($_POST['nichename']);
    
    
    if($nichename === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($nichename, 'UTF8') < 2){
        $errMsg = "Категория должна быть более 2-х символов";
    }else{
                $niche = [
                'nichename' => $nichename                         
            ];
        $id = $_POST['id'];
        update('niches', $id, $niche);
        header('location:' . BASE_URL . 'admin/niches/index.php');
        }
    }