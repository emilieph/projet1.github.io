<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="styleContact.css"  type="text/css"/>
    <title>Document</title>
</head>
<body class="pageContactMobile">

<main>
<h1 class="contactFormteaser">Contactez-nous!</h1>


<form action = "reponseContact.php" method= "post" class="contactFormBox">
    <div class="itemArea">
        <label for="name" class="contactFormLabel">Nom :</label>
        <input type="text" id="name" name="user_lastname">
    </div>
    <div class="itemArea">
        <label for="lastname" class="contactFormLabel">Prénom :</label>
        <input type="text" id="lastname" name="user_firstname">
    </div>
    <div class="itemArea">
        <label for="mail" class="contactFormLabel">e-mail :</label>
        <input type="email" id="mail" name="user_mail">

    </div>
    <div class="itemArea">
        <label for="phone">Téléphone:</label>
        <input type="tel" id="phone" name="user_phone">
  
    </div>
        <div class="msgSubject">
            <label for="subject" class="label">Sujet:</label>
                <select name = "subject" id="subject">
                    <option value="défaut" selected>--</option>
                    <option value="question">Question</option>
                    <option value="réclamation">Réclamation</option>
                    <option value="autre">Autre</option>
                </select>
        </div>

    <div class="msgitemArea">
        <label for="msg" >Message :</label>
        <textarea id="msg" name="user_message" class="contactFormTextArea">Entrez votre message</textarea>
    </div>
    <div  class="contactFormbutton">
        <button  type="submit" class="">Envoyez votre message</button>
    </div>
</form>
</main>
</body>
</html>
