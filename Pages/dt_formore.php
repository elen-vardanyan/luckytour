<?php
include('../config.php');

if(!isset($_GET['id'])){
    header('Location: daily_tours.php');
}
 $id=$_GET['id'];

$stmt = $pdo->query('SELECT daily_tours.ID,
daily_tours.Title, 
daily_tours.Price,
daily_tours.Duration,
daily_tours.Start,
daily_tours.Finish,
daily_tours.Days,
dt_formore.Description as tourDescription, 
dt_formore.TourType as tourType,
dt_formore.CountOfPeople as countOfPeople,
dt_formore.Housing as housing,
dt_formore.Season as tourSeason,
dt_formore.Start as tourStart,
dt_formore.Finish as tourFinish,
dt_formore.Img1 as img1,
dt_formore.Img2 as img2,
dt_formore.Img3 as img3,
dt_formore.Img4 as img4
from daily_tours
left join dt_formore on daily_tours.ForMoreID=dt_formore.ID
where daily_tours.ID ='.$id);
$tour = $stmt->fetch();

if($tour === false ) {
    header('Location: daily_tours.php');   
}

	?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daily Tours</title>
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
                                    <li><a href="../index.php"><i class="fa fa-home"></i> ?????????????? </a></li>
                                    <li><a href="../Pages/about_us.php"> ?????? ?????????? </a> </li>
                                    <li><a href="../Pages/about_armenia.php"> ???????????????? </a> </li>
                                    <li>
                                        <a href="../Pages/tours.php"> ???????????? </a>
                                        <ul>
                                            <li><a href="../Pages/incoming_tours.php"> ???????????? ???????????? </a></li>
                                            <li><a href="../Pages/outgoing_tours.php"> ?????????????? ???????????? </a></li>
                                            <li><a href="../Pages/daily_tours.php"> ???????????????? ???????????? </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../Pages/contact_us.php"> ???????????????? ?????? </a></li>
                                </ul>
                            </div>
                            <div class="icon menu-btn">
                                <i class="fas fa-bars"></i>
                            </div>
                        </nav>
                    </div>
                    <div class="homepagelink"><a href="../index.php"><i class="fa fa-home"></i></a> <span>??? <a href="../Pages/tours.php">????????????</a> ??? ???????????? ???????????? </span></div>
                </div>
            </div>
        </div>
        <div class="main-content">
        <div class="tour_formore">
            <div class="tour_title">
                <h1><?=$tour['Title']?></h1>
                <p class="price">?????????? <?=$tour['Price']?> AMD</p>
                <p class="info">??????????: <?=$tour['Start']?> </p>
                <p class="info">??????????: <?=$tour['Finish']?> </p>
                <p class="info">????????: <?=$tour['Days']?> </p>
                <hr class="new1">
            </div>
            <div class="about_tour">
                <h2>????????????????</h2>
                <p class="tour_description"><?=$tour['tourDescription']?></p>
                <div class="tour_features">
                    <div class="tour_features_item">
                        <i class="fas fa-map-signs"></i>
                        <p class="tour_feature_title">?????????? ??????????</p>
                        <p class="tour_feature"><?=$tour['tourType']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="far fa-clock"></i>
                        <p class="tour_feature_title">????????????????????????</p>
                        <p class="tour_feature"><?=$tour['Duration']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="fas fa-users"></i>
                        <p class="tour_feature_title">???????????????? ????????????</p>
                        <p class="tour_feature"><?=$tour['countOfPeople']?>+</p>
                    </div>
                    <div class="tour_features_item">
                        <i class="fas fa-hotel"></i>
                        <p class="tour_feature_title">??????????????</p>
                        <p class="tour_feature"><?=$tour['housing']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="fas fa-sun"></i>
                        <p class="tour_feature_title">?????????????????? ??????????</p>
                        <p class="tour_feature"><?=$tour['tourSeason']?></p>
                    </div>
                    <div class="tour_features_item">
                        <i class="far fa-flag"></i>
                        <p class="tour_feature_title">?????????? / ??????????</p>
                        <p class="tour_feature"><?=$tour['tourStart']?> / <?=$tour['tourFinish']?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
			<div class="slider">
				<div class="slider__item filter">
					<img src="../Image/DailyTours/<?=$tour['img1']?>" alt="">
				</div>
				<div class="slider__item">
                    <img src="../Image/DailyTours/<?=$tour['img2']?>" alt="">
				</div>
				<div class="slider__item filter">
                    <img src="../Image/DailyTours/<?=$tour['img3']?>" alt="">
				</div>
				<div class="slider__item">
                    <img src="../Image/DailyTours/<?=$tour['img4']?>" alt="">
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
                                    <p class="title2">??????????????????????</p>
                                    <a href="about_us.php"> Lucky Tour - ?????? ?????????? </a> 
                                    <a href="about_armenia.php"> ?????????????????? ?????????? </a> 
                                    <a href="contact_us.php"> ???????????????? ?????? </a> 
                                </div>                                
                            </div>
                            <div class="tours">
                                <div class="menu_column">
                                    <p class="title2">????????????</p>
                                    <a href="incoming_tours.php"> ???????????? ???????????? </a> 
                                    <a href="outgoing_tours.php"> ?????????????? ???????????? </a> 
                                    <a href="daily_tours.php"> ???????????????? ???????????? </a> 
                                </div>                                
                            </div>
                            <div class="contactus">
                                <div class="menu_column">
                                    <p class="title2">?????? ?????? ??????</p>
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
                            <p> ?? 2020 Lucky Tour Agency || All Rights Reserved</p>
                        </div>   
                    </div>
                </div>
            </div>
        </footer>
            <!-- ???????????????????? jQuery -->
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<!-- ???????????????????? ?????????????? Slick -->
			<script src="../js/slick.min.js"></script>
			<!-- ???????????????????? ???????? ???????????????? -->
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
        </script>
    </body>
</html>