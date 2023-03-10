<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home without login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />




    <title>Welcome</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/chat.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/css/typing.css">
    <title>Chatbox</title>
</head>
<body>


    <header id="header" class="foq">
        <a href="#" class="logo">Logo</a>
        <div id="toggle"></div>
        <div id="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <script>
        const header = document.getElementById('header');
        const toggle = document.getElementById('toggle');
        const navbar = document.getElementById('navbar');

        document.onclick = function(e){
            if(e.target.id !=='header' && e.target.id !=='toggle' && e.target.id !=='navbar' ){
                toggle.classList.remove('active');
                navbar.classList.remove('active');

            }
        }
        toggle.onclick = function(){
            toggle.classList.toggle('active');
            navbar.classList.toggle('active');
        }
    </script>
    <section class="backg" id="home">
        <div class="background-image">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.atlantic-clinic.es/wp-content/uploads/2015/06/banner-atlantic-clinic-nueva-andalucia-marbella.jpg" class="d-block w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                        <a href="{{ route('login') }}">JOIN US</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/1-13648.jpg" class="d-bblock-w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                        <a href="{{ route('login') }}">JOIN US</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/???Pngtree???medical dental science research science_1084788.jpg" class="dd-block-w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                        <a href="{{ route('login') }}">JOIN US</a>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
            <!-- <img class="photo" src="https://www.atlantic-clinic.es/wp-content/uploads/2015/06/banner-atlantic-clinic-nueva-andalucia-marbella.jpg"> -->
            <!-- <div class="background-content">
                <h1>*Welcome to your Health Center* </h1>
                <br>
                <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                <a href="index.html">JOIN US</a>
            </div> -->
        </div>
    </section>

    <br>

    <section class="cards" id="services">
        <h2 class="title">Our Services</h2>
        <div class="content">

            <div class="card" data-aos="fade-right" data-aos-duration="500">
                <div class="icon">
                    <i class="fa-solid fa-file-medical"></i>
                </div>
                <div class="info">
                    <h3> Script Writing </h3>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sequi debitis libero modi laudantium animi repellendus sunt! Maiores, reprehenderit distinctio quos placeat sapiente animi natus magnam, iste excepturi quas necessitatibus! </p>
                </div>

            </div>

            <div class="card" data-aos="fade-up" data-aos-duration="500">
                <div class="icon">
                    <i class="fa-solid fa-house-chimney-medical"></i>
                </div>
                <div class="info">
                    <h3> Script Writing </h3>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sequi debitis libero modi laudantium animi repellendus sunt! Maiores, reprehenderit distinctio quos placeat sapiente animi natus magnam, iste excepturi quas necessitatibus! </p>
                </div>

            </div>

            <div class="card" data-aos="fade-left" ddata-aos-duration="500">
                <div class="icon">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <div class="info">
                    <h3> Script Writing </h3>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sequi debitis libero modi laudantium animi repellendus sunt! Maiores, reprehenderit distinctio quos placeat sapiente animi natus magnam, iste excepturi quas necessitatibus! </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="continer">
            <div class="titlee">
                <h1>About Us</h1>
            </div>
            <div class="contentt">
                <div class="articlee" data-aos="fade-right" ddata-aos-duration="500">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, soluta repellat ipsa iure nihil vero quam voluptatum quod autem fugit quisquam eveniet eum. Delectus quod aut suscipit! Autem, voluptates maxime.</p>

                </div>
                <div class="image-s" data-aos="fade-left" ddata-aos-duration="500">
                    <img src="https://s3.envato.com/files/275735392/2FUJ3571.jpg">
                </div>
            </div>

        </div>
    </section>


    <section class="contact-us" id="contact">
        <div class="container">
            <div class="text"> Contact us</div>
        <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required  name="name">
                 <div class="underline"></div>
                 <label for="">First Name</label>
              </div>
              <div class="input-data">
                 <input type="text" required >
                 <div class="underline"></div>
                 <label for="">Last Name</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="email">
                 <div class="underline"></div>
                 <label for="">Email Address</label>
              </div>
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Website Name</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" required name="message"></textarea>
                 <br />
                 <div class="underline"></div>
                 <label for="">Write Your Message</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit">
                    </div>
                 </div>
              </div>
           </div>
        </form>
        </div>

    </section>




    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Project<span>Name</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
                <a href="#">Blog</a>
            </p>
            <p class="footer-company-name">Copyright ?? 2022 <strong>SagarDeveloper</strong> All rights reserved</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Egypt</span>
                    Cairo</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+91 74**9**258</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>Sagar Developer</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum veniam commodi nihil facilis similique aliquid obcaecati atque debitis, vero nulla magni expedita quibusdam, possimus, magnam fuga alias ut dolores vel.
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>

