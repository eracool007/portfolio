<?php
$htmlLang = "fr";
$errEmail = "*Courriel invalide";
$errNom = "*Le prénom ou le nom de famille est requis";
$errDetails = "*Un message est requis";

$metaTitre = "Caroline Fontaine - Développeuse web - HTML, CSS, PHP, et plus!";
$metaDescription = "Caroline Fontaine - Portfolio de mes projets web. Trouver des solutions, j'aime ça!";

//header
$accueil = "Accueil";
$tech ="Technologies";
$projets = "Projets"; 
$about = "À propos";
$contact = "Contactez-moi";
$language="English";

//hero
$unicornAlt = "Licorne - Photo par Darius Dan - Flaticon";
$h1="Je suis Caroline, développeuse et programmeuse web.";
$trouver = "Trouver des solutions,";
$slogan = "J'aime ça!";
$altordi = "Portable - Photo de Facu Montanaro - Unsplash";

//tech
$techTitle = "Principales technologies et connaissances";
$techAlt = "Bureau d'ordinateur - Photo par Redd - Unsplash";

$oop = "Programmation orientée objet";
$sql = "Bases de données SQL";

//projects
$projectTitle = "Mes projets";
$view = "Voir le projet";

$projects[] = new Project(
    "VBox - La boîte à recettes véganes",
    ["HTML", "CSS", "PHP", "SQL", "Programmation orientée objet", "JavaScript"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", "https://www.caroline-fontaine.com/vbox",
    "vbox.png"
);


$projects[] = new Project(
    "Co-Space - Site fictif de location d'espace",
    ["HTML", "CSS", "Bootstrap"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", "https://www.caroline-fontaine.com/cospace",
    "cospace.png"
);

$projects[] = new Project(
    "Jeu Tic Tac Toe",["HTML", "CSS", "Javascript"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", "https://www.caroline-fontaine.com/tictactoe",
    "tictactoe.png"
);

$projects[] = new Project(
    "Nature Québec",
    ["HTML", "CSS", "Javascript"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", "https://www.caroline-fontaine.com/nature",
    "nature.png"
);

$projects[] = new Project(
    "Boîte à lunch",
    ["HTML", "CSS", "PHP", "API Stripe", "SQL"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", "https://www.caroline-fontaine.com/shopping",
    "shopping.png"
);


//about
$aboutTitle = "À propos";
$aboutAlt = "Caroline Fontaine - Développeuse et programmeuse web";
$aboutText = "Diplômée en développement web du Cégep de St-Félicien, je suis une passionnée de la programmation et de la logique. Ayant déjà une certaine expérience du web, ma formation m’a permis d’acquérir de nouvelles connaissances à jour et de mettre en pratique plusieurs technologies tant au niveau d’applications frontales, que d’applications dorsales.
<br><br>

De plus, j’ai découvert que la résolution de problème était pour moi quelque chose de très stimulant. Ceci fait que j’ai une attirance particulière pour la programmation côté serveur et pour les bases de données. 
<br><br>
De nature curieuse, je suis toujours à la recherche de nouveaux apprentissages. En fait, je ne me lasse jamais d’apprendre, et en programmation, il y aura toujours des choses à apprendre. C’est ce que j’adore!
";

//contact
$contactTitle = "Contactez-moi";
$contactText = "Pour toute question concernant mon travail, n'hésitez pas à me contacter à l'aide du formulaire ci-dessous. Il me fera plaisir de vous répondre dans les 24 à 48 heures ouvrables.<br> <span class='plaisir'>Au plaisir!</span>";

$contactFirst = "Prénom";
$contactLast = "Nom";
$contactMail = "Courriel";
$contactDetails = "Message";
$contactSend = "Envoyer!";
$contactSendAria = "Envoyer mon message";

//footer


$copy = "Tous droits réservés ";
$credits = "Crédits photos";
$creditsText = "<p>Licorne: <br> <a target=\"_blank\" href=\"https://www.flaticon.com/free-icons/unicorn\" title=\"unicorn icons\">Darius Dan - Flaticon</a></p>
<p><br>Portable: <br> <a target=\"_blank\" href=\"https://unsplash.com/@facumontanaro?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Facu Montanaro</a> - <a target=\"_blank\" href=\"https://unsplash.com/@facumontanaro?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Unsplash</a></p>
<p><br>Bureau avec ordinateur: <br>Photo by <a target=\"_blank\" href=\"https://unsplash.com/@reddalec?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Redd</a> on <a target=\"_blank\" href=\"https://unsplash.com/s/photos/computer-desk-purple?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Unsplash</a>
</p>
<p><br>Clavier: <br>Photo by <a target=\"_blank\" href=\"https://unsplash.com/@matthew_photos?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Matthew</a> on <a target=\"_blank\" href=\"https://unsplash.com/@matthew_photos?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Unsplash</a>
</p>";

