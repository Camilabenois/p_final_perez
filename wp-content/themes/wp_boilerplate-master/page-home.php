<?php get_header() ?>

<?php 
while ( have_posts() ) : the_post();
	
?>
<section class="carousel">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                          <a href=" http://localhost:8888/mitienda/news/run-with-shoes/">   <img class="d-block w-100" src="<?php the_field('slider_1'); ?>" alt="First slide"></a>
                            <div class="carousel-caption">
                               
                            </div>
                        </div>
                        <div class="item">
                             <a href="http://localhost:8888/mitienda/news/el-color-camel/"><img class="d-block w-100" src="<?php the_field('slider_2'); ?>" alt="Second slide"></a>
                            <div class="carousel-caption">
                                
                            </div>
                        </div>
                        <div class="item">
                           <a href="http://localhost:8888/mitienda/news/shoe-fabric/"> <img class="d-block w-100" src="<?php the_field('slider_3'); ?>" alt="Third slide"></a>
                            <div class="carousel-caption">
                                
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                            href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                     </span>
                    </a>
                </div> 
            </div>
        </div>
</section>

<section>
    <div class="container-full">
        <div class="row">
            
            <div class="col-md-6 margin">
             <a href="http://localhost:8888/mitienda/news/designed-for-you/"> <img src="<?php the_field('banner_1'); ?>" class="img-responsive spaces" alt="zapato"></a>
            </div>
            <div class="col-md-3 margin">

                  <a href="http://localhost:8888/mitienda/news/talk-to-my-shoes/">  <img src="<?php the_field('banner_2'); ?>" class="img-responsive space"  alt="mujer"></a>
                  <a href="">  <img src="<?php the_field('banner_4'); ?>" class="img-responsive space"  alt=""></a>
            </div>

            <div class="col-md-3 margin">
                 <a href=" http://localhost:8888/mitienda/news/my-dog/"><img src="<?php the_field('banner_3'); ?>" class="img-responsive space"  alt="hombre-perro"></a>
                  <a href=" http://localhost:8888/mitienda/news/black-shoes/">  <img src="<?php the_field('banner_5'); ?>" class="img-responsive space"  alt=""></a>
                    
            </div>

        </div>
    </div>

	</section> 

<?php endwhile;wp_reset_postdata();?>
<?php get_footer() ?>

