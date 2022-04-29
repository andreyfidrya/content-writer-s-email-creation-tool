<?php  
        include "../../path.php";
        include "../../app/controllers/samples.php";    
?>
<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/CSS/admin.css">
    <meta charset='utf-8'>
</head>
<body>


<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

<div class="posts col-9">
              
        <div class="row title-table">
            <h1>Edit a Sample</h1>
        </div>
        <div class="mb-12 col-12 col-md-12 err">
                    <!-- Вывод массива с ошибками -->
                    <?php include "../../app/help/errorInfo.php"; ?>
        </div>
        <form action="edit.php" method="post">
        <input name="id" value="<?=$id;?>" type="hidden">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Edit a sample URL</label>
                <input name="sampleurl" value="<?=$sampleurl;?>" type="text" class="form-control">
            </div>
            <select name="nichename" class="form-select mb-2" aria-label="Default select example">
                        <option selected><?=$nichename;?></option>
                        <?php foreach ($niches as $key => $niche): ?>
                        <option><?=$niche['nichename'];?></option>
                        <?php endforeach; ?>
            </select>
            <button name="sample-edit" type="submit" class="btn btn-primary">Edit a sample</button>
        </form>

</body>