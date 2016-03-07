<!DOCTYPE html>
<html>
<head>
<?php include('functions.php');?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="index.php"><?php echo $_SERVER['HTTP_HOST'];?></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="index.php">Home</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="index.php?t=movies">Most seeded Movies</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="index.php?t=tv">Most seeded Series</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="index.php?a=tv">Fresh Series</a></li></ul></div>
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" href="">Ideas</a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form2-1" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid1">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text"><?php echo $_SERVER['HTTP_HOST'];?> magnet torrent search</h2>
                        </div>
                        <form class="mbr-form" action="index.php" method="POST" data-form-title="<?php echo str_replace('www.','', $_SERVER['SERVER_NAME']);?> magnet torrent search">  
                            <div class="mbr-form__left">
                                <input type="text" class="form-control" name="s" required="" placeholder="enter search terms" data-form-field="s">
                            </div>
                            <div class="mbr-form__right mbr-buttons mbr-buttons--no-offset mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">Search</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="msg-box3-3" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
               <?php if (isset($_POST["s"])) { ?> <h3 class="mbr-header__text">Results : <? echo $_POST["s"];?></h3><?php } ;?>
                
            </div>
        </div>
    </div>
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            
            <?php if (isset($_POST["s"])) { ?>
            <p><?php scrapmagnetsite('https://kat.cr/usearch/',$_POST["s"],'/');} ?></p>
            
            <?php if (isset($_GET["t"])) { ?>
            <p><?php scrapmagnetsite('https://kat.cr/',$_GET["t"],'/');} ?></p>
            
             <?php if (isset($_GET["a"])) { ?>
            <p><?php scrapmagnetsite('https://eztv.ag','','/');} ?></p>
            
      </div>  </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons1-2" style="background-color: rgb(255, 255, 255);">
    

    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SHARE THIS PAGE!</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    <div class="mbr-social-icons__icon social-likes__icon facebook socicon-bg-facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                        
                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon plusone socicon-bg-googleplus" title="Share link on Google+">
                        <i class="socicon socicon-googleplus"></i>
                        
                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon twitter socicon-bg-twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10858297; 
var sc_invisible=0; 
var sc_security="02e5deb8"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="shopify stats"
href="http://statcounter.com/shopify/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/10858297/0/02e5deb8/0/"
alt="shopify stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->



</body>
</html>