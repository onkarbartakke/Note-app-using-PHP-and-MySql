<?php
  include "config.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My Notes</title>
    <link font-family: "Montserrat", sans-serif;
    href="https://fonts.googleapis.com/css?family=McLaren|Montserrat&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
  	<link id="external-css" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" media="all">
  </head>
  <body>
  <header>
      <h1>Note Keeper App</h1>
  </header>
    <div class="container mt-5">


        <?php if(isset($_REQUEST['info'])){ ?>

            <?php if($_REQUEST['info'] == "added"){?>

                <div class="alert alert-success" role="alert">
                    Note has been added successfully
                </div>

            <?php }else if($_REQUEST['info'] == "updated"){?>

                <div class="alert alert-success" role="alert">
                    Note has been updated successfully
                </div>

            <?php }else if($_REQUEST['info'] == "deleted"){?>

                <div class="alert alert-danger" role="alert">
                    Note has been Deleted successfully
                </div>

            <?php } ?>
            
        <?php } ?>
        
      <div class="text-center">

      <a href="create.php" class="btn btn-outline-dark">+ Creater New Note</a>
      </div>

      <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-dark note mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn bg-yellow text-white">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>