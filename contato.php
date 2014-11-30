<!doctype html>
<html lang="pt-br">
<head>
<!--==============================meta=================================-->
    <?php include 'add/meta.php'; ?>
</head>
<body id="page6">
	<div class="main-bg">
        <div class="bg">
            <!--==============================header=================================-->
            <header>
                <div class="main">
                    <?php include('add/topo.php'); ?>
                    <?php include('add/menu.php'); ?>
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
                                                <h3 class="p1">Formul&aacute;rio de Contato</h3>
                                                <form id="contact-form" method="post" enctype="multipart/form-data">                    
                                                    <fieldset>
                                                          <label><span class="text-form">Name:</span><input name="name" type="text" /></label>
                                                          <label><span class="text-form">Email:</span><input name="email" type="text" /></label>                              
                                                          <label><span class="text-form">Phone:</span><input name="phone" type="text" /></label>                              
                                                          <div class="wrapper">
                                                            <div class="text-form">Message:</div>
                                                            <div class="extra-wrap">
                                                                <textarea></textarea>
                                                                <div class="clear"></div>
                                                                <div class="buttons">
                                                                    <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Limpar</a>
                                                                    <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Enviar</a>
                                                                </div> 
                                                            </div>
                                                          </div>                            
                                                    </fieldset>						
                                                </form>
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
</body>
</html>