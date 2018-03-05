

<!-- *** REFERENCES IMAGE ***
_________________________________________________________ -->
<div class="section" id="habilidades">
            <div class="container">
                <div class="col-sm-12">

                    <div class="mb20">
                        <h2 class="title" data-animate="fadeInUp">Habilidades</h2>

                        <p class="lead" data-animate="fadeInUp">Estas son algunas habilidades y competencias que manejo.</p>
                    </div>

                    <ul id="filter" data-animate="fadeInUp">
                        <li class="active"><a href="#" data-filter="all">Todas</a>
                        </li>
                        <li><a href="#" data-filter="web">Diseñador Web</a>
                        </li>
                        <li><a href="#" data-filter="software">Software</a>
                        </li>
                        <li><a href="#" data-filter="administracion">Administrador</a>
                        </li>
                        <li><a href="#" data-filter="app">App</a>
                        </li>
                    </ul>

                    <div id="detail">

                        <span class="close">&times;</span> 

                        <div id="detail-slider"></div>

                        <div class="text-center">
                            <h1 id="detail-title">&nbsp;</h1>
                        </div>

                        <div id="detail-content"></div>

                    </div>
                    <!-- Reference detail -->

                    <div id="references-masonry" data-animate="fadeInUp">


                        <?php getHabilidades(); ?>


                           

                       


                       
                    </div>
                    <!-- /#references-masonry -->

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** REFERENCES END *** -->
