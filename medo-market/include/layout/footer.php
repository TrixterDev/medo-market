<div class="footer__bg">
  <div class="footer">
    <div class="footer__content container">
      <div class="footer__logo">
        <img src="./assets/img/logo/logo-footer.svg" alt="">
      </div>
      <div class="footer__nav">
        <h1>Меню</h1>
        <a href="#">Главная</a>
        <a href="#">Каталог</a>
        <a href="#">Наборы</a>
        <a href="#">контакты</a>
      </div>
      <div class="footer__input">
        <div class="footer__lang">
          <h1>Язык</h1>
          <div class="custom-select">
            <select>
              <option value="" class="opt">Русский</option>
              <option value="1" class="opt">Русский</option>
              <option value="2" class="opt">ENG</option>
            </select>
          </div>
        </div>
        <div class="footer__email">
          <h1>Остались вопросы</h1>
          <form action="./include/function.php">
            <div class="footer__fly-email">
              <label for="footer-email">Ваш e-mail</label>
              <input id="footer-email" type="email">
              <input type="submit" value="Отправить">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="line"></div>
    <div class="footer__end container">
      <div class="footer__info">
        <a href="#">© AtlasSoft 2022</a>
        <a href="#">Политика конфиденциальности</a>
        <a href="#">Условия использования</a>
      </div>
      <div class="footer__soc">
        <a href="#">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#">
          <span>in</span>
        </a>
        <a href="#">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fa-regular fa-envelope"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- JS -->
<script src="/assets/js/index.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/sorting.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- JS -->

<!-- ION-ICON -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<!-- ION-ICON -->

<!-- SLIDER-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- SLIDER-->

<!-- EFFECTS -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<!-- EFFECTS -->

<!--SLIDER SCRIPT-->
<script>
  var swiper = new Swiper(".swiper-banner", {
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 4000,
    },
  });
</script>
<!-- SLIDER SCRIPT -->

<!--SLIDER SCRIPT-->
<script>
  var swiper = new Swiper(".swiper-product", {
    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      970: {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      1280: {
        slidesPerView: 3,
        slidesPerGroup: 2,
        spaceBetween: 10,
      },
    }
  });
</script>
<script>

</script>
<!--SLIDER SCRIPT-->

<!--SLIDER SCRIPT-->
<script>
  var swiper = new Swiper(".swiper-ver", {
    direction: "vertical",
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      prevEl: ".ver__top",
      nextEl: ".ver__bottom",
    },
  });
</script>
<!--SLIDER SCRIPT-->

<!--SLIDER SCRIPT-->
<script>
      var swiper = new Swiper(".cardiogram-swiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
      280: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      570: {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      860: {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 4,
      },
      1150: {
        slidesPerView: 4,
        slidesPerGroup: 2,
        spaceBetween: 10,
      },
    }
      });
    </script>
<!-- SLIDER SCRIPT -->

<!-- PAGINATION CATALOG -->
<script>
  (function($) {
    var pagify = {
      items: {},
      container: null,
      totalPages: 1,
      perPage: 3,
      currentPage: 0,
      createNavigation: function() {
        this.totalPages = Math.ceil(this.items.length / this.perPage);

        $('.pagination', this.container.parent()).remove();
        var pagination = $('<div class="pagination"></div>').append('<a class="nav" data-next="false"><</a>');

        for (var i = 0; i < this.totalPages; i++) {
          var pageElClass = "page";
          if (!i)
            pageElClass = "page current";
          var pageEl = '<a class="' + pageElClass + '" data-page="' + (
            i + 1) + '">' + (
            i + 1) + "</a>";
          pagination.append(pageEl);
        }

        this.container.after(pagination);

        var that = this;
        $("body").off("click", ".nav");
        this.navigator = $("catalog__cards").on("click", ".nav", function() {
          var el = $(this);
          that.navigate(el.data("next"));
        });

        $("body").off("click", ".page");
        this.pageNavigator = $("body").on("click", ".page", function() {
          var el = $(this);
          that.goToPage(el.data("page"));
        });
      },
      navigate: function(next) {
        // default perPage to 5
        if (isNaN(next) || next === undefined) {
          next = true;
        }
        $(".pagination .nav").removeClass("disabled");
        if (next) {
          this.currentPage++;
          if (this.currentPage > (this.totalPages - 1))
            this.currentPage = (this.totalPages - 1);
          if (this.currentPage == (this.totalPages - 1))
            $(".pagination .nav.next").addClass("disabled");
        } else {
          this.currentPage--;
          if (this.currentPage < 0)
            this.currentPage = 0;
          if (this.currentPage == 0)
            $(".pagination .nav").addClass("disabled");
        }

        this.showItems();
      },
      updateNavigation: function() {

        var pages = $(".pagination .page");
        pages.removeClass("current");
        $('.pagination .page[data-page="' + (
          this.currentPage + 1) + '"]').addClass("current");
      },
      goToPage: function(page) {

        this.currentPage = page - 1;

        $(".pagination .nav").removeClass("disabled");
        if (this.currentPage == (this.totalPages - 1))
          $(".pagination .nav.next").addClass("disabled");

        if (this.currentPage == 0)
          $(".pagination .nav").addClass("disabled");
        this.showItems();
      },
      showItems: function() {
        this.items.hide();
        var base = this.perPage * this.currentPage;
        this.items.slice(base, base + this.perPage).show();

        this.updateNavigation();
      },
      init: function(container, items, perPage) {
        this.container = container;
        this.currentPage = 0;
        this.totalPages = 1;
        this.perPage = perPage;
        this.items = items;
        this.createNavigation();
        this.showItems();
      }
    };

    // stuff it all into a jQuery method!
    $.fn.pagify = function(perPage, itemSelector) {
      var el = $(this);
      var items = $(itemSelector, el);

      // default perPage to 5
      if (isNaN(perPage) || perPage === undefined) {
        perPage = 3;
      }

      // don't fire if fewer items than perPage
      if (items.length <= perPage) {
        return true;
      }

      pagify.init(el, items, perPage);
    };
  })(jQuery);

  $(".catalog__cards").pagify(20, ".catalog__card");
</script>
<!-- PAGINATION CATALOG -->



<!-- PAGINATION CATALOG -->
<script>
  (function($) {
    var pagify = {
      items: {},
      container: null,
      totalPages: 1,
      perPage: 3,
      currentPage: 0,
      createNavigation: function() {
        this.totalPages = Math.ceil(this.items.length / this.perPage);

        $('.paginations', this.container.parent()).remove();
        var pagination = $('<div class="paginations"></div>').append('<a class="nav" data-next="false"><</a>');

        for (var i = 0; i < this.totalPages; i++) {
          var pageElClass = "page";
          if (!i)
            pageElClass = "page currents";
          var pageEl = '<a class="' + pageElClass + '" data-page="' + (
            i + 1) + '">' + (
            i + 1) + "</a>";
          pagination.append(pageEl);
        }

        this.container.after(pagination);

        var that = this;
        $("body").off("click", ".nav");
        this.navigator = $("sets__cards").on("click", ".nav", function() {
          var el = $(this);
          that.navigate(el.data("next"));
        });

        $("body").off("click", ".page");
        this.pageNavigator = $("body").on("click", ".page", function() {
          var el = $(this);
          that.goToPage(el.data("page"));
        });
      },
      navigate: function(next) {
        // default perPage to 5
        if (isNaN(next) || next === undefined) {
          next = true;
        }
        $(".paginations .nav").removeClass("disabled");
        if (next) {
          this.currentPage++;
          if (this.currentPage > (this.totalPages - 1))
            this.currentPage = (this.totalPages - 1);
          if (this.currentPage == (this.totalPages - 1))
            $(".paginations .nav.next").addClass("disabled");
        } else {
          this.currentPage--;
          if (this.currentPage < 0)
            this.currentPage = 0;
          if (this.currentPage == 0)
            $(".paginations .nav").addClass("disabled");
        }

        this.showItems();
      },
      updateNavigation: function() {

        var pages = $(".paginations .page");
        pages.removeClass("currents");
        $('.paginations .page[data-page="' + (
          this.currentPage + 1) + '"]').addClass("currents");
      },
      goToPage: function(page) {

        this.currentPage = page - 1;

        $(".paginations .nav").removeClass("disabled");
        if (this.currentPage == (this.totalPages - 1))
          $(".paginations .nav.next").addClass("disabled");

        if (this.currentPage == 0)
          $(".paginations .nav").addClass("disabled");
        this.showItems();
      },
      showItems: function() {
        this.items.hide();
        var base = this.perPage * this.currentPage;
        this.items.slice(base, base + this.perPage).show();

        this.updateNavigation();
      },
      init: function(container, items, perPage) {
        this.container = container;
        this.currentPage = 0;
        this.totalPages = 1;
        this.perPage = perPage;
        this.items = items;
        this.createNavigation();
        this.showItems();
      }
    };

    // stuff it all into a jQuery method!
    $.fn.pagify = function(perPage, itemSelector) {
      var el = $(this);
      var items = $(itemSelector, el);

      // default perPage to 5
      if (isNaN(perPage) || perPage === undefined) {
        perPage = 3;
      }

      // don't fire if fewer items than perPage
      if (items.length <= perPage) {
        return true;
      }

      pagify.init(el, items, perPage);
    };
  })(jQuery);

  $(".sets__cards").pagify(20, ".sets__card");
</script>
<!-- PAGINATION CATALOG -->

<!-- TABS -->
<script>
  // http://www.entheosweb.com/tutorials/css/tabs.asp
  $(".tab_content").hide();
  $(".tab_content:first").show();

  $("ul.tabs li").click(function() {

    $(".tab_content").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $("ul.tabs li").removeClass("active");
    $(this).addClass("active");

    $(".tab_drawer_heading").removeClass("d_active");
    $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");
  });
  $(".tab_drawer_heading").click(function() {

    $(".tab_content").hide();
    var d_activeTab = $(this).attr("rel");
    $("#" + d_activeTab).fadeIn();

    $(".tab_drawer_heading").removeClass("d_active");
    $(this).addClass("d_active");

    $("ul.tabs li").removeClass("active");
    $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
  });
  $('ul.tabs li').last().addClass("tab_last");
</script>
<!-- TABS -->

<script>
  $("a[href='#popup']").on("click", openPopUp);
$("#popup").on("click", closePopUp);

function i()
{
  alert("afa");
}

function openPopUp()
{
  $("#popup").css({"visibility": "visible",
                   "opacity": 1});
}

function closePopUp()
{
  $("#popup").css({"visibility": "hidden",
                   "opacity": 0});
};
</script>

<!-- <script>
$('#id input:checkbox').click(function(){
  if ($(this).is(':checked')) {
     $('#id input:checkbox').not(this).prop('checked', false);
  }
});
</script> -->
<!-- FILTER -->
<script>var mixer = mixitup('.cardiogram__cards');</script>
<!-- FILTER -->
</body>

</html>