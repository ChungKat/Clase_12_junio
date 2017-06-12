<!DOCTYPE html>
<html lang="es">
<?php
$title="Street Art en Chile";
$description="Street Art en Chile y su relación con el Diseño Gráfico";
$url="https://github.com/profesorfaco/por-escrito";
$image="https://fdasepulveda.files.wordpress.com/2015/05/inti-santiago-chile-11.jpg";
$author="Catalina Chung Astudillo";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Search Engine -->
<title><?php echo $title;?></title>
<meta name="description" content="<?php echo $description;?>">
<meta name="image" content="<?php echo $image;?>">
<meta name="author" content="<?php echo $author;?>">
<!-- Schema.org for Google -->
<meta itemprop="name" content="<?php echo $title;?>">
<meta itemprop="description" content="<?php echo $description;?>">
<meta itemprop="image" content="<?php echo $image;?>">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $description;?>">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="<?php echo $title;?>">
<meta name="og:description" content="<?php echo $description;?>">
<meta name="og:image" content="<?php echo $image;?>">
<meta name="og:url" content="<?php echo $url;?>">
<meta name="og:site_name" content="<?php echo $title;?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">
<!--eso fue lo que copie-->

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Street Art Chileno</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Artículos</a>
                    </li>
                    <li>
                        <a href="about.php">Bibliografía</a>
                    </li>
                    <li>
                        <a href="post.php">Visualizaciones</a>
                    </li>
                    <li>
                        <a href="contact.php">Antecedentes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/JAVIER_1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <FONT COLOR="#B9F923"><h1>Street Art en Chile</h1></font>
                        <hr class="small">
                        <span class="subheading">Una vista del Street Art Chileno desde el Diseño Gráfico</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <h2>Sobre el proyecto</h2>
              <p>Dentro de los últimos 10 años, en Santiago han aparecido una serie de artistas callejeros que se dedican al muralismo y el street art. Destacados en sus áreas, estos artistas han sido capaces de llevar su arte por todo el mundo, llevar consigo nuestro imaginario chileno y plasmarlo en los diferentes países. No sorprende su manejo del color y la composición a gran escala, ya que los artistas que se tomarán en la investigación son también diseñadores gráficos. A partir de una serie de entrevistas a los artistas Inti, Payo y Estoy, develaremos cuál es el rol o la influencia del Diseño dentro de sus trabajos y su visión del arte callejero en Chile.</p>
              <hr>
              <h2>Artículos relacionados</h2>
              <?php
              // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
              $csv = array_map('str_getcsv', file('datos1.csv'));
              // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
              // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
              for($a = 0; $a < $total = count($csv); $a++){?>

                <article class="row">
                  <hr>
                  <div class="col-xs-5 col-sm-3 col-md-2"><img src="<?php echo $csv[$a]['images'];?>" class="img-responsive" height="100%" width="100%"/></div>
                  <div class="col-xs-7 col-sm-9 col-md-10">

                    <div class="post-preview">
                        <a href="single.php?url=<?php print($a)?>">
                    <FONT COLOR="#B9F923"><h3><?php echo $csv[$a]['titulo'];?> </h3></font></a>
                    <FONT SIZE=5 ><p><strong><?php echo $csv[$a]['apa'];?></strong></p></font>
                    <p><?php echo $csv[$a]['abstract'];?> </p>
                    <FONT SIZE=3><p><strong>Tags: </strong><?php echo $csv[$a]['url'];?></p></font>

                    <!--<h6>Agreguen aquí la información en Data</h6>-->

                  </div>
                </article>
              <?php };?>
                </div>
                <hr>

            </div>
        </div>
    </div>

    <hr>
    
<?php include("footer.php");?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
