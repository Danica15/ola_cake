<header>
    <div class="header-area">

        <!-- Top Contact Info -->
        <div class="row logo-top-info">
            <div class="container">
                <div class="col-md-3 logo">
                    <!-- Main Logo -->
                    <?php
                        echo $this->Html->image(
                            '/images/logo.png',
                            array(
                                'alt' => 'logo',
                                'url' => '/'));
                    ?>
                    <!-- Responsive Toggle Menu -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only"> Main Menu </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-md-9 top-info-social">
                    <div class="pull-right">
                        <div class="top-info">
                            <div class="call">
                                <h3> LLÁMANOS </h3>
                                <p> 043-611821</p>
                            </div>
                            <div class="email">
                                <h3> ESCRÍBENOS </h3>
                                <p> asistenteadm.ola@gmail.com  </p>
                            </div>
                        </div>
                        <div class="social">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/operacioneslogisticasalpamayo/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Section -->
        <nav id="navbar" class="collapse navbar-collapse main-menu">
            <div class="container">
                <ul class="main-menu">
                    <li> <?php echo $this->HTML->link('INICIO', '/')  ?></li>
                    <li class="dropdown"> <a href="#" data-toggle="dropdown"> ACERCA DE
                        <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                        <ul>
                            <li> <?php echo $this->HTML->link('La compañía', array( 'controller'=> 'empresa', 'action'=> 'index'))  ?> </li>
                            <li> <?php echo $this->HTML->link('Visión y Misión', array( 'controller'=> 'empresa', 'action'=> 'mision'))  ?>  </li>
                            <li><?php echo $this->HTML->link('Nuestros servicios', array( 'controller'=> 'empresa', 'action'=> 'servicios'))  ?>  </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"> Productos
                        <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                        <ul>
                            <li> <a href="services.html"> Maquinaria Agrícola </a> </li>
                            <li> <a href="services-list.html"> Maquinaria de Construcción </a> </li>
                            <li> <a href="services-single.html"> Transporte </a> </li>
                        </ul>
                    </li>
                    <li><?php echo $this->HTML->link('REGISTRARSE', array( 'controller'=> 'registro', 'action'=> 'index'))  ?>  </li>
                    <li><a href="Iniciar Sesion.html"> INICIAR SESION </a> </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
