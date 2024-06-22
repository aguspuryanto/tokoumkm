
        <!-- Carousel -->
        <div class="jumbotron jumbotron-fluid m-0 py-0">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        foreach ($sliders as $key => $slider) {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$key.'" class="'.($key == 0 ? 'active' : '').'"></li>';
                        }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        foreach ($sliders as $key => $slider) {
                            echo '<div class="carousel-item '.($key == 0 ? 'active' : '').'">
                                <img class="d-block w-100" src="/uploads/'.$slider.'" alt="First slide">
                            </div>';
                        }
                        ?>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
            </div>
        </div>