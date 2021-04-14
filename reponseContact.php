<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="styleContact.css"  type="text/css"/>
    <title>Document</title>
</head>
<body>
<main class = "thanks">
<p class="thanksMessage"><?php echo "Merci ".$_POST["user_firstname"]. " de nous avoir contacté!";?></p>
<p> <?php echo "Nous reviendrons vers vous dans les plus brefs délais soit: </p>
<p>à l’adresse " . $_POST["user_mail"]. " ou par téléphone au " .$_POST["user_phone"] ."."; ?></p>
</main>
</body>
