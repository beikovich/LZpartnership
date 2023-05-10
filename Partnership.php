<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/partnership.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="img/favicon.png" rel="icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LayerZero</title>


</head>
<body>



<!--Header start-->
<header class="header">
    <div class="container">
        <div class="header__wrapper">

            <div class="header__block">
                <a href="#" class="header__logo">
                    <img src="img/LZ_logo.svg" alt="">
                </a>
            </div>
            <!--header__block-->
            <nav class="nav">
                <a href="https://twitter.com/L0_Corner" class="nav__link" target="_blank">twitter</a>
                <a href="#" class="nav__link" target="_blank">discord</a>
                <a href="https://mirror.xyz/0x085F66fD2F553d67f8787856aDc161FA468D338e" class="nav__link" target="_blank">Mirror</a>
                <a href="https://crew3.xyz/c/layerzerocorner/questboard" class="nav__link" target="_blank">Crew3</a>
            </nav>
            
            <div class="header__block">
                <div class="header__submit">
                    <img src="img/Sabmit_Project.svg" alt="">
                    <a href="partnership.html" class="header__submit-link" target="_blank">partnership</a>
                </div>
            </div>
        </div>
        <!--/header__wrapper-->
    </div>
    <!--/container-->
</header>
 <!--Header end-->



<!--Intro start-->
<section class="intro">
    <div class="container">
        <div class="intro__content">
            <div class="intro__block">
                <h1 class="intro__title">Submit a request on our website</h1>
                <h2 class="intro__title_2">To access the website, please fill out the form and wait for a response. We will contact you shortly</h2>
            </div>
            </div>
    </div>
</section>
<!--Intro end-->




<!--Info start-->


<section class="info">
    <div class="container">
        <div id="container">
            <form class="mainform" action="send.php" method="post">

                            <p class="email">
                                <label for="name">Your Email*</label>
                                <input  type="email" name="Your_email" placeholder="Your answer"  id="form"  name="email" value="Your answer" onblur="if(this.value.length == 0) this.value = 'Your answer'" onfocus="if(this.value == 'Your answer') this.value = '' " />
                            </p>
                            <p class="twitter_account">
                                <label for="name">Your Twitter account (Link)*</label>
                                <input  type="url" name="Your_Twitter_account" placeholder="Your answer"  id="form" type="text" name="twitter_account" value="Your answer" onblur="if(this.value.length == 0) this.value = 'Your answer'" onfocus="if(this.value == 'Your answer') this.value = '' " />
                            </p>
             
                            <p class="website_link">
                                <label for="website_link" >Your Website (Link)*</label>
                                <input  type="url" name="Your_Website" placeholder="Your answer"  id="form" type="text" name="website_link" value="Your answer" onblur="if(this.value.length == 0) this.value = 'Your answer'" onfocus="if(this.value == 'Your answer') this.value = '' " />
                            </p>
                            <p class="media_kit_link">
                                <label for="media_kit_link" >Your Media Kit (Link)*</label>
                                <input type="url" name="Your_Media_Kit" placeholder="We need your pictures (e.g. banner, avatar) to fill the page with your project!"  id="form" type="text" name="media_kit_link" value="We need your pictures (e.g. banner, avatar) to fill the page with your project!" onblur="if(this.value.length == 0) this.value = 'We need your pictures (e.g. banner, avatar) to fill the page with your project!'" onfocus="if(this.value == 'We need your pictures (e.g. banner, avatar) to fill the page with your project!') this.value = '' " />
                            </p>
                            <p class="medium_link">
                                <label for="medium_link">Your Medium (if available)*</label>
                                <input type="url" name="Your_Medium" placeholder="Your answer"  id="form" type="text" name="medium_link" value="Your answer" onblur="if(this.value.length == 0) this.value = 'Your answer'" onfocus="if(this.value == 'Your answer') this.value = '' " />   
                            </p>
             
                            <p class="discord_link">
                                <label for="discord_link" >Your Discord (if available)*</label>
                                <input type="text" name="Your_Discord" placeholder="Your answer"  id="form" type="text" name="discord_link" value="Your answer" onblur="if(this.value.length == 0) this.value = 'Your answer'" onfocus="if(this.value == 'Your answer') this.value = '' " />         
                            </p>
                            
                                <input type="submit" value="SUBMIT FORM" class="list__page" />
            </form>
            
    </div>
</section>

<!--Footer start-->
<footer class="footer">
    <div class="container">
            <div class="footer__wrapper">
            <img src="img/LZ_logo.svg" alt="">
            <div class="footer__soc">
                <a href="https://twitter.com/L0_Corner" class="footer__link" target="_blank"><img src="img/Icon_twitter_w.svg" style="width: 1.320vw;" alt=""></a>
                <a href="#" class="footer__link"><img src="img/Icon_discord_w.svg" style="width: 1.407vw;" alt="" target="_blank"></a>
                <a href="https://mirror.xyz/0x085F66fD2F553d67f8787856aDc161FA468D338e" class="footer__link" target="_blank"><img src="img/Icon_mirror.svg" style="width: 1vw;" alt=""></a>
                <a href="https://crew3.xyz/c/layerzerocorner/questboard" class="footer__link" target="_blank"><img src="img/Icon_footer_6.svg" style="width: 1.4vw;" alt=""></a>
            </div>
            <p>CORNER MEDIA, 2023. COMMUNITY PROJECT</p>
        </div>
    </div>
</footer>
<!--Footer end-->

</body>
<script src="js/partnership.js"></script>
</html>
