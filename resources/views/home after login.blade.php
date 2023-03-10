<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home after login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <title>Document</title>
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
                <li class="logout"><a class="out" onclick="checker('Are You Sure You Want Logout?')" href="./home without login.html">Logout</a></li>
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

    <section class="backga" id="home">
        <div class="background-image">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.atlantic-clinic.es/wp-content/uploads/2015/06/banner-atlantic-clinic-nueva-andalucia-marbella.jpg" class="d-block w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/1-13648.jpg" class="d-bblock-w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/???Pngtree???medical dental science research science_1084788.jpg" class="dd-block-w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
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
        </div>

        <div class="chatbot">
            <input type="checkbox" id="click">
                <label for="click" class="mess">
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <i class="fa-solid fa-circle-xmark"></i>
                </label>
            <div class="wrapper">
                <div class="headd-textt">Let's chat? - online</div>
                <div class="chat-box">
                    <div class="chats">
                        <div class="client-chat">Hi!</div>
                        <div class="my-chat">Hi!</div>
                        <div class="client-chat">How can i help you?</div>
                        <div class="my-chat">How you create this chat box?</div>
                        <div class="client-chat">Watch complete video for your answer.</div>
                    </div>
                    <div class="chat-input">
                        <button class="camera-btn">
                            <img src="./images/8ee22582e222e3c56d71d26a23f685a9.svg" alt="camera-btn">
                        </button>
                        <input type="text" placeholder="Enter Message" />
                        <button class="send-btn">
                            <img src="https://icon-library.com/images/107214_send.svg.svg" alt="send-btn">
                        </button>
                    </div>
                </div>

            </div>
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
            <form action="#">
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">First Name</label>
                  </div>
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Last Name</label>
                  </div>
               </div>
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
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
                     <textarea rows="8" cols="80" required></textarea>
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

                <p class="footer-company-name">Copyright ?? 2022 <strong>ProjectName</strong> All rights reserved</p>
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
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </footer>

    <!-- <div class="chatbot">
        <input type="checkbox" id="click">
            <label for="click" class="mess">
                <i class="fa-brands fa-facebook-messenger"></i>
                <i class="fa-solid fa-circle-xmark"></i>
            </label>
        <div class="wrapper">
            <div class="headd-textt">Let's chat? - online</div>
            <div class="chat-box">
                <div class="chats">
                    <div class="client-chat">Hi!</div>
                    <div class="my-chat">Hi!</div>
                    <div class="client-chat">How can i help you?</div>
                    <div class="my-chat">How you create this chat box?</div>
                    <div class="client-chat">Watch complete video for your answer.</div>
                </div>
                <div class="chat-input">
                    <button class="camera-btn">
                        <img src="./images/8ee22582e222e3c56d71d26a23f685a9.svg" alt="camera-btn">
                    </button>
                    <input type="text" placeholder="Enter Message" />
                    <button class="send-btn">
                        <img src="https://icon-library.com/images/107214_send.svg.svg" alt="send-btn">
                    </button>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        function checker(){
            var result = confirm('Are You Sure You Want Logout?');
            if(result == false){
                event.preventDefault();
            }
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home after login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <title>Document</title>
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
                <li class="logout"><a class="out" onclick="checker('Are You Sure You Want Logout?')" href="./home without login.blade.php">Logout</a></li>
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

    <section class="backga" id="home">
        <div class="background-image">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.atlantic-clinic.es/wp-content/uploads/2015/06/banner-atlantic-clinic-nueva-andalucia-marbella.jpg" class="d-block w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/1-13648.jpg" class="d-bblock-w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/???Pngtree???medical dental science research science_1084788.jpg" class="dd-block-w-100" alt="...">
                    <div class="background-content">
                        <h1>*Welcome to your Health Center* </h1>
                        <br>
                        <h2><p>We Have Best Medicare Plan Option For You<br> We help you know your disease and guide you to which doctor to go, the best doctor and the nearest clinic to you<br> We Have Good Chatbot You Can Join Us If You Want </p></h2>
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
        </div>

        <div class="chatbot">
            <input type="checkbox" id="click">
                <label for="click" class="mess">
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <i class="fa-solid fa-circle-xmark"></i>
                </label>
            <div class="wrapper">
                <div class="headd-textt">Let's chat? - online</div>
                <div class="chat-box">
                    <div class="chats">
                        <div class="client-chat">Hi!</div>
                        <div class="my-chat">Hi!</div>
                        <div class="client-chat">How can i help you?</div>
                        <div class="my-chat">How you create this chat box?</div>
                        <div class="client-chat">Watch complete video for your answer.</div>
                    </div>
                    <div class="chat-input">
                        <button class="camera-btn">
                            <img src="./images/8ee22582e222e3c56d71d26a23f685a9.svg" alt="camera-btn">
                        </button>
                        <input type="text" placeholder="Enter Message" />
                        <button class="send-btn">
                            <img src="https://icon-library.com/images/107214_send.svg.svg" alt="send-btn">
                        </button>
                    </div>
                </div>

            </div>
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
            <form action="#">
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">First Name</label>
                  </div>
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Last Name</label>
                  </div>
               </div>
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
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
                     <textarea rows="8" cols="80" required></textarea>
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

                <p class="footer-company-name">Copyright ?? 2022 <strong>ProjectName</strong> All rights reserved</p>
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
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </footer>

    <!-- <div class="chatbot">
        <input type="checkbox" id="click">
            <label for="click" class="mess">
                <i class="fa-brands fa-facebook-messenger"></i>
                <i class="fa-solid fa-circle-xmark"></i>
            </label>
        <div class="wrapper">
            <div class="headd-textt">Let's chat? - online</div>
            <div class="chat-box">
                <div class="chats">
                    <div class="client-chat">Hi!</div>
                    <div class="my-chat">Hi!</div>
                    <div class="client-chat">How can i help you?</div>
                    <div class="my-chat">How you create this chat box?</div>
                    <div class="client-chat">Watch complete video for your answer.</div>
                </div>
                <div class="chat-input">
                    <button class="camera-btn">
                        <img src="./images/8ee22582e222e3c56d71d26a23f685a9.svg" alt="camera-btn">
                    </button>
                    <input type="text" placeholder="Enter Message" />
                    <button class="send-btn">
                        <img src="https://icon-library.com/images/107214_send.svg.svg" alt="send-btn">
                    </button>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        function checker(){
            var result = confirm('Are You Sure You Want Logout?');
            if(result == false){
                event.preventDefault();
            }
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
