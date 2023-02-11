<!DOCTYPE html>
<html>
  <head>
    <title>Slideshow Images</title>
    <style>
      * {
        box-sizing: border-box
      }
      body {
        font-family: Verdana, sans-serif;
        margin: 0
      }
      .mySlides {
        display: none
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      /* Caption text */
      .text {
        color: #ffffff;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color: #ffffff;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active,
      .dot:hover {
        background-color: #111111;
      }
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev,
        .next,
        .text {
          font-size: 11px
        }
      }
    </style>
  </head>
  <body>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 14</div>
        <a href="description.php">
        <img src="maharaja.jpg" style="width:100%"></a>
        <div class="text">MAHARAJA AUDITORIUM</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 14</div>
        <a href="description1.php">
        <img src="hd2.jpg" style="width:100%"></a>
        <div class="text">CONVENTIONAL CENTER</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 14</div>
        <a href="DESCRIPTION2.php">
        <img src="hd1.jpg" style="width:100%"></a>
        <div class="text">THIRUVALLUVAR HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">4 / 14</div>
        <a href="description3.php">
        <img src="hd2.jpg" style="width:100%"></a>
        <div class="text">SARVEPALLI RADHAKRISHNAN HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">5 / 14</div>
        <a href="description4.php">
        <img src="hd3.jpg" style="width:100%"></a>
        <div class="text">RAMAKRISHNA PARAMAHAMSAR HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">6 / 14</div>
        <a href="description5.php">
        <img src="6.jfif" style="width:100%"></a>
        <div class="text">HOMI J BABA</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">7 / 14</div>
        <a href="description6.php">
        <img src="7.jfif" style="width:100%"></a>
        <div class="text">MAHATMA GANDHI</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">8 / 14</div>
        <a href="description7.php">
        <img src="8.jfif" style="width:100%"></a>
        <div class="text">MCA SEMINAR HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">10 / 14</div>
        <a href="description8.php">
        <img src="10.jfif" style="width:100%"></a>
        <div class="text">MBA SEMINAR HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">11 / 14</div>
        <a href="description9.php">
        <img src="11.jfif" style="width:100%"></a>
        <div class="text">SIR C V RAMAN SEMINAR HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">12 / 14</div>
        <a href="description9.php">
        <img src="12.jfif" style="width:100%"></a>
        <div class="text">KALINGARAYAN SEMINAR HALL</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">13 / 14</div>
        <a href="description11.php">
        <img src="13.jfif" style="width:100%"></a>
        <div class="text">CONFERENCE HALL(ADMIN)</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">14 / 14</div>
        <a href="description12.php">
        <img src="14.jfif" style="width:100%"></a>
        <div class="text">SWAMI VIVEKANANDA SEMINAR HALL</div>
      </div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
      <span class="dot" onclick="currentSlide(9)"></span>
      <span class="dot" onclick="currentSlide(10)"></span>
      <span class="dot" onclick="currentSlide(11)"></span>
      <span class="dot" onclick="currentSlide(12)"></span>
      <span class="dot" onclick="currentSlide(13)"></span>
      <span class="dot" onclick="currentSlide(14)"></span>
    </div>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if(n > slides.length) {
          slideIndex = 1
        }
        if(n < 1) {
          slideIndex = slides.length
        }
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for(i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
  </body>
</html>