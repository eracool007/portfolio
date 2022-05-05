<?php
$htmlLang = "en";
$errEmail = "Invalid Email";
$errNom = "First or lastname name must be provided";
$errDetails = "A message is required";

$metaTitre = "Caroline Fontaine - Web Developper - HTML, CSS, PHP, et More!";
$metaDescription = "Caroline Fontaine - Portfolio showcasing some of my web project. Problem solving is my thing!";

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
$trouver = "Problem solving...";
$slogan = "is my thing!";
$altordi = "Laptop - Photo from Facu Montanaro - Unsplash";

//tech
$techTitle = "Main knowledges and technologies used";
$techAlt = "Computer desk - Photo by Redd - Unsplash";


$oop = "Object Oriented Programming";
$sql = "SQL Databases";

//projects
$projectTitle = "My projects";
$view = "Go to Project";

$projectInfo ="Some projects include an about page. <br>Make sure to check them out to learn more about the specific project!";

$projects[] = new Project(
    "VBox - Recipies & Culinary Blog",
    ["HTML", "CSS", "PHP", "SQL", "Programmation orientée objet", "JavaScript"],
    "Fictional recipe and blog site including an administrator dashboard. Users can add favourites, print and send recipes, as well as add items to a grocery list.", 
    "https://www.caroline-fontaine.com/vbox",
    "vbox.png"
);

$projects[] = new Project(
    "VBox - Shopping Cart Website",
    ["HTML", "CSS", "PHP", "SQL", "API Stripe", "Javascript"],
    "E-commerce site for ordering lunch boxes. This fictional site offers a shopping cart with Stripe payments as well as an administrator section to manage pending orders.", 
    "https://www.caroline-fontaine.com/shopping",
    "shopping.png"
);

$projects[] = new Project(
    "Nature Québec",
    ["HTML", "CSS", "Javascript", "JQuery"],
    "Bilingual website presenting some of Quebec City’s most beautiful parks. Audio files are available, and users can suggest a park.", 
    "https://www.caroline-fontaine.com/nature-quebec",
    "nature.png"
);

$projects[] = new Project(
    "Co-Space - Rental Website",
    ["HTML", "CSS", "Bootstrap", "Javascript"],
    "The co-space project is one of my first projects. The objective was to create a wireframe using Adobe XD, and then create an HTML page using the Bootstrap library.", 
    "https://www.caroline-fontaine.com/cospace",
    "cospace.png"
);

$projects[] = new Project(
    "Tic Tac Toe Game",
    ["HTML", "CSS", "Javascript"],
    "This project was originally a WordPress plugin. As a school project, we were required to develop it as a team to put into practice our knowledge of HTML, CSS, Javascript and to learn Git.", 
    "https://www.caroline-fontaine.com/tictactoe",
    "tictactoe.png"
);

//about
$aboutTitle = "About";
$aboutAlt = "";
$aboutText = "Being a web development graduate, I am passionate about programming and logic. Having already some experience of the web, my training allowed me to acquire new up-to-date knowledge and to put into practice several technologies both at the level of front-end and back-end applications.
<br><br>

In addition, I discovered that problem solving was something very stimulating for me. This makes me particularly fond of server-side programming and databases.
<br><br>
Curious by nature, I am always looking for new things to learn. In fact, I never get tired of learning, and the programming world, there is always things to learn. That's what I love about it!
";

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

