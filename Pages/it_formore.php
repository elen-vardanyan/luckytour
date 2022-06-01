<?php
include('../config.php');

if(!isset($_GET['id'])){
    header('Location: incoming_tours.php');
}
 $id=$_GET['id'];

$stmt = $pdo->query('SELECT incoming_tours.ID,
incoming_tours.Title, 
incoming_tours.Price,
incoming_tours.Duration,
it_formore.Description as tourDescription, 
it_formore.TourType as tourType,
it_formore.CountOfPeople as countOfPeople,
it_formore.Housing as housing,
it_formore.Season as tourSeason,
it_formore.Start as tourStart,
it_formore.Finish as tourFinish,
it_formore.Img1 as img1,
it_formore.Img2 as img2,
it_formore.Img3 as img3,
it_formore.Img4 as img4,
it_formore_timeline.Title as timelineTitle,
it_formore_timeline.Information as timelineInformation
from incoming_tours
left join it_formore on incoming_tours.ForMoreID=it_formore.ID
left join it_formore_timeline on incoming_tours.ID=it_formore_timeline.It_id
where incoming_tours.ID ='.$id);
$tour = $stmt->fetch();

$stmt = $pdo->query('SELECT ID,
it_formore_timeline.Title,
it_formore_timeline.Information
FROM `it_formore_timeline`
WHERE it_formore_timeline.It_id='.$id);
$timeline = $stmt->fetchAll();

if($tour === false ) {
    header('Location: incoming_tours.php');   
}

	?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Incoming Tours</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style_9.css">
        <link rel="stylesheet" type="text/css" href="../CSS/media_9.css">
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
                    <div class="homepagelink"><a href="../index.php"><i class="fa fa-home"></i></a> <span>→ <a href="../Pages/tours.php">Տուրեր</a> → Ներգնա տուրեր </span></div>
                </div>
            </div>
        </div>
        <div class="main-content">
        <div class="tour_formore">
            <div class="tour_title">
                <h1><?=$tour['Title']?></h1>
                <p class="price">Գինը՝ <?=$tour['Price']?> USD</p>
                <hr class="new1">
            </div>
            <div class="about_tour">
                <h2>Նկարագիր</h2>
                <p class="tour_description"><?=$tour['tourDescription']?></p>
                <div class="tour_features">
                    <div class="tour_features_item">
                        <i class="fas fa-map-signs"></i>
                        <p class="tour_feature_title">Տուրի տեսակ</p>
                        <p class="tour_feature"><?=$tour['tourType']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="far fa-clock"></i>
                        <p class="tour_feature_title">Տեվողություն</p>
                        <p class="tour_feature"><?=$tour['Duration']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="fas fa-users"></i>
                        <p class="tour_feature_title">Մարդկանց քանակը</p>
                        <p class="tour_feature"><?=$tour['countOfPeople']?>+</p>
                    </div>
                    <div class="tour_features_item">
                        <i class="fas fa-hotel"></i>
                        <p class="tour_feature_title">Կացարան</p>
                        <p class="tour_feature"><?=$tour['housing']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="fas fa-sun"></i>
                        <p class="tour_feature_title">Լավագույն սեզոն</p>
                        <p class="tour_feature"><?=$tour['tourSeason']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="far fa-flag"></i>
                        <p class="tour_feature_title">Սկիզբ / Ավարտ</p>
                        <p class="tour_feature"><?=$tour['tourStart']?> / <?=$tour['tourFinish']?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="timeline">
            <ul>
            <?php foreach($timeline as $day): 
						?>
              <li>
                <div>
                  <time><?=$day['Title']?></time> <?=$day['Information']?>
                </div>
              </li> 
              <?php endforeach?>          
            </ul>
        </div>


        <div class="wrapper">
			<div class="slider">
				<div class="slider__item filter">
					<img src="../Image/IncomingTours/<?=$tour['img1']?>" alt="">
				</div>
				<div class="slider__item">
                    <img src="../Image/IncomingTours/<?=$tour['img2']?>" alt="">
				</div>
				<div class="slider__item filter">
                    <img src="../Image/IncomingTours/<?=$tour['img3']?>" alt="">
				</div>
				<div class="slider__item">
                    <img src="../Image/IncomingTours/<?=$tour['img4']?>" alt="">
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
                            <p> © 2020 Lucky Tour Agency || All Rights Reserved</p>
                        </div>   
                    </div>
                </div>
            </div>
        </footer>
            <!-- Подключаем jQuery -->
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<!-- Подключаем слайдер Slick -->
			<script src="../js/slick.min.js"></script>
			<!-- Подключаем файл скриптов -->
			<script src="../js/script.js"></script>
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

            //timeline js
            (function () {
            "use strict";

            // define variables
            var items = document.querySelectorAll(".timeline li");

            // check if an element is in viewport
            // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <=
                    (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function callbackFunc() {
                for (var i = 0; i < items.length; i++) {
                if (isElementInViewport(items[i])) {
                    items[i].classList.add("in-view");
                }
                }
            }

            // listen for events
            window.addEventListener("load", callbackFunc);
            window.addEventListener("resize", callbackFunc);
            window.addEventListener("scroll", callbackFunc);
            })();
        </script>
    </body>
</html>