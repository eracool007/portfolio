<?php
/**
 * Autoloader for classes
*/
 spl_autoload_register(function($class){

    require "classes/{$class}.php";
});
 
if(isset($_GET['lang']) && $_GET['lang'] =='en') {
    include __DIR__ . DIRECTORY_SEPARATOR . 'lang/en.php';
} else {
    include __DIR__ . DIRECTORY_SEPARATOR . 'lang/fr.php';
}
$numberOfCards = 0;
include 'includes/contact.php';

?>
<!DOCTYPE html>
<html lang="<?= $htmlLang; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
     <?= $metaTitre; ?>
    </title>
     
    <meta name="title" content="<?= $metaTitre; ?>">
    <meta name="description" content="<?= $metaDescription; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.caroline-fontaine/vbox/">
    <meta property="og:title" content="<?= $metaTitre; ?>">
    <meta property="og:description" content="<?= $metaDescription; ?>">
    <meta property="og:image" content=""> 
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image"> 
    <meta property="twitter:url" content="https://www.caroline-fontaine/vbox/">
    <meta property="twitter:title" content="<?= $metaTitre; ?>">
    <meta property="twitter:description" content="<?= $metaDescription; ?>">
    <meta property="twitter:image" content=""> 

    <!-- Styles ands JS -->
    <link rel="icon" type="text/png" href="favicon-32x32.png">
    
    <link rel="stylesheet" href="css/style.css" />
  
    <script src="https://kit.fontawesome.com/146f5f72b9.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <div class="circles  pos-head">
        <div class="circle-light"></div>
        <div class="circle-dashed"></div>
    </div>
    <header>
        <div id="home" class="row-full">
            <div class="main-content">
                <div class="flex-div">
                    <div class="logo text-gradient flex-div">
                        <img class="unicorn" src="assets/unicorn2.png" alt="<?= $unicornAlt; ?>">CarolineFontaine
                    </div>
                    <div id="burger">
                        <span id="bar1" class="menu"></span>
                        <span id="bar2" class="menu"></span>
                        <span id="bar3" class="menu"></span>
                    </div>
                    <div>
                        <ul id="sub-menu">
                        <li class="burger-links"><a href="#home"><?= $accueil; ?></a></li>    
                        <li class="burger-links"><a href="#technologies"><?= $tech; ?></a></li>
                        <li class="burger-links"><a href="#projets"><?= $projets; ?></a></li>
                        <li class="burger-links"><a href="#about"><?= $about; ?></a></li>
                        <li class="burger-links"><a href="#contact"><?= $contact; ?></a></li>
                        <li class="burger-links"><a class="lang" href="?lang=<?= $htmlLang =='en' ?  "fr" : "en"; ?>"><?= $language; ?></a></li>
                        </ul>
                    </div>
                    

                    <nav>
                        <ul class="main-ul">
                            <li class="li-main"><a href="#home"><?= $accueil; ?></a></li>   
                            <li class="li-main"><a href="#technologies"><?= $tech; ?></a></li>
                            <li class="li-main"><a href="#projets"><?= $projets; ?></a></li>
                            <li class="li-main"><a href="#about"><?= $about; ?></a></li>
                            <li class="li-main"><a href="#contact"><?= $contact; ?></a></li>
                            <li class="li-main"><a class="lang" href="?lang=<?= $htmlLang =='en' ?  "fr" : "en"; ?>"><div  class="btn-line"><?= $language; ?></div></a></li>
                              
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="row-full">
            <div class="main-content hero">
                <div class="column50 intro-left">
                    <div><h1><?= $h1; ?></h1></div>
                    <div class="trouver"><?= $trouver; ?></div>
                    <div class="slogan"><?= $slogan; ?></div>
                </div>
                <div class="column50 intro-right top">
                    <div class="center-obj">
                            <div class="hero-img">
                            
                            <div class="intro-box text-gradient1 top"></div>
                            <div><img class="round-img" src="assets/laptop.png" alt="<?= $altordi; ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Modal-->
    <div id="modal" class="modal">
        <div class="modal-content modal-base">
            <span class="close">&times;</span>
            <p id="para-modal"></p>
        </div>
    </div>

    <main>
        
    <div class="circles pos-tec">
        <div class="circle-light"></div>
        <div class="circle-dashed"></div>
    </div>
    
        <!--Technologies-->
        <section>
            
                <div class="circles pos-proj">
                    <div class="circle-light"></div>
                    <div class="circle-dashed"></div>
                </div>
            
           
                
                <div class="main-content center top">
                    <h2 id="technologies"><?= $techTitle; ?></h2>
                    
                </div>
                <div class="rowfull">
                    <div class="main-content">
                    <div class="column33 top">
            
                        <div class="tech"><img src="assets/computerdesk.jpg" class="computer shadow top" alt="<?= $techAlt; ?>"></div>
                        
                    </div>

                    
                    <div class="column67 top">
                        <ul class="ul-tech">
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-tech fa-2xl fa-brands fa-html5"></i></span>HTML 5</li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="fa-2xl fa-brands fa-css3"></i></span>CSS 3</li>
                            
                            <li class="li-tech shadow"><span class="span-tech"><i class="fa-2xl fa-brands fa-js-square"></i></span>JavaScript</li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-bg fa-brands fa-php"></i></span>PHP</li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-bg fa-solid fa-sitemap"></i></span><?= $oop; ?></li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-bg fa-solid fa-database"></i></span><?= $sql; ?></li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-bg fa-brands fa-bootstrap"></i></span>Bootstrap</li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-bg fa-brands fa-sass"></i></span>Sass</li>
                            <li class="li-tech shadow"><span class="span-tech"><i class="icon-bg fa-solid fa-code"></i></span>JQuery</li>
                        </ul>
                    </div>
                </div>
        </div>
    </section>
    <!--Projets-->
    
    <section class="project">
        <div class="rowfull">
        <div class="main-content center top">
            <h2 id="projets"><?= $projectTitle; ?></h2>
            
            
            
            <?php
                $count=0;
                foreach($projects as $project){
                $class = ($count != 0) ? "hidden" : ""; 
            ?>
            <div class="cards shadow">
            <div class="card <?=$class;?>" id="card<?=$count;?>"> 
                <div class="rowfull techused">
                    <i class="fa-solid fa-star text-gradient star"></i>
                    <?php 
                    $lastKey = array_key_last($project->tech); 
                    $key = 0;
                    foreach($project->tech as $techno) {
                        
                        if ($key == $lastKey){
                            echo $techno;
                        } else {
                            echo $techno.", ";
                            $key++;
                        }
                    }
                    ?>
                </div>
                <div class="project-img" id="img<?= $count ?>">
                </div>
                <div class="rowfull">
                    <h3 class="project-title">
                        <span class="ligne">
                        <?= $project->name; ?>
                        </span>    
                    </h3>
                    
                    <div class="description">
                        <p class="description"><?= $project->description; ?><p>
                    </div>
                    <div class="visit">
                        <a href="<?= $project->link; ?>" target="_top" class=""><?=$view; ?><i class="fa-solid fa-arrow-up-right-from-square visit-icon"></i></a>
                    </div>
                </div>
            </div>
            </div>
            <?php $count++; } ?> 
            
            <div class="main-content">
                <div class="arrows">
                    <div id="btn-prev" class="btn-line line"><i class="fa-solid fa-chevron-left"></i></div>
                    
                    <div id="btn-next" class="btn-line line"><i class="fa-solid fa-chevron-right"></i></div>
                    
                </div>
                
            </div>
    </section>
    <!--About-->
    <section class="about top">
        <div class="rowfull">
                <div class="main-content center">
                    <h2 id="about"><?= $aboutTitle; ?></h2>
                </div>
                <div class="main-content">
               
                    <div class="columnAbout clearfix">
                        
                        <p class="para about-info"> <img class="photo shadow-pic" src="assets/caroline150.png" alt="<?=$aboutAlt; ?>">
                           <?= $aboutText ?>
                        </p>

                    </div>
                </div>
            </div>
           
    </section>
    <!--Contact-->
    <section class="contact">
        <div class="rowfull">
            <div class="main-content center">

                <div class="sheet">
                    <div class="row80">
                        <h2 id="contact"><?= $contactTitle; ?></h2>
                        <p class="para pb30">
                            <?= $contactText; ?>
                        </p>
                    </div>
             
                     
                    
                    <form action="index.php" method="post" id="contact-form" enctype="multipart/form-data">
                    <?php if(!empty($error)) :?>
                        <div class="error-div">
                              <?php foreach($error as $err) : ?>
                            <p class="error"><?= $err; ?> </p>
                        <?php endforeach ?>
                        </div>
                      
                    <?php endif; ?>   
                            <label for="prenom"></label>
                            <input class="contact-input" type="text" name="prenom" id="prenom" placeholder="<?php echo (isset($POST['prenom']) && $POST['prenom'] !="") ? $POST['prenom'] : $contactFirst; ?>"><br>
                            
                            <label for="nom"></label>
                            <input class="contact-input" type="text" name="nom" id="nom" placeholder="<?php echo (isset($POST['nom']) && $POST['nom'] !="") ? $POST['nom'] : $contactLast?>" >
                            <label for="email"></label>
                            <input class="contact-input" type="email" name="email" id="email" placeholder="<?php echo (isset($POST['email']) && $POST['email'] !="") ? $POST['email'] : $contactMail; ?>" ><br>
                            <label for="details" class="para"><?=$contactDetails; ?></label><br>
                            <textarea class="contact-input" name="details" id="details" rows="10"><?php echo (isset($POST['details']) && $POST['details'] !="") ? $POST['details'] : ""; ?></textarea>
                            <button role="button" class="btn-send" aria-label="<?= $contactSendAria; ?>"><?= $contactSend; ?></button>
                        </form>
                    </div>
                

            </div>
        </div>
    </section>

    </main>

    <footer class="rowfull">

        <div class="main-content">
            <div class="flex-row">
                <div class="column-left logo-sm text-gradient flex-div">
                        <img class="unicorn-sm" src="assets/unicorn2.png" alt="<?= $unicornAlt; ?>">CarolineFontaine 
                </div>
                
                <div class="column-right">
                    
                    <div class="reseaux">
                        <a class="reseaux-links" href="https://github.com/eracool007" target="_top" ><i class="reseaux-icon fa-brands fa-github round"></i></a>
                        <a class="reseaux-links" href="https://www.linkedin.com/in/caroline-fontaine-51125750" target="_top" ><i class="reseaux-icon fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="column-right col-links">
                   
                    <div class="footer-links">
                        <ul class="footer-ul">
                            <li class="footer-li"><a href="#home"><?= $accueil; ?></a></li>
                            <li class="footer-li"><a href="#technologies"><?= $tech; ?></a></li>
                            <li class="footer-li"><a href="#projets"><?= $projets; ?></a></li>
                            <li class="footer-li"><a href="#about"><?= $about; ?></a></li>
                            <li class="footer-li"><a href="#contact"><?= $contact; ?></a></li>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        <div class="copyrights center">&#169; 
        <?= $copy; ?><?php echo date("Y"); ?>, Caroline Fontaine<br>
            <span class="credits"><?= $credits; ?></span>
               
                <div id="credits" class="credit-box shadow hidden"><h3><?= $credits?></h3>
                    <span id="close-modal-credits" class="close">&times;</span>
                    <div class="credits-photo">
                    <?= $creditsText; ?>
                    </div>
                </div>
        </div>    
        </div>
      
    </footer>
    
    <?php
        
        for ($i=0; $i < count($projects); $i++) { ?>
            <script>
                loadImage("img<?=$i;?>", "<?=$projects[$i]->image; ?>");
                
            </script>
        <?php 
        $numberOfCards = $i; }
        if(! $i == 0)  { ?>
            <script> getCards(<?=$numberOfCards;?>); </script>
        <?php } ?>
        
        <?php if(!empty($error)) :?>
            <script> scrollToContact(); </script>
        <?php endif; ?>

        <?php
        if(isset($_GET['success'])) {
            
            if($_GET['success']) {
                echo "<script> openModal(\"Merci, votre courriel a été envoyé avec succès!\"); </script>";

            } else {
                echo "<script> openModal(\"Il semble y avoir eu une erreur. Veuillez réessayer plus tard\"); </script>";
         } }
    ?>
    
</body>
</html>