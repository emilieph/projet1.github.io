<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Voyage en france</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<?php include('header.php'); ?>

	        <main class="indexMain">
	            <div id="page">
	                <div class="need">
	                    <div id="relax" value="notSelected" name="mainRelaxButton">Me détendre</div>
	                    <div id="activity"  value="notSelected" name="mainActivityButton">Me dépenser</div>
	                    <div id="culture"  value="notSelected" name="mainCultureButton">Me cultiver</div>
	                    <div id="eat"  value="notSelected" name="mainEatButton">Bien manger</div>
	                </div>

	                <section>
	                    <div class="franceMap">
	                        <script src="cmap/France-map.js"></script>
	                        <script>
	                            francefree();
	                        </script>
	                    </div>
	                </section>

	                <div class="suggestion">
	                    <div></div>
	                    <div></div>
	                    <div></div>
	                </div>
	            </div>
		</main>

		<?php
			include('footer.php');
		?>

		<script>
			let canvasMap = document.getElementById('canvasMap');

			let cityPictures = [
				'https://www.lovethispic.com/uploaded_images/215545-Eiffel-Tower-Golden-Sparkle-Paris.gif',
				'https://cruztrav.com/wp-content/uploads/2016/08/bigstock-View-Of-River-Saone-At-Night-51818782.jpg',
				'https://www.kevinandamanda.com/wp-content/uploads/2015/07/nice-france-travel-beach-french-riviera-summer-01-480x720.jpg',
				'https://64.media.tumblr.com/6236470fb3e2da15649aba08318213ce/tumblr_msgw0tobCc1qcp8t5o1_500.gif',
				'https://solaristraveller.com/wp-content/uploads/2017/07/alter_hafen_von_marseillecatoutfrance-robertpalomba_09052024_2.jpg',
				'https://www.tripsavvy.com/thmb/SZPXZbOkG7RjxpWZOP47WOdSxxQ=/2500x1646/filters:no_upscale%28%29:max_bytes%28150000%29:strip_icc%28%29/GettyImages-958672252-5c37865c46e0fb0001e2849b.jpg',
				'https://photocory.files.wordpress.com/2014/09/palace-avignon.jpg',
				'https://www.informationfrance.com/wp-content/uploads/2017/08/74_Annecy1349.jpg',
				'https://skicanadamag.com/wp-content/uploads/2019/06/valdisere-00018617-1.jpg',
				'https://img.theculturetrip.com/1024x682/smart/wp-content/uploads/2020/09/efy8eg.jpg',
				'https://img.theculturetrip.com/1024x682/smart/wp-content/uploads/2020/09/myaprc.jpg',
			];

			relaxPictures = [
				'images/plage_de_deauville.jpg',
				'images/le_mont_blanc.jpg',
				'images/plage_de_la_cote_des_basques.jpg',
				'images/plage_de_lile_vierge.jpg',
				'images/plage_de_pampelonne.jpg',
				'images/plage_de_saint_clair.jpg',
				'images/plage_detretat.jpg',
				'images/plage_dhendaye.jpg',
				'images/plage_du_lac_de_navarrosse.jpg',
				'images/plage_du_sillon.jpg',
				'images/plage_du_touquet.jpg',
				'images/les_grands_jorasses.jpg',
				'images/Parc national des Ecrins.jpg',
				'images/Parc national du Mercantour.jpg',
				'images/la_bastide_de_capelongue.jpeg',
				'images/Parc naturel régional de la Forêt d\'Orient.jpg',
			];

			activityPictures = [
				'images/httpswww.google.commapsplaceVal+Thorens.jpg',
				'images/Chamonix.jpg',
				'images/Traversée des Landes Pyrénées-Atlantiques.resized.jpg',
				'https://www.france-bike.com/typo3temp/_processed_/7/8/csm_2133_cdd7bbb6ab.jpg',
				'images/Tour du lac d_Annecy Haute-Savoie.resized.jpg',
				'https://www.valdisere.com/img/labase453x400/rando453400.jpg',
				'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Beach_volleyball_%284701437938%29.jpg/300px-Beach_volleyball_%284701437938%29.jpg',
				'images/Les Arcs Alpes.jpg',
				'https://www.travelwithachallenge.com/wp-content/uploads/2017/02/Cliff-Walk350.jpg',
				'images/Route de la vallée de la Loire Maine-et-Loire www.loireavelo.fr.resized.jpg',
			];

			culturePictures = [
				'images/beaux_arts_nantes.jpg',
				'images/chateau_chaumont.jpg',
				'images/chateau_chenonceau.jpg',
				'images/musee_vinci_amboise.jpg',
				'images/musee_beaux_arts_nice.jpg',
				'images/musee_confluence_lyon.jpg',
				'images/musee_debarquement.jpg',
				'images/arc_trionmphe_paris.jpg',
				'images/basilique_fourviere_lyon.jpg',
				'images/cathedrale_bourges.jpg',
				'images/Le Mont Saint Michel Normandie.jpg',
			];

			eatPictures = [
				'images/troisgros_le_bois_sans_feuilles.jpg',
				'images/yoann_conte.jpg',
				'images/regis_et_jacques_marcon.jpeg',
				'images/meurin.jpg',
				'images/mirazur.jpg',
				'images/maison_jeunet.jpg',
				'images/maison_lameloise.png',
				'images/le_skiff_club.jpg',
				'images/le_clos_des_sens.jpg',
				'images/le_petit_nice.jpg',
				'images/la_vague_d_or.jpg',
				'images/le_1947_au_cheval_blanc.jpg',
				'images/la_grande_maison_de_bernard_magrez.jpg',
				'images/les_pres_d_eugenie.jpg',
				'images/christophe_bacquié.jpg',
				'images/flocons_de_sel.jpg',
				'images/georges_blanc.jpg',
				'images/guy_savoy.jpg',
			];


			/*----------/ Need | Besoin /-----------*/

			function randomNumber(min, max, integer) {
				if (!integer) {
					return Math.random() * (max - min) + min;
				} else {
					return Math.floor(Math.random() * (max - min) + min);
				}
			}

			let need = document.querySelectorAll('.need div'),
				suggestion = document.querySelector('.suggestion'),
				needSelected = '';				

			function displayRandomSuggestions() {
				let i = 0;

				let randNumber = null;

				let picturesToDisplay = null;

				if (needSelected == 'relax') {
					picturesToDisplay = relaxPictures;
				} else if (needSelected == 'culture') {
					picturesToDisplay = culturePictures;
				} else if (needSelected == 'activity') {
					picturesToDisplay = activityPictures;
				} else if (needSelected == 'eat') {
					picturesToDisplay = eatPictures;
				} else {
					picturesToDisplay = cityPictures;
				}

				let idPicturesDisplayed = [];

				let thePictureHasAlreadyBeenDisplayed = false;

				while (i < 3) {
					randNumber = randomNumber(0, picturesToDisplay.length - 1, true);

					thePictureHasAlreadyBeenDisplayed = false;

					if (i == 0) {
						suggestion.innerHTML = '<div title="' + picturesToDisplay[randNumber] + '" style="background: url(\'' + picturesToDisplay[randNumber] + '\'); background-size: 100% 100%;"></div>';
						idPicturesDisplayed.push(randNumber);
						i++;
					} else {
						for (let j = 0, d = idPicturesDisplayed.length; j < d; j++) {
							if (idPicturesDisplayed[j] == randNumber) {
								thePictureHasAlreadyBeenDisplayed = true;
							}
						}

						if (thePictureHasAlreadyBeenDisplayed == false) {
							suggestion.innerHTML += '<div title="' + picturesToDisplay[randNumber] + '" style="background: url(\'' + picturesToDisplay[randNumber] + '\'); background-size: 100% 100%;"></div>';
							i++;
							idPicturesDisplayed.push(randNumber);
						}
					}
				}

				setTimeout(function() {
					displayRandomSuggestions();
				}, 4000);
			}

			displayRandomSuggestions();

			for (let i = 0, c = need.length; i < c; i++) {
				need[i].addEventListener('click', function(e) {
					didTheUserClickOnTheButton = true;

					suggestion.innerHTML = '';

					if (this.value == 'selected') {	
						this.value = 'notSelected';

						this.style.background = '#424862';
						this.style.color = 'white';
					} else {
						for (let j = 0, d = need.length; j < d; j++) {
							if (need[j].value == 'selected') {
								need[j].value = 'notSelected';
								need[j].style.background = '#424862';
								need[j].style.color = 'white';
							}
						}

						needSelected = this.id;

						this.value = 'selected';

						this.style.background = '#BFC4D5';
						this.style.color = '#424862';
					}
				});
			}
		</script>
	</body>
</html>
