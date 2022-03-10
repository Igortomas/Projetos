<?php
session_start();
include('../login/verifica_login.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<link rel="shortcut icon" href="images/icon.png" type="image/x-png"/>
        <!-- META -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- TITLE -->
        <title>iTr Defenser</title>

        <!-- Main StyleSheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="style-responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/libs/animate.css">


		<!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />


        <!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
        <!-- External libraries: jQuery & GreenSock -->
        <script src="layerslider/js/jquery.js" type="text/javascript"></script>
        <script src="layerslider/js/greensock.js" type="text/javascript"></script>
        <!-- LayerSlider script files -->
        <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        

		<!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
        <script>
		$(document).ready(function(){
		$('.bxslider').bxSlider({
								
								pager: false,
								controls: true,
								auto: true
								
								
								});
		});
		</script>



		<link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css" media="screen" />
		<script src="lightbox/jquery.fancybox.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                                           
                    $('.fancybox').fancybox();
 		
                });
        </script>


        <!-- GOTO TOP JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $('#gotop').fadeIn();	
                } else {
                    $('#gotop').fadeOut();
                }
            });
         
            $('#gotop').click(function() {
                $('body,html').animate({scrollTop:0},800);
            });	
        });
        </script>
            


		<!-- HEADER JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() >= 200) {
                    $('.header').addClass("header_fix");	
                } else {
                   $('.header').removeClass("header_fix");
                }
            });	
        });
        </script>
        
        
        <script type="text/javascript">
        
		if($(window).width() <= 900){
		$(document).ready(function() {
                                    
									
									
                    $('.mobile .title').click(function() {
												
												$(this).next("ul").slideToggle();
												$(this).toggleClass("minus");
												
												});
					
					
 		
                });
		
		}
        </script>
                            
</head>

<body>
        
        
    
        <div class="header">
        <div class="container">
        
        			<a href="../index.html" class="logo"><img src="images/logo.png" alt="" /></a>
                    
                    <div class="nav mobile">
                    <div class="title">Menu <span class="fa "></span></div>
                    <ul>
                    <li><h2>Olá, <?php echo $_SESSION['login'];?></h2></li>
					<li><a href="../index.html">Sair</a></li>
                    </ul>
                    </div>
        
        </div>
        </div>
        
        


		<div class="wrapper">
        <div class="slider_main">
        <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:473px;">
        
        
                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/slide-bg.jpg" class="ls-bg" alt="Slide background"/>
                                
                                
                                <div class="ls-l videopreview" style="top:87px;left:0px;white-space: nowrap;" data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;">
                                <!--<iframe src="http://player.vimeo.com/video/34134308?portrait=0&amp;color=ff9933&autoplay=1" width="443" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <img src="images/player.png" alt="" />
                                </div>
                                
                                
                                <div class="ls-l" style="top:140px;left:638px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">Se proteja!</h2>
                                </div>
                                
                                <div class="ls-l" style="top:200px;left:583px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">O antivírus iTr Defender Security te deixa seguro na Web.</h2>
                                </div>
                                
                            
                                
                                <div class="ls-l" style="top:265px;left:598px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button2">Experimente!</a>
                                </div>
                                
                                
                                <div class="ls-l" style="top:265px;left:810px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button1">Saiba mais!</a>
                                </div>
                                
                               
                                </div><!--FIRST SLIDE-->
                                
                                
                                
                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/slide-bg.jpg" class="ls-bg" alt="Slide background"/>
                                
                                
                                <div class="ls-l videopreview" style="top:87px;left:0px;white-space: nowrap;" data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;">
                                <!--<iframe src="http://player.vimeo.com/video/34134308?portrait=0&amp;color=ff9933&autoplay=1" width="443" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <img src="images/player.png" alt="" />
                                </div>
                                
                                
                                <div class="ls-l" style="top:140px;left:638px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">Landing Page</h2>
                                </div>
                                
                                <div class="ls-l" style="top:200px;left:583px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">Powerfull & Effective theme for your business</h2>
                                </div>
                                
                            
                                
                                <div class="ls-l" style="top:265px;left:598px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button2">Learn More</a>
                                </div>
                                
                                
                                <div class="ls-l" style="top:265px;left:810px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button1">Start Now</a>
                                </div>
                                
                               
                                </div><!--FIRST SLIDE-->
                                
                     
           
			
        </div>
        </div> 
        </div>
		<div>
        
                    
                    <div class="nav mobile">
                    <div class="title">Menu <span class="fa "></span></div>
                    <ul>
                    <li><a href="#faqs_part">Alterar plano</a></li>
                    <li><a href="#features">Meu plano</a></li>
                    <li><a href="#testimonials_part">Download</a></li>
                    <li><a href="#pricing_part">Suporte do cliente</a></li>
					<li><a href="painel/dados.html"><h2> <?php echo $_SESSION['login'];?></h2></a></li>
                    </ul>
                    </div>
        
        </div>


			<?php
			$id2=$_SESSION['id'];
			include('../login/conexao.php'); // caminho do seu arquivo de conexão ao banco de dados
			$con = mysqli_query($conexao, "SELECT * FROM clientes where id=$id2");
			?>

        <div class="service_section">
        <div class="container">
			




    <?php while($dado = mysqli_fetch_assoc($con)) { ?>
    <tr>
      <li>Nome: <td><?php echo $dado['nome']; ?></td></li>
      <li>Telefone: <td>(<?php echo $dado['ddd']?>) <?php echo $dado['telefone']; ?></td></li>
      <li>Email: <td><?php echo $dado['email']; ?></td></li>
	  <li>Endereço: <td><?php echo $dado['endereco']; ?></td></li>
      <td>
        <a href="../cadastro/editar.php<?php echo $dado['usu_codigo']; ?>">Mudar Senha</a> /
        <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>


        </div>
        </div>
        
        
        
        
        
        <div class="feature_section" id="features">
        <div class="container">
        
        					
        
        </div>
        </div>
        
        
        
        
        
        <div class="feature_section ano_feature_section">
        <div class="container">
        		
        
        </div>
        </div>
        
        
        
        
        <div class="common_section" id="faqs_part">
        <div class="container">
        
        			
        </div>
        </div>
        
        
        
        
        <div class="common_section" id="testimonials_part">
        <div class="container">
        
        			
        
        </div>
        </div>
        
        
        
        
        
        <div class="pricing_table_section" id="pricing_part">
        <div class="container">
        
        			<h2>Price Table</h2>
                    <h4>term sheet convertible note colluding bootstrapping</h4>
                    
                   
                   	<div class="insider">
                    
                    
                    
                    
                    
                    </div>
                    
        
        </div>
        </div>
        
        
        
        
        <div class="common_section" id="contact_part">
        <div class="container">
        
        			<h2>Get in touch with us</h2>
                    <h4>term sheet convertible note colluding bootstrapping</h4>
                    
                   
                   	<br clear="all" />
                    
                    
                    <form method="post" class="hpform">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="SEND" />
                    </form>
                    
                   
                    
        
        </div>
        </div>
        
        
        
        
        <div class="subscribe_section" id="subscribe_part">
        <div class="container">
        
        			<h2>Subscribe to our newsletter</h2>
                    
                   
                   	<br clear="all" />
                    
                    
                    <form method="post">
                    <input type="email" placeholder="Enter your e-Mail" />
                    <input type="submit" value="SUBSCRIBE" />
                    </form>
                    
                   
                    
        
        </div>
        </div>
        
        
        
        
        <div class="common_section">
        <div class="container">
        
        	
            		<a href="#" class="footer_logo"><img src="images/logo.png" alt="" /></a>
                   
					<div class="copyright">Copyright 2016 All Right Reserved - <a href="http://www.pfind.com/goodies/landiya/">Landiya</a> Theme By <a href="http://www.pfind.com/goodies/">pFind.com Goodies</a>.</div>                    
        
        </div>
        </div>
        
        
        </div><!--wrapper-->


		<script>
            jQuery("#layerslider").layerSlider({
                responsive: false,
                responsiveUnder: 1100,
                layersContainer: 1100,
                skin: 'fullwidth',
                hoverPrevNext: false,
                skinsPath: 'layerslider/skins/'
            });
        
        
        </script>

		<script src="js/wow.js"></script>
        <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
        </script>

		<script type="text/javascript">
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top - 132
		}, 2000);
		return false;
		}
		}
		});
		});
        </script>
        
        
		<script type="text/javascript">
        
        
        $(document).ready(function() {
        
        if($(window).width() <= 1200){
        
        
        $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
        $('html,body').animate({
        scrollTop: target.offset().top - 132
        }, 2000);
        return false;
        }
        }
        });
        });
        
        
        
        }
        
        });
        
        
        </script> 
             

		
</body>
</html>
