<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
<!--RWD : balise pour definir le viewport-->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Fabien Brossard - Designer Graphique - a propos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="Grafikart/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
	<link href='https://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="Grafikart/zoombox.js"></script>
    <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 800,              // Default width
                height      : 500,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
        </script>
</head>

<body>
	<div class="page">
		<header>
			<a href="index.html">
				<h1 class="header"><img src="image/logo-mini.png" alt=""></h1>
            </a>
				<p class="header">Designer Graphique</p>
			
		</header>
		<div class="conteneur">
	    	<h2><img src="image/boutons/btn-deambulation.png" alt="deambulation"></h2>
	    	
                <div class="menu-galerie">
                    <div class="ligne">
                        <div class="btn-gallerie photographique col">
                            <a href="inc/deambulation-photographique.html">photographique
                                <img src="image/boutons/btn-photographique-blanc.png" srcset="image/boutons/btn-photographique-medium-blanc.png 245w, image/boutons/btn-photographique-blanc.png 400w, image/boutons/btn-photographique-medium-blanc.png 600w" alt="">
                            </a>
                        </div>
                        <div class="btn-gallerie graphique col">
                            <a href="inc/deambulation-graphique.html">graphique
                                <img src="image/boutons/btn-graphique-blanc.png" srcset="image/boutons/btn-graphique-medium-blanc.png 245w, image/boutons/btn-graphique-blanc.png 400w, image/boutons/btn-graphique-medium-blanc.png 600w" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ligne">
                        <div class="btn-gallerie creative col">
                            <a href="inc/deambulation-creative.html">créative
                                <img src="image/boutons/btn-creative-blanc.png" srcset="image/boutons/btn-creative-medium-blanc.png 245w, image/boutons/btn-creative-blanc.png 400w, image/boutons/btn-creative-medium-blanc.png 600w" alt="">
                            </a>
                        </div>
                        <div class="btn-gallerie digitale col">
                            <a href="inc/deambulation-numerique.html">numérique
                                <img src="image/boutons/btn-digitale-blanc.png" srcset="image/boutons/btn-multimedia-medium-blanc.png 245w, image/boutons/btn-digitale-blanc.png 400w, image/boutons/btn-multimedia-medium-blanc.png 600w" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--menu-galerie -->
		    
		</div>
<!--		
   <div> 
   <?php //include ("inc/deambulation-graphique.html");?>
   </div>
    -->
		<footer>
			<p><a href="contact.html">Fabien Brossard</a> - copyryght - 2016 ©</p>
		</footer>
	</div><!--page-->

<!--============================JAVASCRIPT=============================-->
<!------------------------------Importer jquery-------------------------->
		<script src="js/jquery-1.12.0.min.js"></script>
<!-------------------------------mon code JS----------------------------->
		<script src="js/style.js"></script>
<!-------------------------------zoombox--------------------------------->
</body>
</html>
