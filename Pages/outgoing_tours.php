<?php
    include('../config.php');
    $stmt = $pdo->query('SELECT * FROM `outgoing_tours`');
	$tour = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Outgoing Tours</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style_6.css">
        <link rel="stylesheet" type="text/css" href="../CSS/media_6.css">
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
                    <div class="homepagelink"><a href="../index.php"><i class="fa fa-home"></i></a> <span>→<a href="../Pages/tours.php"> Տուրեր</a> → Արտագնա տուրեր </span></div>
                </div>
            </div>
        </div>
        <div class="preface">
            <h1>ԱՐՏԱԳՆԱ ՏՈՒՐԵՐ <span>LUCKY TOUR</span>-Ի ՀԵՏ ԱՄԲՈՂՋ ԱՇԽԱՐՀՈՎ</h1>
            <p>Եթե Դուք երազում եք հայտնվել նոր վայրում՝ հեռու բոլոր սթրեսներից և առօրյա թոհուբոհից, ապա Հայաստանից արտագնա տուրերը հանգստի լավագույն տարբերակն են։ LUCKY TOUR-ը կկազմակերպի Ձեր հանգիստը աշխարհի ցանկացած վայրում: Օգտվելով մեր արտագնա տուր փաթեթներից` Դուք հնարավորություն կունենաք լինել Եվրոպայի այն քաղաքներում, որոնք Ձեզ համար երազանք են եղել: Նույնիսկ ամենաբծախնդիր հաճախորդները մեզ մոտ կգտնեն իրենց նախընտրած տուրերը Հայաստանից դեպի Եվրոպա և այլ ուղղություններով: Տուր փաթեթների զանազանությունը և մեր կողմից կազմված տուրերի ծրագրերի ճկունությունը Ձեզ կընձեռեն անկրկնելի հանգիստ:</p>
        </div>
        <div class="tour_list">
            <div class="block">
                        <div class="wrapper">
							<?php foreach($tour as $outgoing_tours): 
						?>
								<div class="tour">   
                                    <div class="tour_img">
                                        <img src="../Image/<?=$outgoing_tours['Image']?>" alt="">  
                                    </div>  
                                    <div class="tour_country">
                                      <p><?= $outgoing_tours['Country'] ?></p>
                                    </div>  
                                    <div class="tour_title">
                                    <a href="ot_formore.php?id=<?=$outgoing_tours['ID'] ?>">  <p><?= $outgoing_tours['Title'] ?></p> </a>
                                    </div>      
                                    <div class="tour_duration">
                                        <p><?= $outgoing_tours['Duration'] ?></p>
                                    </div>
                                    <div class="tour_price">
                                        <p>Գինը՝ <?= $outgoing_tours['Price'] ?>USD</p>
                                    </div>  
                                    <div class="btn">
                                        <a href="ot_formore.php?id=<?=$outgoing_tours['ID'] ?>"> ԱՎԵԼԻՆ </a>
                                    </div>                                
								</div>
						   <?php endforeach?>
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