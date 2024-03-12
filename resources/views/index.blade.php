<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <title>My Portfolio</title>
</head>
<body class="pilling-page"  data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="1">
    <div id="overlayer">
        <span class="spinner-grow spinner-grow-lg loader" role="status" aria-hidden="true"></span>
    </div>
    <div class="blog-single modal fade" id="blog-single" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModalScrollable">Write Your Dreams</h5>
                    <button type="button" class="btn-close text-muted" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="pt-4 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 blog">
                                    <div class="rounded px-lg-5">
                                        <div class="text-md-start">
                                            <h4 class="mb-4">The best way to become a good web designer</h4>
                                            <img src="{{ asset('img/blog-single-01.jpeg') }}" alt="" class="img-fluid w-100 rounded">
                                            <span class="d-inline-block py-4"> 1 April 2019 / By <span class="purple-color text-end"> John Doe. </span>
                                            </span>
                                            <p class="text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                            <div class="px-md-5 px-3 py-4 quotation">
                                                <i class="base-color lni-quotation size-md"></i>
                                                <h6 class="base-color font-italic mb-0">We Love Buna, lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper.</h6>
                                            </div>
                                            <p class="my-3 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                            <ul class="list-unstyled mt-4 checkmark-list">
                                                <li class="mb-2">
                                                    <span class="text-muted ms-1">The purpose of lorem ipsum is to create</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-muted ms-1">In particular, the garbled words of lorem ipsum</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-muted ms-1">occasionally circumstances occur in which toil</span>
                                                </li>
                                            </ul>
    
                                            <div class="contact mt-4">
                                                <div class="contact-form">
                                                    <h2 class="text-start mb-4">Leave a reply</h2>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 form-item">
                                                                <div class="input-group mb-3">
                                                                    <input name="name" id="blog-name" type="text" class="form-control" placeholder="Your Name*" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 form-item">
                                                                <div class="input-group mb-3">
                                                                    <input name="email" id="blog-email" type="email" class="form-control" placeholder="Your Email*" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-item">
                                                                <div class="input-group mb-3">
                                                                    <textarea name="comments" id="blog-comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-4 text-start">
                                                                <button type="submit" class="pill-button" id="blog-submit-btn">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="portfolio-single modal fade" id="portfolio-single" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalScrollable">My Work</h5>
                    <button type="button" class="btn-close text-muted" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="pt-4 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-10 offset-md-1">
                                    <div class="text-center">
                                        <h2 class="text-dark mb-3">Single <span class="base-color"> Portfolio</span></h2>
                                        <p class="text-muted max-width-450">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                    <div class="row contact-info mt-5">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <div>
                                                    <h6>Created by:</h6>
                                                    <p class="text-muted mb-0">John Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 p-title-border mt-3 mt-md-0">
                                            <div class="text-center">
                                                <div>
                                                    <h6 class="contact_detail-title">Completed on:</h6>
                                                    <p class="text-muted mb-0">September 30, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3 mt-md-0">
                                            <div class="text-center">
                                                <div>
                                                    <h6>Skills:</h6>
                                                    <p class="text-muted mb-0">HTML5 / PHP / CSS3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div class="portfolio-single-item">
                                            <img src="{{ asset('img/005.jpeg') }}" class="d-block w-100 rounded" alt="...">
                                        </div>
                                    </div>
                                    <div class="text-md-start mt-5">
                                        <p class="my-3 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                        <p class="mt-3 mb-0 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div id="pagepiling" class="pagepiling">
        <header>
            <div class="logo-area">
                <a href="{{ route('home') }}" class="logo">
                    <span class="size-sm mb-0 fw-bold ps-3 text-dark text-start">MY <span class="base-color">PORTFOLIO</span></span>
                </a>
            </div>
            <div class="header-info-area">
                <a class="overlay-menu-toggler lni-menu size-md" href="javascript:void(0);"></a>
                <div class="overlay-menu bg-blue py-3 px-4 text-center center-item">
                    <div id="scrollspy" class="overlay-menu-list">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 overlay-nav">
                                    <ul class="list-group text-start" id="myMenu">
                                        <li data-menuanchor="hero" class="list-group-item"><a href="#hero">Home</a></li>
                                        <li data-menuanchor="about" class="list-group-item"><a href="#about">About me</a></li>
                                        <li data-menuanchor="services" class="list-group-item"><a href="#services">Services</a></li>
                                        <li data-menuanchor="portfolio" class="list-group-item"><a href="#portfolio">Portfolio</a></li>
                                        <li data-menuanchor="client" class="list-group-item"><a href="#testimonial">Client</a></li>
                                        <li data-menuanchor="blog" class="list-group-item"><a href="#blog">Blog</a></li>
                                    </ul>
                                    <ul class="list-group contact-info text-start mb-0">
                                        <li class="list-group-item"><span>Contact Info :</span></li>
                                        <li class="list-group-item"><span><i class="lni-map-marker"></i> Bogor, Jawa Barat, Indonesia</span></li>
                                        <li class="list-group-item"><span><i class="lni-phone-handset"></i> +62 821 1047 4856</span></li>
                                        <li class="list-group-item"><span><i class="lni-envelope"></i> <a href="#" class="p-0">randiprytna@gmail.com</a></span></li>
                                        <li class="list-group-item"><span>Follow me :</span></li>
                                        <li class="list-group-item">
                                            <ul class="list-inline socails">
                                                <li class="list-inline-item"><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="lni-github-original"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section pp-scrollable hero hero-02 full-screen p-0" id="hero" data-navigation-color="#fff" data-navigation-tooltip="HOME">
            <div class="container-fluid">
                <div class="title-small">
                    <p class="text-dark">Home</p>
                </div>
                <div class="row justify-content-center" id="hero-slider">
                    <div class="owl-carousel owl-theme px-0">
                        <div class="hero-slide hero-item1 full-screen"></div>
                        <div class="hero-slide hero-item2 full-screen"></div>
                        <div class="hero-slide hero-item3 full-screen"></div>
                    </div>
                </div>
                <div class="text-center hero-content">
                    <div class="col-lg-12">
                        <div class="hero-content text-center">
                            <img src="{{ asset('img/foto-profil.jpeg') }}" alt="" class="rounded-circle img-thumbnail">
                            <h3 class="text-dark mb-0 mt-3">I'm Muhammad Randi Nur Priyatna</h3>
                            <h1 class="text-dark text-capitalize mb-3"><span class="base-color">A  </span> <span class="element" data-elements="Fullstack Developer"></span></h1>
                            <div>
                                <ul class="list-inline social-icon mt-2">
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-instagram-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-facebook-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-twitter-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-github-original text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-linkedin-original text-dark"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-icon">
                    <a href="#about">
                        <i class="lni-arrow-down text-dark size-sm"></i>
                    </a>
                </div>
            </div>
        </section>     
        <section id="about" class="section pp-scrollable about text-dark" data-navigation-color="#fff" data-navigation-tooltip="ABOUT ME">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">About me</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <img src="{{ asset('img/about.jpeg') }}" alt="/" class="rounded img-thumbnail w-100">
                            </div>
                            <div class="col-lg-6 personal-item  mb-4 mb-lg-0">
                                <h2 class="text-dark mb-2">About <span class="base-color">Me</span></h2>
                                <p class="text-dark mb-3">I'm a fullstack developer with experience in create, evaluating and improving websites and applications to enchance user experience and functionality. Proven success in planning and implementing complex technical solutions to detailed client briefs and requirements.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 personal-info">
                                        <p class="text-dark">Birthday : <span class="text-gray"> 05 August 2004</span></p>
                                        <p class="text-dark">Phone : <span class="text-gray">+62 821 1047 4856</span></p>
                                        <!-- <p class="text-dark">City : <span class="text-gray"> Bogor</span></p> -->
                                        <!-- <p class="text-dark">Website : <span class="text-gray">randiprytna.com</span></p> -->
                                    </div>
                                    <div class="col-lg-6 col-sm-6 personal-info">
                                        <p class="text-dark">Age : <span class="text-gray">19</span></p>
                                        <!-- <p class="text-dark">Degree : <span class="text-gray">Master</span></p> -->
                                        <p class="text-dark">Mail : <span class="text-gray">randiprytna@gmail.com</span></p>
                                        <!-- <p class="text-dark">Freelance : <span class="text-gray">Available</span></p> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="pdf/cv-muhammad-randi-nur-priyatna.pdf" target="_blank" class="pill-button mt-3 mb-lg-0 me-4">Download Cv</a>
                                        <a href="#contact" class="pill-button mt-3 mb-lg-0">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div id="count-up" class="text-center">
                            <div class="container">
                                <div class="row mt-4">
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-download size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0 ">Files Download</p>
                                    </div>
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-pencil-alt size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="6549" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Project Done</p>
                                    </div>
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-medall size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="793" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Get Award</p>
                                    </div>
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-emoji-smile size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Happy Client</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section id="resume" class="section pp-scrollable resume" data-navigation-color="#fff" data-navigation-tooltip="RESUME">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Resume</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Resume</span></h2>
                                    <!-- <p class="text-muted">I Am Available For Freelance Projects.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2"><i class="lni-graduation base-color"></i>Education</h3>
                                <ul class="timeline">
                                    <li>
                                        <h6 class="base-color mb-0">Information Systems</h6>
                                        <p>Universitas Binaniaga Indonesia</p>
                                        <small class="text-muted ">2023 - Now</small>
                                        <p class="text-dark py-3">As a first-semester student majoring in Information Systems, I have developed a strong understanding of fundamental concepts in the field of information technology. Courses undertaken during my first semester include introduction to programming fundamentals, database design, network and communication, foundations of information system, business model, mathematics, algorithms and data structure. I have actively engaged in classroom discussions, completed assignments, and participated in small projects which have enabled me to acquire analytical skills, problem-solving abilities, and solid teamwork skills. I am committed to continuously enhancing my knowledge and skills in information technology and contributing positively to both academic and professional environments.</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">Software Engineering</h6>
                                        <p>SMK Wikrama Bogor</p>
                                        <small class="text-muted ">2019 - 2022</small>
                                        <p class="text-dark py-3">Three-year experience in Vocational High School with a focus on Software Engineering. Throughout my studies, I gained a deep understanding of fundamental programming concepts, software development, and cutting-edge technologies in the IT industry. I actively participated in practical projects involving coding, testing, and implementing software solutions. Additionally, I developed skills in problem analysis, troubleshooting, and teamwork through collaboration with classmates on group projects. This experience has strengthened my foundation in understanding and applying crucial concepts in software development, preparing me for a successful career in the field of information technology.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2 mt-5 mt-lg-0"><i class="lni-apartment base-color"></i>Experience</h3>
                                <ul class="timeline">
                                    <li>
                                        <h6 class="base-color mb-0">Fullstack Developer </h6>
                                        <p>PT. Vektor Inti Prima</p>
                                        <small class="text-muted ">July 2022 - Now</small>
                                        <p class="text-dark py-3">I am responsible for developing web applications from conception to implementation. I possess the ability to work on both the front-end and back-end aspects, contributing to the entire software development lifecycle. With experience collaborating with teams, I am capable of crafting effective and innovative technical solutions to meet project needs.</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">UI & UX Designer </h6>
                                        <p>PT. Agatra Kreasi Teknologi</p>
                                        <small class="text-muted ">December 2021 - March 2022</small>
                                        <p class="text-dark py-3">As an intern UI & UX Designer, I am responsible for crafting and enhancing user experiences through intuitive and appealing interface designs. Engaged in the development process from initial concepts to implementation, I ensured that the produced products aligned with user needs and the company's vision. Additionally, I actively collaborated with development teams and other stakeholders to identify and solve design challenges, as well as optimize overall product performance.</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">Fullstack Developer </h6>
                                        <p>CV. IDS</p>
                                        <small class="text-muted ">December 2021 - March 2022</small>
                                        <p class="text-dark py-3">As an intern Fullstack Developer, I am responsible for supporting the development and implementation of end-to-end web applications. In this role, I am involved in the development phases from planning and design to implementation and maintenance.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-lg-12 skills">
                                <h3 class="text-dark mb-2 mt-5 mt-lg-0"><i class="lni-pencil base-color"></i>Skills</h3>
                            </div>
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>Laravel</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div> -->
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>Nuxt.js</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>Vue.js</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>React.js</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Tailwind</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Bootstrap</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>Express.js</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div> -->
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>Spring Boot</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div> -->
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>SQL</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>GIT</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Figma</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div> -->
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Microsoft (Word, Excel, Power Point)</span></div>
                                        <!-- <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>     
        <section id="services" class="section pp-scrollable services" data-navigation-color="#fff" data-navigation-tooltip="SERVICES">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">My Services</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Services</span></h2>
                                    <p class="text-muted">Services I Offer</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-layout size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Frontend Development</h5>
                                        <p class="text-muted mb-0">Implement and create responsive and attractive user interface designs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-database size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Backend Development</h5>
                                        <p class="text-muted mb-0">Building and managing servers and databases as well as creating and handling APIs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-mobile size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Mobile App Development</h5>
                                        <p class="text-muted mb-0">Create and develop innovative mobile applications (iOS & Android).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1  d-inline-block services-icon">
                                        <i class="lni-notepad size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Project Management and Collaboration</h5>
                                        <p class="text-muted mb-0">Organize projects and facilitate team collaboration with Agile or Scrum methods to optimize team productivity.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-website size-md base-color mb-0"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Maintenance and Updates</h5>
                                        <p class="text-muted mb-0">Perform routine maintenance, testing, debugging, and software updates to ensure optimal availability and security.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-seo-consulting size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Consultation and Training</h5>
                                        <p class="text-muted mb-0">Providing in-depth consultations and conducting targeted training to create the best solutions for clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="section pp-scrollable portfolio" data-navigation-color="#fff" data-navigation-tooltip="PORTFOLIO">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Portfolio</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">Creative <span class="base-color">Works</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Meet My Awesome Works and Enjoy</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-start portfolio-filter">
                                <li class="list-inline-item">
                                    <a href="#" data-filter="*" class="active my-1">All</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".webdesign" class="my-1">Web Design</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".mobiledesign" class="my-1">Mobile Design</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".seo" class="my-1">Seo</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".graphic" class="my-1">Graphic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-items mt-4 row">
                            <div class="col-lg-4 portfolio-item my-3 seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/001.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/001.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 graphic">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/002.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/002.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 webdesign graphic">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/003.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/003.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/004.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/004.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/005.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/005.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 webdesign seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/007.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/007.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/003.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/003.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/006.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/006.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="{{ asset('img/008.jpeg') }}" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="{{ asset('img/008.jpeg') }}" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial" class="section pp-scrollable testimonial text-center" data-navigation-color="#fff" data-navigation-tooltip="CLIENT">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Testimonial</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">My  <span class="base-color">Clients</span></h2>
                                    <p class="text-muted mt-1">What my clients say about me</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="owl-carousel">
                                    <div class="testimonial-item text-start">
                                        <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                        <div class="float-start mt-4 me-3 me-sm-4">
                                            <img src="{{ asset('img/client-01.png') }}" alt="/" class="rounded-circle">
                                        </div>
                                        <h4 class="float-start mt-5">-Jone Doe, <span class="fw-bold">Seo Manager</span></h4>
                                    </div>
                                    <div class="testimonial-item text-start">
                                        <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                        <div class="float-start mt-4 me-3 me-sm-4">
                                            <img src="{{ asset('img/client-02.png') }}" alt="/" class="rounded-circle">
                                        </div>
                                        <h4 class="float-start mt-5">-Jessy Doe, <span class="fw-bold">UI Designer</span></h4>
                                    </div>
                                    <div class="testimonial-item text-start">
                                        <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                        <div class="float-start mt-4 me-3 me-sm-4">
                                            <img src="{{ asset('img/client-03.png') }}" alt="/" class="rounded-circle">
                                        </div>
                                        <h4 class="float-start mt-5">-Jully Doe, <span class="fw-bold">UX Designer</span></h4>
                                    </div>
                                    <div class="testimonial-item text-start">
                                        <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                        <div class="float-start mt-4 me-3 me-sm-4">
                                            <img src="{{ asset('img/client-04.png') }}" alt="/" class="rounded-circle">
                                        </div>
                                        <h4 class="float-start mt-5">-Jully Doe, <span class="fw-bold">UX Designer</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <section id="blog" class="section pp-scrollable blog" data-navigation-color="#fff" data-navigation-tooltip="BLOG">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Blog</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">Latest <span class="base-color">News</span></h2>
                                    <p class="text-muted mt-1">Check Out My Latest Blog Posts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4 pointer" data-bs-toggle="modal" data-bs-target="#blog-single">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="{{ asset('img/blog-img-01.jpeg') }}" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-start p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog-single" class="text-dark fw-light">Be Your Best Version</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color fw-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-bs-toggle="modal" data-bs-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 pointer" data-bs-toggle="modal" data-bs-target="#blog-single">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="{{ asset('img/blog-img-02.jpeg') }}" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-start p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog-single" class="text-dark fw-light">5 Tips In UI/UX Web Design</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color fw-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-bs-toggle="modal" data-bs-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 pointer" data-bs-toggle="modal" data-bs-target="#blog-single">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="{{ asset('img/blog-img-03.jpeg') }}" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-start p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog-single" class="text-dark fw-light">Write Your Dreams</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color fw-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-bs-toggle="modal" data-bs-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section pp-scrollable contact" data-navigation-color="#fff" data-navigation-tooltip="CONTACT">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Get in Touch</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">Get <span class="base-color">In Touch</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Feel Free To Contact Me Any Time</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div id="my-map" data-location-lat="43.053454" data-location-lng="-76.144508" data-location-icon="{{ asset('img/location-map.png') }}"></div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-7 text-start">
                                <div class="contact-form">
                                    <h6 class="font-weight-semibold">Let’s Get Work With Me </h6>
                                    <p class="text-muted mt-3">Every project starts with the first step. Let's take that step together. I'm available to discuss and collaborate with you. Feel free to contact me through the available channels of communication.</p>
                                    <div class="mt-4">
                                        <p class="mt-2 fw-bold"> Phone : <span class="text-muted"> +62 821 1047 4856</span></p>
                                        <p class="mt-2 fw-bold"> Mail : <span class="text-muted">randiprytna@gmail.com</span></p>
                                        <p class="mt-2 fw-bold"> Address : <span class="text-muted"> Gugunung 02/06, Banjarwaru, Ciawi, Bogor, Jawa Barat, Indonesia</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-start">
                                <h6 class="font-weight-semibold">How can I help you ? </h6>
                                <form id="contactForm" class="form mt-3">
                                    <div class="row">
                                        <div class="col-lg-12 form-item">
                                            <div class="input-group mb-3">
                                                <input name="name" id="name" type="text" class="form-control" data-name-error="Name is required" placeholder="Your Name*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="input-group mb-3">
                                                <input name="email" id="email" type="email" class="form-control" data-email-error="Email is required" data-email-valid="Email is not valid" placeholder="Your Email*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="input-group mb-3">
                                                <input name="phone_number" id="phone_number" type="text" class="form-control" data-phone-error="Phone Number is required" placeholder="Your Phone Number*" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="input-group mb-3">
                                                <textarea name="comments" id="comments" rows="2" class="form-control h-auto" data-comment-error="Comments is required" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1 text-start">
                                            <button type="button" class="pill-button mt-3" id="submit-btn" onclick="sendEmail()">Send Message</button>
                                            <div id="message" class="toast text-white shadow-none border-0" role="alert" aria-live="assertive" aria-atomic="true" data-delay="1000" >
                                                <div class="toast-body d-inline-block"></div>
                                                <button type="button" class="btn-close text-muted pe-3" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>            
        <div id="footer" class="section pp-scrollable footer" data-navigation-color="#fff" data-navigation-tooltip="FOOTER" data-background-image="{{ asset('img/nill.jpeg') }}">
            <div class="container-fluid h-100 d-flex flex-column justify-content-center">
                <div class="row py-6">
                    <div class="title-small">
                        <p class="text-dark">Footer</p>
                    </div>
                    <div class="text-center m-auto">
                        <p class="text-dark size-sm">MY <span class="base-color">PORTFOLIO</span></p>
                        <ul class="list-inline socails">
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-instagram-filled text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-facebook-filled text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-twitter-filled text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-github-original text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-linkedin-original text-dark me-2"></i></a></li>
                        </ul>
                        <p class="ps-3 text-dark">Thank you for visiting my website. Let's stay connected and explore potential collaborations</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="color-scheme text-white bg-base-color d-inline-block" href="javascript:void(0)"><i class="lni-night"></i></a>          
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/nill.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
</body>
</html>