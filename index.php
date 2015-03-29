<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=yes">
    <title>Ben.gg</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
    <!-- add modernizer -->
</head>
<body class="blue">

<header class="navigation" role="banner">
    <div class="navigation-wrapper">
       <!--  <a href="#" class="logo">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
        </a> -->
        <a href="#" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
        <nav role="navigation">
            <ul id="js-navigation-menu" class="navigation-menu show">
                <li class="nav-link"><a href="#">Products</a></li>
                <li class="nav-link"><a href="#">About Us</a></li>
                <li class="nav-link"><a href="#">Projets</a></li>
            </ul>
        </nav>
        <div class="navigation-tools">
            <a href="#" class="sign-up">Contact</a>
        </div>
    </div>
</header>

<div class="intro">

    <div class="container">
        <?php
        // include 'benggline.php';
        ?>
        <h1 class="name" id="benggText">ben<span>point</span><span>gg</span></h1>
    </div>
    
    
</div>


<div class="sky">


    <div class="container">

        <div class="row row-3">
            <div class="cloud-wrapper">
                <div class="cloud">
                    <p>Développeur web <em class="text-ego">passionné</em></p>
                </div>
            </div>
        </div>
        

        <div class="row row-2">    
            <div class="cloud-wrapper">
                <div class="cloud">
                    <p>Créateur multimédia <em class="text-ego">toqué</em></p>
                </div>
            </div>
        </div>

        <div class="row row-1"> 
            <div class="cloud-wrapper">
                <div class="cloud cloud-smaller">
                    <p>et</p>
                </div>
                <div class="cloud">
                    <p>Étudiant <em class="text-ego">brillant</em></p>
                </div>
                <div class="cloud cloud-small">
                    <p>En école de multimédia et management.</p>
                </div>
            </div>
        </div>

        
    </div>
    <div class="cloud" id="patron"></div>
</div>

<div class="svg-container">
<?php
include 'inline.php';
// echo '<img src="img/interior.svg" id="bgff" style="width:100%; height: 800px; position:absolute; top:0px; z-index:-10; overflow:hidden;"></img>';
?>
</div>


<div class="fastfood">

    <div class="row">
        <h2 class="enseigne"><span>Fast</span> Portfolio</h2>

        <!-- <div class="couille">
            <p class="ui">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitat</p>
            <p class="lol">jlhs dlfd hlkk hfdls fg sdlkfhfd lhsdf sdfsdf uioqhldf apcncl ifjk dhjd j bj</p>
            <p class="rofl">jlhs5 67854 5khfdls sdlkfsdf</p>
        </div> -->
    </div>
    
    <div class="choices">
        <a href="#" class="choice">
            <p>Une gorgée de mes <strong>compétences&nbsp;?</strong></p>
        </a>
        <a href="#" class="choice">
            <p>Un bout de mes <strong>projets&nbsp;?</strong></p>
        </a>
        <a href="#" class="choice">
            <p>Quelques amuse gueules&nbsp;?</p><img src="img/fries.svg">
        </a>
        
    </div>
    

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/vivus/0.2.0/vivus.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/threejs/r69/three.min.js"></script> -->
<script type="text/javascript" src="js/cool.js"></script>
</body>
</html>