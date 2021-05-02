<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    

    <!-- Bootstrap CSS -->
    

  </head>
  <body style="background: #e1f1dd;"> 
  

    <div class="container" >
    <br>
      <h1 style="text-align: center; color: #433520;">Janmrrey Books &nbsp; </h1> <a style="text-align: right;" href="<?=base_url()?>index.php/home/tambah" class="btn btn-info">Add book</a>
      <hr>
      
    </div>


    <div class="container" style="text-align: center;">
 
      <div class="row">
      <div class="col-md-12">
      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari" class="form-control" placeholder="search...">
        <input type="submit" value="Search" class=" form-control btn btn-success">
      </form>
    </div>
  </div>
  <br>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="max-width:115%; max-height:100%; height:180px" alt="foto">
            </a>
            <div class="caption" style="color: #433520;">
              <h3><?php echo $data->name?></h3>
              <p> <?php echo $data->deskripsi ?></p>
              <p>
                <a href="<?=base_url()?>index.php/home/edit/<?=$data->id?>" class="btn btn-warning" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/home/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    
  </body>
</html>
