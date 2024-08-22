    <link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
    <!-- FOR MODAL -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>
    <script src="./assets/js/cssParser.js"></script>
    <!-- FOR MODAL -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/jquery.maskedinput.js"></script>
    <script src="./assets/js/wow.min.js"></script>

    <!-- https://github.com/verlok/vanilla-lazyload#-getting-started---html -->
    <script src="./assets/js/lazyload.js"></script>

    <!-- Counter -->
    <script src="./assets/js/counter/jquery.cookie.js"></script>
    <script src="./assets/js/counter/jquery.plugin.js"></script>
    <script src="./assets/js/counter/jquery.countdown.js"></script>
    <script src="./assets/js/counter/jquery.countdown-ru.js"></script>
    <script>
        var endDateTime = new Date();
        var nowDateTime = new Date(3600 * 24 * 1000);
    </script>
    <!-- End Counter -->
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="./assets/js/script.js"></script>

    <link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css">
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>

    <script>
        var lazyLoadInstance = new LazyLoad({});
        /*
        var swiper = new Swiper('.slider', {
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.btn-next',
                prevEl: '.btn-prev',
            },
        });
        
        */
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://raw.githubusercontent.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js"></script>
  <script>
      $(document).ready(function() {
    $("#phone-input").on("input", function() {
      var value = $(this).val().replace(/\s+/g, ""); // Удаляем все пробелы
      var formattedValue = "";

      for (var i = 0; i < value.length; i++) {
        formattedValue += value[i];
        if ((i + 1) % 3 === 0 && i !== value.length - 1) {
          formattedValue += " "; // Добавляем пробел после каждых трех символов
        }
      }

      if (formattedValue.length > 11) {
        formattedValue = formattedValue.substring(0, 11); // Ограничиваем до 9 символов
      }

      $(this).val(formattedValue);
    });
  });
</script>
</body>
</html>