<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kamiss Boutique</title>
</head>
<body>
    <header class="header-container" id="header_container">
        <div class="header-logo"><a href="#home"><img src="images/kb-logo-t.png" alt="Kamiss Boutique Logo"></a></div>
        <div class="header-nav">
            <div class="header-nav-menu">
                <ul class="nav-list">
                    <li class="list-item" data-list_data="home"> 
                        <a href="#home">
                            <i class="fa-solid fa-house link__icon"></i>
                            <span class="link__name">Home</span>
                        </a>
                    </li>
                    <li class="list-item" data-list_data="about">
                        <a href="#about">
                            <i class="fa-solid fa-shirt link__icon"></i>
                            <span class="link__name">About</span>
                        </a>
                    </li>
                    <li class="list-item" data-list_data="collection">
                        <a href="#collection">
                            <i class="fa-solid fa-layer-group link__icon"></i>
                            <span class="link__name">Collection</span>
                        </a>
                    </li>
                    <li class="list-item" data-list_data="contact_us">
                        <a href="#contact_us">
                            <i class="fa-solid fa-envelope link__icon"></i>
                            <span class="link__name">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-shop-icon"><a href="#collection"><i class="fa-solid fa-bag-shopping"></i></a></div>
        </div>
    </header>
    <main class="content-container" id="content_container">
        <!-- ? nav-menu on 600 screen width -->
        <div class="nav-menu" id="nav_menu">
            <ul class="nav-list">
                <li class="list-item" data-list_data="home"> 
                    <a href="#home">
                        <i class="fa-solid fa-house link__icon"></i>
                        <span class="link__name">Home</span>
                    </a>
                </li>
                <li class="list-item" data-list_data="about">
                    <a href="#about">
                        <i class="fa-solid fa-shirt link__icon"></i>
                        <span class="link__name">About</span>
                    </a>
                </li>
                <li class="list-item" data-list_data="collection">
                    <a href="#collection">
                        <i class="fa-solid fa-layer-group link__icon"></i>
                        <span class="link__name">Collection</span>
                    </a>
                </li>
                <li class="list-item" data-list_data="contact_us">
                    <a href="#contact_us">
                        <i class="fa-solid fa-envelope link__icon"></i>
                        <span class="link__name">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--home section  -->
        <section class="home" id="home">
            <!-- centering the div elements -->
            <div class="make_center">
                <div class="split-in-two">
                    <div class="home-title">
                            <h1>Hi, Welcome<br>to our site</h1>
                            <h4>KAMISS BOUTIQUE</h4>
                            <p>
                            High quality services all we looking after <br>
                            to provide to our respected cutomers,<br>
                            servey our site to know more
                            </p>             
                    </div>
                    <div class="home-img">
                        <img src="images/kb-logo.png" alt="home image kamiss boutique logo">
                    </div>
                </div>
        </div>
        </section>


        <!-- about section -->
        <section class="about" id="about">
            <!-- centering the div elements -->
            <div class="make_center">
                <div class="about-title text-center">
                    <h1 class="title">About</h1>
                    <h6 class="sub-title">Our introduction</h6>
                </div>
                <div class="split-in-two about-content">
                    <div class="about-image">
                        <!-- <div class="about-content-logo" id="about_content_logo"><img src="images/km-logo-t.png" alt="logo" ></div>  -->
                        <img src="images/kb-1.jpeg" alt="afghanidress" class="img-1">
                        <img src="images/kb-2.jpg" alt="afghanidress" class="img-2">

                        <div class="img-3"><img src="images/kb-3.jpg" alt="afghanidress" ></div>
                        
                    </div>
                    <div class="about-text">
                            <div class="about_text-first">
                                <h6 class="sub-title-2 mb-2">KAMISS BOUTIQUE</h6>
                                <p class="sub-context">
                                    We have began out services in afghanistan 
                                    providing <b><em>afghani</em></b> and <b><em>panjabi</em></b> dress based
                                    on our design plus your view and ideas.
                                    we are putting our entire efforts to create the best quality
                                    in our services and provide to our all customers worldwide! 
                                </p>
                            </div>
                            <div class="about_text-second">
                                <span>
                                    <h6>01+</h6>
                                    <p>Years<br>Experience</p>
                                </span>
                                <span>
                                    <h6>300+</h6>
                                    <p>Completed<br>Dresses</p>
                                </span>
                                <span>
                                    <h6>300+</h6>
                                    <p>Positve<br>Feedback</p>
                                </span>
                            </div>
                    </div>
                </div>
        </div>
        </section>

         <!-- collection -->
         <section class="collection" id="collection">
            <!-- centering the div elements -->
            <div class="make_center">    
                 <div class="collection-title">
                     <h1 class="title">Collection</h1>
                     <h6 class="sub-title">List of our collection</h6>
                     <div class="collection-btn-list">
                         <div class="list-logo">
                            <i class="fa-solid fa-shirt"></i>
                         </div>
                         <ul class="list-name">
                             <li class="list-name-item active">all</li>
                             <li class="list-name-item">new</li>
                             <li class="list-name-item">afghani</li>
                             <li class="list-name-item">punjabi</li>
                             <li class="list-name-item">shoes</li>
                         </ul>
                     </div>
                 </div>
                 <div class="collection-data" id="collection_data">
                    <!-- Eid Collection
                    <div class="collection-data-item new-collection" id="new_collection" data-collection_name="new">
                        heading
                        <div class="collection-data-item-heading">
                            <div class="image"><img src="images/kb-2.jpg" alt="new collections"></div>
                            <h6 class="sub-title">NEW COLLECTION</h6>
                        </div>
                        content
                        <div class="collection-data-item-content" id="new_content">
                            
                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Eid Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>


                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Eid Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>

                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Eid Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>


                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Eid Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>


                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Eid Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>

                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Eid Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>

                        </div>


                    </div> 

                    afghani collection

                    <div class="collection-data-item afghani-collection" id="afghani_collection" data-collection_name="afghani">
                        heading
                        <div class="collection-data-item-heading">
                            <div class="image"><img src="images/kb-2.jpg" alt="afghanicollections"></div>
                            <h6 class="sub-title">AFGHANI COLLECTION</h6>
                        </div>
                        content
                        <div class="collection-data-item-content" id="afghani_content">
                            
                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Afghani Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>


                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Afghani Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>

                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Afghani Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>


                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Afghani Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>


                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Afghani Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>

                            <div class="clothe">
                                <div class="clothe-header">
                                    <img src="images/kb-2.jpg" alt="new collections">
                                    <div class="layer-over-image">
                                        <button class="view" id="view">VIEW</button>
                                    </div>
                                </div>
                                <div class="clothe-fotter">
                                    <h6>Afghani Collection</h6>
                                    <p>Beautifull afghani guchi</p>
                                </div>
                            </div>

                        </div>


                    </div>  -->
                 </div>
     
                
            </div> 
         </section>

         <!-- contact us -->
        <section class="contact_us" id="contact_us">
            <!-- centering the div elements -->
            <div class="make_center">    
                 <div class="contact_us-title">
                     <h1 class="title">Contact us</h1>
                     <h6 class="sub-title">Follow us on social media</h6>
                     <div class="social">
                         <div class="social-profile">
                             <img src="images/final-profile.jpg" alt="km-logo-image">
                         </div>
                         <div class="social-name">
                             <i class="fa-brands fa-facebook social-icon"></i>
                             <i class="fa-brands fa-instagram social-icon"></i>
                             <i class="fa-brands fa-tiktok social-icon"></i>
                         </div>
                         
                     </div>
                 </div>
                 <div class="contact_us-media">
                     <div class="media-container">
                         <div class="media-header">
                             <i class="fa-brands fa-facebook social-icon"></i>
                         </div>
                         <div class="media-body">
                             <h6>KAMISS BOUTIQUE</h6>
                             <p>Get in touch with us on<br>facebook</p>
                         </div>
                         <div class="media-fotter">
                             <a href="">Follow</a>
                         </div>
                     </div>
                     <div class="media-container">
                         <div class="media-header">
                             <i class="fa-brands fa-instagram social-icon"></i>
                         </div>
                         <div class="media-body">
                             <h6>KAMISS BOUTIQUE</h6>
                             <p>Get in touch with us on<br>instagram</p>
                         </div>
                         <div class="media-fotter">
                             <a href="">Follow</a>
                         </div>
                     </div>
                     <div class="media-container">
                         <div class="media-header">
                             <i class="fa-brands fa-tiktok social-icon"></i>
                         </div>
                         <div class="media-body">
                             <h6>KAMISS BOUTIQUE</h6>
                             <p>Get in touch with us on<br>tiktok</p>
                            
                         </div>
                         <div class="media-fotter">
                             <a href="">Follow</a>
                         </div>
                     </div>
                 </div>
     
                 <div class="contact_us-media-or">
                     <div class="or-title">
                         <h1 class="title">Or</h1>
                         <h6 class="sub-title">For more information contact us through<br>Whatsapp!</h6>
                     </div>
                     <div class="whatsapp">
                         <div class="media-container">
                             <div class="media-header">
                                 <i class="fa-brands fa-whatsapp social-icon"></i>
                             </div>
                             <div class="media-body">
                                 <h6>KAMISS BOUTIQUE</h6>
                                 <p>Conncet with us through<br>whatsapp</p>  
                             </div>
                             <div class="media-fotter">
                                 <a href="">Connect</a>
                             </div>
                         </div>
                     </div>
                     
                 </div>
            </div> 
         </section>


    </main>
    <script src="js/App.js"></script>
</body>
</html>