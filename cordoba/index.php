<?php
    /**
     * 
     */
    include "config/parameters.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo $TITULO; ?></title>
        <meta charset="utf-8">
        <meta name="description" content="Córdoba ciudad patrimonio">
        <meta name="keywords" content="Turismo, patrimonio, viajes">
        <meta name="author" content="Francisco Javier González Sabariego">
        <link rel="stylesheet" media="(min-width: 320px)" href="css/style1.css">
        <!--<link rel="stylesheet" media="(min-width: 640px)" href="css/style2.css">-->
        <link rel="stylesheet" media="(min-width: 1024px)" href="css/style3.css">
    </head>
    <body>
        <header id="header">
            <?php include "include/cabecera.php";?>
            <!-- <h1 id="top">Córdoba Ciudad Patrimonio</h1> -->
        </header>
        <nav id="nav">	
            <?php include "include/menu.php";?>
        </nav>
        <main>
            <section id="section">
                <?php
                    if (isset($_GET["page"])) {
                        if ($_GET["page"]=="home") {include "pages/home.php";}
                        if ($_GET["page"]=="mezquita") {include "pages/mezquita.php";}
                        if ($_GET["page"]=="cascohistorico") {include "pages/cascohistorico.php";}
                        if ($_GET["page"]=="patios") {include "pages/patios.php";}
                        if ($_GET["page"]=="medinaazahara") {include "pages/medinaazahara.php";}
                        if ($_GET["page"]=="sinagoga") {include "pages/sinagoga.php";}
                        if ($_GET["page"]=="contacto") {include "pages/contacto.php";}
                    } else {
                        include "pages/home.php";
                    }
                ?>
                <!-- <article>
                    <h2>Noticia 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo dui quis sagittis tempor. Aenean vel neque <strong>sit amet risus porta cursus</strong>. Proin non sem tempus, efficitur eros eget, <strong>faucibus leo</strong>. Quisque mollis eleifend convallis. Pellentesque maximus pellentesque sapien vitae consectetur. Phasellus suscipit maximus ante, vel convallis dui posuere ut. Nunc scelerisque enim ut sem tristique congue. Integer dictum convallis eleifend. Curabitur dapibus odio metus, bibendum aliquam metus imperdiet eu. Aenean risus purus, fringilla at enim ac, vehicula venenatis ligula. Praesent et sollicitudin nunc. In eleifend faucibus urna, non mollis ante. <cite>Donec tincidunt felis ultricies sollicitudin blandit</cite>. Curabitur dictum efficitur turpis ac tristique. Maecenas interdum aliquet nisi, et vehicula sapien efficitur vel. Morbi rutrum lorem ligula, et maximus velit porttitor eu.</p>
                    <p>Nam malesuada quis lorem vel suscipit. Donec vitae magna tortor. Suspendisse potenti. Etiam tellus felis, porttitor vitae felis nec, varius vehicula nunc. Quisque euismod ante sed nisi consequat, vitae consequat erat consequat. Nam at accumsan lectus. Etiam commodo diam nec tincidunt feugiat. Praesent ullamcorper sit amet mi vitae sodales. Duis ac turpis non nisl sollicitudin lobortis nec id urna.</p>
                    <p><strong>Duis eget neque sed erat pretium sodales</strong>. Aliquam et tortor lobortis, volutpat enim vitae, varius diam. Nam metus risus, viverra at odio at, imperdiet suscipit ipsum. Integer in sodales velit. Duis sollicitudin porta tellus. Proin vitae imperdiet leo. Etiam porta sapien eu iaculis ullamcorper. Duis luctus metus massa, ac commodo lacus viverra consequat. In a magna mattis, varius mi non, venenatis metus. Aliquam erat volutpat. Nullam lacinia sagittis risus, vitae mollis leo aliquet a. Maecenas placerat iaculis magna quis vulputate. <strong>Nulla suscipit varius neque</strong>, vulputate varius lectus volutpat non. Proin condimentum nisl ut sapien aliquam, <strong>sed placerat libero lacinia</strong>. Vivamus malesuada metus id laoreet luctus. Proin ut augue rhoncus, pretium ante eget, malesuada libero.</p>
                </article>
                <article>
                    <h2>Noticia 2</h2>
                    <p>Ut quis euismod erat, id pharetra mi. Sed maximus cursus congue. <strong>In venenatis ex lacus, vitae sodales mi pellentesque ut</strong>. Pellentesque vitae pulvinar mi. Maecenas eu ex ullamcorper, placerat elit ac, tristique magna. Maecenas vel mollis ex, bibendum mollis nisi. Quisque tortor tortor, pulvinar et convallis sit amet, semper id elit. Vivamus aliquet pharetra ligula, at ullamcorper est varius ac. Sed bibendum eu ante vestibulum consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <strong>Nunc bibendum quis arcu eget interdum. Orci varius natoque penatibus et magnis dis parturient montes</strong>, nascetur ridiculus mus. Aenean convallis ligula vitae diam ullamcorper, ac semper dui iaculis. Maecenas faucibus elementum est a rutrum. Nulla lectus diam, convallis eget ipsum non, egestas sagittis lectus.</p>
                    <p><cite>Vestibulum varius urna non iaculis tristique</cite>. Praesent iaculis, magna et ultrices consequat, libero mi pharetra erat, non porttitor justo risus vel justo. <strong>Etiam sollicitudin libero in nunc congue</strong>, a mattis dui placerat. Integer nec neque gravida, sodales enim non, laoreet nisl. Aliquam vitae tellus vel sapien porttitor convallis tempor at nunc. <cite>Donec efficitur tincidunt neque, quis posuere purus egestas eu</cite>. Quisque a ultricies augue. Vestibulum in urna aliquam, consequat augue sed, eleifend nisi.</p>
                </article> -->
            </section>
        </main>
        <footer id="footer">
            <small>&copy; Todos los derechos ....</small>
            <small><i>Córdoba, España</i></small>
            <small>Tlf: +34-957-99-99-99</small>
        </footer>
    </body>
</html>