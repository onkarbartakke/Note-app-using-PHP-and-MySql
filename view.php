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

    <?php foreach($query as $q){?>
            <div class="bg-white border-yellow p-4 rounded-lg text-dark ">
                <h2><?php echo $q['title'];?></h2>
                <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn bg-yellow text-white btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>

            </div>
          
        <?php } ?>    

        <a href="index.php" class="btn btn-outline-dark my-3">Go Home</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>