<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style_4.css">
        <link rel="stylesheet" type="text/css" href="../CSS/media_4.css">
        <link href="../Image/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
    <?php require("../Pages/scrolltotop.php") ?>
        <div class="intro">
            <div class="video">
                <video class="video__media" src="../Video/2.mp4" autoplay muted loop></video>
            </div>
            <div class="intro__content">
                <div class="container">
                    <div id="block-body" >
                        <nav class="dws-menu">
                            <div class="content">
                                <ul class="menu-list">
                                    <div class="icon cancel-btn">
                                        <i class="fas fa-times"></i>
                                      </div>
                                    <li><a href="../index.php"><i class="fa fa-home"></i> ԳԼԽԱՎՈՐ </a></li>
                                    <li><a href="../Pages/about_us.php"> ՄԵՐ ՄԱՍԻՆ </a> </li>
                                    <li><a href="../Pages/about_armenia.php"> ՀԱՅԱՍՏԱՆ </a> </li>
                                    <li>
                                        <a href="../Pages/tours.php"> ՏՈՒՐԵՐ </a>
                                        <ul>
                                            <li><a href="../Pages/incoming_tours.php"> Ներգնա տուրեր </a></li>
                                            <li><a href="../Pages/outgoing_tours.php"> Արտագնա տուրեր </a></li>
                                            <li><a href="../Pages/daily_tours.php"> Ամենօրյա տուրեր </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../Pages/contact_us.php"> ՀԵՏԱԴԱՐՁ ԿԱՊ </a></li>
                                </ul>
                            </div>
                            <div class="icon menu-btn">
                                <i class="fas fa-bars"></i>
                            </div>
                        </nav>
                    </div>
                    <div class="homepagelink"><a href="../index.php"><i class="fa fa-home"></i></a> <span>→ Հետադարձ կապ</span></div>
                </div>
            </div>
        </div>
        <div class="contactus_content">
            <h1 class="contactustitle"> Կապ մեզ հետ</h1>
            <p class="contactuscontent">Հարցերի կամ առաջարկների դեպքում կարող եք զանգահարել կամ գրել մեզ: <br> Մեր մասնագետները սիրով կպատասխանեն Ձեր հարցերին:</p> <br>
            <div class="contactus">
                <form action="../phpmailer/send.php" method="POST">
                    <div class="group"> 
                        <label for="name"> Անուն:*</label> <input id="name" type="text" name="name" placeholder="Անուն"  autocomplete="off" required>
                    </div>
                    <div class="group">
                        <label for="phone"> Հեռախոսահամար:</label> <input type="tel" id="phone" name="phone" autocomplete="off" pattern="[0-9]{9,}" placeholder="099 999 999">
                    </div>
                    <div class="group">
                        <label for="email"> E-mail:* </label> <input id="email" type="email"  name="email" autocomplete="off" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" placeholder="Էլեկտրոնային հասցե" required> 
                    </div>
                    <div class="group">
                        <label for="message"> Հաղորդագրություն:* </label> <textarea id="message" name="message" autocomplete="off" placeholder="Հաղորդագրություն" required></textarea> 
                    </div>
                    <div class="group"> 
                        <button type="submit"> Ուղարկել </button> 
                        <button type="reset"> Մաքրել </button>
                    </div> 
                </form>
            </div>
            <div class="luckytour_footer_img">
                <img src="../Image/footer.png" alt="">
            </div>
            <div class="info">
                <div class="information">
                    <h3 class="infotitle"> Գրասենյակ </h3>
                    <div class="infocontent">
                        <div> <img src="../Image/loc.png" alt="" width="20px"> <span> Հայաստան, ք․Երևան, Մաշտոցի պող., 18 շենք </span> </div>
                    </div>
                    <h3 class="infotitle"> Հեռախոսահամար </h3>    
                    <div class="infocontent">                              
                        <div>    <i class="fas fa-phone"></i> <span> (+374) 10 991991 </span> </div>
                        <div>    <i class="fas fa-phone"></i> <span> (+374) 91 991991 </span> </div>
                        <div>    <i class="fab fa-viber"></i> <span> (+374) 91 991991 </span> </div>
                        <div>    <img src="../Image/wp.png" alt="" width="18px"> <span>(+374) 91 991991 </span> </div>
                    </div> 
                    <h3 class="infotitle"> Էլեկտրոնային հասցե </h3>
                    <div class="infocontent">
                        <div>    <img src="../Image/gmail.png" alt="" width="20px"> <span>lucky_tour@gmail.com </span> </div>
                    </div>
                    <h3 class="infotitle"> Մենք սոցիալական ցանցերում </h3>
                    <div class="infocontent socnetwork">
                        <div class="facebook">
                            <a href="https://www.facebook.com"><img src="../Image/fb.png" alt=""></a>
                        </div>
                        <div class="instagram">
                            <a href="https://www.instagram.com"><img src="../Image/inst.png" alt=""></a>
                        </div>
                        <div class="twitter">
                            <a href="https://www.twitter.com"><img src="../Image/twitter.png" alt=""></a>
                        </div>
                        <div class="vk">
                            <a href="https://vk.com"><img src="../Image/vk.png" alt=""></a>
                        </div>
                        <div class="youtube">
                            <a href="https://youtube.com"><img src="../Image/youtube.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="location">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.291621965117!2d44.50521701523081!3d40.1803230779074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcfc29ababb5%3A0xfe0772f7e5190096!2zMTggTWVzcm9wIE1hc2h0b2MgcG9raG90YSwgWWVyZXZhbiAwMDAyLCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2s!4v1605221309996!5m2!1sru!2s" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container_2">
                <div class="footer_column">
                    <div class="footer_menu">
                        <div class="footer_menu_row space-between_row">
                            <div class="inform">
                                <div class="menu_column">
                                    <p class="title2">ԻՆՖՈՐՄԱՑԻՈՆ</p>
                                    <a href="about_us.php"> Lucky Tour - Մեր մասին </a> 
                                    <a href="about_armenia.php"> Հայաստանի մասին </a> 
                                    <a href="contact_us.php"> Հետադարձ կապ </a> 
                                </div>                                
                            </div>
                            <div class="tours">
                                <div class="menu_column">
                                    <p class="title2">ՏՈՒՐԵՐ</p>
                                    <a href="incoming_tours.php"> Ներգնա տուրեր </a> 
                                    <a href="outgoing_tours.php"> Արտագնա տուրեր </a> 
                                    <a href="daily_tours.php"> Ամենօրյա տուրեր </a> 
                                </div>                                
                            </div>
                            <div class="contactus">
                                <div class="menu_column">
                                    <p class="title2">ԿԱՊ ՄԵԶ ՀԵՏ</p>
                                    <div>    <i class="fas fa-phone"></i> <span> (+374) 10 991991 </span> </div>
                                    <div>    <i class="fas fa-phone"></i> <span> (+374) 91 991991 </span> </div>
                                    <div>    <i class="fab fa-viber"></i> <span> (+374) 91 991991 </span> </div>
                                    <div>    <img src="../Image/wp.png" alt="" width="18px"> <span>(+374) 91 991991 </span> </div>
                                    <div>    <img src="../Image/gmail.png" alt="" width="20px"> <span>lucky_tour@gmail.com </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub_footer">
                        <div class="soc_networks">
                            <div class="facebook">
                                <a href="https://www.facebook.com" target="_blank"><img src="../Image/fb.png" alt=""></a>
                            </div>
                            <div class="instagram">
                                <a href="https://www.instagram.com" target="_blank"><img src="../Image/inst.png" alt=""></a>
                            </div>
                            <div class="twitter">
                                <a href="https://www.twitter.com" target="_blank"><img src="../Image/twitter.png" alt=""></a>
                            </div>
                            <div class="vk">
                                <a href="https://vk.com" target="_blank"><img src="../Image/vk.png" alt=""></a>
                            </div>
                            <div class="youtube">
                                <a href="https://youtube.com" target="_blank"><img src="../Image/youtube.png" alt=""></a>
                            </div>
                        </div>
                        <div class="copyright">
                            <p> © 2021 Lucky Tour Agency || All Rights Reserved</p>
                        </div>   
                    </div>
                </div>
            </div>
        </footer>
        <script>
            const body = document.querySelector("body");
            const navbar = document.querySelector(".dws-menu");
            const menuBtn = document.querySelector(".menu-btn");
            const cancelBtn = document.querySelector(".cancel-btn");
            menuBtn.onclick = ()=>{
              navbar.classList.add("show");
              menuBtn.classList.add("hide");
              body.classList.add("disabled");
            }
            cancelBtn.onclick = ()=>{
              body.classList.remove("disabled");
              navbar.classList.remove("show");
              menuBtn.classList.remove("hide");
            }
        </script>
    </body>
</html>