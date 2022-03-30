<?php

include SITE_ROOT . "/app/database/db.php";

$errMsg = [];

$NicheShortName = '';
$NicheFullName = '';

$niches = selectAll('niches');

//Форма создания niches  
if($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['niche-create'])){
    
$NicheShortName = trim($_POST['nicheshortname']);
$NicheFullName = trim($_POST['nichefullname']);

$existence = selectOne('niches',['nicheshortname' => $NicheShortName]);
        if($existence['nicheshortname'] === $NicheShortName){
            $errMsg = "Такая niche уже есть в базе";
        }else{            
            $niche = [
            'nicheshortname' => $NicheShortName,
            'nichefullname' => $NicheFullName               
            ];
        insert('niches', $niche);
        header('location:' . BASE_URL . 'admin/niches/index.php');
        }
}else{
    $NicheShortName = '';
    $NicheFullName = '';
}

// Апдейт категории
if($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $niche = selectOne('niches', ['id' => $id]);  
    $id = $niche['id'];
    $NicheShortName = $niche['nicheshortname'];
    $NicheFullName = $niche['nichefullname'];
    }