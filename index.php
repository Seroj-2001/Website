<?php
if(isset($_POST['send'])){
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'serojkhachatryan12@gmail.com';
$mail->Password = 'seroj123';
$mail->SMTPAuth = true;
$mail->setFrom=($_POST['email']);
$mail->AddAddress('serojkhachatryan12@gmail.com');
$mail->AddReplyTo($_POST['email'],$_POST['name']);
$mail->IsHTML(true);
$mail->Subject = 'PHPMailer Test Subject via Sendmail, basic';
$mail->AltBody = 'sdgadsgadsgasdgadgadasdsg'; 
$mail->Body = '<html>
            <body>
                <h2>Հետադարձ կապ - narekafssdgsgdsdg1323@gmail.com</h2>
                <hr>
                <p>Անուն<br>'.$_POST['name'].'</p>
                <p>Էլ. փոստ<br>'.$_POST['email'].'</p>
                <p>Նամակ<br>'.$_POST['message'].'</p>
            </body>
        </html>';

if(!$mail->Send())
{
  echo "Mailer Error: ". $mail->ErrorInfo;
}
else
{
  echo "Message send!";
}
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logo.jpg" type="image/x-icon">
    <title>Awesome Company - Վեբ Ծրագրավորում եւ հավելվածների ստեղծում</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="home" class="homepage">
<div class="loader">
    <img src="images/load.gif" alt="Loading..." />
</div>

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="font-size: 30px;" href="index.php">Awesome Company</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="#features">Ծառայություններ</a></li>
                        <li class="scroll"><a href="#about">Մեր Մասին</a></li>
                        <li class="scroll"><a href="#meet-team">Թիմ</a></li>                  
                    </ul>
                </div>
            </div>
        </nav>
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Awesome    </span>      Company</h2>
                                    <p>Ցանկանում եք ունենալ գեղեցիկ եւ հարմարվող վեբ կայք, կամ հարմարավետ հավելված, ապա դիմեք մեզ:Ձեր ցանկացած դիզայնով կայքերի եվ հավելվածների ստեղծում։</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Awesome  <span>     Company</span></h2>
                                    <p>Չգիտեք ինչպես զարգացնել ձեր բիզնեսը կամ միգուցե ցանկանում եք ավելի զարգացնել այն? Ապա դիմեք մեզ և ձեռք բերեք գեղեցիկ ու հարմարավետ վեբ կայք, որը կօգնի ձեզ աճել էլ ավելի արագ տեմպերով։
                                </p>
                                    <a class="btn btn-primary btn-lg" href="https://www.instagram.com/awesome__company/?hl=en" target="_blank">Հետևեք ՄԵզ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->


    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Ծառայություններ</h2>
                <p class="text-center wow fadeInDown">Մենք ջանք ու եռանդ չենք խնայում <br>որպեսզի մեր հաճախորդները գոհ մնան մեզանից</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Նախագծում</h4>
                            <p>Վեբ կայքերի նախագծում</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Ստեղծում</h4>
                            <p>Կայքերի ստեղծում</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Լոգո</h4>
                            <p>Լոգոների պատրաստում</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Հավելված</h4>
                            <p>Հավելվածների ստեղծում</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


                     <!--abouttt-->
    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">ՄԵր Մասին</h2>
                <p class="text-center wow fadeInDown">
«Awesome Company» <br> Երիտասարդ ծրագրավորողներից կազմված ընկերություն<br>
</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <img height="350" width="500" src="images/nkar.jpg">
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Awesome Company</h3>
                    <p>
«Awesome Company» իր գործունեությունն է ծավալում Հայաստանում: Շնորհիվ փորձառու, բանիմաց և կրեատիվ մտածելակերպ ունեցող մասնագետների, այն հաստատուն քայլերով առաջ է շարժվում և իր դիրքերը հաստատում վեբ ծրագրավորման հայաստանյան շուկայում` միառժամանակ համագործակցելով ամերիկյան, ռուսական և եվրոպական շուկաների հետ:</p>

                    <p>Ընկերությունը ստեղծվել է չորս ընկերների հիման վրա,որը նպատակ է հետապնդում զարգացնել ՏՏ ոլորտը Հայաստանում</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i>Վեբ կայքերի նախագծում եւ պատրաստում</li>
                                <li><i class="fa fa-check-square"></i> Կայքերի առաջխաղացում եւ սպասարկում</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Լոգոների Պատրաստում</li><br>
                                <li><i class="fa fa-check-square"></i> Հավելվածների ստեղծում</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="">Awesome Company</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->


    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Թիմ</h2>
                <p class="text-center wow fadeInDown">Մենք ժամանակի հետ կատարելագործվելով <br>  զարգացնում ու հզորացնում ենք Հայաստանյան ՏՏ ոլորտն ու մրցակցում արտասհահմանյան հզոր կազմակերպությունների հետ:</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img  class="img-responsive img-circle" src="images/seroj.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Սերյոժա Խաչատրյան</h3>
                            <span>Full Stack Web Developer</span>
                        </div>
                        <p>Ամենալավ աշխատանքը ՝ դա բարձր վարձատրվող հոբբին Է</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/seroj.khachatryan.33"><i class="fa fa-facebook" target="_blank"></i></a></li>
                            <li><a href="https://www.instagram.com/khachatr1an_/?hl=en"><i class="fa fa-instagram" target="_blank"></i></a></li>
                        </ul>
                    </div>
                </div>
            
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive img-circle" src="images/avo.png" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Ավետիք Չոբանյան</h3>
                            <span>Web Designer</span>
                        </div>
                        <p>Երիտասարդ մասնագետները աշխատել չգիտեն, իսկ փորձառուները գիտեն ինչպես չաշխատել․․</p>
                        <ul class="social-icons">
                            <li><a href="https://www.instagram.com/__avo__________/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive img-circle" src="images/tiko.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Տիգրան Հայրիկյան</h3>
                            <span>JAVA Developer</span>
                        </div>
                        <p>Ամենալավ աշխատանքը ՝ դա բարձր վարձատրվող հոբբին Է</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/tigran.hyarikyan?epa=SEARCH_BOX" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/hayrikyan_000_/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive img-circle" src="images/kost.png" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Նարեկ Կոստանյան</h3>
                            <span>Web Designer</span>
                        </div>
                        <p>Երիտասարդ մասնագետները աշխատել չգիտեն, իսկ փորձառուները գիտեն ինչպես չաշխատել․․</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/profile.php?id=100007352537050" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/kostan1an/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <footer id="footer">
                <h1>Awesome Company</h1>
                <p>Հեռախոսահամարներ:098622700 077209129</p>
                <ul class="social-icons">
                            <li><a href="https://www.facebook.com/Awesome-Company-1109443095913008/?ref=aymt_homepage_panel&eid=ARBp5U69M-Zw2XcKqU-EYb4jMeU585i0aTx6Dr7ikDKNcJRNP3oLgd7rqP3-MLb0atMX0Bkkypc18dH7" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/awesome__company/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>

            </footer>
            <button class="open-button" onclick="openForm()"><img height="40" width="40" src="images/message.jpg"></button>

<div class="chat-popup" id="myForm">


  <form action="" class="form-container"  method="post">
    <h1 style="text-align: center;margin-bottom: 10px;">Contact Us</h1>
    
    <input type="text" name="name" class="input" placeholder="Name">
    <input type="text" name="email" class="input" placeholder="Email">
    <textarea placeholder="Type message.." name="message" required></textarea>
    <button type="submit" name ="send" class="btn">Send</button>

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>


</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>