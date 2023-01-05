<!DOCTYPE html>
<html lang="en, hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="Dafne Masszázs Szalon, az egészség természetes megközelítése">
    <meta name="keywords" content="masszázs, szalon, stressz, sport, sérülés, egészség, izom, massage, salon, stress">
    <meta name="author" content="lesekke@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafne Masszázs Szalon</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_transp.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
    "sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <section class="showcase">
        <header>
            <!--logo-->
            <a href="services.php">
                <img class="logo_index_header" src="img/logo_white.png" alt="dafne logo on tan background">
            </a>
            <div class="toggle"></div>
        </header>

        <!--video-->
        <video src="img/dafne_wallpaper.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">


        <p>
            <h3>Az egészség</h3>
            <h2>természetes</h2>
            <h4>megközelítése</h4>
        </p>  
        <p>
            <button>
                <a class="index_butt" href="prices.php">Árlista</a>
            </button>
            <button>
                <a class="index_butt" href="services.php">Szolgáltatások</a>
            </button>
        </p>
        </div>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/Dafne-Massz%C3%A1zs-Szalon-105476405664612" target="_blank">
                        <img class="fblogo" src="img/facebook.png" alt="facebook logo" title="Facebook">
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com" target="_blank">
                        <img class="iglogo" src="img/instagram.png" alt="instagram logo" title="Instagram">
                    </a>
                </li>
                <li>
                    <!-- fill out email -->
                    <a href="mailto:masszazs@dafne.hu" target="_blank">
                        <img class="email" src="img/mail.png" alt="email logo vector white" title="E-Mail">
                    </a>
                </li>
                <li>
                    <!-- fill out phone -->
                    <a href="tel:+36301742273" target="_blank">
                        <img class="phone_logo" src="img/phone.png" alt="phone logo vector white" title="Phone">
                    </a>
                </li>
            </ul>
    </section>

    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a><hr></li>
            <li><a href="services.php">Szolgáltatások</a><hr></li>
            <li><a href="prices.php">Árlista</a><hr></li>
            <li><a href="contact.php">Kapcsolat</a><hr></li> 
        </ul>
    </div>    
</body>
</html>

<script>
    const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');
    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
    })
</script>