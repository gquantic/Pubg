<div class="main">
    <div class="sidebar-hover">
        <p class="pagination">
            <span class="page">01</span> / <span class="total-pages">08</span>
        </p>
    </div>
    <div class="sidebar-real">
        <div data-page="1" class="nav-elem nav-1 active"></div>
        <div data-page="2" class="nav-elem nav-2"></div>
        <div data-page="3" class="nav-elem nav-3"></div>
        <div data-page="4" class="nav-elem nav-4"></div>
        <div data-page="5" class="nav-elem nav-5"></div>
        <div data-page="6" class="nav-elem nav-6"></div>
        <div data-page="7" class="nav-elem nav-7"></div>
        <div data-page="8" class="nav-elem nav-8"></div>
    </div>
    <div class="sections">
        <div class="section section-1">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #1</h2>
                <p class="additional-text">Some cool info or hashtags #1</p>
            </div>
        </div>
        <div class="section section-2">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #2</h2>
                <p class="additional-text">Some cool info or hashtags #2</p>
            </div>
        </div>
        <div class="section section-3">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #3</h2>
                <p class="additional-text">Some cool info or hashtags #3</p>
            </div>
        </div>
        <div class="section section-4">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #4</h2>
                <p class="additional-text">Some cool info or hashtags #4</p>
            </div>
        </div>
        <div class="section section-5">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #5</h2>
                <p class="additional-text">Some cool info or hashtags #5</p>
            </div>
        </div>
        <div class="section section-6">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #6</h2>
                <p class="additional-text">Some cool info or hashtags #6</p>
            </div>
        </div>
        <div class="section section-7">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading">Fancy heading #7</h2>
                <p class="additional-text">Some cool info or hashtags #7</p>
            </div>
        </div>
        <div class="section section-8">
            <div class="left-part"></div>
            <div class="content">
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <div class="bg-part"></div>
                <h2 class="section-heading"><a class="codepen-link" href="https://codepen.io/suez/public/" target="_blank">Fancy heading #8</a></h2>
                <p class="check-out additional-text">Check out my other <a href="https://codepen.io/suez/public/" target="_blank">pens</a></p>
            </div>
        </div>
    </div>
    <h2 class="scroll-down">Scroll down</h2>
</div>

<script>
    'use strict';
    // Abandon all hope ye who enter here
    $(document).ready(function() {

        var navigating = false,
            curPage = 1,
            pages = $(".section").length,
            $sections = $(".sections"),
            $paginationPage = $(".pagination .page"),
            $paginationTotal = $(".total-pages"),
            $textStuff = $(".section-heading, .additional-text");

        if (pages >= 10) {
            $paginationTotal.text(pages);
        } else {
            $paginationTotal.text("0" + pages);
        }

        /*
        Sets random transition-delay for blocks between 0.4 and 1.2 seconds on every call
        */
        function randomDelay() {
            $(".left-part").css("transition-delay", (Math.floor(Math.random() * 9) + 4)/10 + "s");
            for (var i = 1; i <= pages; i++) {
                $(".bg-part:nth-child("+i+")").css("transition-delay", (Math.floor(Math.random() * 9) + 4)/10 + "s");
            }
        }

        /* Async hell, with hardcoded numbers.
        On production, 410 number must be .section-heading transform transition time in miliseconds + 10, but i'm sort of tired of this demo :D
        */
        function timeoutNav(t) {
            var time = t || 2000;
            $textStuff.addClass("not-visible");
            setTimeout(function() {
                navigating = false;
                randomDelay();
            }, time);
            setTimeout(function() {
                // cached selector not working because of newely created clone when moving up more then 2 positions
                $(".section-heading, .additional-text").css({"margin-top": 0 - (parseInt($(".nav-elem.active").attr("data-page")) - 1) * 100 + "vh"}).hide();
            }, 410);
            setTimeout(function() {
                $textStuff.show();
                $textStuff.css("top");
                $textStuff.removeClass("not-visible");
            }, time + 10);
        }

        function magicStuff(paramPage) {
            if (paramPage) curPage = paramPage;
            navigating = true;
            var calculatedMargin = 0 - (curPage - 1) * 100;
            $(".bg-part, .left-part").css("margin-top", calculatedMargin +"vh");
            $(".scroll-down").addClass("removed");
            if (parseInt($(".nav-elem.active").attr("data-page")) === 1) {
                $(".scroll-down").removeClass("removed");
            }
        }

        function trickyStuff(page) {
            $(".left-part, .bg-part").css({"transition-duration": "0s", "transition-delay": "0s"});
            $(".main").css("top");
            magicStuff(page);
            $(".main").css("top");
            $(".left-part, .bg-part").css("transition-duration", "0.8s");
            randomDelay();
        }

        function pagination(pg) {
            $(".nav-elem").removeClass("active");
            $(".nav-" + pg).addClass("active");
            curPage = pg;

            if (pages >= 10) {
                $paginationPage.text(pg);
            } else {
                $paginationPage.text("0" + pg);
            }
        }

        function navigateUp() {
            if (curPage > 1) {
                curPage--;
                pagination(curPage);
                magicStuff();
                timeoutNav();
            }
        }

        function navigateDown() {
            if (curPage < pages) {
                curPage++;
                pagination(curPage);
                magicStuff();
                timeoutNav();
            }
        }

        $(document).on("mousewheel DOMMouseScroll", function(e) {
            if (!navigating) {
                if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
                    navigateUp();
                } else {
                    navigateDown();
                }
            }
        });

        $(document).on("mousewheel DOMMouseScroll",
            ".sidebar-hover, .sidebar-real",
            function(e) {
                e.stopPropagation();
            });

        var sidebarScroll = 0,
            $navEl =  $(".nav-elem"),
            $sidebar = $(".sidebar-real"),
            maxScroll = $navEl.length * $navEl.height() - $(window).height();

        $(document).on("mousewheel DOMMouseScroll", ".sidebar-real", function(e) {
            if (navigating) return;
            if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
                if (!sidebarScroll) return;
                sidebarScroll += 100;
                if (sidebarScroll > 0) sidebarScroll = 0;
            } else {
                if (Math.abs(sidebarScroll) === maxScroll) return;
                sidebarScroll -= 100;
                if (Math.abs(sidebarScroll) > maxScroll) sidebarScroll = 0 - maxScroll;
            }
            $sidebar.css("transform", "translateY("+ sidebarScroll +"px)");
        });

        $(document).on("click", ".nav-elem:not(.active)", function() {
            if (navigating) return;
            var activePage = parseInt($(".nav-elem.active").attr("data-page"), 10),
                futurePage = $(this).attr("data-page");

            pagination(futurePage);

            if (Math.abs(activePage - futurePage) > 2) {
                var $fakePage = $(".section-" + futurePage).clone(),
                    $currentPage = $(".section-" + activePage),
                    fakeNumber = 0;
                // ugly code, do not enter here
                if (activePage < futurePage) {
                    // moving down
                    $currentPage.after($fakePage);
                    fakeNumber = activePage + 1;
                    $(".main").css("top");
                    randomDelay();
                    magicStuff(fakeNumber);
                } else {
                    // moving up (real hell)
                    $currentPage.before($fakePage);
                    fakeNumber = activePage - 1;
                    trickyStuff(activePage + 1);
                    $(".main").css("top");
                    randomDelay();
                    $(".main").css("top");
                    magicStuff(activePage);
                }
                timeoutNav(2050);
                setTimeout(function() {
                    $fakePage.remove();
                    trickyStuff(futurePage);
                }, 2000);
            } else {
                magicStuff(futurePage);
                timeoutNav();
            }
        });

        $(window).resize(function() {
            maxScroll = $navEl.length * $navEl.height() - $(window).height();
            $sidebar.css("transform", "translateY(0)");
        });

    });
</script>

<style>
    @font-face {
        src: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/PFDinTextCompPro-Medium.ttf);
        font-family: pfd-medium;
    }
    @font-face {
        src: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/PT_Sans-Web-Regular.ttf);
        font-family: ptsans-regular;
    }
    *, *:before, *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .main {
        width: 80%;
        height: 500px;
        overflow: hidden;
        background: #000;
        margin: 0 auto;
    }

    .sidebar-hover,
    .sidebar-real,
    .left-part,
    .content,
    .bg-part {
        position: absolute;
        top: 0;
        height: 100%;
    }

    /* END OF GLOBAL STYLES */
    /* SIDEBAR HOVER STYLES */
    .sidebar-hover {
        position: fixed;
        z-index: 100;
        left: 0;
        width: 8rem;
    }
    .sidebar-hover:after {
        content: "";
        display: block;
        width: 1px;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.5);
    }
    .sidebar-hover:hover ~ .sidebar-real {
        max-width: 30rem;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem {
        transform: translateX(0);
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-1 {
        transition-delay: 0.4s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-2 {
        transition-delay: 0.55s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-3 {
        transition-delay: 0.7s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-4 {
        transition-delay: 0.85s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-5 {
        transition-delay: 1s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-6 {
        transition-delay: 1.15s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-7 {
        transition-delay: 1.3s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-8 {
        transition-delay: 1.45s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-9 {
        transition-delay: 1.6s;
    }
    .sidebar-hover:hover ~ .sidebar-real .nav-elem.nav-10 {
        transition-delay: 1.75s;
    }
    .sidebar-hover:hover ~ .sections .content {
        transform: translateX(30rem);
    }

    .pagination {
        z-index: 500;
        position: absolute;
        font-size: 1.6rem;
        font-family: ptsans-regular;
        top: 26.7rem;
        left: 0rem;
        width: 15rem;
        text-align: center;
        color: rgba(255, 255, 255, 0.5);
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.4);
        /*
        &:before {
          content: "";
          display: block;
          position: absolute;
          top: -0.5rem;
          right: -0.2rem;
          height: 4rem;
          width: 0.5rem;
          border-radius: 5px;
          background: rgba(255,255,255, 0.9);
        }*/
    }
    .pagination:after {
        content: ">";
        color: #fff;
        position: absolute;
        display: block;
        right: 3rem;
        top: 0.5rem;
        -webkit-animation: navArrowMove 1s infinite;
        animation: navArrowMove 1s infinite;
    }
    .pagination .page {
        color: #fff;
    }

    /* END OF SIDEBAR HOVER */
    /* REAL SIDEBAR (OFF-CANVAS MENU) STYLES */
    .sidebar-real {
        z-index: 200;
        left: 15rem;
        width: 30rem;
        height: 500rem;
        max-width: 0;
        background: #000;
        overflow: hidden;
        transition: max-width 0.4s 0.2s, transform 0.3s;
        will-change: max-width, transform;
    }
    .sidebar-real:hover {
        max-width: 30rem;
    }
    .sidebar-real:hover .nav-elem {
        transform: translateX(0);
    }
    .sidebar-real:hover .nav-elem.nav-1 {
        transition-delay: 0.4s;
    }
    .sidebar-real:hover .nav-elem.nav-2 {
        transition-delay: 0.55s;
    }
    .sidebar-real:hover .nav-elem.nav-3 {
        transition-delay: 0.7s;
    }
    .sidebar-real:hover .nav-elem.nav-4 {
        transition-delay: 0.85s;
    }
    .sidebar-real:hover .nav-elem.nav-5 {
        transition-delay: 1s;
    }
    .sidebar-real:hover .nav-elem.nav-6 {
        transition-delay: 1.15s;
    }
    .sidebar-real:hover .nav-elem.nav-7 {
        transition-delay: 1.3s;
    }
    .sidebar-real:hover .nav-elem.nav-8 {
        transition-delay: 1.45s;
    }
    .sidebar-real:hover .nav-elem.nav-9 {
        transition-delay: 1.6s;
    }
    .sidebar-real:hover .nav-elem.nav-10 {
        transition-delay: 1.75s;
    }
    .sidebar-real:hover ~ .sections .content {
        transform: translateX(30rem);
    }

    .nav-elem {
        position: relative;
        width: 100%;
        height: 18.81rem;
        background-size: cover;
        transition: transform 0.4s 0.3s;
        will-change: transform;
        transform: translateX(-100%);
        cursor: pointer;
    }
    .nav-elem:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        transition: background 0.2s;
        will-change: background;
    }
    .nav-elem:hover:after {
        background: transparent;
    }
    .nav-elem.nav-1 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/2side-pagi-1.jpg");
    }
    .nav-elem.nav-2 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/scr-split-2.jpg");
    }
    .nav-elem.nav-3 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/ironman.jpg");
    }
    .nav-elem.nav-4 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-3.jpg");
    }
    .nav-elem.nav-5 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/captainamerica.jpg");
    }
    .nav-elem.nav-6 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/blackwidow.jpg");
    }
    .nav-elem.nav-7 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-4.jpg");
    }
    .nav-elem.nav-8 {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/thor.jpg");
    }

    /* REAL SIDEBAR STYLES END */
    /* SECTIONS STYLES */
    .sections {
        height: 100%;
        transition: margin 0.5s;
        will-change: margin;
    }

    .section {
        position: relative;
        height: 100%;
    }
    .section.section-1 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/2side-pagi-1.jpg");
    }
    .section.section-1 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/2side-pagi-1.jpg");
    }
    .section.section-2 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/scr-split-2.jpg");
    }
    .section.section-2 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/scr-split-2.jpg");
    }
    .section.section-3 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/ironman.jpg");
    }
    .section.section-3 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/ironman.jpg");
    }
    .section.section-4 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-3.jpg");
    }
    .section.section-4 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-3.jpg");
    }
    .section.section-5 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/captainamerica.jpg");
    }
    .section.section-5 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/captainamerica.jpg");
    }
    .section.section-6 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/blackwidow.jpg");
    }
    .section.section-6 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/blackwidow.jpg");
    }
    .section.section-7 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-4.jpg");
    }
    .section.section-7 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/sections-4.jpg");
    }
    .section.section-8 .left-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/thor.jpg");
    }
    .section.section-8 .bg-part {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/thor.jpg");
    }

    .left-part,
    .bg-part {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-attachment: fixed;
        transition: margin 0.8s;
        will-change: margin;
    }

    .left-part {
        z-index: 20;
        left: 0;
        width: 15rem;
        transition-delay: 1s;
    }

    .content {
        left: 15rem;
        width: calc(100% - 15rem);
        height: 100%;
        transition: transform 0.4s 0.2s;
        will-change: transform;
    }

    .section-heading,
    .additional-text {
        display: block;
        position: absolute;
        z-index: 700;
        color: #fff;
        line-height: 1;
        transition: transform 0.4s, opacity 0.1s, color 0.3s;
        will-change: transform, opacity;
    }
    .section-heading.not-visible,
    .additional-text.not-visible {
        transform: translateY(-10rem);
        opacity: 0;
        transition: transform 0.4s, opacity 0.2s 0.2s;
    }

    .section-heading {
        top: 26.7rem;
        left: 0;
        font-size: 6rem;
        text-transform: uppercase;
        line-height: 1;
        font-family: pfd-medium;
        padding: 0 2rem 4rem;
        background: rgba(0, 0, 0, 0.4);
        cursor: pointer;
    }
    .section-heading:hover {
        color: rgba(255, 89, 89, 0.7);
    }

    .additional-text {
        top: 33.2rem;
        left: 2rem;
        font-size: 2rem;
        text-transform: uppercase;
        font-family: ptsans-regular;
    }

    .bg-part {
        width: 12.5%;
    }
    .bg-part:nth-child(4) {
        transition-delay: 0.4s;
    }
    .bg-part:nth-child(3), .bg-part:nth-child(5) {
        transition-delay: 0.6s;
    }
    .bg-part:nth-child(2), .bg-part:nth-child(6) {
        transition-delay: 0.8s;
    }
    .bg-part:nth-child(1), .bg-part:nth-child(7) {
        transition-delay: 1s;
    }
    .bg-part:nth-child(8) {
        transition-delay: 1.2s;
    }
    .bg-part:nth-child(1) {
        left: 0%;
    }
    .bg-part:nth-child(2) {
        left: 12.5%;
    }
    .bg-part:nth-child(3) {
        left: 25%;
    }
    .bg-part:nth-child(4) {
        left: 37.5%;
    }
    .bg-part:nth-child(5) {
        left: 50%;
    }
    .bg-part:nth-child(6) {
        left: 62.5%;
    }
    .bg-part:nth-child(7) {
        left: 75%;
    }
    .bg-part:nth-child(8) {
        left: 87.5%;
    }

    .scroll-down {
        position: fixed;
        z-index: 500;
        transition: transform 0.5s 1.5s, opacity 0.3s 1.7s, z-index 0.5s 1.5s;
        font-size: 3rem;
        font-family: ptsans-regular;
        text-transform: uppercase;
        bottom: 8rem;
        left: calc(50% - 15rem);
        color: #fff;
        width: 30rem;
        text-align: center;
    }
    .scroll-down.removed {
        transform: translateY(-20rem);
        opacity: 0;
        z-index: -10;
        transition: transform 0.5s, opacity 0.3s 0.2s, z-index 0.5s;
    }
    .scroll-down:after {
        content: "";
        position: absolute;
        display: block;
        bottom: -3rem;
        left: calc(50% - 1.5rem);
        width: 3rem;
        height: 3rem;
        border: 0.5rem solid #fff;
        border-left: none;
        border-top: none;
        transform-origin: 50% 50%;
        transform: rotate(45deg);
        -webkit-animation: arrowMove 1.2s infinite;
        animation: arrowMove 1.2s infinite;
    }

    @-webkit-keyframes arrowMove {
        to {
            transform: rotate(45deg) translateY(2rem) translateX(2rem);
            opacity: 0;
        }
    }

    @keyframes arrowMove {
        to {
            transform: rotate(45deg) translateY(2rem) translateX(2rem);
            opacity: 0;
        }
    }
    @-webkit-keyframes navArrowMove {
        to {
            transform: translateX(2rem);
            opacity: 0;
        }
    }
    @keyframes navArrowMove {
        to {
            transform: translateX(2rem);
            opacity: 0;
        }
    }
    .codepen-link {
        color: inherit;
        text-decoration: none;
    }

    .check-out a {
        color: #ffaaaa;
    }
</style>
