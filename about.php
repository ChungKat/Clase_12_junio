<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Street Art Chileno Bibliografía</title>

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
                    <div class="page-heading">
                        <h1>Bibliografía</h1>
                        <hr class="small">
                        <span class="subheading">Fuentes utilizadas</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
        <?php
        $json = file_get_contents('bibli.json');
        $datos = json_decode($json,true);
        $todos = count($datos);
        //print_r ($todos);
        echo datos[0]['year'];
        ?>
        </div>

        <div role="tabpanel" class="tab-pane" id="profile">
        <?php
        $json = file_get_contents('bibli_1.json');
        $datos = json_decode($json,true);
        $todos = count($datos);
        //print_r ($todos);
        echo datos[0]['year'];
        ?>
        </div>
    </div>

    <!-- Main Content -->
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">APA </a></li>
                  <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">MLA </a></li>
                </ul>

              <FONT COLOR="#B9F923"><h3>Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3></font>
              <?php for($n = 0; $n < $todos; $n++){?>
                <div class="post-preview">
                    <p><?php echo($datos[$n]["author"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["name"]);?>. <?php echo($datos[$n]["city"]);?>:<?php echo($datos[$n]["ed"]);?> <?php echo($datos[$n]["url"]);?></p>
                </div>
                 <?php }; ?>
              </div>


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
