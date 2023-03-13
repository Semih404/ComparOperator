<?php
include('./config/db.php');
?>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $message = $_POST['message'];
        $sql = "INSERT INTO comment (name, message) VALUE ('$name' , '$message')";
        $run_insert = mysqli_query($conn, $sql);
        
        header('location: tunisie.php');
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,400;0,900;1,300;1,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Agence de voyage</title>
</head>
<body>
    <nav class="nav">
        <div id="menu-bar" class="fas fa-bars" onclick="showmenu()"></div>
        <img   src="images/logo.png" alt="logo" >
    
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
    <section class="secondaire">
        <h1 class="heading">
            <span>T</span>
            <span>u</span>
            <span>n</span>
            <span>i</span>
            <span>s</span>
            <span>i</span>
            <span>e</span>
        </h1>
        <div class="box-image">
            <img id="image" src="images/tunis.jpeg" alt="">
        <i id="icon" class="fa-solid fa-chevron-right right" onclick= next(1)></i>
        <i id="icon" class="fa-solid fa-chevron-left left" onclick= prev(-1)></i>

        <div class="dots">
            <span class="active" onclick= slide(0)></span>
            <span onclick= slide(1)></span>
            <span onclick= slide(2)></span>
            <span onclick= slide(3)></span>
            <span onclick= slide(4)></span>
            <span onclick= slide(5)></span>
            <span onclick= slide(6)></span>
        </div>
        </div>
        
    </section>
    <div class="container-desc">
        <div class="box">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="prix">350 € <span>430€</span></div>
            </div>
        </div>

        <div class="description">
            <h3>Tunisie : voyage au pays du jasmin</h3>
            <p>Au Maghreb, situé entre la Libye à l'est et l'Algérie à l'ouest, la Tunisie est un pays d'Afrique particulièrement populaire pour tous ceux qui souhaitent profiter de séjours véritablement dépaysants. En effet, entre ses paysages typiques de l'Afrique du Nord et son climat doux lors des saisons froides et chaud l'été, la Tunisie accueille des visiteurs toute l'année. On peut y découvrir sa capitale Tunis, qui abrite certains des principaux lieux culturels du pays, tels que le Musée National du Bardo. Non loin de la capitale, on accède à Carthage, l'un des sites antiques les plus célèbres du monde et les mieux préservés de toute la Rome de l'Antiquité. Vous êtes à la recherche d'un endroit idéal pour un séjour détente et soleil ? Hammamet, Sousse, Djerba... autant de cités balnéaires où il fait bon vivre le temps de quelques jours lors de la saison estivale.</p>
        </div>
        <div class="desc-icon">
            <h3>Capital</h3>
            <span><i class="fa-solid fa-earth-africa"></i>Tunis</span>
        </div>
        <div class="desc-icon">
            <h3>Monnaie locale</h3>
            <span><i class="fa-regular fa-money-bill-1"></i>Le Dinar tunisien (DT)</span>
        </div>
        <div class="desc-icon">
            <h3>Temps du voyage</h3>
            <span><i class="fa-solid fa-plane"></i>2H25 de vol pour Tunis (depuis Paris)</span>
        </div>
    </div>

    <div class="commentaire">
        <form action="tunisie.php" method="post" class="form-comment">
            <input type="text" class="name" name="name" placeholder="Votre nom">
            <br>
            <input type="text" class="message " name="message" placeholder="Votre message">
            <br>
            <input type="submit" name="submit" class="btn-1" value="commenter">
        </form>

        

    </div>
    <?php
    $query = "SELECT * FROM comment ORDER BY id DESC";
    $run = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($run)){
        $name = $row ['name'];
        $message = $row ['message'];
        
    ?>
    <div class="content-com">
    
        <h3><?php echo $name; ?></h3>
        <p><?php echo $message; ?></p>
    </div>
    <?php } ?>

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
