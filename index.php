<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Diversão Boliche</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style-portfolio.css"> <!-- cardapio -->
        <link rel="stylesheet" href="css/picto-foundry-food.css" /> <!-- will be erased -->
        <link rel="stylesheet" href="css/jquery-ui.css"> <!--? -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="logo.jpeg" type="image/x-icon">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Diversão Boliche</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">INÍCIO</a></li>
                            <li><a class="color_animation" href="#story">QUEM SOMOS</a></li>
                            <li><a class="color_animation" href="#pricing">CARDÁPIO</a></li>
                            <li><a class="color_animation" href="#featured">GALERIA</a></li>
                            <li><a class="color_animation" href="#ranking">RANKING</a></li>
                            <li><a class="color_animation" href="#contato">CONTATO</a></li>
                            <li><a class="color_animation" href="#contact">LOCALIZAÇÃO</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            
        </div>

        <!-- ============ About Us ============= -->


        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Sobre nós</h1>
                           <br>
                    <p class="desc-text">Descrição Diversão Boliche</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/about_us/bowling-1.jpg" width="250" height="220">
                       <img src="images/about_us/bowling-2.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/about_us/bowling-3.jpg"  width="250" height="220">
                       <img src="images/about_us/bowling-4.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>

       <!-- ============ Menu  ============= -->


        <section id ="pricing" class="description_content">
            
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                        <h1>CARDÁPIO</h1>
                        </br>
                        </br>                        
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">Favoritos</li>
                                <li class="filter" data-filter="food">Lanches</li>
                                <li class="filter" data-filter="special">Porções</li>
                                <li class="filter" data-filter="drink">Bebidas</li>
                               
                            </ul><!-- @end #filter-list -->    
                            <ul id="portfolio">
                                <li class="item food"><img src="images/menu/xegg.jpg" alt="Food" >
                                    <div class="toggle_efect glyphicon glyphicon-menu-down">X-Egg </div>
                                    <div class="test_hid">
                                    <font size=3 style="text-align: left;">
                                        <ul>
                                            <li>Pão de hamburguer, hamburguer, ovo, queijo e maionese</li>
                                        </ul>
                                    </font>
                                    </div>
                                </li>

                                <li class="item special"><img src="images/menu/picanha.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down">Picanha</div>
                                <div class="test_hid" >
                                  <font size=3 style="text-align: left;">
                                    <ul>
                                        <li>Porção generosa de picanha ao ponto com fritas</li>
                                    </ul>
                                  </font>
                                 </div>
                                </li>
                                
                                <li class="item food"><img src="images/menu/xsalada.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >X-Salada</div>
                                <div class="test_hid" >
                                  <font size=3 style="text-align: left;">
                                    <ul>
                                        <li>Pão de hamburguer, hamburguer, queijo, presunto, alface, tomate, milho, rúcula, cebola</li>
                                    </ul>
                                  </font>  
                                 </div>
                                </li>
                                
                                <li class="item special"><img src="images/menu/salame.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >Salame</div>
                                <div class="test_hid" >
                                 <font size=3 style="text-align: left;">
                                    <ul>
                                       <li>Porção generosa de salame em rodelas, com queijo em cubículo</li>
                                    </ul>
                                 </font>
                                 </div>
                                </li>                                
                                
                                <li class="item special"><img src="images/menu/fritas.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >Fritas</div>
                                <div class="test_hid" >
                                 <font size=3 style="text-align: left;">
                                    <ul>
                                        <li>Porção generosa de fritas crocantes e sequinhas</li>
                                    </ul>
                                  </font>
                                 </div>
                                </li>
                                
                                <li class="item drink"><img src="images/menu/refri.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >Refri</div>
                                <div class="test_hid" >
                                 <font size=3 style="text-align: left;">
                                   <ul> 
                                        <li>Disponível: Coca-Cola, Pepsi, Guaraná-Antartártica, Sukita e Sprite</li>
                                   </ul>
                                 </font>
                                 </div>
                                </li>
                                
                                <li class="item drink"><img src="images/menu/cervejas.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >Cervejas</div>
                                <div class="test_hid" >
                                  <font size=3 style="text-align: left;">
                                    <ul>
                                        <li>Disponível: Brahma, Antartica, Skol e Itaipava</li>
                                    </ul>
                                  </font>
                                 </div>
                                </li>
                                
                                <li class="item drink"><img src="images/menu/sucos.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >Sucos</div>
                                <div class="test_hid" >
                                  <font size=3 style="text-align: left;">
                                    <ul>
                                        <li>Disponível: Limonada, Limonada Suíça, Laranja, Melancia, Melão, Caju, Abacaxi, Abacaxi com Hortelã, Morango, Morango com leite condensado. </li>
                                    </ul>
                                   </font>  
                                  </div>
                                </li>
                                
                                <li class="item food"><img src="images/menu/xtudo.jpg" alt="Food" >
                                <div class="toggle_efect glyphicon glyphicon-menu-down" >X-Tudo</div>
                                <div class="test_hid" >
                                  <font size=3 style="text-align: left;">
                                    <ul>
                                        <li>Pão de hamburguer, 2 hamburguers, alface, tomate, pickes, catupiry, extra bacon e presunto</li>
                                    </ul>
                                  </font>
                                 </div>
                                </li>

                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>  
            </br>
            </br>
            </br>
            </br>
        </section>

        
        <!-- ============ Featured Gallery  ============= -->

        <section id="featured" class="description_content">
           
            <div class="text-content container"> 
                
                <div class="col-md-6" >
                    <h1>Galeria</h1>
                    <div class="icon-photo fa-2x"></div>
                    <p class="desc-text">Acompanhe nossa Galeria de Fotos, onde postamos os nossos melhores momentos.</p>
                    <p class="desc-text">No Diversão Boliche, sua diversão é garantida.</p>
		                
                </div>

		        <div class="col-md-6" >
                    <ul class="image_box_story2">
                    <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
                    
			        <?php
                            $count = 0;
            	            $path = 'images/gallery/';
				            $photos = glob("$path{*.jpg,*.JPG,*.png,*.PNG,*.JPEG,*.jpeg}", GLOB_BRACE);
				            foreach($photos as $img){
                    
			        ?>
                    
                            <!-- Wrapper for slides -->
                    <?php if ( $count == 0 ) { 
                    ?>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="<?php echo $img; ?>"  alt="..." >
                                                         <div class="carousel-caption"></div>
                                                    </div>

				    <?php 
					} else {
                    ?>		
					                                <div class="item">
                                                        <img src="<?php echo $img; ?>" alt="...">
                                                        <div class="carousel-caption"></div>
                                                    </div>
                    <?php  }
                            $count++;                       
                    
                    }
                ?>			
                                                </div>
                                                    <!-- Left and right controls -->
                                                    <a class="left carousel-control" href="#galleryCarousel" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#galleryCarousel" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                         <span class="sr-only">Next</span>
                                                    </a>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

       <div class="space"></div>


      <!-- ============ Featured Ranking  ============= -->

        <section id="ranking" class="description_content">
           
            <div class="text-content container"> 
                
                    <h1>Ranking</h1>
                          <table class="table table-bordered">
                            <thead>
                               <tr>
                                    <th>Apelido</th>
                                    <th>Data do último jogo</th>
                                    <th>Pontuação Geral</th>
                                </tr>
                            </thead>
                          </table>
            </div>

        </section>

        <div class="space"></div>

        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect" id="contato">
                
            <div class="text-content container"> 
                    <h2 id="contato">CONTATO</h2>
                <div class="col-md-6">
                    <span class="social_heading">SIGA</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">TEL.:</span>
                    <span class="social_info"><a class="color_animation" >(99) 9999 - 9999</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->
        
        <section id="contact">
            <div class="space"></div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1838.183397009771!2d-47.215621!3d-22.862905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bc00393cd5c3%3A0x5a04b521d499d7d3!2sR.+Joaquim+Aparecido+Bueno+-+Lot.+Remanso+Campineiro%2C+Hortol%C3%A2ndia+-+SP!5e0!3m2!1sen!2sbr!4v1509906983615" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            
                
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; LOGIN ADM <a href="login.html">LOGIN</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>