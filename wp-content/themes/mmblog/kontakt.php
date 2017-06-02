<?php
/*
* Template Name: Kontakt
*/

get_header();
?>
<div class="jumbotron">
	<span class="title">Kontakt</span>
	<p>Skicka mig ett meddellande!</p>
</div>
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
		<?= apply_filters("the_content", $post->post_content) ?>
	</div>
</div>
<?php get_footer(); ?>
