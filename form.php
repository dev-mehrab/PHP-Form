<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h2 class='text-center'>Registation Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <input type="text" name="name" placeholder="Inter your name" class="form-control my-2" >
                            <input type="email" name="email" placeholder="Inter your email" class="form-control my-2" >
                            <input type="password" name="password" placeholder="Inter your password" class="form-control my-2" >
                            <input type="date" name="dob" placeholder="Inter your date of birth" class="form-control my-2" >
                            <input type="file" name='photo' class='form-control my-2' id='photo'>
                            <div id='preview_image_area' style='display:none'>
                                <img id='image_preview' clas='img-thumbnail my-2'>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-outline-info my-2" type="submit" >Registation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $('#photo').on('change', function(e){
            let photo = URL.createObjectURL(e.target.files[0])
            $('#preview_image_area').show();
            $('#image_preview').attr('src', photo);
        })
    </script>
  </body>
</html>