<!doctype html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>
<header>
    <div class="container">
        <div id="menu_principal" class="clearfix" style="">
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">	   <span class="sr-only">Desplegar navegación</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a class="brand clearfix pc" style="margin: 0 39px 0 0; float: none;" href="index">
                        <br><img src="images/logo.png" />
                    </a>
                    <br>
                    <a class="brand clearfix movil" style="margin: 0 39px 0 0; float: none;" href="index">
                        <br><img src="images/logo2.png" /><br>
                    </a>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        @include('layouts.navbar')
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container">

    <!--CONTAINER YIELD@-->

</div>
@include('layouts.footer')
</body>
</html>



