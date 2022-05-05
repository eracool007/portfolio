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

$projectInfo ="Certains projets offrent une page de présentation ou \"À propos\". <br>N'hésitez pas à les consulter pour en connaître davantage sur le projet.";

$projects[] = new Project(
    "VBox - Recettes et blog culinaire",
    ["HTML", "CSS", "PHP", "SQL", "Programmation orientée objet", "JavaScript"],
    "Site de recettes fictives incluant un blog culinaire et une section administrateur. L’utilisateur peut notamment ajouter des favoris, imprimer et envoyer des recettes. ", "https://www.caroline-fontaine.com/vbox",
    "vbox.png"
);

$projects[] = new Project(
    "VBox - Commerce électronique",
    ["HTML", "CSS", "PHP", "SQL", "API Stripe", "Javascript"],
    "Site fictif de commerce électronique pour la commande de boîtes à lunch. Le site offre un panier d'achat avec paiement Stripe et une section administrateur pour gérer les commandes en cours.", "https://www.caroline-fontaine.com/shopping",
    "shopping.png"
);

$projects[] = new Project(
    "Nature Québec",
    ["HTML", "CSS", "Javascript", "JQuery"],
    "Site bilingue présentant quelques-uns des plus beaux parcs de la ville de Québec incluant des fichiers audios et la possibilité de suggérer un parc.", "https://www.caroline-fontaine.com/nature",
    "nature.png"
);

$projects[] = new Project(
    "Co-Space - Site fictif de location d'espace",
    ["HTML", "CSS", "Bootstrap", "Javascript"],
    "Le projet co-space est l’un de mes premiers projets. L’objectif était de créer une maquette avec Adobe XD, puis  de créer une page HTML en utilisant la librairie Bootstrap.", "https://www.caroline-fontaine.com/cospace",
    "cospace.png"
);

$projects[] = new Project(
    "Jeu Tic Tac Toe",["HTML", "CSS", "Javascript"],
    "Ce projet scolaire était originalement un plugin WordPress effectué en équipe pour mettre en pratiques nos connaissances de HTML, CSS, Javascript et d’apprendre Git. ", "https://www.caroline-fontaine.com/tictactoe",
    "tictactoe.png"
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

