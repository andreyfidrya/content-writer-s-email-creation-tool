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
            <h1>Add a Sample</h1>
        </div>
        
        <form action="create.php" method="post">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter a sample URL</label>
                <input type="text" name="sampleurl" class="form-control" id="exampleInputPassword1">
            </div>
            <select name="nichename" class="form-select mb-2" aria-label="Default select example">
                        <option selected>Select a niche:</option>
                        <?php foreach ($niches as $key => $niche): ?>
                            <option><?=$niche['nichename'];?></option>
                        <?php endforeach; ?>
            </select>
            <button name="sample-create" type="submit" class="btn btn-primary">Add a sample</button>
        </form>

</body>