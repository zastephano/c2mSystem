

<div class="scrollToTop appsLand-btn appsLand-btn-gradient"><span><i class="fa fa-angle-up"></i></span></div>



<div class="loading">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>



<footer class="apps-footer">
    <div class="footer-top">
        <div class="container">
            <div class="apps-short-info">
                <a href="index.php">
                     <img alt="C2M System" style="width: 250px; height: auto;" src="imgs/willLogo.png" />
                 </a>
            </div>
            <ul class="list-inline list-unstyled footer-social-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p><?php echo $lang['Tous droits réservés ©'] ?> <?php echo date('Y') ?> <a href="http://c2m.ma">C2M System</a></p>
        </div>
    </div>
</footer>



<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/rangeslider.min.js"></script>
<script src="js/plugins.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(event) {
      /*var lang = document.getElementById('lang_val').value;*/
      var m = '<?php echo $_SESSION['lang']; ?>'; 
      if (m == "fr" || m == "en") {
        var dataText = ["Alkhadim : Stock", "Alkhadim : Budget", "Alkhadim : Vétérinaire", "Alkhadim : Chéque", "Alkhadim : Hamam", "Alkhadim : Salarié", "Alkhadim : Location de voiture", "Alkhadim : etat-civil"];
      }
      else{
       var dataText = ["الخادم : المخزون", "الخادم : الميزانية", "الخادم : البيطرة", "الخادم : شيك", "الخادم : حمام", "الخادم : الموظفين", "الخادم: تأجير سيارات", "الخادم : الحالة المدنية"]; 
      }
        

        function typeWriter(text, i, fnCallback) {
            if (i < (text.length)) {
                document.querySelector("div#yes").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

                setTimeout(function() {
                    typeWriter(text, i + 1, fnCallback)
                }, 100);
            } else if (typeof fnCallback == 'function') {
                setTimeout(fnCallback, 700);
            }
        }

        function StartTextAnimation(i) {
            if (typeof dataText[i] == 'undefined') {
                setTimeout(function() {
                    StartTextAnimation(0);
                }, 20000);
            }
            if (i < dataText[i].length) {
                typeWriter(dataText[i], 0, function() {
                    StartTextAnimation(i + 1);
                });
            }
        }
        StartTextAnimation(0);
    });
</script>
<script>
  
    
     $(function() {
      $('#rangeSlider').rangeslider({
        polyfill: false,
        onInit: function(position, value) {
          $('.rangeslider .rangeslider__handle').html(1)
        },
        onSlide: function(position, value) {
          $('.rangeslider .rangeslider__handle').html(value);

          if (value <= 5) {
            $('#pricing span.price').eq(0).html(9*parseInt(value - 1) + 29)
          } else {
            $('#pricing span.price').eq(0).html(65 + 7*parseInt(value - 5))
          }
          
          /*if (value >=1 && value <= 3) {
            $('.license-price').html(29)
          } else if (value >= 4 && value <= 6) {
            $('.license-price').html(59)
          } else if (value >= 7 && value <= 10) {
            $('.license-price').html(89)
          }*/

          $('span.devices-count').html(value)

          if (value === 10) {
            $('.ten-plus').show();
          } else {
            $('.ten-plus').hide();
          }
        }
      });
    });
  </script>     
     
</body>
</html>