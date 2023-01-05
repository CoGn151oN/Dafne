<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=<?php echo "$meta_desc";?>>
    <meta name="keywords" content=<?php echo "$meta_keywords";?>>
    <meta name="author" content="lesekke@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
    "sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>
        <?php echo "$title";?>
    </title>
    <link href=style_page.css type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_transp.ico">
</head>
<body>
    <header>
        <div class="container head">
            <nav role="navigation">
                <div class="row">
                    <div class="col">
                        <div id="menuToggle">
                        <!--hamburger menu-->
                            <input type="checkbox" />
                                <span></span>
                                <span></span>
                                <span></span>
                            <ul id="menu">
                                <a class="header_hamb_but" href="index.php"><li>Home</li></a><hr>
                                <a class="header_hamb_but" href="services.php"><li>Szolgáltatások</li></a><hr>
                                <a class="header_hamb_but" href="prices.php"><li>Árlista</li></a><hr>
                                <a class="header_hamb_but" href="contact.php"><li>Kapcsolat</li></a><hr>
                            </ul>
                        </div>
                    </div>

                    <!--logo-->
                    <div class="col logo_background">
                        <a class="headlogo" href="index.php">
                            <img class="header_logo" src="img/dafne_logo_tan.png" 
                            alt="Dafne logo" title="Dafne Logo">
                        </a>
                        <h2 class="slogan">Az egészség természetes megközelítése</h2>
                    </div>

                    <div class="col">
                        <div class="row">
                        <!--top row for social media-->
                            <ul class="social_header">
                                <li>
                                    <a href="https://www.facebook.com/Dafne-Massz%C3%A1zs-Szalon-105476405664612" target="_blank">
                                        <img class="sm" src="img/facebook.png" alt="facebook logo" title="Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com" target="_blank">
                                        <img class="sm" src="img/instagram.png" alt="instagram logo" title="Instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:masszazs@dafne.hu" target="_blank">
                                        <img class="sm" src="img/mail.png" alt="email logo vector white" title="E-Mail">
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+36301742273" target="_blank">
                                        <img class="sm" src="img/phone.png" alt="phone logo vector white" title="Phone">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>    
        </div>
    </header>
    