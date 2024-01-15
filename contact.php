<?php 
/*
Template Name: kontakt
*/

get_header(); 
?>
			
		
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<!-- <div class="col-lg-6">
							<div class="contact-us-left">								
								<div id="myMap"></div>							
							</div>
						</div> -->
						<div class="col-lg-12">
							<div class="contact-us-form">
								<h2>Skontaktuj się z nami!</h2>
								<p>Jeśli masz jakiekolwiek pytania, śmiało skontaktuj się z nami.</p>
								<!-- Form -->
								<form class="form" id="sendingForm" method="post" action="/ULS/wp-content/themes/uls/send_mail.php">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Imię i Nazwisko">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="tel" name="phone" placeholder="Telefon">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Wiadomość"></textarea>
											</div>
										</div>
										<input type="hidden" name="formType" value="contactForm">
										<div class="col-lg-12">
    <div class="col-6 m-auto form-group login-btn">
        <button class="btn" type="submit">Wyślij!</button>
        <!-- <div class="checkbox">
            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
        </div> -->
    </div>
    <div class="col-12 checkboxForm">
        <input id="myCheckbox" type="checkbox" class="checkbox" name="privacy-policy" />
        <p>Wyrażam zgodę na przetwarzanie danych osobowych zawartych we wnioskach o zawarcie umowy ubezpieczenia, polisach ubezpieczeniowych oraz dokumentach niezbędnych do zawarcia umowy ubezpieczenia przez ELS Elżbieta Kania z siedzibą w Szczecinie (w dalszej treści zwanej Agencją) w celach:<a style="color:blue;" href="<?php echo site_url('/przetwarzanie-danych'); ?>"> Czytaj dalej...</a></p>
    </div>
</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3><a href="tel:+485502110382">502-110-382</a></h3>
									<p><a href="mailto:kania.elzbieta.g@gmail.com">kania.elzbieta.g@gmail.com</a></p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>ULS Elżbieta Kania</h3>									
									<p><a href="https://maps.app.goo.gl/yMB1C34X6AMW6GYS6">Szczecin</a></p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Godziny</h3>
									<p>Kontakt 24/7, bez ograniczeń.</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php get_footer(); ?>