<?php 
      include "../../path.php";
      include "../../app/controllers/samples.php";    
?>
<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" href="../../assets/CSS/admin.css">
    <meta charset='utf-8'>
</head>
<body>


<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

<div class="posts col-10">
            <div class="button row">
              <a href="<?php echo BASE_URL . "admin/samples/create.php";?>" class="col-2 btn btn-success">Add</a>
            </div>                          
        <div class="row title-table">
            <h2>Samples Management</h2>
            <div class="col-2">Niche</div>
            <div class="col-8">Sample URL</div> 
            <div class="col-2">Edit/Delete</div>                       
        </div>

        <?php foreach ($samples as $key => $sample): ?>
        <div class="row post">
            <div class="title col-2"><?=$sample['nichename'];?></div>
            <div class="title col-8"><?=$sample['sampleurl'];?></div>
            <div class="red col-1"><a href="edit.php?id=<?=$sample['id']; ?>">edit</a></div>
            <div class="del col-1"><a href="edit.php?del_id=<?=$sample['id']; ?>">delete</a></div>
        </div>
        <?php endforeach; ?>
        <form action="index.php" method="post">
        <select name="nichename" class="form-select mb-2" aria-label="Default select example">
                        <option selected>Select a niche:</option>
                        <option>All niches</option>
                        <?php foreach ($niches as $key => $niche): ?>
                            <option><?=$niche['nichename'];?></option>
        <?php endforeach; ?>
        </select>
        <button name="get-samples-for-niches" type="submit" class="btn btn-primary">Get samples for a niche</button>
        </form>
</body>