<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio personnel Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn" >
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span></span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Accueil</a></li>
                <li><a href="#about" class="menu-btn">Bio</a></li>
                <li><a href="#services" class="menu-btn">Compétences</a></li>
                <li><a href="#skills" class="menu-btn">Cv</a></li>
                <li><a href="#teams" class="menu-btn">Réalisation</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- section accueil -->
    <section class="home" id="home">
      <div class="max-width">
          
          <div class="row">
            <div class="home-content">
                <div class="text-1">Bonjour je m'appelle</div>
                <div class="text-2">Carvajol Lory</div>
                <div class="text-3">Et je suis <span class="typing"></span></div>
                <a href="#" id="gemBtn">Recrutez moi</a>
            </div>
          </div>
      </div>
    </section>
    <script type="text/javascript">
        var macouleur="#EBFC1C"
        </script>
        <script src="http://ekladata.com/anWiitTC4dg8SbPUXtuLYnmNK8s/pluie.js" type="text/javascript"></script>
    <!--section à propos -->
    <section class="about "  id="about">
        <div class="max-width">
            <h2 class="title">A propos de moi</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/singe.jpg" alt="" >
                </div>
                <div class="column right">
                    <div class="text">Je m'appelle Carvajol Lory et je suis <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="#" id="gemBtn">téléchargement CV</a>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/scrollreveal"></script>
        
        
    </section>

    <!--  section projet -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Mes réalisations</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        
                        <div class="text">Projet présentation département</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <a href="#"class="cardBtn" id="gemBtn">Visiter</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        
                        <div class="text">Projet site de location de gîte</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <a href="#" class="cardBtn" id="gemBtn">Visiter</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        
                        <div class="text">Work in progress</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        
                        <div class="text">Comming soon ?</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        
                        <div class="text">Comming soon ?</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        
                        <div class="text">Comming soon ?</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- section compétences start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Mes compétences</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mes capacités et compétences</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                    <a href="#" id="gemBtn">En savoir plus</a>
                </div>
                <div class="column right">
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

    <!-- section frame-outils start -->
    <!--<section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- section contact start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contacter moi</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom: </div>
                                <div class="sub-title">Carvajol lory</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adresse: </div>
                                <div class="sub-title">Aix-les-Bains, France</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email: </div>
                                <div class="sub-title">lorycarvajol1@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
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
                          
                    <form class="contact-form" action="post_contact.php
                    " method="POST">
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
        <span>Créer par Carvajol lory  </span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['succes']);
?>