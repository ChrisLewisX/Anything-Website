<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Client-Server</title>

    <script>
        function float_rand($Min, $Max, $round=0){
            //validate input
            if ($min&gt;$Max) { $min=$Max; $max=$Min; }
            else { $min=$Min; $max=$Max; }
            $randomfloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
            if($round&gt;0)
                $randomfloat = round($randomfloat,$round);

            return $randomfloat;
        }
    </script>
</head>

<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WEBSITE</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
    </nav>
</header>

<body class="row">
    <article class="panel panel-default">
        <h4>Sort by</h4>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Price</a></li>
                <li><a href="#">A - Z</a></li>
                <li><a href="#">Most Viewed</a></li>
            </ul>
        </div>
    </article>
    <div class="AdvertisingBody">
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section><section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>
        <section class="col-sm-3">
            <img src="images/placeHolder.png" alt="Placeholder" class="img-rounded"/>
            <div class="well well-sm">
                <p class="text-left">Cost: £0.00</p>
                <p class="text-right">Seller: Anon</p>
            </div>
        </section>

    </div>

</body>

