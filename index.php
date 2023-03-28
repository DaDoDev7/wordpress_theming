<?php get_template_part( 'header' ); ?>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first" style="background-image: url('<?php the_field('header_img','option'); ?>');">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
     <!-- IN ACF THE FIELD SERVE PER ANDARE A RICERCARE IL CAMPO SPECIFICO DELLA PROPRIETà DA NOI CREATA -->
                                             <h1><?php the_field('header_title','option'); ?></h1>
                                             <h3><?php the_field('header_description','option'); ?></h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second" style="background-image: url('<?php the_field('header_img_2','option'); ?>');">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1><?php the_field('header_title_2','option'); ?></h1>
                                             <h3><?php the_field('header_description_2','option'); ?></h3>
                                             <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third" style="background-image: url('<?php the_field('header_img_3','option'); ?>');">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1><?php the_field('header_title_3','option'); ?></h1>
                                             <h3><?php the_field('header_description_3','option'); ?> </h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Trending Courses</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Books & Library</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Certified Teachers</h3>
                              <p>templatemo delivers a wide variety of HTML5 templates for you at absolutely no charge. Please tell your friends.</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Start your journey to a better life with online practical courses</h2>

                              <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Professional Trainers</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>International Certifications</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Free for 3 months</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>Signup today</h2>
                                   <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Teachers <small>Meet Professional Trainers</small></h2>
                         </div>
                    </div>
                    <?php
$args = array(
  'post_type' => 'teacher', 
  'posts_per_page' => 20 
);

// INIZIO ITERAZIONE (LOOP) WORDPRESS 

$my_query = new WP_Query($args);

if($my_query->have_posts()) :
while ($my_query->have_posts() ) : $my_query->the_post(); ?>

<!-- Faire des choses à boucler :) -->
<div class="col-md-3 col-sm-6">
  <div class="team-thumb">
    <div class="team-image">
      <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="teacher">
    </div>
    <div class="team-info">
      <h3><?php the_title(); ?></h3>
      <span><?php the_content(); ?></span>
    </div>
    <ul class="social-icon">

     <!-- LA LINEA SEGUENTE PERMETTE DI VERIFICARE SE IL CONTENUTO DEL FIELD DA NOI CREATO NELLE OPTIONS è PRESENTE O MENO . (  IN QUESTO CASO PER FAR APPARIRE 
     L'ICONA DI FACEBOOK SE IL FORMATORE IN QUESTIONE L'HA INSERITA ) -->
     
          <?php if(get_field('facebook_page')){ ?><li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li><?php } ?>
      <li><a href="#" class="fa fa-twitter"></a></li>
      <li><a href="#" class="fa fa-google"></a></li>
      <li><a href="#" class="fa fa-behance"></a></li>
    </ul>
  </div>
</div>
<!--Fin des choses a boucler-->

<?php endwhile;
endif;
wp_reset_postdata(); ?>


<!-- FINE DELL'ITERAZIONE WORDPRESS  -->


               </div>
          </div>
     </section>


     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">

                         <?php
                                        $args = array(
                                             'post_type' => 'course', 
                                             'posts_per_page' => 20 
                                             );

                                             $my_query = new WP_Query($args);

                                             if($my_query->have_posts()) :
                                             while ($my_query->have_posts() ) : $my_query->the_post(); ?>     
                              
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> <?php the_field('date_courses'); ?></span>
                                                       <span><i class="fa fa-clock-o"></i>  <?php echo strip_tags(get_the_excerpt()); ?> </span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#"><?php the_title(); ?></a></h3>
                                                  <p><?php the_content();?></p>
                                             </div>

                                             <div class="courses-info">
                                                  
                                                  
                                                  <div class="courses-author">
                                                       <img src="<?php echo get_template_directory_uri(); ?>/known/images/author-image1.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>USD 25</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <?php endwhile;
                              endif;
                              wp_reset_postdata(); ?>
                              


                         </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Student Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                         <?php
                                        $args = array(
                                             'post_type' => 'review', 
                                             'posts_per_page' => 20 
                                             );

                                             $my_query = new WP_Query($args);

                                             if($my_query->have_posts()) :
                                             while ($my_query->have_posts() ) : $my_query->the_post(); ?>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4><?php the_title();?></h4>
                                             <span><?php the_excerpt();?></span>
                                        </div>
                                        <p><?php the_content();?></p>
                                        <div class="tst-rating">
                                   <!-- ITERAZIONE PHP CHE PERMETTE DI VERIFICARE IL VALORE DELL'INPUT RADIO (PALLINO) E CHE RESTITUISCE
                                    UNA STELLINA OGNI VOLTA CHE AUMENTA IL VALORE (1=1 STELLINA E COSI VIA) -->
                                             <?php $numberOfStars = get_field('rating'); ?>
                                             <?php for ($i = 1; $i <= $numberOfStars; $i++) { ?>
                                             <i class="fa fa-star"></i>
                                             <?php } ?>
                                        </div>
                                   </div>
                              </div>    
                              <?php endwhile;
                              endif;
                              wp_reset_postdata(); ?>


                         </div>

               </div>
          </div>
     </section> 


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
     <!-- PORZIONE DI CODICE PER CONTACT FORM 7 (COPIARE E INCOLLARE IL CODICE NEL PLUGIN E QUESTO è LO SHORTCODE CHE NE RISULTA) -->
                         
                         <?php echo apply_shortcodes( '[contact-form-7 id="80" title="Formulaire de contact 1"]' ); ?>

                         
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="<?php echo get_template_directory_uri(); ?>/known/images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section> 
     
  <!-- PER PRENDERE IL FOOTER NELLE TEMPLATE PARTS -->

     <?php get_template_part( 'footer' ); ?>

