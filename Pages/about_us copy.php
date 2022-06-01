<?php
    include('../config.php');
    $stmt = $pdo->query('SELECT * FROM `our_team`');
    $team_member = $stmt->fetchAll();
    $stmt = $pdo->query('SELECT * FROM `tour_images`');
    $tour_image = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About us</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style_2c.css">
        <link rel="stylesheet" type="text/css" href="../CSS/media_2.css">
        <link href="../Image/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <div class="intro">
        <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="../Image/aboutusslider1.jpg" alt="">
        </div>
        <div class="slide">
        <img src="../Image/office2.jpg" alt="">
        </div>
        <div class="slide">
        <img src="../Image/aboutusslider3.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
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
                    <div class="homepagelink"><a href="../index.php"><i class="fa fa-home"></i></a> <span>→ Մեր մասին</span></div>
                </div>
            </div>
        </div>
        <div class="about_us_container">
            <h1>Մեր մասին</h1>
        <div class="abouttouragency">
            <div class="imgblock">
                <img src="../Image/office4.JPG" alt="img">
            </div>
            <div class="aboutuscontent">
                <p><span>Lucky Tour</span> տուրիստական գործակալությունը հաջողությամբ գործում է հայկական զբոսաշրջության շուկայում դեռևս 2015թ.-ից: Ընկերությունը կազմակերպում է ինչպես ներգնա, այնպես էլ՝ արտագնա տուրեր: Lucky Tour-ը այս 5 տարիների ընթացքում ընդունել է 20000-ից ավել հյուրեր:</p>
                <p>Մենք ձգտում ենք լինել նորարար, առաջնորդող տուր օպերատոր և ստեղծագործական մոտեցում ցուցաբերել ճանապարհորդության ամեն մի փուլում, գրավել մեր դիրքը շուկայում լավագույն տուրիստական գործակալությունների շարքում և ճանաչվել մեր պրոֆեսիոնալիզմի և բարձր որակի շնորհիվ:</p>
                <p>Մեր նպատակն է ապահովել անմոռանալի ճամփորդություններ մեր հաճախորդների համար, գերազանցել նրանց սպասելիքները` ապահովելով բարձր որակի ծառայություններ:</p>
                <p>Ընկերության 5 տարվա փորձի և ոլորտի առաջատարներից մեկը լինելու հանգամանքը մեզ ավելի է պարտավորեցնում լինել ավելի հետևողական յուրաքանչյուր հաճախորդի նկատմամբ:</p>
                <p>Ստորև կարող եք ծանոթանալ մեր թիմի հետ և տեսնել լուսանկարներ մեր խմբային տուրերից։</p>
            </div>
        </div>
        <div class="our_team">
            <h2>Մեր թիմը</h2>
            <div class="team_block">
                <div class="wrapper">
                    <?php foreach($team_member as $our_team): 
                            ?>

                        <div class="ourteam_container">
                            <img src="../Image/<?=$our_team['Image']?>" alt="" class="team_img">
                            <div class="overlay">
                            <div class="text">
                                <p  class="name"><?= $our_team['Name'] ?></p>
                                <p  class="specialazation"><?= $our_team['Specialazation'] ?></p>
                            </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>

        <div class="tour_images">
            <h2>Լուսանկարներ մեր խմբային տուրերից</h2>
            <div class="gallery_intro">
                <?php foreach($tour_image as $tour_images): 
                                    ?>
                    <div class="gallery">
                    <a target="_blank" href="../Image/<?=$tour_images['Image']?>">
                    <img src="../Image/<?=$tour_images['Image']?>" alt="">
                    </a>
                    <div class="desc"><?= $tour_images['Description'] ?></div>
                </div>
                <?php endforeach?>
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


            //slider
            var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
        </script>
    </body>
</html>