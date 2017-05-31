<?php
/*
* Template Name: Kontakt
*/

get_header();
?>
<div class="row">
	<div class="col-md-4 col-md-push-8 sidebar">
		<table class="contact-info">
			<tr>
				<td><i class="fa fa-user"></i></td>
				<td>Marina Mäkelä</td>
			</tr>
			<tr>
				<td><i class="fa fa-envelope"></i></td>
				<td><a href="mailto:marina.makela@hotmail.com">marina.makela@hotmail.com</a></td>
			</tr>
			<tr>
				<td><i class="fa fa-phone"></i></td>
				<td><a href="tel:+46761747578">+46 76 174 75 78</a></td>
			</tr>
			<tr>
				<td><i class="fa fa-home"></i></td>
				<td>
					<a target="_blank" href="https://www.google.se/maps/place/Svandammsv%C3%A4gen+19,+126+35+H%C3%A4gersten/@59.3014324,18.0094921,17z/data=!3m1!4b1!4m5!3m4!1s0x465f77b1ac08443f:0x6e1cd75fa53386cb!8m2!3d59.3014324!4d18.0116808">
						<p>Svandammsvägen 19</p>
						<p>Hägersten 12635</p>
						<p>Stockholm</p>
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-8 col-md-pull-4 main contact">
		
		<form id="contact-form" class="form-horizontal" action="#">
			<div class="form-group">
				<h3 class="col-md-6 col-md-offset-6 title">Kontakta mig</h3>
			</div>
			<div class="form-group /has-error">
				<label class="col-md-3" for="name">Namn</label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="name" name="name" placeholder="Namn" required>
				</div>
			</div>
			<div class="form-group /has-success">
				<label class="col-md-3" for="email">E-post Adress</label>
				<div class="col-md-9">
					<input type="email" class="form-control" id="email" name="email" placeholder="E-post Adress" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3" for="telephone">Telefonummer</label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telefonnummer">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3" for="message">Meddelande</label>
				<div class="col-md-9">
					<textarea class="form-control" id="message" name="message" rows="7" placeholder="Skriv ditt meddelande..." required></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-3 col-md-9">
					<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Ditt medellande kunde inte skickas!</div>
					<div class="alert alert-success" role="alert"><i class="fa fa-check-circle"></i> Medellandet har skickats!</div>
					<button type="submit" class="btn btn-default">
						<i class="loading fa fa-circle-o-notch fa-spin"></i>
						<span class="message">Skicka!</span>
					</button>
				</div>
			</div>
			
		</form>
	</div>
</div>
<?php get_footer(); ?>