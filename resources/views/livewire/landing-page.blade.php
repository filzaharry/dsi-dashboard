<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">      
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>

        <a href="#" class="scroll-top btn-hover top-hidden" style="display: flex;">
            <i class="bx bxs-chevron-up"></i>
        </a>

        <a href="#" class="logo">
            <img class="img-logo" src="{{ asset('admin/img/icons/dsi-icon.png')}}" alt="dsi-icon">
        </a>

        {{-- HEADER --}}
        <header>
            <a href="#" class="logo"></a>

            <ul class="navlist mt-2">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>

            <div class="bx bx-menu" id="menu-icon">
                
            </div>
        </header>
        {{-- HEADER --}}

        {{-- HOME SECTION DESIGN --}}
        <section class="home" id="home">
            <div class="home-text">
                {{-- <div class="slide">
                    <span class="one">Hello</span>
                    <span class="two">Developer</span>
                </div> --}}
                {{-- <h1>Mustakim</h1> --}}
                {{-- <h3>Seamless Integration and <span class="span-blue">Modern Containerize</span> </h3> --}}
                <div class="nerdy-pen">
                    <h3 class="nerdy-pen__text">Seamless Integration and
                      <span
                         class="txt-rotate span-blue"
                         data-period="2000"
                         data-rotate='[ "Containerize", "Development", "Design", "some might say lame." ]'></span>
                    </h3>
                </div>
                <p>Solusi infrastruktur digital Digisuprem efektif dalam membantu perusahaan mencapai transformasi digital. </br>Digital supremasi Indonesia dapat membantu mengintegrasikan teknologi digital di semua bidang bisnis.</p>
                <div class="button">
                    <a href="{{ route('dashboard')}}" class="btn">Get Started</a>
                    {{-- <a href="#" class="btn2"><span><i class="bx bx-play"></i></span>Watch</a> --}}
                </div>
            </div>
        </section>
        {{-- HOME SECTION DESIGN --}}

         {{-- PARTNER SECTION DESIGN --}}
         <section class="partner" id="partner">
            <div class="main-text">
                <h5>Lorem ipsum dolor sit amet.</h5>
            </div>
            <div class="partner-content">
                <div class="row">
                    <img src="{{asset('images/partner1.png')}}" alt="person" >
                </div>
            </div>
         </section>
         {{-- PARTNER SECTION DESIGN --}}

        {{-- SERVICE SECTION DESIGN --}}
        <section class="services" id=services>
            <div class="main-text">
                <h2 class="span-white">Our Services</h2>
                <h5 class="span-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, inventore</h5>
            </div>
            <div class="services-content">
                <div class="box">
                    <h3>Web Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus amet delectus, enim expedita sint nemo quisquam, error corporis. Doloremque aliquam aperiam rerum quo ipsam, est aliquid. Velit praesentium, id sequi maxime amet animi molestiae? Blanditiis, eveniet omnis.</p>
                    <a href="" class="read">Read More</a>
                    <a href="">Demo</a>
                </div>
                <div class="box">
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus amet delectus, enim expedita sint nemo quisquam, error corporis. Doloremque aliquam aperiam rerum quo ipsam, est aliquid. Velit praesentium, id sequi maxime amet animi molestiae? Blanditiis, eveniet omnis.</p>
                    <a href="" class="read">Read More</a>
                    <a href="">Demo</a>
                </div>
                {{-- <div class="box">
                    <h3>Creative Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus amet delectus, enim expedita sint nemo quisquam, error corporis. Doloremque aliquam aperiam rerum quo ipsam, est aliquid. Velit praesentium, id sequi maxime amet animi molestiae? Blanditiis, eveniet omnis.</p>
                    <a href="" class="read">Read More</a>
                </div>
                <div class="box">
                    <h3>Creative Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus amet delectus, enim expedita sint nemo quisquam, error corporis. Doloremque aliquam aperiam rerum quo ipsam, est aliquid. Velit praesentium, id sequi maxime amet animi molestiae? Blanditiis, eveniet omnis.</p>
                    <a href="" class="read">Read More</a>
                </div> --}}
                {{-- <div class="box">
                    <div class="s-icons">
                        <i class="bx bx-edit-alt"></i>
                    </div>
                    <h3>Creative Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus amet delectus, enim expedita sint nemo quisquam, error corporis. Doloremque aliquam aperiam rerum quo ipsam, est aliquid. Velit praesentium, id sequi maxime amet animi molestiae? Blanditiis, eveniet omnis.</p>
                    <a href="" class="read">Read More</a>
                </div> --}}
            </div>
         </section>
         {{-- SERVICE SECTION DESIGN --}}

         {{-- ABOUT SECTION DESIGN --}}
         {{-- <section class="about" id="about">
            <div class="about-img">
                <img src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="person" >
            </div>

            <div class="about-text">
                <h2>About <span class="span-blue">Me</span></h2>
                <h4>Creative UI/UX Designer</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quae totam fugiat unde, voluptates error dolorum? Facilis possimus molestias soluta iste voluptates ducimus quas, sunt excepturi nihil aut quos est, doloremque similique minima ratione labore cum. Minima quo vel ex possimus blanditiis obcaecati aliquid inventore expedita et perferendis. Labore, ea!</p>
                <a href="#" class="btn">More About</a>
            </div>
         </section> --}}
         {{-- ABOUT SECTION DESIGN --}}

         {{-- PORTO SECTION DESIGN --}}
         <section class="portfolio" id="portfolio">
            <div class="main-text">
                <h2 >Latest <span class="span-blue">Projects</span></h2>
                <h5 >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, inventore</h5>
            </div>
            <div class="portfolio-content">
                <div class="portfolio-box">
                    <div class="s-icons">
                        <img src="{{asset('images/rocket.png')}}" alt="person" >
                    </div>
                    <h3>Deployment</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem</p>
                </div>
                <div class="portfolio-box">
                    <div class="s-icons">
                        <img src="{{asset('images/phone.png')}}" alt="person" >
                    </div>
                    <h3>Mobile Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem</p>
                </div>
                <div class="portfolio-box">
                    <div class="s-icons">
                        <img src="{{asset('images/web.png')}}" alt="person" >
                    </div>
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem</p>
                </div>
                <div class="portfolio-box">
                    <div class="s-icons">
                        <img src="{{asset('images/color.png')}}" alt="person" >
                    </div>
                    <h3>UI / UX</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem</p>
                </div>
                <div class="portfolio-box">
                    <div class="s-icons">
                        <img src="{{asset('images/docker.png')}}" alt="person" >
                    </div>
                    <h3>Kubernetes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem</p>
                </div>
                <div class="portfolio-box-off"></div>
                {{-- <div class="box">
                    <div class="s-icons">
                        <i class="bx bx-edit-alt"></i>
                    </div>
                    <h3>Creative Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus amet delectus, enim expedita sint nemo quisquam, error corporis. Doloremque aliquam aperiam rerum quo ipsam, est aliquid. Velit praesentium, id sequi maxime amet animi molestiae? Blanditiis, eveniet omnis.</p>
                    <a href="" class="read">Read More</a>
                </div> --}}
            </div>

            {{-- <div class="portfolio-content">
                <div class="row">
                    <img src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="person" >
                    <div class="layer">
                        <h5>Visual Design</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus soluta vitae iste. Et explicabo, obcaecati delectus aspernatur pariatur repellendus ipsa?</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
            </div> --}}
         </section>
         {{-- PORTO SECTION DESIGN --}}

        {{-- HOME2 SECTION DESIGN --}}
        <section class="home2" id="about">
            <div class="home2-img"></div>

            <div class="home2-text">
                <h2>About <span class="span-blue">Us</span></h2>
                <h4>Creative UI/UX Designer</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quae totam fugiat unde, voluptates error dolorum? Facilis possimus molestias soluta iste voluptates ducimus quas, sunt excepturi nihil aut quos est, doloremque similique minima ratione labore cum. Minima quo vel ex possimus blanditiis obcaecati aliquid inventore expedita et perferendis. Labore, ea!</p>
                <a href="#" class="btn">More About</a>
            </div>
            </section>
        {{-- HOME2 SECTION DESIGN --}}


         {{-- CUSTOMER SECTION DESIGN --}}
         <section class="customer" id="customer">
            <div class="main-text">
                <h2 >Our Customers <span class="span-blue">Says!</span></h2>
                <h5 >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, inventore</h5>
            </div>
            <br>


            <div id="slider-container" class="slider">
                <div class="slide">
                    <div class="customer-box">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus ...</p>
                        <div class="customer-detail">
                            <img class="customer-img" src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="john">
                            <div class="customer-name">
                                <h2>John Doe</h2>
                                <p>Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="customer-box">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus ...</p>
                        <div class="customer-detail">
                            <img class="customer-img" src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="john">
                            <div class="customer-name">
                                <h2>John Doe</h2>
                                <p>Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="customer-box">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus ...</p>
                        <div class="customer-detail">
                            <img class="customer-img" src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="john">
                            <div class="customer-name">
                                <h2>John Doe</h2>
                                <p>Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="customer-box">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus ...</p>
                        <div class="customer-detail">
                            <img class="customer-img" src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="john">
                            <div class="customer-name">
                                <h2>John Doe</h2>
                                <p>Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="customer-box">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus ...</p>
                        <div class="customer-detail">
                            <img class="customer-img" src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="john">
                            <div class="customer-name">
                                <h2>John Doe</h2>
                                <p>Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="customer-box">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque mollitia sed voluptas maiores adipisci architecto rem, saepe aperiam accusantium reiciendis exercitationem voluptatibus ...</p>
                        <div class="customer-detail">
                            <img class="customer-img" src="https://i.pinimg.com/originals/75/22/61/752261b043a6d50484a715ba9be96581.jpg" alt="john">
                            <div class="customer-name">
                                <h2>John Doe</h2>
                                <p>Senior Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="slider-btn">
                <div onclick="prev()" class="control-prev-btn">
                    <i class='bx bxs-chevron-left'></i>
                </div>
                <div onclick="next()" class="control-next-btn">
                    <i class='bx bxs-chevron-right'></i>
                </div>
            </div>
         </section>
         {{-- CUSTOMER SECTION DESIGN --}}
         
         {{-- CONTACT SECTION DESIGN --}}
         <section class="contact" id="contact">
            <div class="contact-img">
                <img src="{{asset('images/body2.png')}}" alt="person" >
            </div>
            <div class="contact-text">
                <h2>Get in <span class="span-blue">touch!</span></h2>
                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, sequi?</h5>
              
                <div class="contact-form">
                    <form action="">
                        <input type="name" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email Address" required>
                        <input type="" placeholder="Your Mobile Number" required>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Brave Dragon"></textarea>
                        <input type="submit" value="Send Message" class="submit">
                    </form>
                </div>
            </div>

         </section>
         {{-- CONTACT SECTION DESIGN --}}

         {{-- END SECTION DESIGN --}}
         <section class="footer">
            <div class="last-text">
                <p>Copyright@2023 | PT. Digital Supremasi Indonesia . Allrights Reserved</p>
            </div>
            <div class="contact-icons">
                <a href=""><i class="bx bxl-facebook"></i></a>
                <a href=""><i class="bx bxl-twitter"></i></a>
            </div>
            {{-- <div class="top top-hidden">
                <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
            </div> --}}
         </section>
         {{-- END SECTION DESIGN --}}
        
        <script src="{{asset("js/script.js")}}"></script>
    </body>
</html>
