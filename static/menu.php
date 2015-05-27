<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $project_name;?>
            <small>| <?php echo $project_slogan;?></small>
          </a>
        </div>
<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $url_site;?>">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inicio <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $url_site;?>/include/bienvenida.php">Bienvenida</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Oficio<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $url_site;?>/include/menuoficios.php">Menu Oficios</a></li>
                <li><a href="<?php echo $url_site;?>/include/lista.php">Lista</a></li>
                <li><a href="<?php echo $url_site;?>/include/lista2.php">Lista2</a></li>
                <li><a href="<?php echo $url_site;?>/include/listavideos.php">Videos</a></li>          

              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Galeria<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $url_site;?>/include/menugaleria.php">Menu Galerias</a></li>
                <li><a href="<?php echo $url_site;?>/include/listafotos.php">Lista fotos</a></li>
                <li><a href="<?php echo $url_site;?>/include/fotos.php">Fotos</a></li>
                
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">VideoTeca<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $url_site;?>/include/menuvideoteca.php">Menu Videoteca</a></li>
                <li><a href="<?php echo $url_site;?>/include/listavideosofi.php">Lista de videos</a></li>
                <li><a href="<?php echo $url_site;?>/include/videos.php">Videos</a></li>          

              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contacto<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $url_site;?>/include/bienvenida.php">Menu Contacto</a></li>
                <li><a href="<?php echo $url_site;?>/include/bienvenida.php">Suvbir Informacion</a></li>
                <li><a href="<?php echo $url_site;?>/include/bienvenida.php">Mensaje</a></li>          

              </ul>
            </li>


            


          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->