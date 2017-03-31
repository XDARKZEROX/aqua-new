<!doctype html>
<html lang="en">
<head>
    <title>ERROR 404</title>
    <link href="css/demo.css" rel="stylesheet" type="text/css"/>
    <link href="css/error-404.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="wrapper row2">
    <div id="container" class="clear">
        <div id="fof" class="clear">
            <div class="hgroup">
                <h1><span><strong>4</strong></span><span><strong>0</strong></span><span><strong>4</strong></span></h1>
                <h2>Error ! <span>Página no encontrada</span></h2>
            </div>
            <p>Por alguna razón la página que solicitaste no pudo ser encontrada en nuestro Servidor</p>
            <p><a href="{{ URL::previous() }}">&laquo; Ir Atrás</a> / <a href="{{ URL::to('/') }}">Ir al Home &raquo;</a></p>
        </div>
    </div>
</div>
</body>
</html>