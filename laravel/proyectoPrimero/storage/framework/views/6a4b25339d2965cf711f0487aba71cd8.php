<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <style>
        .close {
            font-size: 1.5rem;
        }

        .col-12 img {
            opacity: 0.7;
            cursor: pointer;
            margin: 2rem;
            width: 100%;
        }

        .col-12 img:hover {
            opacity: 1;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>

    Saludos, <?php echo e($nombre); ?>.
    Ha ingresado en el sitio web DWES.

    <div class="container">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
            <div class="col-12 col-md-6 col-lg-3">

                <img src="https://source.unsplash.com/random/200" data-target="#indicators" data-slide-to="0"
                    alt="" />
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="https://source.unsplash.com/random/201" data-target="#indicators" data-slide-to="1"
                    alt="" />
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="https://source.unsplash.com/random/202" data-target="#indicators" data-slide-to="2"
                    alt="" />
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="https://source.unsplash.com/random/203" data-target="#indicators" data-slide-to="3"
                    alt="" />
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="https://source.unsplash.com/random/204" data-target="#indicators" data-slide-to="3"
                    alt="" />
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img src="https://source.unsplash.com/random/205" data-target="#indicators" data-slide-to="4"
                    alt="" />
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="indicators" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#indicators" data-slide-to="0" class="active"></li>
                            <li data-target="#indicators" data-slide-to="1"></li>
                            <li data-target="#indicators" data-slide-to="2"></li>
                            <li data-target="#indicators" data-slide-to="3"></li>
                            <li data-target="#indicators" data-slide-to="4"></li>
                            <li data-target="#indicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img class="d-block w-100" src="https://source.unsplash.com/random/200"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/201"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/202"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/203"
                                    alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/204"
                                    alt="Fifth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/205"
                                    alt="Sixth slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\proyectoPrimero\resources\views/hola.blade.php ENDPATH**/ ?>