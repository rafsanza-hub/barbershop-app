<?= $this->extend('landing_page/layouts/main.php') ?>

<?= $this->section('content') ?>
 <!-- Header section -->

 <section id="banner">
        <nav>
            <a href="index.html"><img src="images/barber.png" alt="" /></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#banner">HOME</a></li>
                    <li><a href="#features">ABOUT</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li><a href="#testimoni">TESTIMONIALS</a></li>
                    <li><a href="#footer">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="banner-text">
            <h1>Hair Studio</h1>
            <p>Style Your Hair Is Style Your Life</p>
            <div class="banner-btn">
                <a href="#"><span></span>Find Out</a>
                <a href="#"><span></span>Read More</a>
            </div>
        </div>
    </section>

    <!-- Features section -->
    <section id="features">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us?</h1>
        </div>

        <div class="feature-box">
            <div class="features">
                <h1>Lorem, ipsum.</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="features-text">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                            harum.
                        </p>
                    </div>
                </div>
                <h1>Pre Boking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="features-text">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                            harum.
                        </p>
                    </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="features-text">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit,
                            harum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="images/barber-man.jpg" alt="barber-man" />
            </div>
        </div>
    </section>

    <!-- service -->

    <section id="service">
        <div class="title-text">
            <p>SERVICES</p>
            <h1>We Provide Better</h1>
        </div>

        <div class="service-box">
            <div class="single-service">
                <img src="images/allef-vinicius-IvQeAVeJULw-unsplash.jpg" alt="" />
                <div class="overlay">
                    <div class="service-desc">
                        <h3>Hair Styling</h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-service">
                <img src="images/pexels-jibarofoto-1453005.jpg" alt="" />
                <div class="overlay">
                    <div class="service-desc">
                        <h3>Hair Styling</h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-service">
                <img src="images/allef-vinicius-IvQeAVeJULw-unsplash.jpg" alt="" />
                <div class="overlay">
                    <div class="service-desc">
                        <h3>Hair Styling</h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-service">
                <img src="images/pexels-jibarofoto-1453005.jpg" alt="" />
                <div class="overlay">
                    <div class="service-desc">
                        <h3>Hair Styling</h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----- REVIEWS ----->

    <section id="testimoni">
        <div class="title-text">
            <p>TESTIMOONIAL</p>
            <h1>What Client Says</h1>
        </div>
        <div class="testimoni-row">
            <div class="testimoni-col">
                <div class="user">
                    <img src="images/nigga-icon.png" alt="" />
                    <div class="user-info">
                        <h4>FAUZAN KECAP <i class="fa fa-twitter"></i></h4>
                        <small>@fauzancuy</small>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
                    cumque rerum natus officiis repudiandae dolorum ut, nihil tempore ab
                    assumenda?
                </p>
            </div>
            <div class="testimoni-col">
                <div class="user">
                    <img src="images/nigga-icon.png" alt="" />
                    <div class="user-info">
                        <h4>FAREL CILOK <i class="fa fa-twitter"></i></h4>
                        <small>@farel</small>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
                    cumque rerum natus
                </p>
            </div>
            <div class="testimoni-col">
                <div class="user">
                    <img src="images/nigga-icon.png" alt="" />
                    <div class="user-info">
                        <h4>RIZKI HUCAP <i class="fa fa-twitter"></i></h4>
                        <small>@rizkycuy</small>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
                    cumque rerum natus officiis repudiandae dolorum ut, nihil tempore ab
                    assumenda?
                </p>
            </div>
        </div>
    </section>
    <!----- REVIEWS END ----->

    <!-----  FOOTER  ----->

    <section id="footer">
        <img src="images/nigga-icon.png" alt="" class="footer-img">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Shop Today</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 9pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday to Sunday - 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>Malaraman, Cigugugur, Kuningan<i class="fa fa-map-marker"></i></p>
                <p>rapsanza@gmail.com<i class="fa fa-plane"></i></p>
                <p>+62 123456789<i class="fa fa-phone"></i></p>
            </div>
        </div>

        <div class="socia-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>Copyright 20024</p>
        </div>
    </section>
    <!-----  FOOTER END ----->
    <?= $this->endSection() ?>