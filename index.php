<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    
    <title> Portfolio personnel lory carvajol</title>
    <link rel="stylesheet" href="style.css" id="swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn" >
        <em class="fas fa-angle-up"></em>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div data-aos="slide-right"  data-aos-duration = "3000" class="logo"><a href="#"><span><img src="images/logo.png" alt="logo" width="60px" height="60px"></span></a></div>
            <ul  data-aos="slide-down"  data-aos-duration = "3000"class="menu">
                <li><a href="#home" class="menu-btn">Accueil</a></li>
                <li><a href="#about" class="menu-btn">Bio</a></li>
                <li><a href="#services" class="menu-btn">Réalisations</a></li>
                <li><a href="#skills" class="menu-btn">Compétences</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="pad1">
        
        <div data-aos="slide-left" data-aos-offset= "70" data-aos-duration = "3000" class="buttonsheet">
            <div>
                <button onClick="swapStylesheet('style-2.css')">Lumière</button>
            </div>
            <div>
                <button onClick="swapStylesheet('style.css')">Ombre</button>
            </div>
            
        </div>
        </section>
            <div class="menu-btn">
                <em class="fas fa-bars"></em>
            </div>
        </div>
    </nav>

    <!-- section accueil -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="cloud"></div>
          <div class="row">
            <div data-aos="zoom-in" data-aos-offset= "70" data-aos-duration = "3000" class="home-content">
                <div  class="text-1">Bonjour je m'appelle</div>
                <div class="text-2">Carvajol Lory</div>
                <div class="text-3">Et je suis <span class="typing"></span></div>
                <a href="#contact" id="gemBtn">Recruter moi</a>
            </div>
          </div>
      </div>
    </section>
    <script type="text/javascript">
        var macouleur="#50C7C7"
        </script>
        <script src="http://ekladata.com/anWiitTC4dg8SbPUXtuLYnmNK8s/pluie.js" type="text/javascript"></script>
    <!--section à propos -->
    <section class="about "  id="about">
        <div class="max-width">
        <div  > <h2 data-aos="slide-up" data-aos-offset= "120" data-aos-duration = "3000"  class="title">A propos de moi</h2></div>
            <div class="about-content">
                <div class="card">
                <div data-aos="fade-in" data-aos-offset= "340" data-aos-duration = "2500" class="column left">
                    <img src="images/moi.png" alt="photo de beaugosse" height="60%">
                </div>
                </div>
                <div  data-aos="fade-in" data-aos-offset= "250" data-aos-duration = "2500" class="column right">
                    <div class="text">Je m'appelle Carvajol Lory et je suis <span class="typing-2"></span></div>
                    <p>Développeur web junior en apprentissage ,en reconversion par passion pour les nouvelles technologie et par obligation au vus de mes contraintes physique. Apres avoir passé 8 ans dans le domaine de l'industrie lourde et une période de convalescence forcée je me suis vue obligé bon gré mal gré au début  puis enthousiasme par la suite de me reconvertir. Je suis aujourd'hui renforcé par les expériences passées et déterminées à réussir mon projet professionel dans un secteur d'activité dynamique où la soif de connaissance est porteuse de reussite.  </p>
                    <a href="images\CV-lory-carvajol 2021.pdf" id="gemBtn" download="CV">téléchargement CV</a>
                    
                </div>
            </div>
        </div>       
    </section>

    <!--  section projet -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 data-aos="slide-up" data-aos-offset= "100" data-aos-duration = "2000" class="title">Mes réalisations</h2>
            <div  class="serv-content">
                <div data-aos="flip-down" data-aos-offset= "140" data-aos-duration = "2500" class="card">
                    <div class="box">                        
                        <div class="text">Projet présentation département</div>
                        <p>Projet de formation chez onlineformapro qui consiste à créer un site de présentation d'un département  en HTML/CSS.</p>
                        <a href="projet/projet1.html" target="_blank" class="cardBtn" id="gemBtn">Visiter</a>
                    </div>
                </div>
                <div  data-aos="flip-up" data-aos-offset= "140" data-aos-duration = "2500"class="card">
                    <div class="box">                       
                        <div class="text">Projet site de location de gîte</div>
                        <p>Projet de formation chez onlineformapro qui consiste à créer un site de location de gite en Html , css et PHP , javascript..</p>
                        <a href="projet2/projet2.html" target="_blank" class="cardBtn" id="gemBtn">Visiter</a>
                    </div>
                </div>
                <div data-aos="flip-down" data-aos-offset= "140" data-aos-duration = "2500" class="card">
                    <div class="box">                        
                        <div class="text">Work in progress</div>
                        <p><img src="images/work.png" alt="" width="150px" height="150px"></p>
                    </div>
                </div>
                <div data-aos="flip-down" data-aos-offset= "160" data-aos-duration = "2500" class="card">
                    <div class="box">                        
                        <div class="text">Comming soon ?</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div data-aos="flip-down" data-aos-offset= "160" data-aos-duration = "2500" class="card">
                    <div class="box">                        
                        <div class="text">Comming soon ?</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div data-aos="flip-down" data-aos-offset= "160" data-aos-duration = "2500" class="card">
                    <div class="box">                        
                        <div class="text">Comming soon ?</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>        
    </section>
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 25,
		speed: 400
	});
    </script>
    <!-- section compétences start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 data-aos="fade-in" data-aos-offset= "100" data-aos-duration = "2500" class="title">Mes compétences</h2>
            <div class="skills-content">
                <div data-aos="fade-left" data-aos-offset= "200" data-aos-duration = "2500" class="column left">
                    <div class="text">Mes capacités et compétences</div>
                    <p>L'ensemble des connaissances et capacitées accumuler dans mes diverses activités proféssionnel ,associative et expérience de la vie en générale.</p>
                    <a href="competence.html" target="_blank" id="gemBtn">En savoir plus</a>
                </div>
                <div data-aos="fade-right" data-aos-offset= "200" data-aos-duration = "2500" class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>50%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>30%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>40%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>50%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section contact start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 data-aos="fade-down" data-aos-offset= "140" data-aos-duration = "2500" class="title" id="ancre">Contacter moi</h2>
            <div class="contact-content">
                <div data-aos="slide-right" data-aos-offset= "140" data-aos-duration = "2500" class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Vous cherchez à me joindre pour une proposition, une question, une simple envie de me rencontrer, n'hésiter pas . .</p>
                    <div class="icons">
                        <div class="row">
                            <em class="fas fa-user"></em>
                            <div class="info">
                                <div class="head">Nom: </div>
                                <div class="sub-title">Carvajol lory</div>
                            </div>
                        </div>
                        <div class="row">
                            <em class="fas fa-map-marker-alt"></em>
                            <div class="info">
                                <div class="head">Adresse: </div>
                                <div class="sub-title">Aix-les-Bains, France</div>
                            </div>
                        </div>
                        <div class="row">
                            <em class="fas fa-envelope"></em>
                            <div class="info">
                                <div class="head">Email: </div>
                                <div class="sub-title">lorycarvajolwebdev@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="slide-left" data-aos-offset= "140" data-aos-duration = "2500" class="column right">
                    <div class="text">contacter moi</div>
                    <?php
                        if (array_key_exists('errors',$_SESSION)): ?>
                        <div class="alert alert_danger">
                            <?= implode('br', $_SESSION['errors']); ?>
                        </div>
                        <?php   endif; ?> 
                       <?php if (array_key_exists('succes',$_SESSION)): ?>
                        <div class="alert alert_succes">
                        Votre mail a bien été envoyé                        
                        </div>
                        <?php   endif; ?> 
                          
                    <form class="contact-form" action="post_contact.php " id="formu" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" class="fullname" name="name" id="inputname" placeholder="Nom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '' ; ?>">
                            </div>
                            <div class="field email">
                                <input type="text" class="email-input" name="email" id="inputemail" placeholder="Email"value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '' ; ?>">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" class="subject" name="subjet" id="inputsubjet" placeholder="Sujet"value="<?= isset($_SESSION['inputs']['subjet']) ? $_SESSION['inputs']['subjet'] : '' ; ?>">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message.."><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '' ; ?></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send" id="gemBtn">Envoyer message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- section footer start -->
    <footer>
        <span>© Carvajol lory - Tous droits réservés.  </span>
        <a href="https://github.com/maclory73"><img src="images/github-icon-38979.png" alt="lien vers git" id="logogit"></a>
        <a href="https://www.linkedin.com/in/lory-carvajol-71367513b/"><img src="images/logolinkwb.png" alt="lien vers linkedin" id="logolink"></a>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['succes']);
?>