<?php
$htmlLang = "en";
$errEmail = "Invalid Email";
$errNom = "First or lastname name must be provided";
$errDetails = "A message is required";

$metaTitre = "Caroline Fontaine - Web Developper - HTML, CSS, PHP, et More!";
$metaDescription = "Caroline Fontaine - Portfolio showcasing some of my web project. Finding solutions, I love that!";

//header
$accueil = "Home";
$tech ="Technologies";
$projets = "Projects"; 
$about = "About";
$contact = "Contact";
$language="Français";

//hero
$unicornAlt = "Unicorn - Photo from Darius Dan - Flaticon";
$h1="Hi! I am Caroline, web developper and programmer.";
$trouver = "Finding solutions...";
$slogan = "I love it!";
$altordi = "Laptop - Photo from Facu Montanaro - Unsplash";

//tech
$techTitle = "Main knowledges and technologies used";
$techAlt = "Computer desk - Photo by Redd - Unsplash";


$oop = "Object Oriented Programming";
$sql = "SQL Databases";

//projects
$projectTitle = "My projects";
$view = "Go to Project";

$projects[] = new Project(
    "VBox - Website for recipes",
    ["HTML", "CSS", "PHP", "SQL", "Programmation orientée objet", "JavaScript"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", 
    "https://www.caroline-fontaine.com/vbox",
    "vbox.png"
);


$projects[] = new Project(
    "Co-Space - Commercial Space Rental Website",
    ["HTML", "CSS", "Bootstrap"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", 
    "https://www.caroline-fontaine.com/cospace",
    "cospace.png"
);

$projects[] = new Project(
    "Tic Tac Toe Game",
    ["HTML", "CSS", "Javascript"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", 
    "https://www.caroline-fontaine.com/tictactoe",
    "tictactoe.png"

);

$projects[] = new Project(
    "Nature Québec",
    ["HTML", "CSS", "Javascript"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", 
    "https://www.caroline-fontaine.com/nature",
    "nature.png"
);

$projects[] = new Project(
    "Lunch Box Shopping Website",
    ["HTML", "CSS", "PHP", "API Stripe", "SQL"],
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime assumenda eum voluptatum tempore dolore in, laudantium dignissimos omnis cum sequi, quam similique harum asperiores iure vero dolores alias atque nulla!", 
    "https://www.caroline-fontaine.com/shopping",
    "shopping.png"
);


//about
$aboutTitle = "About";
$aboutAlt = "";
$aboutText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam faucibus purus in massa tempor nec. 
<br><br>
perdiet proin fermentum leo vel orci. Sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Viverra orci sagittis eu volutpat odio facilisis mauris. Vitae suscipit tellus mauris a. Non odio euismod lacinia at quis. 
<br><br>
Non sodales neque sodales ut etiam sit amet nisl purus. Aliquam sem et tortor consequat id porta nibh. Ut sem viverra aliquet eget sit amet tellus. Elementum tempus egestas sed sed risus.";

//contact
$contactTitle = "Contact Me";
$contactText = "Feel free to contact me should you have any question about my work. I will gladly get back to you in the next 24 to 48 business hours. <br> <span class='plaisir'>Talk to you soon!</span>";

$contactFirst = "First Name";
$contactLast = "Name";
$contactMail = "Email";
$contactDetails = "Message";
$contactSend = "Send!";
$contactSendAria = "Send my message";

//footer
$copy = "All Rights Reserved ";
$credits = "Photo Credits";
$creditsText = "<p>Unicorn: <br> <a target=\"_blank\" href=\"https://www.flaticon.com/free-icons/unicorn\" title=\"unicorn icons\">Darius Dan - Flaticon</a></p>
<p><br>Laptop: <br> <a target=\"_blank\" href=\"https://unsplash.com/@facumontanaro?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Facu Montanaro</a> - <a target=\"_blank\" href=\"https://unsplash.com/@facumontanaro?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Unsplash</a></p>
<p><br>Computer Desk: <br>Photo by <a target=\"_blank\" href=\"https://unsplash.com/@reddalec?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Redd</a> on <a target=\"_blank\" href=\"https://unsplash.com/s/photos/computer-desk-purple?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Unsplash</a>
</p>
<p><br>Keyboard: <br>Photo by <a target=\"_blank\" href=\"https://unsplash.com/@matthew_photos?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Matthew</a> on <a target=\"_blank\" href=\"https://unsplash.com/@matthew_photos?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText\">Unsplash</a>
</p>";

