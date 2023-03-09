<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Frent-end/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,400;0,900;1,300;1,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Agence de voyage</title>
</head>
<body>
    <nav class="nav">
        <div id="menu-bar" class="fas fa-bars" onclick="showmenu()"></div>
        <img src="/Frent-end/images/logo.png" alt="logo" >
    
        <div class="voyage-lien">
            <a class="voyage-services__service" href="#Accueil">Accueil</a>
            <a class="voyage-services__service" href="#Reservation">Réservation</a>
            <a class="voyage-services__service"href="#Packages">packages</a>
            <a class="voyage-services__service"href="#Services">services</a> 
            <a class="voyage-services__service"href="#Galerie">galerie</a>
            <a class="voyage-services__service"href="#Contact">Contact</a>
        </div>
    
        <div class="icon">
            <i class="fas fa-search" onclick="showbar()" id="search-btn"></i>
            <i class="fa-solid fa-user" onclick="showform()"></i>
        </div>
        <form action="" class="search-from">
            <input type="search" id="search-input" placeholder="Rechercher">
            <label for="search-input" class="fa-solid fa-magnifying-glass"></label>
        </form>
    </nav>
    <div class="login-form">
        <i class="fas fa-times" id="form-close" onclick="hideform()"></i>
        <form action="">
            <h3>Login</h3>
            <input type="email" class="box" placeholder="Votre adresse email">
            <input type="password" class="box" placeholder="votre password">
            <input type="submit" class="btn" value="Connecter" >
        </form>
    </div>

    <!-----------------  fin partie navbar    ----------------------->

    <section class="home" id="Accueil">
        <div class="content">
            <h3>Vos vacances en tout inclus</h3>
            <p>Découvrir le monde autrement en vivant des expériences uniques et insolites</p>
            <a href="#" class="btn">Découvrir</a>
        </div>

        <div class="controls">
            <span class="video-btn blue" data-src="/Frent-end/images/Tunisia.mp4"></span>
            <span class="video-btn" data-src="/Frent-end/images/PARIS.mp4"></span>
            <span class="video-btn" data-src="/Frent-end/images/Bali.mp4"></span>
            <span class="video-btn" data-src="/Frent-end/images/Rome.mp4"></span>
            <span class="video-btn" data-src="/Frent-end/images/Maroc.mp4"></span>
        </div>
        <div class="video-container">
            <video src="/Frent-end/images/Tunisia.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>

    <!-----------------  fin partie section home    ----------------------->

    <section class="book" id="Reservation">
        <h1 class="heading">
            <span>R</span>
            <span>é</span>
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>a</span>
            <span>t</span>
            <span>i</span>
            <span>o</span>
            <span>n</span>
        </h1>

        <div class="row">
            <div class="image">
                <img src="/Frent-end/images/image1.png" alt="">
            </div>

            <form action="">
                <div class="input-div">
                    <h3>Votre Destination</h3>
                    <input type="text" list="datalistOption1" placeholder="ville ou nom d'hôtel">
                </div>

                <div class="input-div">
                    <h3>Date d'arrivée</h3>
                    <input type="date" placeholder="">
                </div>

                <div class="input-div">
                    <h3>Date de départ</h3>
                    <input type="date" placeholder="">
                </div>

                <div class="input-div">
                    <h3>Adults </h3>
                    <input type="number" placeholder="1 Adult">
                </div>

                <div class="input-div">
                    <h3>Enfants </h3>
                    <input type="number" placeholder="0 Enfant">
                </div>

                <div class="input-div">
                    <h3>Chambres </h3>
                    <input type="number" placeholder="1 chambre">
                </div>

                <input type="submit" class="btn" value="Réserver">
            </form>
        </div>

    </section>

    <!-----------------  fin partie section book    ----------------------->

    <section class="packages" id="Packages">
        <h1 class="heading">
            <span>P</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="container">
            <div class="box">
                <img src="/Frent-end/images/tunis.jpeg" alt="tunis">
                <div class="content">
                    <h3><i class="fa-solid fa-location-dot"></i>Tunisie</h3>
                    <p>Troisième pays du Maghreb, la Tunisie est un petit bijou méconnu d’Afrique du Nord.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="prix">350 € <span>430€</span></div>
                    <a href="#" class="btn">Découvrir</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/bali.jpeg" alt="bali">
                <div class="content">
                    <h3><i class="fa-solid fa-location-dot"></i>bali</h3>
                    <p>Destination de rêve pour beaucoup d’entre nous, Bali est une île aux multiples merveilles déposées au creux du Pacifique et qui ne demandent qu’à être connues.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="prix">820 € <span>950 €</span></div>
                    <a href="#" class="btn">Découvrir</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/barcelone.jpg" alt="Barcelone">
                <div class="content">
                    <h3><i class="fa-solid fa-location-dot"></i>Barcelone</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="prix">168 € <span>230 €</span></div>
                    <a href="#" class="btn">Découvrir</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/chine.jpeg" alt="chine">
                <div class="content">
                    <h3><i class="fa-solid fa-location-dot"></i>Chine</h3>
                    <p>Ce pays ne constitue pas, uniquement, un endroit parmi d’autres pour occuper ses congés. Elle représente, avant tout, une destination qui vous permettra de découvrir un pays aux antipodes du vôtre.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="prix">1400 € <span>1640 €</span></div>
                    <a href="#" class="btn">Découvrir</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/dobai.jpeg" alt="Dobai">
                <div class="content">
                    <h3><i class="fa-solid fa-location-dot"></i>Dobai</h3>
                    <p>C’est le city tour par excellence ! Un voyage à Dubaï vous plonge en effet dans la ville de demain, une cité de verre où les gratte-ciels tutoient le firmament, où la simplicité côtoie la démesure, où le luxe se fait abordable et le plaisir un mode de vie</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="prix">1070 € <span>1320 €</span></div>
                    <a href="#" class="btn">Découvrir</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/egypte.jpg" alt="Egypte">
                <div class="content">
                    <h3><i class="fa-solid fa-location-dot"></i>Egypte</h3>
                    <p>Nul ne peut rester insensible à cette terre qui a vu naître l’une des plus belles civilisations antiques. Mais si, le plus souvent, un voyage en Égypte prend sa source dans les livres d’histoire peuplés de pharaons, de pyramides et de divinités</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="prix">610 € <span>730 €</span></div>
                    <a href="#" class="btn">Découvrir</a>
                </div>
            </div>
        </div>
    </section>

    <!-----------------  fin partie section packages    ----------------------->

    <section class="services" id="Services">

        <h1 class="heading">
            <span>S</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Hôtel abordable</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, placeat.</p>
            </div>

            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Restaurants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, placeat.</p>
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>Guide de sécurité</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, placeat.</p>
            </div>

            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>Autour du monde</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, placeat.</p>
            </div>

            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>Voyages</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, placeat.</p>
            </div>

            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>Aventure</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, placeat.</p>
            </div>
        </div>

    </section>

    <!-----------------  fin partie section packages    ----------------------->

    <section class="galerie" id="Galerie">
        <h1 class="heading">
            <span>G</span>
            <span>a</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>i</span>
            <span>e</span>
        </h1>

        <div class="container">
            <div class="box">
                <img src="/Frent-end/images/france.jpeg" alt="">
                <div class="content">
                    <h3>France</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/italie.jpeg" alt="">
                <div class="content">
                    <h3>Italie</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/londres.jpeg" alt="">
                <div class="content">
                    <h3>Londres</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/maroc.jpeg" alt="">
                <div class="content">
                    <h3>Maroc</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>

            <div class="box">
                <img src="/Frent-end/images/new york.jpeg" alt="">
                <div class="content">
                    <h3>New-York</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>
        </div>
    </section>

    <!-----------------  fin partie section galerie    ----------------------->

    <section class="contact" id="Contact">

        <h1 class="heading">
            <span>C</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>
        <div class="row">
            <div class="image">
                <img src="/Frent-end/images/avion.avif" alt="">
            </div>
            <form action="">
                <div class="input-box">
                    <input type="text" placeholder="Votre nom">
                    <input type="email" placeholder="Votre Email">
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Number">
                    <input type="text" placeholder="Sujet">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="messages"></textarea>
                <input type="submit" class="btn" value="Envoyer message">
            </form>
        </div>
    </section>

    <!-----------------  fin partie section contact    ----------------------->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Déstination</h3>
                <a href="#">Tunisie</a>
                <a href="#">Londres</a>
                <a href="#">Now-york</a>
                <a href="#">France</a>
                <a href="#">Italie</a>
            </div>
            <div class="box">
                <h3>Section</h3>
                <a href="#Accueil">Accueil</a>
                <a href="#Reservation">Réservation</a>
                <a href="#Packages">packages</a>
                <a href="#Services">services</a>
                <a href="#Galerie">galerie</a>
                <a href="#Contact">Contact</a>
            </div>
            <div class="box">
                <h3>Suivez sur les réseaux sociaux</h3>
                <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fa-brands fa-linkedin"></i>Linkedin</a>
            </div>
        </div>
        <h1 class="created">Projet crée par <span>Taher Kammoun </span> & <span>Semih </span></h1>
    </section>

    <script src="js/travel.js"></script>
</body>
</html>
