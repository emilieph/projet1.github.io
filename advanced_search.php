<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Recherche avancée</title>
		<link rel="stylesheet" href="style2.css" />
	</head>

	<body>
		<?php

		require_once 'header.php';
//		include_once 'search_results.php';
		include_once 'functions.php';


if(isset($_GET['region'])){
            $mapRegion = trim($_GET['region']);
        }elseif(isset($_GET['need'])){
            $buttonBesoin = trim($_GET['need']);
        }else{
            $infosSearches = $_GET;
        }
		?>

		<main id="page">

		<!-- 
			See screen size with ( updateWidthScreen() )
			<p id="paragraph"></p>
		-->

		<?php

		/* if (isset($mapRegion) || isset($buttonBesoin)){
		    if(isset($mapRegion)){
		        
		    }
		} */

		//$mapRegion = "Auvergne-Rhône-Alpes";

		include_once 'array_informations.php';



		$titrePage = $_SERVER['PHP_SELF'];


		?>

		<!-- <h1><?= $titrePage ?></h1> -->

		<form action="/advanced_search.php" method="GET" class="form_advanced_search">
			<div class="selectNeed">
				<div class="indifferent">
					<label for="indiferent"><input type="radio"       value="indifferent" name="besoin"       id="indiferent">Indiferent</label>
				</div>

				<?php
					foreach($nomValues as $besoin => $tipesBesoins) {
					?>
						<div class="categoryNeed">
							<label class="labelCategoryNeed" for="<?=$besoin?>"><input type="radio" id="<?=$besoin?>" name="besoin" value="<?=$besoin?>"><?=$besoin?></label>

							<div class="specificNeed" />
								<?php
									foreach($tipesBesoins as $tipeBesoin) {
									?>
										<div>
											<label for="<?php echo $tipeBesoin; ?>"><input id="<?php echo $tipeBesoin; ?>" type="checkbox" name="tipeBesoin[]" value="<?=$tipeBesoin?>"><?=$tipeBesoin?></label><br/>
										</div>
									<?php
									}
								?>
							</div>
						</div>
					<?php
					}
				?>
			</div>

			<div class="blocForm">
				<div class="regionSelection">
					<label for="regions">Regions :</label>
					<select name="regions" id="regions">
						<option value="">--Toutes les regions--</option>
						<?php
							foreach($regions as $region) {
							?>  
								<option value="<?= $region ?>"><?= $region ?></option>
							<?php
							}
						?>
					 </select>
				</div>

				<button type="submit">recherche</button>
			</div>
		</form>

		<?php

		//Revice array with images and informations to show;
		$tablesImages = [];

		    //Checks if the user has not chosen an option from the first page or in the second page
		    if (!isset($mapRegion) &&  !isset($buttonBesoin) && !isset($infosSearches)){
		        echo 'teste';
		        //show all informations, 3 images for type of needs
		        foreach($allVarNeeds as $varneed){
		            $tablesImages[] = randonImages($varneed);
		        }
		        //var_dump($tablesImages);
		    //If the user chooses a region on the map of the main page
		    }elseif(isset($mapRegion) && !isset($buttonBesoin) && !isset($infosSearches)){
		         //Show all informations by region: 
		            //var_dump($allVarNeeds);
		        foreach($allVarNeeds as $varneeds){
		            foreach($varneeds as $nonNeed => $infosNeeds){
		            //var_dump($varneeds);
		               if($infosNeeds['region'] === $mapRegion){
		                    $tablesImages[$nonNeed] = $infosNeeds;
		               }
		            }
		        } 
		       
		    //If the user click on one of the buttons on the main page (needs)
		    }elseif(!isset($mapRegion) && isset($buttonBesoin) && !isset($infosSearches)){
		        if($buttonBesoin === 'mainRelaxButton'){
		            $tablesImages = $needsRelax;
		        }elseif($buttonBesoin === 'mainActivityButton'){
		            $tablesImages = $needsSport;
		        }elseif($buttonBesoin === 'mainCultureButton'){
		            $tablesImages = $needsCulture;
		        }elseif($buttonBesoin === 'mainEatButton'){
		            $tablesImages = $needsFood;
		        }
		    //returns the information the user selected in the form
		    }elseif(!isset($mapRegion) && !isset($buttonBesoin) && isset($infosSearches)){
		        //var_dump($infosSearches);
		        //$tablesImages = $needsCulture;
		        //var_dump($infosSearches);
		        // If the form is empty.
		        if(empty($infosSearches['regions']) && !isset($infosSearches['besoin']) && !isset($infosSearches['tipeBesoin'])){
		            //echo 'blalballa';
		            //show all informations, 3 images for type of needs
		            foreach($allVarNeeds as $varneed){
		                $tablesImages[] = randonImages($varneed);
		            }

		        //If the user choose only need in the form.
		        }elseif(empty($infosSearches['regions']) && isset($infosSearches['besoin']) && !isset($infosSearches['tipeBesoin']) ){
		           
		           echo 'blalalal';
		$newNeed = $infosSearches['besoin'];
                    if($newNeed === 'Me detendre'){
                        $pri = $needsRelax;
                    }elseif($newNeed === 'Me Depenser'){
                        $pri = $needsSport;
                    }elseif($newNeed === 'Me Cultiver'){
                        $pri = $needsCulture;
                    }elseif($newNeed === 'Bien Manger'){
                        $pri = $needsFood;
                    }
                    foreach($pri as $namesTipes){
                        foreach($namesTipes as $nameTipe){
                            $tablesImages[] = $nameTipe;
                        }
                    }
		        //if the user choose a kind of need (ex: plages, montagnes, ...)
		        } elseif(empty($infosSearches['regions']) && !isset($infosSearches['besoin']) && isset($infosSearches['tipeBesoin']) ){
		            //create a new array with kind of needs
		            foreach($infosSearches['tipeBesoin'] as $tipeBesoin){
		                $arrayBesoins[]= $tipeBesoin; 
		            } 
		            //coletar todos os tipos escolhidos
		            foreach($arrayBesoins as $arrayBesoin){
		               switch($arrayBesoin){
		                   case 'Plages':
		                    $tablesImages = $beaches;
		                   break;
		                   case 'Montagnes':
		                    $tablesImages = $mountains;
		                   break;
		                   case 'Parques':
		                    $tablesImages = $parks;
		                   break;
		                   case 'Ski':
		                    $tablesImages = $skiStations;
		                   break;
		                   case 'Vélo':
		                    $tablesImages = $bike;
		                   break;
		                   case 'Randonée':
		                    $tablesImages = $hiking;
		                   break;
		                   case 'Musées':
		                    $tablesImages = $museums;
		                   break;
		                   case 'Théatres':
		                    $tablesImages = $theaters;
		                   break;
		                   case 'Monuments':
		                    $tablesImages = $monuments;
		                   break;
		                   case 'Restaurants Eloilées':
		                    $tablesImages = $starRestaurants;
		                   break;
		                   case 'Top tripadvisor':
		                    $tablesImages = $topRestaurants;
		                   break;
		                 
		               }
		               var_dump($tablesImages);
		            }
		            
		        }elseif(!empty($infosSearches['regions']) && !isset($infosSearches['besoin']) && !isset($infosSearches['tipeBesoin']) ){
		             foreach($allVarNeeds as $varneeds){
		                foreach($varneeds as $nonNeed => $infosNeeds){
		                //var_dump($varneeds);
		                    if($infosNeeds['region'] === $infosSearches['regions']){
		                            $tablesImages[$nonNeed] = $infosNeeds;
		                    }
		                }
		            } 
		        }elseif(!empty($infosSearches['regions']) && isset($infosSearches['besoin']) && isset($infosSearches['tipeBesoin']) ){
		            foreach($allVarNeeds as $varneeds){
		                foreach($varneeds as $nonNeed => $infosNeeds){
		                //var_dump($varneeds);
		                    if($infosNeeds['region'] === $infosSearches['regions']){
		                            $tablesImages[$nonNeed] = $infosNeeds;
		                    }
		                }
		            } 
		        }
		    }   


		if(empty($tablesImages)) {
			echo "il n'y a aucune image enregistre.";
		} else {
			?>

			<div class="resultSearch">
				<?php
					foreach($tablesImages as $name => $infosRestaurant) {
						echo '<div class="pictureResult">';

						echo '<div class="namePicture">' . $name . '</div>';

						$chaine = '';

						foreach($infosRestaurant as $typeInfo => $info) {
							if ($typeInfo == 'image') {
								if (!preg_match('#images/#', $info)) {
									$chaine = 'images/';
								} else {
									$chaine = '';
								}

								echo '<img class="picture" src="' . $chaine . $info . '" alt="' . $name . '" />';
							} else if ($typeInfo == 'region') {
								echo '<div class="regionPicture">' . $info . '</div>';
							} else if ($typeInfo == 'maps') {
								echo '<a href="' . $info . '" class="googleMapLinkPicture">Maps</a>';
							}
						}

						echo '</div>';
					}
				?>
			</div>

			<?php
		}
		?>

		</main>

		<?php

		require_once 'footer.php';

		?>

		<script>
/*
			let paragraph = document.getElementById('paragraph');

			function updateWidthScreen() {
				paragraph.innerHTML = getComputedStyle(document.body).width;

				setTimeout(updateWidthScreen, 10);
			}

			updateWidthScreen();
*/


			let typeNeed = document.querySelectorAll('input[type=radio]');

			let specificNeed = document.querySelectorAll('.specificNeed');

			for (let j = 0, d = specificNeed.length; j < d; j++) {
				specificNeed[j].style.display = 'none';
			}

			let lastListOfSpecificNeedDisplayed = '';

			for (let i = 0, c = typeNeed.length; i < c; i++) {
				typeNeed[i].addEventListener('click', function(e) {
					if (lastListOfSpecificNeedDisplayed != '') {
						lastListOfSpecificNeedDisplayed.style.display = 'none';
					}

					for (let i = 0, c = typeNeed.length; i < c; i++) {
						if (typeNeed[i].checked && typeNeed[i].value != 'indifferent') {
							typeNeed[i].parentNode.nextElementSibling.style.display = 'block';

							lastListOfSpecificNeedDisplayed = typeNeed[i].parentNode.nextElementSibling;

							lastListOfSpecificNeedDisplayed.addEventListener('mouseout', function(e) {
								let relatedTarget = e.relatedTarget;

								while (relatedTarget != this && relatedTarget.nodeName != 'BODY' && relatedTarget != 'document') {
									relatedTarget = relatedTarget.parentNode;
								}

								if (relatedTarget != this) {
									this.style.display = 'none';
								}
							});
						}
					}
				});
			}
		</script>
	</body>
</html>
