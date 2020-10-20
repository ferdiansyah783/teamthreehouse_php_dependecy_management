<?php

if (isset($_GET['action']))
    $success="berhasil";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Send Email</title>
</head>
<body>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-4">
                <h2>Send Email</h2>

                <?php if (isset($success)) : ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo $success; ?>
                </div>
                <?php endif; ?>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Nama</label>
                        <input type="text" name="fname" required class="form-control bg-transparent text-primary btn-outline-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Nama</label>
                        <input type="text" name="lname" required class="form-control bg-transparent text-primary btn-outline-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" required class="form-control bg-transparent text-primary btn-outline-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pesan</label>
                        <textarea class="form-control" required class="bg-transparent text-primary btn-outline-primary" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-primary bg-transparent text-primary">Send</button>
                </form>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>