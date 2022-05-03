<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aministrador</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('static/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('static/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img src="{{ asset('static/img/logo-blue.png')}}" class="img-responsive"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Cerrar sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="{{ asset('static/img/find_user.png')}}" class="img-responsive" />
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i>Grupos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comment"></i>Avisos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Pasar lista</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cutlery"></i>Menú</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Bienvenido</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <h5>Niños que pagaron</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Grupo</th>
                                    <th>Dia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                                <tr class="success">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                                <tr class="success">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                                <tr class="success">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-md-12">
                        <h5>Niños por pagar</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Grupo</th>
                                    <th>Dia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="danger">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                                <tr class="danger">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                                <tr class="danger">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                                <tr class="danger">
                                    <td>Alan</td>
                                    <td>Pérez Mireles</td>
                                    <td>6 B</td>
                                    <td>05/04/2022</td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('static/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('static/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('static/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('static/js/custom.js')}}"></script>
    
   
</body>
</html>