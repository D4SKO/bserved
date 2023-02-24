<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bserved est votre partenaire de confiance pour le nettoyage résidentiel et commercial à Bruxelles. Nous offrons des services professionnels de nettoyage de qualité supérieure pour répondre à tous vos besoins de nettoyage. Contactez-nous dès maintenant pour obtenir un devis gratuit et découvrir comment nous pouvons rendre votre espace plus propre et plus sain.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/index.css">
    <title>BSERVED</title>
</head>
<body>
    <div class="bserved">
    <header>
        <div class="logo"></div>
        <div class="menu">
            <nav>
                <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </header>
                <!-- -----------------------------------PAGE SLIDER-------------------------------------------- -->
                <div class="slider page" id="accueil">
            <div class="navigation">
                <div class="navn nav1" id="nav1"></div>
                <div class="navn nav2 active" id="nav2"></div>
                <div class="navn nav3" id="nav3"></div>
            </div>
            <div class="slidershow">
                <div class="slide slide1" >
                    <div class="img">
                        <div class="hover"></div>
                        <img src="./img/home2.jpg" alt="image de salon nettoyage">
                    </div>
                </div>
                <div class="slide slide2 act" >
                    <div class="infos">
                        <div class="img">
                            <div class="hover"></div>
                            <?php
                                $image_url = get_field('image_slide1');
                            ?>
                            <img src="<?php echo $image_url; ?>" class="img1" alt="image de salon et materiel de nettoyage">
                        </div>
                        <h1><?php echo get_field('titre_slide_1'); ?></h1>
                        <p class="titre"><?php echo get_field('texte_du_slide_1'); ?></p>
                        <div class="ligne">
                            <div class="ligne1"></div>
                            <div class="ligne2"></div>
                        </div>
                    </div>
                </div>
                <div class="slide slide3" ></div>
            </div>
        </div>
        <div class="apropos page" id="apropos">
            <div class="img">
            <?php
                $image_url2 = get_field('img_apropos');
            ?>
                <img class="img1" src="<?php bloginfo('stylesheet_directory'); ?>/img/fond-bry.png" alt="image de fond coleur bleu">
                <img class="img2" src="<?php echo $image_url2; ?>" alt="image de personnes qui nettoient">
            </div>
            <div class="center">
                <p class="gtitre"><?php echo get_field('titre_apropos'); ?></p>
                <p><?php echo get_field('texte_apropos'); ?></p>
            </div>
        </div>
                <!-- -----------------------------------PAGE SERVICES -------------------------------------------- -->
                <div class="nosservice page" id="nosservice">
            <div class="hover"></div>
            <?php
                $image_url3 = get_field('service_fond');
            ?>
            <img src="<?php echo $image_url3; ?>" alt="fond abstrait vague">
            <div class="center">
                <p class="gtitre"><?php echo get_field('service_titre'); ?></p>
                <p class="txt"><?php echo get_field('service_txt'); ?></p>
                <div class="categories">
                    <div class="cat cat1">
                        <div class="hover">
                            <p class="tit"><?php echo get_field('service1_titre'); ?></p>
                            <hr>
                            <p class="txtit"><?php echo get_field('service1_txt'); ?></p>
                        </div>
                        <?php
                            $service1_fond = get_field('service1_fond');
                        ?>
                        <img src="<?php echo $service1_fond; ?>" alt="quelqu'un qui utilise du spay nettoyant">
                    </div>
                    <div class="cat cat2">
                        <div class="hover">
                            <p class="tit"><?php echo get_field('service2_titre'); ?></p>
                            <hr>
                            <p class="txtit"><?php echo get_field('service2_txt'); ?></p>
                        </div>
                        <?php
                            $service2_fond = get_field('service2_fond');
                        ?>
                    <img src="<?php echo $service2_fond; ?>" alt="quelqu'un qui utilise du spay nettoyant">
                    </div>
                    <div class="cat cat3">
                        <div class="hover">
                            <p class="tit"><?php echo get_field('service3_titre'); ?></p>
                            <hr>
                            <p class="txtit"><?php echo get_field('service3_txt'); ?></p>
                        </div>
                        <?php
                            $service3_fond = get_field('service3_fond');
                        ?>
                        <img src="<?php echo $service3_fond; ?>" alt="quelqu'un qui utilise du spay nettoyant">
                    </div>
                </div>
            </div>
        </div>
        <!-- -----------------------------------PAGE AVIS -------------------------------------------- -->
        <div class="page avis" id="avis">
            <div class="center">
                <p class="gtitre">AVIS</p>
                <div class="formulaire">
                <form action="<?php bloginfo('stylesheet_directory'); ?>/traitement.php" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="avis">Avis :</label>
                    <textarea id="avis" name="avis" required></textarea>

                    <input type="hidden" id="note" name="note" value="0">
                    <input type="hidden" id="affiche" name="affiche" value="0">

                    <div class="rating">
                        <a href="#" id="1"><i class="fas fa-star"></i></a>
                        <a href="#" id="2"><i class="fas fa-star"></i></a>
                        <a href="#" id="3"><i class="fas fa-star"></i></a>
                        <a href="#" id="4"><i class="fas fa-star"></i></a>
                        <a href="#" id="5"><i class="fas fa-star"></i></a>
                    </div>

                    <button type="submit">Envoyer</button>
                </form>
                </div>
                <div class="avisaff">
                    <div class="scroll">
                        <?php
                            // Connexion à la base de données
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "bserved";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Vérifier la connexion
                            if ($conn->connect_error) {
                            die("La connexion a échoué : " . $conn->connect_error);
                            }
                            // Préparer la requête SQL pour récupérer les six premiers avis
                            $stmt = $conn->prepare("SELECT nom, commentaire, etoiles FROM avis ORDER BY id DESC");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Boucle pour afficher les avis
                            while ($row = $result->fetch_assoc()) {
                            // Récupérer les données de l'avis
                            $nom = $row['nom'];
                            $commentaire = $row['commentaire'];
                            $nb_etoiles = $row['etoiles'];

                            // Afficher les données de l'avis
                            echo '<div class="displayavis">';
                            echo '<div class="nom"><i class="fa-solid fa-user"></i> <p>' . $nom . '</p></div> <hr>';
                            echo '<ul class="etoiles">';
                            // Boucle pour créer les étoiles
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $nb_etoiles) {
                                $etoile_class = "etoile-pleine";
                                } else {
                                $etoile_class = "etoile-vide";
                                }
                                echo '<li><i class="fa fa-star ' . $etoile_class . '"></i></li>';
                            }
                            echo '</ul>';
                            echo '<p>' . $commentaire . '</p>';
                            echo '</div>';
                            }

                            // Fermer la requête et la connexion à la base de données
                            $stmt->close();
                            $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- -----------------------------------PAGE CONTACT -------------------------------------------- -->
        <div class="contact page" id="contact">
            <div class="centre">
                <p class="gtitre">CONTACT</p>
                <div class="carte">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/fond-bry2.png" alt="fond bleu">
                    <div class="centre">
                        <div class="left">
                            <p class="tit"><?php echo get_field('contact_titre'); ?></p>
                            <p><?php echo get_field('contact_txt'); ?></p>
                            <div class="info">
                                <div class="phone">
                                    <i class="fa-solid fa-phone"></i>
                                    <p><?php echo get_field('contact_telephone'); ?></p>
                                </div>
                                <div class="mail">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p><?php echo get_field('contact_mail'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <form action="post.php" method="POST">
                                <div class="labnom">
                                    <label for="nom">Nom</label>
                                    <label for="prenom">Prenom</label>
                                </div>
                                <div class="nom">
                                    <input id="nom" type="text">
                                    <input id="prenom" type="text">
                                </div>
                                <label class="mail" for="mail">Email</label>
                                <input id="mail" type="text">
                                <label class="message" for="message">Message</label>
                                <input id="message" type="textarea">
                                <button type="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  .  *.                                                          
                 , @ (   .                               ,   ( .                
                  ,  ,,  @                   ,,.   ..   ,  ,,  .                
                   .  ,,,,                      ,@.   ,,,,,   .                 
                       ,,.                           ,,,,,                      
                     .  ,                               ,@ *                    
                       @                               @                        
                    * ,  %@@@          (@@ @           @ .                      
                   .  ,              &@@@*             ( .                      
                   , @       ,                                                  
                   / .       (((.          ,,                                   
                   , .   .   .,,        ,,,                                     
                   . @     @@@((@@@@,,,&@,                                      
                      ,                 ,                /                      
                    , @       @      @                 % ,                      
                     ,                   .,*/****,,,***.        -->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js.js"></script>
</body>
</html>