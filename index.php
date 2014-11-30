<!doctype html>
<html lang="pt-br">
<head>
<!--==============================meta=================================-->
    <?php include 'add/meta.php'; ?>
</head>
<body id="page1">
	<div class="main-bg">
        <div class="bg">
            <!--==============================header=================================-->
            <header>
                <div class="main">
                    <?php include('add/topo.php'); ?>
                    <?php include('add/menu.php'); ?>
                    <?php include('add/slider.php'); ?>
                </div>
            </header>
            
            <!--==============================content================================-->
            <section id="content">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper p5">
                            <?php include('add/chamada-topo.php'); ?>
                        </div>
                        <div class="container-bot">
                            <div class="container-top">
                                <div class="container">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">
                                                <h2>Benvindos</h2>
                                                <p class="prev-indent-bot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia erat dapibus est pretium dapibus. Maecenas finibus, felis quis fermentum ullamcorper, <a class="color-4" href="">lacus</a> nisl mattis felis, in scelerisque justo urna eu augue. In blandit ac dui nec cursus. Morbi sit amet ipsum ante. Aliquam egestas ligula sodales magna consequat, in dapibus ex dictum. <a class="color-4" href="">Phasellus</a> convallis eleifend auctor. Etiam eleifend libero felis, vitae vehicula nisl pulvinar quis.<br><br>
                                                Pellentesque id ipsum in tortor eleifend viverra. Praesent vestibulum odio lacus. Donec in turpis ullamcorper lacus suscipit condimentum id id leo. Ut nisl eros, pulvinar quis nulla ac, fermentum consequat lectus. Integer ut sem ullamcorper, sollicitudin justo non, dictum tortor. Integer eu rhoncus orci. Proin mauris leo, mollis nec convallis eget, semper eget justo. Morbi eget finibus libero. Nunc imperdiet posuere placerat. Cras tempus hendrerit libero, non varius erat consectetur id.</p>
                                            </div>
                                            <div class="wrapper">
                                                <div class="grid_4 alpha">
                                                    <div class="indent-left">
                                                        <div class="maxheight indent-bot">
                                                            <h3>Sobre n&oacute;s</h3>
                                                            <p class="prev-indent-bot"><a class="link-1" href="#">LLLorem ipsum dolor amet</a> conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                            <a class="link-1" href="#">Dolor amet conse ctetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ut enim ad.
                                                        </div>
                                                        <a class="button" href="#">Veja Mais</a>
                                                    </div>
                                                </div>
                                                <div class="grid_4 omega">
                                                    <div class="indent-left2">
                                                        <div class="maxheight indent-bot">
                                                            <h3 class="p0">Outros serviços</h3>
                                                            <ul class="list-1">
                                                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                                                <li><a href="#">Aliquam non ipsum commodo</a></li>
                                                                <li><a href="#">Fusce vel nunc a odio sodales laoreet</a></li>
                                                                <li><a href="#">In quis nisi in nulla tincidunt</a></li>
                                                                <li><a href="#">Aenean auctor leo at velit</a></li>
                                                                <li><a href="#">Curabitur maximus orci sed diam</a></li>
                                                                <li><a href="#">Vestibulum vitae nibh id eros auctor</a></li>
                                                                <li><a href="#">Cras luctus orci non elit vulputate</a></li>
                                                            </ul>
                                                        </div>
                                                        <a class="button" href="#">Veja Mais</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="grid_4">
                                            <div class="indent-left2 indent-top">
                                                <div class="box p4">
                                                    <div class="padding">
                                                        <?php include('add/hor-func.php'); ?>
                                                    </div>
                                                </div>
                                                <figure class="indent-bot">
                                                    <?php include('add/mapa.php'); ?>
                                                </figure>
                                                <div class="indent-left">
                                                    <dl class="main-address">
                                                        <?php include('add/endereco.php'); ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==============================footer=================================-->
            <?php include 'add/footer.php'; ?>
        </div>
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'simpleFade',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:false,
				pagNums:false,
				nextBu:'.next',
				prevBu:'.prev'
			});
		});
    </script>
</body>
</html>