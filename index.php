<html>
<head>
    <!-- <meta charset="utf-8">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema de Escuela</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
echo "<div class='page-header'>
        <center><h1>SISTEMA ESCOLAR</h1></center>
      </div>
        <div class=table-responsive>
            <form name=alumno action=valida.php method=get>
                <table class=\"table table-bordered\">
                    <tr> <td>Usuario:</td><td><input type=text name=user> </input></td> </tr>
                    <tr> <td>Clave:</td><td><input type=text name=psw> </input></td> </tr>
                    <tr><td colspan=2><input type=submit name=submit value=Ingresar> </input></td></tr>
                </table>
            </form>
        </div>
    ";

require ('footer.php');