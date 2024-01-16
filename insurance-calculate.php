<?php 
/*
Template Name: insurance-calculate
*/

get_header(); 
?>
				
<!-- Start Contact Us -->
<section class="contact-us section">
	<div class="container">
		<div class="inner">
			<div class="row"> 
				<div class="col-lg-12">
					<div class="contact-us-form">
						<h2>Obliczanie składki OC</h2>
						<p>Proszę wypełnić i wysłać formularz, aby obliczyć składkę ubezpieczenia i otrzymać odpowiedź e-mailem.</p>
						<!-- Form -->
						<form id="calculateInsurance" class="form" method="post" action="/ULS/wp-content/themes/uls/send_mail.php">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" name="name" placeholder="Imię i Nazwisko">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input type="tel" name="phone" placeholder="Telefon">
									</div>
								</div>
								<h2>Dane Pojazdu</h2>
								<div class="col-lg-12">
									<div class="form-group">
									<p class="input-p">Numer rejestracyjny pojazdu (wpisz BRAK, jeśli pojazd nie został jeszcze zarejestrowany w Polsce):</p>
										<input type="text" name="plate" placeholder="ZS XXXXX">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
									<p class="input-p">Marka i model pojazdu:</p>
										<input type="text" name="model" placeholder="np. Audi A3, BMW 3, Mercedes-Benz C200">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
									<p class="input-p">Rok produkcji:</p>
										<input type="text" name="year" placeholder="np. 2023">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
									<p class="input-p">Pojemność silnika (symbol P.1 w dow. rej.):</p>
										<input type="text" name="capacity" placeholder="np. 1598">
									</div>
								</div>
								<div class="col-lg-12">
								<div class="form-group">
									<p class="input-p">Rodzaj paliwa:</p>
									<select name="fuel" class="form-control">
										<option value="benzyna">Benzyna</option>
										<option value="diesel">Diesel</option>
										<option value="benzyna+lpg">Benzyna+LPG</option>
										<option value="inny">Inny</option>
									</select>
								</div>
								</div>
								<h2>Dane Właściciela/właścicieli pojazdu</h2>
								<div class="col-lg-12">
									<div class="form-group">
									<p class="input-p">Imię i nazwisko właściciela:</p>
										<input type="text" name="ownerName" placeholder="Imię i Nazwisko">
									</div>
								</div>
								<div class="col-lg-12">
								<div class="form-group">
									<p class="input-p">Data uzyskania prawa jazdy:</p>
									<input type="date" name="drivingLicenseDate" placeholder="RRRR-MM-DD">
								</div>
								</div>
								<div class="col-lg-12">
								<div class="form-group">
									<p class="input-p">Kod pocztowy zameldowania:</p>
									<input type="text" name="postalCode" placeholder="np. 33-333">
								</div>
								</div>
								<h2>Informacje ogólne</h2>
								<div class="col-lg-12">
									<div class="form-group">
									<p class="input-p">Data rozpoczęcia ochrony:</p>
										<input type="date" name="beginInsuranceDate" placeholder="RRRR-MM-DD">
									</div>
								</div>
								<div class="col-lg-12">
								<div class="form-group">
									<p class="input-p">Miesiąc i rok nabycia tego pojazdu:</p>
									<input type="text" name="vehiclePurchase" placeholder="RRRR-MM-DD">
								</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<p class="input-p">Wiek najmłodszego użytkownika pojazdu:</p>
										<input type="text" name="youngestOwnerAge" placeholder="np. 23">
									</div>
								</div>
								<input type="hidden" name="formType" value="insuranceForm">
								<div class="col-12 checkboxForm">
									<input id="myCheckbox" type="checkbox" class="checkbox" name="privacy-policy" />
									<p>Wyrażam zgodę na przetwarzanie danych osobowych zawartych we wnioskach o zawarcie umowy ubezpieczenia, polisach ubezpieczeniowych oraz dokumentach niezbędnych do zawarcia umowy ubezpieczenia przez ELS Elżbieta Kania z siedzibą w Szczecinie (w dalszej treści zwanej Agencją) w celach:<a style="color:blue;" href="<?php echo site_url('/przetwarzanie-danych'); ?>">Czytaj dalej...</a></p>
								</div>
								<div class="col-lg-12 d-flex justify-content-center">
									<div class="col-6 form-group login-btn">
										<button class="btn" type="submit">Wyślij!</button>
									</div>											
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