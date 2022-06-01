<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <style type="text/css">
    #myBtn {
    display: none; 
    position: fixed; 
    bottom: 20px; 
    right: 20px; 
    z-index: 99; 
    border: none; 
    outline: none; 
    background-color: #017a92bd; 
    color: white; 
    cursor: pointer; 
    padding: 15px; 
    border-radius: 100px; 
    font-size: 20px; 
  }
  
  #myBtn::after {
    content: "\f077";
    font-family: FontAwesome;
    font-weight: normal;
    font-style: normal;
    font-size: 2em;
    line-height: 30px;
    color: #fff;
  }
  #myBtn:hover {
    cursor: pointer;
    background-color: #017a92;
  }
  #myBtn:active {
    background-color: #017a92;
  }
    </style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>

  <script>
      mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
      }
    </script>
</body>
</html>							
								