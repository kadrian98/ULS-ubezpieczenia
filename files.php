<?php 
/*
Template Name: files
*/

get_header(); 
?>
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-12">
							<div class="contact-us-left">
							<table class="table-container">
								<thead>
									<tr>
									<th class="header-nazwa">Nazwa pliku</th>
									<th class="header-pobierz">Pobierz</th>
									</tr>
								</thead>
								<tbody>
									<?php

        $filesPagePost = new WP_Query(array(
          'post_type' => array(
            'my-post-type' => 'dokumenty',           
          )));
        
        while($filesPagePost->have_posts()) {
          $filesPagePost->the_post(); ?>
            
			<tr>
				<td><?php the_title(); ?></td>
				<td><a href="<?php the_field('link_do_pliku');?>" class="download-link"><i style="color:black;" class="icofont-download"></i></a></td>
			</tr>
          <?php } ?>
																		
									<!-- Dodaj więcej wierszy zgodnie z potrzebą -->
								</tbody>
								</table>
							</div>
						</div>						
					</div>
				</div>
				
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php get_footer(); ?>