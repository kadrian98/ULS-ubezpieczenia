<?php 
/*
Template Name: insurance-calculate
*/

get_header(); 
?>
			
		
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container w-50">
				<div class="inner">
					<div class="row"> 
						<!-- <div class="col-lg-6">
							<div class="contact-us-left">								
								<div id="myMap"></div>							
							</div>
						</div> -->
						<div class="col-lg-12">
							<div class="contact-us-form">
								<h2>Obliczanie składki OC</h2>
								<p>Proszę wypełnić i wysłać formularz, aby obliczyć składkę ubezpieczenia i otrzymać odpowiedź e-mailem.</p>
								<!-- Form -->
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="name" placeholder="Imię i Nazwisko" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Telefon" required="">
											</div>
										</div>
										<h2>Dane Pojazdu</h2>
                                        <div class="col-lg-12">
											<div class="form-group">
                                            <p class="input-p">Numer rejestracyjny pojazdu (wpisz BRAK, jeśli pojazd nie został jeszcze zarejestrowany w Polsce):</p>
												<input type="text" name="phone" placeholder="ZS XXXXX" required="">
											</div>
										</div>
                                        <h2>Dane Właściciela/właścicieli pojazdu</h2>
                                        <div class="col-lg-12">
											<div class="form-group">
                                            <p class="input-p">Imię i nazwisko właściciela:</p>
												<input type="text" name="phone" placeholder="Imię i Nazwisko" required="">
											</div>
										</div>
                                        <h2>Informacje ogólne</h2>
                                        <div class="col-lg-12">
											<div class="form-group">
                                            <p class="input-p">Data rozpoczęcia ochrony:</p>
												<input type="text" name="phone" required="">
											</div>
										</div>
										<div class="col-lg-12 d-flex justify-content-center">
											<div class="col-6 form-group login-btn">
												<button class="btn" type="submit">Wyślij!</button>
											</div>
											<!-- <div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div> -->
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>				
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php get_footer(); ?>