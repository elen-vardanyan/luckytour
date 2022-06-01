<?php
    include('config.php');
    $stmt = $pdo->query('SELECT * FROM `mainpage_chapters`');
	$chapter = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lucky Tour</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="CSS/media.css">
        <link href="Image/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <?php require("Pages/scrolltotop.php") ?>
        <div class="intro">
            <div class="video">
                <video class="video__media" src="Video/1.mp4" autoplay muted loop></video>
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
                                    <li><a href="index.php"><i class="fa fa-home"></i> ԳԼԽԱՎՈՐ </a></li>
                                    <li><a href="Pages/about_us.php"> ՄԵՐ ՄԱՍԻՆ </a> </li>
                                    <li><a href="Pages/about_armenia.php"> ՀԱՅԱՍՏԱՆ </a> </li>
                                    <li>
                                        <a href="Pages/tours.php"> ՏՈՒՐԵՐ </a>
                                        <ul>
                                            <li><a href="Pages/incoming_tours.php"> Ներգնա տուրեր </a></li>
                                            <li><a href="Pages/outgoing_tours.php"> Արտագնա տուրեր </a></li>
                                            <li><a href="Pages/daily_tours.php"> Ամենօրյա տուրեր </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Pages/contact_us.php"> ՀԵՏԱԴԱՐՁ ԿԱՊ </a></li>
                                </ul>
                            </div>
                            <div class="icon menu-btn">
                                <i class="fas fa-bars"></i>
                            </div>
                        </nav>
                    </div>
                    <div class="lucky_tour_caption"> <h1>Lucky Tour</h1></div>
                    <section id="section04" class="demo">
                        <a href="#scrolldownsection"><span></span></a>
                    </section>
                </div>
            </div>
        </div>
        <div class="section_container"  id="scrolldownsection">
            <?php foreach($chapter as $mainpage_chapters): 
						?>
                <div class="section">
                    <div class="section_img">
                        <img src="Image/<?=$mainpage_chapters['Image']?>" alt=""> 
                    </div>
                    <div class="section_content">
                        <div class="section_title">
                            <p><?= $mainpage_chapters['Title'] ?></p>
                        </div>
                        <div class="section_content_paragraph">
                            <p><?= $mainpage_chapters['Paragraph'] ?></p>
                        </div>
                        <div class="section_btn">
                            <a href="Pages/<?=$mainpage_chapters['PageLink']?>">Կարդալ ավելին</a>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>


        <footer class="footer">
            <div class="container_2">
                <div class="footer_column">
                    <div class="footer_menu">
                        <div class="footer_menu_row space-between_row">
                            <div class="inform">
                                <div class="menu_column">
                                    <p class="title2">ԻՆՖՈՐՄԱՑԻՈՆ</p>
                                    <a href="Pages/about_us.php"> Lucky Tour - Մեր մասին </a> 
                                    <a href="Pages/about_armenia.php"> Հայաստանի մասին </a> 
                                    <a href="Pages/contact_us.php"> Հետադարձ կապ </a> 
                                </div>                                
                            </div>
                            <div class="tours">
                                <div class="menu_column">
                                    <p class="title2">ՏՈՒՐԵՐ</p>
                                    <a href="Pages/incoming_tours.php"> Ներգնա տուրեր </a> 
                                    <a href="Pages/outgoing_tours.php"> Արտագնա տուրեր </a> 
                                    <a href="Pages/daily_tours.php"> Ամենօրյա տուրեր </a> 
                                </div>                                
                            </div>
                            <div class="contactus">
                                <div class="menu_column">
                                    <p class="title2">ԿԱՊ ՄԵԶ ՀԵՏ</p>
                                    <div>    <i class="fas fa-phone"></i> <span> (+374) 10 991991 </span> </div>
                                    <div>    <i class="fas fa-phone"></i> <span> (+374) 91 991991 </span> </div>
                                    <div>    <i class="fab fa-viber"></i> <span> (+374) 91 991991 </span> </div>
                                    <div>    <img src="Image/wp.png" alt="" width="18px"> <span>(+374) 91 991991 </span> </div>
                                    <div>    <img src="Image/gmail.png" alt="" width="20px"> <span>lucky_tour@gmail.com </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub_footer">
                        <div class="soc_networks">
                            <div class="facebook">
                                <a href="https://www.facebook.com" target="_blank"><img src="Image/fb.png" alt=""></a>
                            </div>
                            <div class="instagram">
                                <a href="https://www.instagram.com" target="_blank"><img src="Image/inst.png" alt=""></a>
                            </div>
                            <div class="twitter">
                                <a href="https://www.twitter.com" target="_blank"><img src="Image/twitter.png" alt=""></a>
                            </div>
                            <div class="vk">
                                <a href="https://vk.com" target="_blank"><img src="Image/vk.png" alt=""></a>
                            </div>
                            <div class="youtube">
                                <a href="https://youtube.com" target="_blank"><img src="Image/youtube.png" alt=""></a>
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

            //header for mobile
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

            // scroll down
            $(function() {
            $('a[href*=#]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
            });
        </script>
    </body>
</html>