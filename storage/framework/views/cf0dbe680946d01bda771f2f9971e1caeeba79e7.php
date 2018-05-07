<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="En esta pagina se presentan autos en venta">

        <title>SUPER AUTOS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #D81310;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 30px;
                top: 18px;
            }

            .content {
                text-align: center;
               
            }

            .title {
                font-size: 200px;
                font-family: 'Helvetica', sans-serif;
                font-style: italic;
                font-weight: bold;
                
            }

            .links > a {
                color: #D81310;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: underline;
                text-transform: uppercase;
                background: white;
            }

            .m-b-md {
                margin-bottom: 30px;
                position: absolute;
                top: 100px;
                right: 50px;
                background: rgba(0,0,0,0.6);
            }
          
            .imag{
                width: 50%;
                height: 100%;
                position: relative;
                right: 5px;
                display: block;
                
           }
          
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <img src="/imag/91.jpg" class="imag">
            <img src="/imag/roadR.jpg" class="imag">
            <div class="content">
                <div class="title m-b-md">
                    SUPER AUTOS
                </div>
            </div>
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Entrar</a>
                        <a href="<?php echo e(route('register')); ?>">Registrarse</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>
