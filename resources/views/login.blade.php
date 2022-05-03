<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Login</title>
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/plugin.css')}}">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/styles.css')}}">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div class="preloader">
	  <p>Cargando...</p>
     </div>
     <!-- Preloader End -->



    <!-- Contact Start -->
    <section id="contact" class="section-space-padding">
       <div class="container">         
         <div class="margin-top-30 margin-bottom-50">
           <div class="row">
           
             <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">   
                 
               <div class="row">
                 <div class="contact-us-detail"><a style="color: white;" href="loginadmi">Administrador</a></div>
                  <form class="contact-us pattern-bg">
                    <br>
					  <div class="col-sm-12">
						<div class="form-group">
						  <input type="text" id="name" class="form-control" placeholder="Usuario">
						 </div>
                        </div>
								
                       <div class="col-sm-12">
					    <div class="form-group">
						 <input type="password" id="email" class="form-control" placeholder="Contraseña">
						 </div>
                        </div>
                        
                    <div class="text-center">      
		               <button type="submit" class="button button-style button-style-dark button-style-color-2">Enviar</button>
	                  </div>
                       
                  </form>
                   
                </div>
			  </div>
            </div>
           
        
        </div>
       </div>
     </section>
     <!-- Contact End -->
       
        
        
        
    <!-- Footer Start -->
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="footer-logo">
                        <img src="{{ asset('static/img/logo-blue.png')}}" alt="Footer Logo Blue">
                        </h1>
                        <p>© Boxify 2015 - <a href="http://tympanus.net/codrops/licensing/">Licence</a> - Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Peter Finlan</a></p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('static/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('static/js/plugin.js')}}"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('static/js/scripts.js')}}"></script>
  
  
  </body>
 </html>