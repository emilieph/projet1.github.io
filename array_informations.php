<?php
// Array all regions in france
$regions = 
[
   "Auvergne-Rhône-Alpes",
    "Bourgogne-Franche-Comté",
    "Bretagne",
    "Centre-Val de Loire",
    "Corse",
    "Grand Est",
    "Hauts-de-France",
    "Ile-de-France",
    "Normandie",
    "Nouvelle-Aquitaine",
    "Occitanie",
    "Pays de la Loire",
    "Provence-Alpes-Côte d’Azur",

];

//array informatiosn beaches
$beaches = 
[
    "Plage de Pampelonne" => ['image' => "images/plage_de_pampelonne.jpg", 'maps' => "https://www.google.fr/maps/place/Plage+de+Pampelonne/@43.2265053,6.6463011,14z/data=!3m1!4b1!4m5!3m4!1s0x12cec6b4dd5567cd:0xa6708424604036aa!8m2!3d43.227051!4d6.6621848", 'region' => "Provence-Alpes-Côte d’Azur"],
    "Plage de la Côte des Basques" => ['image' => "images/plage_de_la_cote_des_basques.jpg", 'maps' => "https://www.google.fr/maps/search/Plage+de+la+C%C3%B4te+des+Basques/@43.4749436,-1.5781203,15z/data=!3m1!4b1", 'region' => "Nouvelle-Aquitaine"],
    "Plage de l’île Vierge" => ['image' => "images/plage_de_lile_vierge.jpg", 'maps' => "https://www.google.fr/maps/search/+Plage+de+l%E2%80%99%C3%AEle+Vierge/@48.2012774,-4.5211738,15z/data=!3m1!4b1", 'region' => "Bretagne"],
    "Plage Paloma" => ['image' => "images/plage_paloma.jpg", 'maps' => "https://www.google.fr/maps/place/Paloma+Beach/@43.4519566,5.0502662,6.25z/data=!4m8!1m2!2m1!1sPlage+Paloma!3m4!1s0x12cddb66482bf0b1:0xed3be11d7a08539d!8m2!3d43.6861345!4d7.3421281", 'region' => "Provence-Alpes-Côte d’Azur"]
];
//array informations mountains
$mountains = 
[
    'Le Mont Blanc' => ['image' => 'images/le_mont_blanc.jpg', 'maps' => 'https://www.google.fr/maps/place/Mont+Blanc/@45.8326364,6.8564201,15z/data=!3m1!4b1!4m5!3m4!1s0x4789459fb534be51:0xa908728c5dcec4c0!8m2!3d45.8326223!4d6.8651749', 'region' => "Auvergne-Rhône-Alpes"],
    'La barre des Écrins' => ['image' => 'images/la_barre_des_ecrins.jpg', 'maps' => 'linkMaps', 'region' => "Auvergne-Rhône-Alpes"],
    'Le mont Ventoux' => ['image' => 'images/le_mont_ventoux.jpg', 'maps' => 'https://www.google.fr/maps/place/Mont+Ventoux/@44.1740997,5.2699249,15z/data=!3m1!4b1!4m5!3m4!1s0x12ca645aaf6f7367:0xd3f24ac5c0a1bcd!8m2!3d44.1740851!4d5.2786797', 'region' => "Provence-Alpes-Côte d’Azur"],
    'Le pic du Canigou' => ['image' => 'images/le_pic_du_canigou.jpg', 'maps' => 'https://www.google.fr/maps/place/Pic+du+Canigou/@42.5188972,2.4479012,15z/data=!3m1!4b1!4m5!3m4!1s0x12a5555394db15c3:0x36d3e467b0d11660!8m2!3d42.5188823!4d2.456656', 'region' => "Occitanie"],
    'Le Puy Mary' => ['image' => 'images/le_puy_mary.jpg', 'maps' => 'https://www.google.fr/maps/place/Puy+Mary/@45.1094493,2.6674172,15z/data=!3m1!4b1!4m5!3m4!1s0x47f7e5835a9ebafd:0xd0be4dddf4b68a84!8m2!3d45.109435!4d2.676172', 'region' => "Auvergne-Rhône-Alpes"]
];

//array informations parks
$parks = 
[
    'Parc national des ecrins' => ['image' => 'images/Parc national des Ecrins.jpg', 'maps' => 'https://www.google.fr/maps/place/Parc+national+des+Calanques/@43.2167124,5.4245782,15z/data=!4m8!1m2!2m1!1sParc+national+des+Calanques!3m4!1s0x12c9b835cfc421c9:0x1ab7a709070f209e!8m2!3d43.2181902!4d5.4313296', 'region' => "Auvergne-Rhône-Alpes"],
    'Parc national de la Vanoise' => ['image' => 'images/parc_national_de_calanques.jpg', 'maps' => 'https://www.google.fr/maps/place/Parc+national+de+la+Vanoise/@45.3902213,6.8454187,14z/data=!4m8!1m2!2m1!1sParc+national+de+la+Vanoise!3m4!1s0x47899d82360e5399:0xb5041973fef91e16!8m2!3d45.3902213!4d6.8629282', 'region' => "Auvergne-Rhône-Alpes"],
    'Parc national du Mercantour' => ['image' => 'images/Parc national du Mercantour.jpg', 'maps' => 'https://www.google.fr/maps/place/Parc+national+du+Mercantour/@44.1521572,6.9992229,17z/data=!3m1!4b1!4m5!3m4!1s0x12cdaf6678af879d:0xcabc15aee7b89386!8m2!3d44.1521534!4d7.0014116', 'region' => 'Alpes-de-Haute-Provence'],
    'Parc national des Cévennes' => ['image' => 'images/Parc national des Cévennes.jpg','maps' => "https://www.google.fr/maps/place/Parc+national+des+C%C3%A9vennes/@44.264159,3.7100149,17z/data=!3m1!4b1!4m5!3m4!1s0x12b385f060a79ba9:0x6764683c7e0b2ae1!8m2!3d44.2641552!4d3.7122036", 'region' => "Auvergne-Rhône-Alpes"],
    'Parc national des Calanques' => ['image' => "images/parc_national_de_calanques.jpg", 'region' => "Provence-Alpes-Côte d’Azur"]
];

//arrar informations sky stations$parks $skiStations $bike $hiking $museums $theaters $monuments
$skiStations = 
[
    'chamonix' => ['image' => 'images/Chamonix.jpg', 'maps' => 'https://www.google.com/maps/place/Le+Br%C3%A9vent+-+La+Fl%C3%A9g%C3%A8re+(Chamonix-Mont+Blanc)/@45.9253361,6.7305407,11z/data=!4m8!1m2!2m1!1sstation+ski+chamonix!3m4!1s0x47894deca8d72109:0x721d435b7888a8a8!8m2!3d45.9253361!4d6.8706164', 'region' => "Auvergne-Rhône-Alpes"],
    'tignes' => ['image' => 'images/Chamonix.jpg', 'maps' => 'https://www.google.com/maps/place/Tignes+Ski+Resort/@45.4745712,6.8172417,11z/data=!4m13!1m7!3m6!1s0x47890c63287d7ebb:0x408ab2ae4baa8b0!2s73320+Tignes!3b1!8m2!3d45.4683226!4d6.9055785!3m4!1s0x478974b6e64a1b11:0x9b3c65ed86a37ce1!8m2!3d45.4688593!4d6.9068813', 'region' => "Auvergne-Rhône-Alpes"],
    'courchevel ' => ['image' => 'images/Chamonix.jpg', 'maps' => 'https://www.google.com/maps/place/Courchevel+Tourisme/@45.4153639,6.5899569,13z/data=!4m8!1m2!2m1!1scourchevel!3m4!1s0x0:0xccb92551837472bc!8m2!3d45.4146597!4d6.6346908', 'region' => "Auvergne-Rhône-Alpes"],
    'meribel' => ['image' => 'images/Chamonix.jpg', 'maps' => 'https://www.google.com/maps/place/M%C3%A9ribel,+73550+Les+Allues/@45.3952112,6.5520017,14z/data=!3m1!4b1!4m8!1m2!2m1!1smeribel!3m4!1s0x4789803bb48c49db:0xa08ab2d832bc130!8m2!3d45.396883!4d6.5651733', 'region' => "Auvergne-Rhône-Alpes"],
];
//array informations bike
$bike = 
[
    "AcPentes de l'Alpes d'Huez" => ['image' => "Pentes de l_Alpe d_Huez Isère www.alpedhuez.com.jpg", 'maps' => "https://www.google.com/maps/place/Alpe+d'Huez/@45.0906281,6.0627515,17z/data=!3m1!4b1!4m8!3m7!1s0x478a6a4e2672c2cb:0x81ed3ba556e02048!5m2!4m1!1i2!8m2!3d45.0906281!4d6.0649402", 'region' => "Auvergne-Rhône-Alpes"],
    "Piste des Forts" => ['image' => "Piste des forts de Strasbourg Alsace www.otstrasbourg.fr.resized.jpg", 'maps' => "https://www.google.com/maps/place/Office+de+Tourisme+Strasbourg+et+sa+R%C3%A9gion/@48.5819927,7.7477426,17z/data=!3m1!4b1!4m5!3m4!1s0x4796c85254bfe379:0xe0d9c4df12f29683!8m2!3d48.5819927!4d7.7499313", 'region' => "Grand Est"],
    "Région des Lacs" => ['image' => "Région des Lacs Jura.resized.jpg", 'maps' => "https://www.google.com/maps/search/R%C3%A9gion+des+Lacs+Jura.jpg/@46.7819516,5.1688343,9z/data=!3m1!4b1", 'region' => "Bourgogne-Franche-Comté"],
    "Loire à vélo" => ['image' => "Vélo-voie verte du canal des Deux-Mers Tarn-et-Garonne  www.canal-et-voie-verte.com.resized.jpg", 'maps' => "https://www.google.com/maps/search/Loire+Maine-et-Loire+www.loireavelo.fr.jpg/@47.2750317,-2.1389901,14z/data=!3m1!4b1", 'region' => "Auvergne-Rhône-Alpes"],
    "Routes du Luberon " => ['image' => "Routes du Luberon Vaucluse.resized.jpg", 'maps' => "https://www.google.com/maps/place/Massif+du+Luberon/@43.7961091,5.2063794,14z/data=!3m1!4b1!4m5!3m4!1s0x12ca05327ef7b8f5:0xd9a18dee691148b0!8m2!3d43.796111!4d5.223889", 'region' => "Provence-Alpes-Côte d’Azur"]
];
//array informations bike hiking
$hiking = 
[
    'randonnee1' => ['image' => 'linkImage', 'maps' => 'linkMaps', 'region' => 'nomRegion'],
    'randonnee2' => ['image' => 'linkImage', 'maps' => 'linkMaps', 'region' => 'nomRegion'],
    'randonnee3' => ['image' => 'linkImage', 'maps' => 'linkMaps', 'region' => 'nomRegion'],
    'randonnee4' => ['image' => 'linkImage', 'maps' => 'linkMaps', 'region' => 'nomRegion'],
    'randonnee5' => ['image' => 'linkImage', 'maps' => 'linkMaps', 'region' => 'nomRegion']
];

//array informations museums
//array informations museums
$museums = 
[
    "Musée Beaux Arts Nantes" => ['image' => 'beaux_arts_nantes.jpg', 'maps' => "https://www.google.fr/maps/place/Mus%C3%A9e+d'Arts+de+Nantes/@47.2195434,-1.5496489,17z/data=!4m12!1m6!3m5!1s0x4805eebc6f4d82f1:0x263a3cac2b4a5342!2sMus%C3%A9e+d'Arts+de+Nantes!8m2!3d47.2195434!4d-1.5474602!3m4!1s0x4805eebc6f4d82f1:0x263a3cac2b4a5342!8m2!3d47.2195434!4d-1.5474602?hl=fr&authuser=0", 'region' => "Pays de la Loire"],
    "chateau de Chaumont" => ['image' => "chateau_chaumont.jpg", 'maps' => "https://www.google.fr/maps/place/Ch%C3%A2teau+de+Chaumont/@47.4790337,1.1797273,17z/data=!4m12!1m6!3m5!1s0x47e352f88536801f:0x1ea27e2e0fd9aa2b!2sCh%C3%A2teau+de+Chaumont!8m2!3d47.4790337!4d1.181916!3m4!1s0x47e352f88536801f:0x1ea27e2e0fd9aa2b!8m2!3d47.4790337!4d1.181916?hl=fr&authuser=0", 'region' => "Centre-Val de Loire"],
    "chateau de Chenonceau" => ['image' => "chateau_chenonceau.jpg", 'maps' => "https://www.google.fr/maps/place/Ch%C3%A2teau+de+Chenonceau/@47.3248696,1.0681118,17z/data=!4m12!1m6!3m5!1s0x47fcb0d5d9a0a8a1:0x261259efc9ff1001!2sCh%C3%A2teau+de+Chenonceau!8m2!3d47.3248696!4d1.0703005!3m4!1s0x47fcb0d5d9a0a8a1:0x261259efc9ff1001!8m2!3d47.3248696!4d1.0703005?hl=fr&authuser=0", 'region' => "Grand Est"],
    "MUCEM" => ['image' => "MUCEM_Marseille.jpg", 'maps' => "https://www.google.fr/maps/place/Mucem+%E2%80%93+Mus%C3%A9e+des+civilisations+de+l'Europe+et+de+la+M%C3%A9diterran%C3%A9e/@43.2966941,5.3588938,17z/data=!4m12!1m6!3m5!1s0x12c9c09a8f9df3ed:0xa5f38246ce5239fe!2sMucem+%E2%80%93+Mus%C3%A9e+des+civilisations+de+l'Europe+et+de+la+M%C3%A9diterran%C3%A9e!8m2!3d43.2966941!4d5.3610825!3m4!1s0x12c9c09a8f9df3ed:0xa5f38246ce5239fe!8m2!3d43.2966941!4d5.3610825?hl=fr&authuser=0", 'region' => "Provence-Alpes-Côte d’Azur"],
    "Musée des Beaux Arts Nice" => ['image' => "musee_beaux_arts_nice.jpg", 'maps' => "https://www.google.fr/maps/place/Mus%C3%A9e+des+Beaux-Arts+de+Nice/@43.6945205,7.2466488,17z/data=!3m1!4b1!4m5!3m4!1s0x12cdd06caaf2f5eb:0x58b88382e18e5e5d!8m2!3d43.6945205!4d7.2488375?hl=fr&authuser=0", 'region' => "Provence-Alpes-Côte d’Azur"],
    "Musée Confluence" => ['image' => "musee_confluence_lyon.jpg", 'maps' => "https://www.google.fr/maps/place/Mus%C3%A9e+des+Confluences/@45.7327172,4.8160825,17z/data=!4m12!1m6!3m5!1s0x47f4eaeddd6c9055:0xae3e2900f5f2c337!2sMus%C3%A9e+des+Confluences!8m2!3d45.7326433!4d4.8182308!3m4!1s0x47f4eaeddd6c9055:0xae3e2900f5f2c337!8m2!3d45.7326433!4d4.8182308?hl=fr&authuser=0", 'region' => "Auvergne-Rhône-Alpes"],
    "Musée du debarquement de Utah Beach" => ['image' => "musee_debarquement.jpg", 'maps' => "https://www.google.fr/maps/place/Mus%C3%A9e+du+D%C3%A9barquement+de+Utah+Beach/@49.4154073,-1.1767967,17z/data=!3m1!4b1!4m5!3m4!1s0x480b77f2d5bf87ff:0xc8c14f63f0b361f6!8m2!3d49.4154073!4d-1.174608?hl=fr&authuser=0", 'region' => "Normandie"]
];

//array informations theaters
$theaters =
[
    "Grand Theatre de Bordeaux" => ['image' => "images/grand_theatre_bordeaux.jpg", 'maps' => 'https://www.google.fr/maps/place/Op%C3%A9ra+National+de+Bordeaux+-+Grand-Th%C3%A9%C3%A2tre/@44.8425689,-0.5760007,17z/data=!3m1!4b1!4m5!3m4!1s0xd5527da44cfc085:0x753333f9128100e1!8m2!3d44.8425689!4d-0.573812?hl=fr&authuser=0', 'region' => "Nouvelle-Aquitaine"],
    'Moulin Rouge' => ['image' => 'images/moulin_rouge_paris.jpg', 'maps' => 'https://www.google.fr/maps/place/Moulin+Rouge/@48.8841232,2.3300632,17z/data=!4m12!1m6!3m5!1s0x47e66e4eff6f0c89:0xf44e90af87482111!2sMoulin+Rouge!8m2!3d48.8841232!4d2.3322519!3m4!1s0x47e66e4eff6f0c89:0xf44e90af87482111!8m2!3d48.8841232!4d2.3322519?hl=fr&authuser=0', 'region' => "Ile-de-France"],
    'Opera Garnier' => ['image' => 'images/Opera_garnier_paris.jpg', 'maps' => 'https://www.google.fr/maps/place/Palais+Garnier/@48.8719697,2.3294127,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e30d4668339:0xa9abf21c286d0767!8m2!3d48.8719697!4d2.3316014?hl=fr&authuser=0', 'region' => "Ile-de-France"],
    'Opera de Lille' => ['image' => 'images/opera_lille.jpg', 'maps' => 'https://www.google.fr/maps/place/Op%C3%A9ra+de+Lille/@50.6374585,3.0628989,17z/data=!3m1!4b1!4m5!3m4!1s0x47c2d5883963a965:0x3535613f78ccbff7!8m2!3d50.6374585!4d3.0650876?hl=fr&authuser=0', 'region' => "Hauts-de-France"],
    'Opera de Nice' => ['image' => 'images/Opera_nice.jpg', 'maps' => "https://www.google.fr/maps/place/Op%C3%A9ra+de+Nice/@43.6954724,7.2703498,17z/data=!3m1!4b1!4m5!3m4!1s0x12cddaa24b22d639:0xce5a27180b9e0905!8m2!3d43.6954724!4d7.2725385?hl=fr&authuser=0", 'region' => "Provence-Alpes-Côte d’Azur"]
];

//array informations monuments
$monuments = 
[
    "Arc de Triomphe" => ['image' => "arc_trionmphe_paris.jpg", 'maps' => "https://www.google.fr/maps/place/Arc+de+Triomphe/@48.8737917,2.2928388,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66fec70fb1d8f:0xd9b5676e112e643d!8m2!3d48.8737917!4d2.2950275?hl=fr&authuser=0", 'region' => "Ile-de-France"],
    "Basilique de Fourviere" => ['image' => "basilique_fourviere_lyon.jpg", 'maps' => "https://www.google.fr/maps/place/La+Basilique+Notre+Dame+de+Fourvi%C3%A8re/@45.7622928,4.8204373,17z/data=!3m1!4b1!4m5!3m4!1s0x47f4eba97571522b:0x9d1bcc791b678e29!8m2!3d45.7622928!4d4.822626?hl=fr&authuser=0", 'region' => "Auvergne-Rhône-Alpes"],
    "Cathedrale de Bourges" => ['image' => "cathedrale_bourges.jpg", 'maps' => "https://www.google.fr/maps/place/Cath%C3%A9drale+Saint-%C3%89tienne+de+Bourges/@47.0821639,2.3970163,17z/data=!3m1!4b1!4m5!3m4!1s0x47fa967a01ddf507:0x57a39a599232b5a1!8m2!3d47.0821639!4d2.399205?hl=fr&authuser=0", 'region' => "Centre-Val de Loire"],
    "Cathedrale ND de Strasbourg" => ['image' => "cathedrale_strasbourg.jpg", 'maps' => "https://www.google.fr/maps/place/Cath%C3%A9drale+Notre+Dame+de+Strasbourg/@48.5818799,7.7488461,17z/data=!3m1!4b1!4m5!3m4!1s0x4796c85253398843:0xe7152777f55e2738!8m2!3d48.5818799!4d7.7510348?hl=fr&authuser=0", 'region' => 'nomRegion'],
    "Chateau de Versailles" => ['image' => "chateau_versailles.jpg", 'maps' => "https://www.google.fr/maps/place/Ch%C3%A2teau+de+Versailles/@48.8048649,2.1181667,17z/data=!3m1!4b1!4m5!3m4!1s0x47e67d94d7b14c75:0x538fcc15f59ce8f!8m2!3d48.8048649!4d2.1203554?hl=fr&authuser=0", 'region' => "Ile-de-France"],
    "Ville médiévale de carcassonne" => ['image' => "cite_carcassonne.jpg", 'maps' => "https://www.google.fr/maps/place/Cit%C3%A9+de+Carcassonne/@43.2077801,2.27904,12z/data=!4m13!1m7!3m6!1s0x12ae2c390116bd8b:0xe28fdf3b77a114c7!2s11000+Carcassonne!3b1!8m2!3d43.2132151!4d2.3517703!3m4!1s0x12ae2c6ae7af34b7:0x52e5b6d2cb68c874!8m2!3d43.206083!4d2.3642063?hl=fr&authuser=0", 'region' => "Occitanie"],
    "Mont St Michel" => ['image' => "mont_st_michel.jpg", 'maps' => "https://www.google.fr/maps/place/50170+Le+Mont-Saint-Michel/@48.6381969,-1.5684292,12.5z/data=!4m5!3m4!1s0x480ea8d67c9ceeb3:0xc5834ce47e0dc3fe!8m2!3d48.636063!4d-1.511457?hl=fr&authuser=0", 'region' => "Normandie"],
    "Chateau de Versailles" => ['image' => "chateau_versailles.jpg", 'maps' => "https://www.google.fr/maps/place/Ch%C3%A2teau+de+Versailles/@48.8048649,2.1181667,17z/data=!3m1!4b1!4m5!3m4!1s0x47e67d94d7b14c75:0x538fcc15f59ce8f!8m2!3d48.8048649!4d2.1203554?hl=fr&authuser=0", 'region' => "Ile-de-France"],
];

//array informations monuments
$starRestaurants =
[
    "Troisgros - Le Bois sans Feuilles" => [
        "image" => "troisgros_le_bois_sans_feuilles.jpg",
        "maps" => "https://www.google.fr/maps/place/Troisgros+-+Le+Bois+sans+Feuilles/@46.0096964,3.9897561,17z/data=!3m1!4b1!4m5!3m4!1s0x47f40527649f0061:0x74c7ad0809f818f7!8m2!3d46.0096964!4d3.9919448",
        "region" => "Auvergne-Rhône-Alpes",
    ],
    "Christopher Coutanceau" => [
        "image" => "christopher_coutanceau.jpg",
        "maps" => "https://www.google.fr/maps/place/Christopher+Coutanceau/@46.1553147,-1.1622172,17z/data=!3m1!4b1!4m5!3m4!1s0x480153a59fecbff3:0x7cab0eb34b45d5b0!8m2!3d46.1553147!4d-1.1600285",
        "region" => "Nouvelle Aquitaine",
    ],
    "Régis et Jacques Marcon" => [
        "image" => "regis_et_jacques_marcon.jpeg",
        "maps" => "https://www.google.fr/maps/place/Régis+%26+Jacques+MARCON/@45.138729,4.4319085,17z/data=!3m1!4b1!4m8!3m7!1s0x47f575ffe73cf633:0x50986bd453a90478!5m2!4m1!1i2!8m2!3d45.138729!4d4.4340972",
        "region" => "Auvergne-Rhône-Alpes",
    ],
    "René et Maxime Meilleur" => [
        "image" => "rene_et_maxime_meilleur.jpg",
        "maps" => "https://www.google.fr/maps/place/Hotel+La+Bouitte+·+Hotel+%26+Spa+5+étoiles+Savoie/@45.3690752,6.5112079,17z/data=!4m8!3m7!1s0x478a2a6636dc0937:0x14c61154fe07c4d4!5m2!4m1!1i2!8m2!3d45.3690752!4d6.5133966",
        "region" => "Auvergne-Rhône-Alpes",
    ],
    "La Vague d'Or" => [
        "image" => "la_vague_d_or.jpg",
        "maps" => "https://www.google.fr/maps/search/la+vague+d'or+-+cheval+blanc+st-tropez/@43.2668461,6.6246276,17z/data=!3m1!4b1",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "ANNE-SOPHIE PIC" => [
       "image" => "anne-sophie_pic.jpg",
        "maps" => "https://www.google.fr/maps/search/anne+sophie+pic+valence/@44.918893,4.8834228,17z/data=!3m1!4b1",
        "region" => "Auvergne-Rhône-Alpes",
    ],
    "Georges Blanc" => [
        "image" => "georges_blanc.jpg",
        "maps" => "https://www.google.fr/maps/search/Georges+blanc+vonnas/@46.2198293,4.9888442,17z/data=!3m1!4b1",
        "region" => "Auvergne-Rhône-Alpes",
    ],
    "Yoann Conte" => [
        "image" => "yoann_conte.jpg",
        "maps" => "https://www.google.fr/maps/place/Hôtel+Restaurant+Yoann+Conte/@45.888916,6.1698374,17z/data=!3m1!4b1!4m8!3m7!1s0x478b91d7e92124bd:0xf35177f025064522!5m2!4m1!1i2!8m2!3d45.888916!4d6.1720261",
        "region" => "Grand-Est",
    ],
    "Maison Jeunet" => [
        "image" => "maison_jeunet.jpg",
        "maps" => "https://www.google.fr/maps/place/Hôtel+Restaurant+Maison+Jeunet/@46.902654,5.7705195,17z/data=!3m1!4b1!4m8!3m7!1s0x478d3de89abc3c3f:0x16f27fdd89e7e0f3!5m2!4m1!1i2!8m2!3d46.902654!4d5.7727082",
        "region" => "Bourgogne-Franche-Comté",
    ],
    "L'Atelier de Jean-Luc Rabanel" => [
        "image" => "l_atelier_de_jean-luc_rabanel.jpg",
        "maps" => "https://www.google.fr/maps/place/L'Atelier+-+Jean-Luc+Rabanel/@43.676066,4.6248253,17z/data=!3m1!4b1!4m5!3m4!1s0x12b6766b01cedb7b:0xe80b1222c0f50118!8m2!3d43.676066!4d4.627014",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Le Skiff Club" => [
        "image" => "le_skiff_club.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+Skiff+Club/@44.6058932,-1.2089981,17z/data=!3m1!4b1!4m5!3m4!1s0xd549df148cae237:0x4ac84ee17cb022d!8m2!3d44.6058932!4d-1.2068094",
        "region" => "Nouvelle-Aquitaine",
    ],
    "Meurin" => [
        "image" => "meurin.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+Meurin/@50.5818944,2.5048391,17z/data=!4m8!3m7!1s0x47dd1c1b6128d69b:0xc7ec9e83c7ea6b53!5m2!4m1!1i2!8m2!3d50.5818944!4d2.5070278",
        "region" => "Hauts-de-France",
    ],
    "La Bastide de Capelongue" => [
        "image" => "la_bastide_de_capelongue.jpeg",
        "maps" => "https://www.google.fr/maps/place/La+Bastide+De+Capelongue/@43.8236092,5.3051354,17z/data=!3m1!4b1!4m5!3m4!1s0x12ca10aba8b44687:0x7de045a5a617e743!8m2!3d43.8236092!4d5.3073241",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "La Grande Maison de Bernard Magrez" => [
        "image" => "la_grande_maison_de_bernard_magrez.jpg",
        "maps" => "https://www.google.fr/maps/search/la+grande+maison+de+bernard+magrez+bordeaux/@44.8527678,-0.5911248,17z/data=!3m1!4b1",
        "region" => "Nouvelle-Aquitaine",
    ],
    "Le Pressoir d'Argent-Gordon Ramsay" => [
        "image" => "le_pressoir_d_argent-gordon_ramsay.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+Pressoir+d'Argent+-+Gordon+Ramsay/@44.842172,-0.5773037,17z/data=!3m1!4b1!4m5!3m4!1s0xd5527da44d1dacf:0x59d1fa2743655092!8m2!3d44.842172!4d-0.575115",
        "region" => "Nouvelle-Aquitaine",
    ]
];

//array informations top restaurants tripadvisor en France
$topRestaurants =
[
    "Le Clos des Sens" => [
        "image" => "le_clos_des_sens.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+Clos+des+Sens/@45.9178148,6.1422237,17z/data=!4m8!3m7!1s0x478b8f97b16c63a9:0x96716b6c750c0b63!5m2!4m1!1i2!8m2!3d45.9178148!4d6.1444124",
        "region" => "Auvergne-Rhône-Alpes",
    ],
    "L'Oustau de Baumanière" => [
        "image" => "l_oustau_de_baumaniere.jpg",
        "maps" => "https://www.google.fr/maps/place/Restaurant+L'Oustau+de+Baumanière/@43.7470175,4.7936252,17z/data=!3m1!4b1!4m5!3m4!1s0x12b5e1421368f71f:0xe9435102e8373e3a!8m2!3d43.7470175!4d4.7958139",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Christophe Bacquié" => [
        "image" => "christophe_bacquié.jpg",
        "maps" => "https://www.google.fr/maps/place/Christophe+Bacquié+-+Restaurant+3+étoiles,+Var/@43.25,5.7811446,17z/data=!3m1!4b1!4m5!3m4!1s0x12c9096ff5c5a249:0x3dccc2db9d5f1340!8m2!3d43.25!4d5.7833333",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Maison Lameloise" => [
        "image" => "maison_lameloise.png",
        "maps" => "https://www.google.fr/maps/place/Maison+Lameloise/@46.9078971,4.7507935,17z/data=!3m1!4b1!4m8!3m7!1s0x47f2f7a43982d8b9:0x767d9a646d0fb27b!5m2!4m1!1i2!8m2!3d46.9078971!4d4.7529822",
        "region" => "Bourgogne-Franche-Comté",
    ],
    "Le 1947 au Cheval Blanc" => [
        "image" => "le_1947_au_cheval_blanc.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+1947/@45.4096362,6.6314437,17z/data=!3m1!4b1!4m8!3m7!1s0x478979cb26e3b079:0x2b2b8f66e988929!5m2!4m1!1i2!8m2!3d45.4096362!4d6.6336324",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Les Près d'Eugénie - Michel Guérard" => [
        "image" => "les_pres_d_eugenie.jpg",
        "maps" => "https://www.google.fr/maps/place/Les+Prés+d'Eugénie+Michel+Guérard/@43.6966903,-0.3823802,17z/data=!3m1!4b1!4m8!3m7!1s0xd56715e4164a00f:0xab238bd17d1a9b49!5m2!4m1!1i2!8m2!3d43.6966903!4d-0.3801915",
        "region" => "Nouvelle-Aquitaine",
    ],
    "Auberge du Vieux Puits" => [
        "image" => "auberge_du_vieux_puits.jpg",
        "maps" => "https://www.google.fr/maps/place/Auberge+du+Vieux+Puits+-+Gilles+Goujon/@43.048523,2.7866679,17z/data=!3m1!4b1!4m8!3m7!1s0x12b049e8b6da3ec3:0xbe8e59353aca767!5m2!4m1!1i2!8m2!3d43.048523!4d2.7888566",
        "region" => "Occitanie",
    ],
    "Le Petit Nice" => [
        "image" => "le_petit_nice.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+Petit+Nice+Passedat/@43.2801192,5.3499082,17z/data=!4m8!3m7!1s0x12c9c6d56603a0f1:0x45445ec040301421!5m2!4m1!1i2!8m2!3d43.2801192!4d5.3520969",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Flocons de Sel" => [
        "image" => "flocons_de_sel.jpg",
        "maps" => "https://www.google.fr/maps/place/Flocons+de+Sel/@45.830249,6.5946763,17z/data=!3m1!4b1!4m8!3m7!1s0x478be2c91fd04233:0x488b056a9d65b738!5m2!4m1!1i2!8m2!3d45.830249!4d6.596865",
         "region" => "Auvergne-Rhône-Alpes",
    ],
    "Mirazur" => [
        "image" => "mirazur.jpg",
        "maps" => "https://www.google.fr/maps/place/Mirazur/@43.7859237,7.5258803,17z/data=!3m1!4b1!4m5!3m4!1s0x12cdec097ad9c09b:0x970320ed1eeb6f98!8m2!3d43.7859237!4d7.528069",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Le Louis XV-Alain Ducasse à l'Hôtel de Paris" => [
        "image" => "le_louis_xv-alain_ducasse_a_l_hotel_de_paris.jpg",
        "maps" => "https://www.google.fr/maps/place/Le+Louis+XV+-+Alain+Ducasse/@43.739127,7.4249663,17z/data=!3m1!4b1!4m5!3m4!1s0x12cdc28d76afe317:0x5ea44a2d84977cef!8m2!3d43.739127!4d7.427155",
        "region" => "Provence-Alpes-Côte d’Azur",
    ],
    "Kei" => [
        "image" => "kei.jpg",
        "maps" => "https://www.google.fr/maps/place/Restaurant+Kei/@48.864358,2.339894,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e2302da39a9:0x807a2aff8145c442!8m2!3d48.864358!4d2.3420827",
        "region" => "Ile-de-France",
    ],
    "L'Ambroisie" => [
        "image" => "l_ambroisie.jpg",
        "maps" => "https://www.google.fr/maps/place/L'Ambroisie/@48.8553396,2.3621654,17z/data=!3m1!4b1!4m5!3m4!1s0x47e671ffd6d9e42b:0x5ad576d2bc120abd!8m2!3d48.8553396!4d2.3643541",
        "region" => "Ile-de-France",
    ],
    "Guy Savoy" => [
        "image" => "guy_savoy.jpg",
        "maps" => "https://www.google.fr/maps/place/Restaurant+Guy+Savoy/@48.8567046,2.3369604,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66fec9f9184eb:0x240145c04a25b01f!8m2!3d48.8567046!4d2.3391491",
        "region" => "Ile-de-France",
    ],
    "Assiette Champenoise" => [
        "image" => "assiette_champenoise.jpg",
        "maps" => "https://www.google.fr/maps/place/L'Assiette+Champenoise/@49.247879,4.0009932,17z/data=!3m1!4b1!4m8!3m7!1s0x47e974e65e059505:0x4ead18da2b0967aa!5m2!4m1!1i2!8m2!3d49.247879!4d4.0031819",
        "region" => "Grand-Est",
    ]
];

//array with all arrays
$allVarNeeds = [$beaches, $mountains, $parks, $skiStations, $bike, $hiking,$museums, $theaters,$monuments,$starRestaurants,$topRestaurants];
$needsRelax = [$beaches, $mountains, $parks];
$needsSport = [$skiStations, $bike, $hiking];
$needsCulture = [$museums,$theaters,$monuments];
$needsFood = [$starRestaurants,$topRestaurants]; 



//array to link needs to types of needs
$nomValues = [
    'Me detendre' => 
        ['Plages', 'Montagnes', 'Parques'],
    'Me Depenser' =>
        ['Ski', 'Vélo', 'Randonée'],
    'Me Cultiver' =>
        ['Musées', 'Théatres', 'Monuments'],
    'Bien Manger' =>
        ['Restaurants Eloilées', 'Top 30 tripadvisor']
];

   //var_dump($nomValues);
?>

