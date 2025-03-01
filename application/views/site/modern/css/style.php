<style>
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Open+Sans');
.alignleft {
    float: left;
    margin-right: 15px;
}

.alignright {
    float: right;
    margin-left: 15px;
}

.aligncenter {
    display: block;
    margin: 0 auto 15px;
}

a {
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

a:focus,
a:hover {
    outline: 0 solid;
    text-decoration: none;
}

ul,
ol {
    margin: 0;
    padding: 0;
    list-style: none;
}

button:focus {
    outline: 0;
}

img {
    max-width: 100%;
    height: auto;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #292929;
    /* font-family: 'Libre Baskerville', serif; */
    font-weight: inherit;
    margin: 0 0 15px;
    line-height: 1.4em;
}

/*h1 { font-size: 2em; margin: .67em 0 }
h2 { font-size: 1.5em; margin: .75em 0 }
h3 { font-size: 1.17em; margin: .83em 0 }
h5 { font-size: .83em; margin: 1.5em 0 }
h6 { font-size: .75em; margin: 1.67em 0 }*/

html,
body {
    height: 100%
}

body {
    /* font-family: 'Open Sans', sans-serif; */
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 14px;
    line-height: 1.6em;
    font-weight: 400;
    color: #6f6f6f;
}

a:hover,
a:focus {
    text-decoration: none;
    outline: 0;
}

/* Remove Chrome Input Field's Unwanted Yellow Background Color */

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0px 1000px white inset !important;
}

/*--------------------
    CONTENT POSITION
---------------------*/

.fix {
    overflow: hidden;
}

.relative {
    position: relative;
    overflow: hidden;
}

.absulute {
    position: absolute;
}

.v-center {
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 100%;
    z-index: 9;
}

.h-center {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

.h-center-reverse {
    right: 50%;
    -webkit-transform: translateX(50%);
    transform: translateX(50%);
}

.content-center {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100%;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.flex-v-center {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.social-bookmark li {
    display: inline;
}

.social-bookmark li a {
    display: inline-block;
    margin: 0 2px;
    text-align: center;
}

.inline li {
    display: inline;
}

.inline-block li {
    display: inline-block;
    padding: 5px 15px;
}

.inline-block {
    display: inline-block;
}

/*-----------------------
    SECTION TITLE
------------------------*/

.area-title,
.section-title {
    margin-bottom: 80px;
    position: relative;
}

.area-title h2 {
    color: #1a264a;
    line-height: 1;
    margin-bottom: 45px;
    padding-bottom: 35px;
    position: relative;
    text-transform: uppercase;
}

.area-title h2 span {
    color: <?php echo $THEMECOLORCODE;?>;
}

.icon-and-border {
    background: #fff none repeat scroll 0 0;
    border-radius: 50%;
    color: <?php echo $THEMECOLORCODE;?>;
    display: inline-block;
    height: 40px;
    left: 0;
    margin: auto;
    padding-top: 8px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 45px;
    width: 40px;
}

.area-title h2::after {
    border-bottom: 2px dashed #1a264a;
    bottom: 0;
    content: "";
    height: 2px;
    left: 50%;
    position: absolute;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    width: 50%;
}

.sky-gray-bg .area-title .icon-and-border {
    background: #e5eff6;
}

.gray-bg .area-title .icon-and-border {
    background: #f5f4f4 none repeat scroll 0 0;
}

/*------------------------
    READ MORE BUTTON
--------------------------*/

.read-more {
    background: #ffffff none repeat scroll 0 0;
    border: 2px solid;
    border-radius: 5px;
    color: <?php echo $THEMECOLORCODE;?>;
    display: inline-block;
    font-weight: 500;
    margin-top: 10px;
    padding: 10px 29px;
    text-transform: uppercase;
}

.read-more:hover {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-color: <?php echo $THEMECOLORCODE;?>;
    color: #fff;
}

/*--------------------
    PADDING
---------------------*/

.no-padding {
    padding: 0;
}

.padding-20 {
    padding: 20px;
}

.padding-30 {
    padding: 30px;
}

.padding-50 {
    padding: 50px;
}

.padding-top {
    padding-top: 100px;
}

.padding-bottom {
    padding-bottom: 100px;
}

.section-padding {
    padding: 100px 0;
    background: -webkit-linear-gradient(270deg,#FFFFFF,#FAFDFB,#D7E9F7) !important;
}

.padding-100-70 {
    padding-top: 100px;
    padding-bottom: 70px;
}

.padding-100-50 {
    padding-top: 100px;
    padding-bottom: 50px;
}

.padding-100-40 {
    padding-top: 100px;
    padding-bottom: 40px;
}

.padding-100-30 {
    padding-top: 100px;
    padding-bottom: 30px;
}

.padding-50-50 {
    padding: 50px 0;
}

.padding-150-150 {
    padding: 150px 0;
}

/*--------------------
    MARGIN
---------------------*/

.no-margin {
    margin: 0;
}

.mt100 {
    margin-top: 100px;
}

.mt70 {
    margin-top: 70px;
}

.mt50 {
    margin-top: 50px;
}

.mt30 {
    margin-top: 30px;
}

.mt20 {
    margin-top: 20px;
}

.mb100 {
    margin-bottom: 100px;
}

.mb70 {
    margin-bottom: 70px;
}

.mb50 {
    margin-bottom: 50px;
}

.mb30 {
    margin-bottom: 30px;
}

.mb20 {
    margin-bottom: 20px;
}

.mb0 {
    margin-bottom: 0;
}

@media only screen and (min-width: 1200px) {
    /*----------------------------------
        MEDIUM LAYOUT: 1280px
    -----------------------------------*/
    .lg-mb0 {
        margin-bottom: 0px;
    }
    .lg-mb20 {
        margin-bottom: 20px;
    }
    .lg-mb30 {
        margin-bottom: 30px;
    }
    .lg-mb40 {
        margin-bottom: 40px;
    }
    .lg-mb50 {
        margin-bottom: 50px;
    }
    .lg-mb70 {
        margin-bottom: 70px;
    }
    .lg-mb100 {
        margin-bottom: 100px;
    }
    /*----------------*/
    .lg-mt0 {
        margin-top: 0px;
    }
    .lg-mt20 {
        margin-top: 20px;
    }
    .lg-mt30 {
        margin-top: 30px;
    }
    .lg-mt40 {
        margin-top: 40px;
    }
    .lg-mt50 {
        margin-top: 50px;
    }
    .lg-mt70 {
        margin-top: 70px;
    }
    .lg-mt100 {
        margin-top: 100px;
    }
    /*----------------*/
    .lg-padding20 {
        padding: 20px;
    }
    .lg-padding30 {
        padding: 30px;
    }
    .lg-padding40 {
        padding: 40px;
    }
    .lg-padding50 {
        padding: 50px;
    }
    .lg-padding70 {
        padding: 70px;
    }
    .lg-padding100 {
        padding: 100px;
    }
    /*--------------------
        FONT
    ----------------------*/
    .lg-center {
        text-align: center;
    }
    .lg-font h1 {
        font-size: 32px;
    }
    .lg-font h2 {
        font-size: 26px;
    }
    .lg-font h3 {
        font-size: 24px;
    }
    .lg-font h4 {
        font-size: 18px;
    }
    .lg-font h5 {
        font-size: 16px;
    }
    .lg-font h6 {
        font-size: 14px;
    }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
    /*----------------------------------
        MEDIUM LAYOUT: 1280px
    -----------------------------------*/
    .md-mb0 {
        margin-bottom: 0px;
    }
    .md-mb20 {
        margin-bottom: 20px;
    }
    .md-mb30 {
        margin-bottom: 30px;
    }
    .md-mb40 {
        margin-bottom: 40px;
    }
    .md-mb50 {
        margin-bottom: 50px;
    }
    .md-mb70 {
        margin-bottom: 70px;
    }
    .md-mb100 {
        margin-bottom: 100px;
    }
    /*----------------*/
    .md-mt0 {
        margin-top: 0px;
    }
    .md-mt20 {
        margin-top: 20px;
    }
    .md-mt30 {
        margin-top: 30px;
    }
    .md-mt40 {
        margin-top: 40px;
    }
    .md-mt50 {
        margin-top: 50px;
    }
    .md-mt70 {
        margin-top: 70px;
    }
    .md-mt100 {
        margin-top: 100px;
    }
    /*----------------*/
    .md-padding20 {
        padding: 20px;
    }
    .md-padding30 {
        padding: 30px;
    }
    .md-padding40 {
        padding: 40px;
    }
    .md-padding50 {
        padding: 50px;
    }
    .md-padding70 {
        padding: 70px;
    }
    .md-padding100 {
        padding: 100px;
    }
    /*--------------------
        FONT
    ----------------------*/
    .md-center {
        text-align: center;
    }
    .md-font h1 {
        font-size: 28px;
    }
    .md-font h2 {
        font-size: 24px;
    }
    .md-font h3 {
        font-size: 20px;
    }
    .md-font h4 {
        font-size: 16px;
    }
    .md-font h5 {
        font-size: 14px;
    }
    .md-font h6 {
        font-size: 12px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    /*----------------------------------
        TABLET LAYOUT: 768px
    -----------------------------------*/
    .sm-mb0 {
        margin-bottom: 0px;
    }
    .sm-mb20 {
        margin-bottom: 20px;
    }
    .sm-mb30 {
        margin-bottom: 30px;
    }
    .sm-mb40 {
        margin-bottom: 40px;
    }
    .sm-mb50 {
        margin-bottom: 50px;
    }
    .sm-mb70 {
        margin-bottom: 70px;
    }
    .sm-mb100 {
        margin-bottom: 100px;
    }
    /*----------------*/
    .sm-mt0 {
        margin-top: 0px;
    }
    .sm-mt20 {
        margin-top: 20px;
    }
    .sm-mt30 {
        margin-top: 30px;
    }
    .sm-mt40 {
        margin-top: 40px;
    }
    .sm-mt50 {
        margin-top: 50px;
    }
    .sm-mt70 {
        margin-top: 70px;
    }
    .sm-mt100 {
        margin-top: 100px;
    }
    /*----------------*/
    .sm-padding20 {
        padding: 20px;
    }
    .sm-padding30 {
        padding: 30px;
    }
    .sm-padding40 {
        padding: 40px;
    }
    .sm-padding50 {
        padding: 50px;
    }
    .sm-padding70 {
        padding: 70px;
    }
    .sm-padding100 {
        padding: 100px;
    }
    /*--------------------
        FONT
    ----------------------*/
    .sm-center {
        text-align: center;
    }
    .sm-font h1 {
        font-size: 28px;
    }
    .sm-font h2 {
        font-size: 24px;
    }
    .sm-font h3 {
        font-size: 20px;
    }
    .sm-font h4 {
        font-size: 16px;
    }
    .sm-font h5 {
        font-size: 14px;
    }
    .sm-font h6 {
        font-size: 12px;
    }
}

@media only screen and (max-width: 767px) {
    /*----------------------------------
        MOBILE LAYOUT: 320px
    -----------------------------------*/
    .xs-mb0 {
        margin-bottom: 0px;
    }
    .xs-mb20 {
        margin-bottom: 20px;
    }
    .xs-mb30 {
        margin-bottom: 30px;
    }
    .xs-mb40 {
        margin-bottom: 40px;
    }
    .xs-mb50 {
        margin-bottom: 50px;
    }
    .xs-mb70 {
        margin-bottom: 70px;
    }
    .xs-mb100 {
        margin-bottom: 100px;
    }
    /*----------------*/
    .xs-mt0 {
        margin-top: 0px;
    }
    .xs-mt20 {
        margin-top: 20px;
    }
    .xs-mt30 {
        margin-top: 30px;
    }
    .xs-mt40 {
        margin-top: 40px;
    }
    .xs-mt50 {
        margin-top: 50px;
    }
    .xs-mt70 {
        margin-top: 70px;
    }
    .xs-mt100 {
        margin-top: 100px;
    }
    /*----------------*/
    .xs-padding20 {
        padding: 20px;
    }
    .xs-padding30 {
        padding: 30px;
    }
    .xs-padding40 {
        padding: 40px;
    }
    .xs-padding50 {
        padding: 50px;
    }
    .xs-padding70 {
        padding: 70px;
    }
    .xs-padding100 {
        padding: 100px;
    }
    /*--------------------
        FONT
    ----------------------*/
    .xs-center {
        text-align: center;
    }
    .xs-font h1 {
        font-size: 26px;
    }
    .xs-font h2 {
        font-size: 22px;
    }
    .xs-font h3 {
        font-size: 18px;
    }
    .xs-font h4 {
        font-size: 14px;
    }
    .xs-font h5 {
        font-size: 12px;
    }
    .xs-font h6 {
        font-size: 10px;
    }

}

/*--------------------
    WIDTH
---------------------*/

.width100,
.width100 img {
    width: 100%;
}

/*----------------------
    ALIGN
-----------------------*/

.left,
.right,
.center {
    position: relative;
}

.left {
    text-align: left;
}

.right {
    text-align: right;
}

.center {
    text-align: center;
}

/*-----------------------
    COLOR
------------------------*/

.white,
.white h1,
.white h2,
.white h3,
.white h4,
.white h5,
.white h6,
.white a,
.white small {
    color: #ffffff;
}

/*--------------------
    BACKGROUND
---------------------*/

.green-bg {
    background: #f6fafb;
}
    
.bg-light-gray {
    background-color: #f7f7f7;
}

/*-------------------*/

.gray-bg {
    background: #FAFDFB;
}

.sky-gray-bg {
    background: #FAFDFB;;
}

.blue-bg {
    background: <?php echo $THEMECOLORCODE;?>;
}

.dark-blue-bg {
    background: #1291CA;
}

.dark-bg {
    background: rgba(0, 0, 0, .85);
    color: #ffffff;
}

.deep-dark-bg {
    background: rgba(0, 0, 0, .9);
    color: #ffffff;
}

.area-bg {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.area-bg::after,
.area-bg::before {
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.area-bg::before {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
}

/*-----------------------
    SHADOW & BORDER
------------------------*/

.shadow {
    -webkit-box-shadow: 0 0 3px #dddddd;
    box-shadow: 0 0 3px #dddddd;
}

.shadow10 {
    -webkit-box-shadow: 0 0 10px #dddddd;
    box-shadow: 0 0 3px #dddddd;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.shadow10:hover {
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px);
}

.border {
    border: 1px solid #dddddd;
}

.border-left {
    border-left: 1px solid #dddddd;
}

.border-right {
    border-right: 1px solid #dddddd;
}

.border-bottom {
    border-bottom: 1px solid #dddddd;
}

.border-top {
    border-top: 1px solid #dddddd;
}

.border-righ-bottom {
    border-right: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
}

.border-xs {
    border: 1px solid #dddddd;
}

.b-radious-10 {
    border-radius: 10px;
}

.b-radious-20 {
    border-radius: 20px;
}

.b-radious-50 {
    border-radius: 50px;
}

/*--------------------------
    2. TOP AREA
---------------------------*/

.top-area {
    height: 100%;
    position: relative;
    width: 100%;
    overflow: hidden;
}

.welcome-text-area {
    height: 100%;
    overflow: hidden;
    padding-top: 100px;
    width: 100%;
}

.top-area .area-bg {
    background: rgba(0, 0, 0, 0) no-repeat scroll center center / cover;
}

.top-area .area-bg::after {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/home/home-wave.svg") no-repeat scroll center center / cover;
    bottom: -59px;
    height: 166px;
    top: auto;
    z-index: 9;
}

/*----------------------
    TOP BAR
-----------------------*/

.search-collapse-area {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-top: 1px solid;
}

.search-form {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    height: 70px;
    margin-bottom: 20px;
    margin-top: 20px;
    position: relative;
}

.search-form input,
.search-form button {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    height: 50px;
    left: 10px;
    padding: 10px;
    position: absolute;
    top: 10px;
    width: calc(100% - 87px);
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.search-form button {
    font-size: 25px;
    left: auto;
    right: 10px;
    width: 50px;
}

.search-form button:hover {
    background: #fff none repeat scroll 0 0;
    color: <?php echo $THEMECOLORCODE;?>;
}

.search-form::before {
    border: 2px solid #fff;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.sign-up {
    border: 2px solid;
    border-radius: 50px;
    letter-spacing: 2px;
    padding: 7px 30px;
}

.search-and-signup-button {
    padding: 34px 0 34px 34px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.search-and-signup-button button {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    font-size: 20px;
    line-height: 1;
    position: relative;
    top: 3px;
}

.is-sticky .search-and-signup-button {
    padding: 16px 34px;
    padding-right: 0;
}


/*---------------------------------
    2.1 MAINMENU AREA
-----------------------------------*/

.header-top-area {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
}

.mainmenu-area {
    position: relative;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    z-index: 9999;
    background: #fff;
    -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
}

.navbar-header {
    margin-top: 14px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.navbar {
    border-bottom: 0 none;
    border-top: 0 none;
    margin-bottom: 0;
}

.navbar-brand > img {
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.is-sticky .navbar-brand > img {
    max-width: 80%;
}

/*ul#nav {
    float: right;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}*/

ul#nav {
    float: none;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.stellarnav.dark {
    background: rgba(0, 0, 0, 0);
}

.navbar-header {
    position: relative;
    z-index: 9999;
}

ul#nav li a {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    /* font-family: 'Libre Baskerville', serif; */
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 40px 5px;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

ul#nav li a:hover,
ul#nav li.active a {
    text-decoration: overline;
}

.is-sticky ul#nav li a {
    padding: 20px 5px;
}


.is-sticky .navbar-header {
    margin-top: -2px;
}

.is-sticky .mainmenu-area {
    background: <?php echo $THEMECOLORCODE;?>;
    -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
    z-index: 99999;
}

.menu-toggle.full {
    border: 1px solid;
    height: 40px;
    letter-spacing: 2px;
    padding-top: 8px;
    position: absolute;
    right: 15px;
    text-align: center;
    top: 20px;
    width: 110px;
    z-index: 9999;
}
.menu-toggle.full i{color: #000;}

.is-sticky .menu-toggle.full {
    top: 8px;
}

ul#nav li ul a,
.is-sticky ul#nav li ul a {
    border-bottom: 1px solid #1a1a1a;
    padding: 10px;
    padding-left: 15px;
}

.home-three .search-and-signup-button {
    padding: 38px 0 34px 34px;
}

.home-three .is-sticky .search-and-signup-button {
    padding: 20px 0 16px 34px;
}

/*-----------------------------------
    3. WELCOME SLIDER AREA
-------------------------------------*/

.welcome-slider-area {
    color: #fff;
    overflow: hidden;
    width: 100%;
    position: relative;
}

.welcome-single-slide {
    height: 750px;
    width: 100%;
}

.slide-bg-overlay {
    height: 100%;
    left: 0;
    opacity: 0.6;
    position: absolute;
    top: 0;
    width: 100%;
}

.slide-bg-overlay::after {
    background: #000 none repeat scroll 0 0;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0.7;
    position: absolute;
    top: 0;
    width: 100%;
}

.slide-bg-one {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/slider/slide-1.jpg") no-repeat scroll center center / cover;
}

.slide-bg-two {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/slider/slide_1.jpg") no-repeat scroll center center / cover;
}

.slide-bg-three {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/slider/slide_2.jpg") no-repeat scroll center center / cover;
}

.owl-item.active .welcome-single-slide .welcome-text h4 {
    -webkit-animation: 1s ease 1s normal both 1 running fadeInUp;
    animation: 1s ease 1s normal both 1 running fadeInUp;
}

.owl-item.active .welcome-single-slide .welcome-text h1 {
    -webkit-animation: 1s ease 1.5s normal both 1 running fadeInUp;
    animation: 1s ease 1.5s normal both 1 running fadeInUp;
}

.owl-item.active .welcome-single-slide .welcome-text p {
    -webkit-animation: 1s ease 2s normal both 1 running fadeInUp;
    animation: 1s ease 2s normal both 1 running fadeInUp;
    ;
}

.owl-item.active .welcome-single-slide .home-button {
    -webkit-animation: 1s ease 2.5s normal both 1 running fadeInUp;
    animation: 1s ease 2.5s normal both 1 running fadeInUp;
}

.welcome-slider-area .owl-nav {
    bottom: -100px;
    position: absolute;
    right: 20px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.welcome-slider-area:hover .owl-nav {
    bottom: 20px;
}

.welcome-slider-area .owl-nav > div {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    bottom: 0;
    display: inline-block;
    font-size: 35px;
    height: 50px;
    margin-left: 10px;
    padding-top: 5px;
    right: 0;
    text-align: center;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 50px;
}

.welcome-slider-area .owl-nav > div:hover {
    background: #fff none repeat scroll 0 0;
    color: <?php echo $THEMECOLORCODE;?>;
}

/*----------------------------
    3. WELCOME TEXT AREA
------------------------------*/

.welcome-area {
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    font-size: 18px;
    height: 100%;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
}

.welcome-mockup img {
    width: 100%;
}


.welcome-text h4 {
    font-size: 20px;
}

.welcome-text h1 {
    font-size: 40px;
    margin-bottom: 30px;
}

.home-button {
    padding-top: 50px;
}

.home-button a {
    border: 2px solid;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    margin-right: 15px;
    padding: 13px 20px;
    text-align: center;
    text-transform: uppercase;
}

.home-button a:hover,
.sign-up:hover {
    background: #ffffff none repeat scroll 0 0;
    border-color: #ffffff;
    color: #1aabec;
}


/*--------------------------------
    4. SERVICE TOP AREA
---------------------------------*/

.qs-box {
    position: relative;
}

.qs-box-icon i {
    margin-bottom: 20px;
}

.qs-box-icon i {
    border: 1px solid <?php echo $THEMECOLORCODE;?>;
    color: #292929;
    font-size: 30px;
    height: 60px;
    padding-top: 15px;
    text-align: center;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 60px;
}

.qs-box:hover .qs-box-icon i {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-color: <?php echo $THEMECOLORCODE;?>;
    color: #ffffff;
}

.qs-box-icon img {
    width: 50px;
}

.features-top-area .qs-box h3 {
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
}

.qs-box.pos-icon-left {
    padding-left: 80px;
    text-align: left;
}

.qs-box.pos-icon-left .qs-box-icon {
    left: 0;
    position: absolute;
    top: 0;
}

.qs-box.pos-icon-right {
    padding-right: 80px;
    text-align: right;
}

.qs-box.pos-icon-right .qs-box-icon {
    right: 0;
    position: absolute;
    top: 0;
}

/*--------------------------------
    5. APP AREA
----------------------------------*/

.high-light {
    color: #292929;
    font-weight: 500;
    margin-bottom: 30px;
}

.app-area-mockup-bg {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/mockups/app-area-mockup.png") no-repeat scroll center bottom / contain;
    bottom: 0;
    height: 80%;
    position: absolute;
    right: 8%;
    width: 30%;
}

.app-area .area-title h2::after {
    left: 0;
    -webkit-transform: inherit;
    transform: inherit;
}

.app-area .icon-and-border {
    background: #e5eff6 none repeat scroll 0 0;
    left: 0;
    right: auto;
}

.app-area .qs-box-icon i {
    border-radius: 50%;
    color: <?php echo $THEMECOLORCODE;?>;
}

/*--------------------------------
    6. VIDEO AREA
---------------------------------*/

.video-area .area-bg::before {
    background: rgba(0, 0, 0, 0)  none repeat scroll 0 0;
}

.video-area .area-bg {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/video/video-area-bg.jpg") no-repeat scroll center top / cover;
}

.video-area .area-bg::after {
    background: rgba(0, 0, 0, 0) linear-gradient(120deg, transparent 50%, <?php echo $THEMECOLORCODE;?> 50%) repeat scroll 0 0;
    opacity: 0.9;
}

.video-play-button {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 50px;
    padding-left: 60px;
    position: relative;
}

.video-area-popup {
    background: transparent none repeat scroll 0 0;
    border: 1px solid;
    border-radius: 50%;
    color: #fff;
    font-size: 30px;
    height: 50px;
    left: 0;
    line-height: 1;
    position: absolute;
    text-align: center;
    top: 0;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 50px;
}

.video-area-popup:hover {
    background: #fff none repeat scroll 0 0;
    border-color: #fff;
    color: <?php echo $THEMECOLORCODE;?>;
}

.video-area-popup-new {
    background: transparent none repeat scroll 0 0;
    border: 1px solid;
    border-radius: 50%;
    color: #fff;
    font-size: 24px;
    height: 50px;
    left: 0;
    line-height: 1;
    text-align: center;
    top: 0;
    /*-webkit-transition: all 0.3s ease 0s;*/
    /*transition: all 0.3s ease 0s;*/
    width: 50px;
    position: absolute;
    left: 120px;
    top: 40px;
}

.video-area-popup-new:hover {
    background: #fff none repeat scroll 0 0;
    border-color: #fff;
    color: <?php echo $THEMECOLORCODE;?>;
}

.video-play-button h3 {
    border-bottom: 1px solid;
    /* font-family: "Open Sans", sans-serif; */
    margin-bottom: 0;
    text-transform: uppercase;
}

/*--------------------------------
    7. WORK AREA
---------------------------------*/

.line-border {
    border-bottom: 1px solid <?php echo $THEMECOLORCODE;?>;
    border-left: 1px solid <?php echo $THEMECOLORCODE;?>;
    border-right: 1px solid <?php echo $THEMECOLORCODE;?>;
    height: 50px;
    left: 50%;
    position: absolute;
    top: 100%;
    width: 100%;
    z-index: 1;
}

.line-border::before {
    border-right: 1px solid <?php echo $THEMECOLORCODE;?>;
    border-top: 1px solid <?php echo $THEMECOLORCODE;?>;
    content: "";
    height: 10px;
    left: -9px;
    position: absolute;
    top: 3px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    -webkit-transform-origin: center top 0;
    transform-origin: center top 0;
    width: 10px;
}

.line-border::after {
    -webkit-animation: 1s ease 0s normal none infinite running dot_animation;
    animation: 1s ease 0s normal none infinite running dot_animation;
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-radius: 50%;
    content: "";
    height: 25px;
    position: absolute;
    right: -13px;
    top: -15px;
    width: 25px;
}

.left .line-border {
    left: auto;
    right: 50%;
}

.left .line-border::before {
    left: auto;
    right: -2px;
}

.left .line-border::after {
    left: -13px;
    right: auto;
}

@-webkit-keyframes dot_animation {
    0% {
        -webkit-box-shadow: 0 0 0 0px rgba(17, 147, 212, 1);
        box-shadow: 0 0 0 0px rgba(17, 147, 212, 1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(17, 147, 212, 0);
        box-shadow: 0 0 0 10px rgba(17, 147, 212, 0);
    }
}



@keyframes dot_animation {
    0% {
        -webkit-box-shadow: 0 0 0 0px rgba(17, 147, 212, 1);
        box-shadow: 0 0 0 0px rgba(17, 147, 212, 1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(17, 147, 212, 0);
        box-shadow: 0 0 0 10px rgba(17, 147, 212, 0);
    }
}

/*--------------------------------
    8. SCREENSHOT AREA
---------------------------------*/

/*.screenshot-slider-mockup {
    left: calc(50% - 2px);
    position: absolute;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    z-index: 9;
}

.screenshot-slider-mockup img {
    display: block;
    margin: 0 auto;
    width: 71%;
}*/

.screenshot-slider {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/screenshot/screenshot-mobile-mockup.png") no-repeat scroll center center / auto 100%;
}

.screenshot-slider-2 {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/screenshot/screenshot-mobile-mockup.png") no-repeat scroll right center / auto 100%;
}

/* .screenshot-area .single-screenshot {
    margin: 70px 0 80px;
    border: 1px solid #ccc;
} */

.screenshot-area .screenshot-slider-2 .single-screenshot {
    margin: 40px 16px 50px 0;
}

.screenshot-area .owl-carousel .owl-item img {
    margin: 0 auto;
    max-width: 100%;
    width: auto;
}

/*--------------------------------
    9. DOWNLOAD AREA
---------------------------------*/

.download-area .area-bg::after {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/mockups/hand-mockup.png") no-repeat scroll center 106% / auto 80%;
}

.download-area.section-padding {
    padding: 200px 0;
}

.download-button {
    border: 1px solid;
    border-radius: 5px;
    display: inline-block;
    font-size: 12px;
    letter-spacing: 1px;
    margin-top: 20px;
    padding: 0 0 10px 30px;
    position: relative;
    text-align: center;
    text-transform: capitalize;
    width: 210px;
}

.download-button i {
    font-size: 30px;
    left: 14px;
    position: absolute;
    top: 16px;
    width: 0;
}

.download-button span {
    display: block;
    font-size: 26px;
    line-height: 1;
}


.download-button:hover {
    background: #fff none repeat scroll 0 0;
    border-color: #fff;
    color: <?php echo $THEMECOLORCODE;?>;
}

/*-------------------------------
    10. TEAM AREA
--------------------------------*/

.member-thumb img {
    display: block;
    margin: 0 auto;
    width: 80%;
}

.member-name-and-designation h3 {
    font-size: 30px;
    padding-bottom: 10px;
    position: relative;
    text-transform: uppercase;
}

.member-name-and-designation h3::after {
    border-bottom: 4px double <?php echo $THEMECOLORCODE;?>;
    bottom: 0;
    content: "";
    height: 4px;
    left: 0;
    position: absolute;
    width: 150px;
}

.member-name-and-designation h3 span {
    display: block;
    font-size: 15px;
}

.member-details-content .social-bookmark li a {
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 2px <?php echo $THEMECOLORCODE;?> inset;
    box-shadow: 0 0 0 2px <?php echo $THEMECOLORCODE;?> inset;
    color: #1a264a;
    font-size: 22px;
    height: 50px;
    margin: 0 5px;
    padding-top: 13px;
    text-align: center;
    width: 50px;
}

.member-details-content .social-bookmark li a:hover {
    -webkit-box-shadow: 0 0 0 30px <?php echo $THEMECOLORCODE;?> inset;
    box-shadow: 0 0 0 30px <?php echo $THEMECOLORCODE;?> inset;
    color: #fff;
}


.team-member-thumb-menu ul {
    text-align: center;
}

.team-member-thumb-menu ul li {
    display: inline-block;
    margin: 0 7px;
    position: relative;
}

.team-member-thumb-menu ul li::after {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    visibility: hidden;
    width: 100%;
}

.team-member-thumb-menu ul li.active::after {
    opacity: 0.5;
    visibility: visible;
}

/*---------------------------------
    11. INFO AREA
----------------------------------*/

.info-area .read-more {
    margin-top: 30px;
}

.author-designation {
    margin-bottom: 30px;
}

.author-designation h4 {
    margin-bottom: 5px;
}

.testmonial-author-details {
    font-style: italic;
}

/*---------------------------------
    12. TESTMONIAL AREA
----------------------------------*/

.author-image {
    border-radius: 50%;
    height: 120px;
    margin: 0 auto 20px;
    overflow: hidden;
    width: 120px;
}

.testmonial-area .owl-controls {
    height: 20px;
    margin-top: 30px;
    position: relative;
}

.testmonial-area .owl-dots {
    left: 50%;
    position: absolute;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

.testmonial-area .owl-dots > div {
    border: 1px solid #9d9f9f;
    border-radius: 50%;
    display: inline-block;
    height: 15px;
    margin: 0 5px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 15px;
}

.testmonial-area .owl-dots > div.active {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-color: <?php echo $THEMECOLORCODE;?>;
}

/*---------------------------------
    13. PRICE AERA
-----------------------------------*/

.single-price {
    background: #ffffff none repeat scroll 0 0;
    /* -webkit-box-shadow: 0 0 10px #dddfe0; */
    /* box-shadow: 0 0 10px #dddfe0; */
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    border: 1px solid #f7f7f7 !important;
}

.price-hidding {
    padding: 30px 30px 15px;
}

#trial_pack:hover {
    background: <?php echo $THEMECOLORCODE;?>;
    color: white !important;
}

.price-rate {
    background: #f8fafc none repeat scroll 0 0;
    padding: 25px 0;
}

.price-rate h2 {
    color: <?php echo $THEMECOLORCODE;?>;
    /* font-family: open sans; */
    font-size: 70px;
    margin-bottom: 0;
}

.price-rate h2 sup {
    top: -1.85em;
    font-size: 20px;
}

.price-rate h2 sub {
    font-size: 18px;
}

.price-details {
    padding: 30px 0 20px;
}

.price-details li {
    padding: 10px 10px 10px 25px;
}

.buy-now-button {
    padding: 25px 0 50px;
}

.buy-now-button a {
    border-radius: 50px;
    letter-spacing: 2px;
}

.single-price:hover {
    -webkit-box-shadow: 0 0 20px #dddddd;
    box-shadow: 0 0 20px #dddddd;
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px);
}

/*--------------------------------
    14. BLOG AREA
----------------------------------*/

.single-blog {
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    background: #fff;
}

.single-blog:hover {
    -webkit-box-shadow: 0 0 20px #ddd;
    box-shadow: 15px 10px 30px #ddd, -15px 0px 30px #ddd;
}


.blog-details h4 a {
    color: #292929;
    font-size: 14px;    
}

.single-blog a:hover {
    color: <?php echo $THEMECOLORCODE;?>;

}

.blog-details h4 a:hover {
    color: <?php echo $THEMECOLORCODE;?>;
}

.blog-meta {
    margin-bottom: 20px;
}

.blog-meta a {
    color: #6f6f6f;
    margin-right: 15px;
}

.blog-meta i {
    margin-right: 5px;
    position: relative;
    top: 2px;
}

.blog-details a.readmore {
    display: inline-block;
    font-size: 18px;
    letter-spacing: 1px;
    margin-top: 15px;
    color: <?php echo $THEMECOLORCODE;?>
}

.blog-details a.readmore:hover {
    text-decoration: underline;
}

/*---------------------------------
    15. CONTACT AREA
----------------------------------*/

.contact-area .area-bg::before {
    background: #45b9f2 none repeat scroll 0 0;
    width: 50%;
}

.contact-area .area-bg::after {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/mockups/map-mockup.png") no-repeat scroll left 4% center / auto 39%;
}

.contact-area h2 {
    margin-bottom: 30px;
}

.contact-form input,
.contact-form textarea {
    /* border-radius:15px; */
    /* -moz-border-radius:15px; */
    /* -webkit-border-radius:15px; */

    box-shadow: none !important;
    -webkit-box-shadow: none !important;
    margin-bottom: 20px;
    min-height: 50px;
    padding: 10px;
}

.contact-form button {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border: 0 none;
    color: #fff;
    letter-spacing: 1px;
    padding: 15px 20px;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.contact-form button:hover {
    background: #292929 none repeat scroll 0 0;
    color: #ffffff;
}


.subscriber-form {
    background: #fff none repeat scroll 0 0;
    border: 1px solid;
    border-radius: 50px;
    font-size: 18px;
    height: 70px;
    margin-bottom: 50px;
    position: relative;
    text-transform: capitalize;
}

.subscriber-form input {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    border-radius: 50px;
    color: black;
    height: 100%;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 11% 10px 30px;
    position: absolute;
    top: 0;
    width: 80%;
}

.subscriber-form button {
    background: #2abaef none repeat scroll 0 0;
    border: 0 none;
    border-radius: 50px;
    height: 100%;
    position: absolute;
    right: 0;
    text-transform: uppercase;
    top: 0;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 30%;
}

.subscriber-form button:hover {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
}

label.mt10 {
    bottom: -62px;
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
}

label.mt10.valid {
    bottom: 18px;
    color: #2abaef;
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
}

/*---------------------------------
    16. FOOTER AREA
----------------------------------*/

.footer-social-bookmark .social-bookmark {
    margin: 30px 0 -10px 0;
}

.footer-social-bookmark p {
    margin-top: -30px;
}

.footer-social-bookmark  {
    margin: -65px 0 -60px 0;
}


.footer-social-bookmark .social-bookmark li a {
    border-radius: 5px;
    font-size: 20px;
    height: 40px;
    margin: 0 5px;
    padding-top: 8px;
    text-align: center;
    width: 40px;
}

.footer-social-bookmark .social-bookmark li a.facebook {
    background: #677fb5;
}

.footer-social-bookmark .social-bookmark li a.twitter {
    background: #70c2e9;
}

.footer-social-bookmark .social-bookmark li a.instagram {
    background: #895a4d;
}

.footer-social-bookmark .social-bookmark li a.google-plus {
    background: #d34836;
}

.footer-social-bookmark .social-bookmark li a.linkedin {
    background: #007ab9;
}

.footer-social-bookmark .social-bookmark li a.youtube {
    background: #ff0000;
}

.footer-social-bookmark .social-bookmark li a.dribble {
    background: #e299c2;
}

.footer-social-bookmark .social-bookmark li a.flickr {
    background: #ff3ba4;
}

.footer-social-bookmark .social-bookmark li a.pinterest {
    background: #d8545d;
}

.footer-social-bookmark .social-bookmark li a:hover {
    background: #ffffff;
    color: <?php echo $THEMECOLORCODE;?>;
}

.footer-copyright {
    padding: 30px 0 15px;
}

.footer-copyright a:hover {
    color: #f7951f;
    text-decoration: underline;
}

/*---------------------------------
    17. SCROLL TO TOP AREA
----------------------------------*/

.scrolltotop {
    background: #ffffff none repeat scroll 0 0;
    bottom: 20px;
    color: #333;
    display: none;
    font-size: 20px;
    height: 40px;
    padding-top: 8px;
    position: fixed;
    right: 20px;
    text-align: center;
    width: 40px;
    z-index: 9;
}

.scrolltotop:hover {
    background: <?php echo $THEMECOLORCODE;?>;
    color: #ffffff;
}

.home-two .scrolltotop:hover {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    color: #ffffff;
}

.home-three .scrolltotop:hover {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    color: #ffffff;
}

/*---------------------------------
    18. HOME TWO
-----------------------------------*/

/*.home-two .welcome-mockup img {
    display: block;
    margin: 0 auto;
    width: 40%;
}*/

.home-two .is-sticky .mainmenu-area {
    background: #fff none repeat scroll 0 0;
}

.home-three .is-sticky .mainmenu-area {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);

}

/*.home-two .welcome-text {
    font-size: 16px;
}*/

/*.home-two .home-button a,
.home-three .home-button a {
    border: 0 none;
    padding: 0;
}*/

/*.home-two .top-area .area-bg::after,
.home-three .top-area .area-bg::after {
    display: none;
}*/

/*.home-two .top-area .area-bg::before {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/home/red-bg.png") no-repeat scroll center center / cover;
}*/

.home-three .top-area .area-bg::before {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
}

.home-two .features-top-area .area-title h2,
.home-three .features-top-area .area-title h2 {
    margin-bottom: 30px;
    padding: 0;
    text-transform: capitalize;
}

.home-two .area-title h2,
.home-three .area-title h2 {
    margin-bottom: 30px;
    padding: 0;
}

.home-two .area-title h2::after,
.home-three .area-title h2::after {
    display: none;
}

.home-two .icon-and-border,
.home-three .icon-and-border {
    display: none;
}

.intro-area .area-bg::after {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    opacity: 0.9;
}

.home-three .intro-area .area-bg::after {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    opacity: 0.9;
}

.intro-area .area-bg::before {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/intro-bg.png") repeat scroll center center / cover;
}

.home-three .welcome-mockup img {
    width: 75%;
}

/*----------------------------
    18.1 HOME TWO VIDEO PROMO
------------------------------*/

.promo-area-content {
    margin-top: -60px;
}

.video-promo-slider {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/promo/promo-mockup.png") no-repeat scroll center center / auto 80%;
}

.single-video-promo-slide {
    margin: 60px 80px;
}

.promo-area .video-play-button {
    left: 50%;
    opacity: 0;
    position: absolute;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.promo-area .video-promo-slider:hover .video-play-button {
    opacity: 1;
}

.video-promo-slider .owl-item img {
    width: auto;
}

/*----------------------------
    18.2 HOME TWO VIDEO AREA
-----------------------------*/

.promo-area .area-bg {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/video/video-area-bg-2.jpg") no-repeat scroll center center / cover;
}

.promo-area .area-bg::before {
    background: #000000 none repeat scroll 0 0;
    opacity: 0.5;
}

.promo-area .video-promo-slider:hover .video-play-button {
    opacity: 1;
}

.video-promo-slider .owl-item img {
    width: auto;
}

.video-area .video-promo-slider .owl-controls .owl-dots > div {
    display: inline-block;
    height: 50px;
    width: 50px;
}

.video-promo-slider .owl-controls {
    bottom: 0;
    left: 50%;
    position: absolute;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

.video-promo-slider .owl-controls .owl-dots > div {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-radius: 50%;
    bottom: -40px;
    display: inline-block;
    height: 15px;
    margin: 0 5px;
    opacity: 1;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 15px;
}

.video-promo-slider .owl-controls .owl-dots > div.active {
    background: #fff none repeat scroll 0 0;
}

/*------------------------------
    18.3 HOME TWO SUBSCRIBER AREA
-------------------------------*/

.subscriber-area .area-bg::before {
    background: #000000 none repeat scroll 0 0;
    opacity: 0.5;
}

.subscriber-area .area-bg {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/subscriber/subscriber-area-bg.jpg") no-repeat scroll center center / cover;
}

.subscriber-area .subscriber-form {
    background: transparent none repeat scroll 0 0;
    border: 1px solid;
    color: #fff;
}

.subscriber-area .subscriber-form input {
    color: #fff;
}

.subscriber-area .subscriber-form button {
    background: <?php echo $THEMECOLORCODE;?>;
}

.subscriber-area .subscriber-form button:hover {
    background: #fff none repeat scroll 0 0;
    color: <?php echo $THEMECOLORCODE;?>;
}

/*--------------------------------
    HOME TWO VIDEO AREA
---------------------------------*/

.home-two .video-area-content .video-area-popup,
.home-three .video-area-content .video-area-popup {
    -webkit-animation: 1s ease 0s normal none infinite running button_animation;
    animation: 1s ease 0s normal none infinite running button_animation;
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border: 0 none;
    bottom: 0;
    font-size: 40px;
    height: 80px;
    left: 0;
    margin: auto;
    padding-left: 15px;
    right: 0;
    top: 0;
    width: 80px;
}

.home-two .video-area-content .video-area-popup:hover {
    background: #ffffff none repeat scroll 0 0;
    color: <?php echo $THEMECOLORCODE;?>;
}

.home-three .video-area-content .video-area-popup {
    -webkit-animation: button_animation_2 1s infinite;
    animation: button_animation_2 1s infinite;
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
}


.home-three .video-area-content .video-area-popup:hover {
    background: #ffffff none repeat scroll 0 0;
    color: #00e2d9;
}

@-webkit-keyframes button_animation {
    0% {
        -webkit-box-shadow: 0 0 0 0px rgba(239, 73, 77, 1);
        box-shadow: 0 0 0 0px rgba(239, 73, 77, 1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(239, 73, 77, 0);
        box-shadow: 0 0 0 10px rgba(239, 73, 77, 0);
    }
}

@keyframes button_animation {
    0% {
        -webkit-box-shadow: 0 0 0 0px rgba(239, 73, 77, 1);
        box-shadow: 0 0 0 0px rgba(239, 73, 77, 1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(239, 73, 77, 0);
        box-shadow: 0 0 0 10px rgba(239, 73, 77, 0);
    }
}

@-webkit-keyframes button_animation_2 {
    0% {
        -webkit-box-shadow: 0 0 0 0px rgba(0, 226, 217, 1);
        box-shadow: 0 0 0 0px rgba(0, 226, 217, 1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(0, 226, 217, 0);
        box-shadow: 0 0 0 10px rgba(0, 226, 217, 0);
    }
}

@keyframes button_animation_2 {
    0% {
        -webkit-box-shadow: 0 0 0 0px rgba(0, 226, 217, 1);
        box-shadow: 0 0 0 0px rgba(0, 226, 217, 1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(0, 226, 217, 0);
        box-shadow: 0 0 0 10px rgba(0, 226, 217, 0);
    }
}

.video-area.style-three .area-bg {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/video/video-bg-3.jpg") no-repeat scroll center center / cover;
    width: 100%;
    height: 100%;
    position: absolute;
}

.video-area.style-three .area-bg:after,
.faqs-area .area-bg:after {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
}

/*--------------------------------
    18.4 HOME TWO FOOTER AREA
----------------------------------*/

.footer-area .area-bg::before {
    background: <?php echo $THEMECOLORCODE;?>  no-repeat scroll center center / cover;
}

.home-three .footer-area .area-bg::before {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/footer/footer-green-bg.jpg") no-repeat scroll center center / cover;
}

/*---------------------------------
    19. STYLE TWO TEAM AREA
-----------------------------------*/

.style-two .single-team {
    padding: 10px 40px 10px 140px;
    position: relative;
}

.style-two .member-image {
    left: 0;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.style-two .member-image img {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 50%;
    padding: 5px;
    width: 120px;
}

.name-and-designation h4 {
    font-weight: 500;
    margin-bottom: 0;
    text-transform: uppercase;
}

.name-and-designation p {
    font-style: normal;
}

.name-and-designation {
    margin-top: 30px;
}

.team-slider .slick-dots {
    position: absolute;
    right: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.team-slider .slick-dots li {
    background: #292929 none repeat scroll 0 0;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 5px #fff, 0 0 0 7px #292929;
    box-shadow: 0 0 0 5px #fff, 0 0 0 7px #292929;
    height: 10px;
    margin: 20px 0;
    width: 10px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.team-slider .slick-dots li button {
    display: none;
}

.team-slider .slick-dots li.slick-active {
    background: <?php echo $THEMECOLORCODE;?>;
    -webkit-box-shadow: 0 0 0 5px <?php echo $THEMECOLORCODE;?>, 0 0 0 7px <?php echo $THEMECOLORCODE;?>;
    box-shadow: 0 0 0 5px <?php echo $THEMECOLORCODE;?>, 0 0 0 7px <?php echo $THEMECOLORCODE;?>;
}

/*------------------------
    20. TEAM STYLE THREE
--------------------------*/

.team-three .member-thumb {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/team/member-bg.png") no-repeat scroll center center / auto 100%;
    margin-bottom: 30px;
    padding-bottom: 30px;
}

.team-three .social-bookmark li a {
    border: 2px solid;
    border-radius: 50%;
    color: #757575;
    height: 35px;
    margin: 0 3px;
    padding-top: 4px;
    width: 35px;
}

.team-three .social-bookmark li a:hover {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    color: #fff;
    border-color: #00e2d9;
}

/*--------------------------
    21. TESTMONIAL STYLE THREE
----------------------------*/

.testmonial-three .testmonial-details {
    background: #00e2d9 -webkit-gradient(linear, left top, right top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd)) repeat scroll 0 0;
    background: #00e2d9 linear-gradient(to right, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd) repeat scroll 0 0;
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 30px;
    position: relative;
    z-index: 1;
}

.testmonial-three .testmonial-details::before {
    background: #fff none repeat scroll 0 0;
    border-radius: 5px;
    content: "";
    height: calc(100% - 6px);
    left: 3px;
    position: absolute;
    top: 3px;
    width: calc(100% - 6px);
    z-index: -1;
}

.testmonial-three .testmonial-details:after {
    position: absolute;
    left: 20%;
    bottom: 0;
    width: 15px;
    height: 15px;
    content: "";
    background: #00e2d9;
    -webkit-transform: rotate(50deg);
    transform: rotate(50deg);
    -webkit-transform-origin: left top;
    transform-origin: left top;
    z-index: -2;
}

.testmonial-three .author-details-and-designation {
    margin-left: 40px;
    padding-bottom: 8px;
    padding-left: 80px;
    position: relative;
}

.testmonial-three .author-details-and-designation img {
    background: rgba(0, 0, 0, 0) -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd)) repeat scroll 0 0;
    background: rgba(0, 0, 0, 0) linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd) repeat scroll 0 0;
    border-radius: 50%;
    left: 0;
    padding: 2px;
    position: absolute;
    top: 0;
    width: 70px;
}

.testmonial-three .author-details-and-designation h4 {
    margin-bottom: 5px;
}

.home-three .testmonial-area .owl-controls {
    height: auto;
    margin: auto;
}

/*--------------------------------
    HOME FEATURES ICON STYLE
---------------------------------*/

.home-two .qs-box-icon i,
.home-three .qs-box-icon i {
    border: 2px solid <?php echo $THEMECOLORCODE;?>;
    border-radius: 50%;
    padding-top: 12px;
}

.home-three .qs-box-icon i {
    border: 2px solid #00e2d9;
}

.home-two .qs-box:hover .qs-box-icon i {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-color: <?php echo $THEMECOLORCODE;?>;
}

.home-three .qs-box:hover .qs-box-icon i {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    border-color: #00e2d9;
}

.video-button {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-radius: 3px;
    color: #fff;
    font-weight: 600;
    letter-spacing: 2px;
    padding: 15px 20px;
    text-transform: uppercase;
}

.home-three .video-button {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
}

.video-button:hover {
    background: #292929 none repeat scroll 0 0;
    color: #fff;
}

.home-two .blog-details a.readmore {
    color: #292929;
}

.home-two .single-blog a:hover {
    color: <?php echo $THEMECOLORCODE;?>;
}

.home-two .contact-form button {
    background: transparent none repeat scroll 0 0;
    border: 2px solid;
    border-radius: 50px;
    color: <?php echo $THEMECOLORCODE;?>;
}

.home-two .contact-form button:hover {
    background: <?php echo $THEMECOLORCODE;?> none repeat scroll 0 0;
    border-color: <?php echo $THEMECOLORCODE;?>;
    color: #fff;
}

.home-three .contact-form button {
    background: transparent none repeat scroll 0 0;
    border: 2px solid;
    border-radius: 50px;
    color: #00e2d9;

}

.home-three .contact-form button:hover {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    color: #fff;
    border-color: #00e2d9;
}

/* .home-two .footer-copyright,
.home-three .footer-copyright {
    border-top: 1px solid rgba(255, 255, 255, 0.3);
} */

/*---------------------------
    22. FAQS AREA
---------------------------*/

.faqs-content img {
    display: block;
    margin: 0 auto;
    width: 50%;
}

.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    -webkit-box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    margin-bottom: 0;
    padding: 30px;
}

#accordion .panel {
    border: medium none;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin: 0 0 15px 10px;
}

#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}

#accordion .panel-title a {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    border: 1px solid transparent;
    border-radius: 30px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 50px;
    position: relative;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

#accordion .panel-title a.collapsed {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #333;
}

#accordion .panel-title a::after,
#accordion .panel-title a.collapsed::after {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    border: 1px solid transparent;
    border-radius: 50%;
    -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
    color: #fff;
    content: "";
    font-family: fontawesome;
    font-size: 25px;
    height: 55px;
    left: -20px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 55px;
}

#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #333;
    content: "";
}

#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}

#accordion .panel-body p {
    border-left: 1px dashed #dddddd;
    padding-left: 25px;
}

/*-----------------------------
    22. BLOG PAGES
-------------------------------*/

.top-area.single-page {
    height: 400px;
}

.page-barner-area {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-top: 80px;
    text-align: center;
}

.page-barner-area .area-bg {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/blog/blog-page-bg.jpg") no-repeat scroll center center / cover;
}

.single-page .page-barner-area .area-bg::before {
    opacity: 0.8;
}

.page-location li {
    display: inline-block;
    margin: 0 5px;
}

.single-page .single-blog h3 a {
    color: #292929;
}

.single-page .single-blog a:hover {
    color: #00e2d9;
}

.single-page .single-blog:hover {
    -webkit-transform: inherit;
    transform: inherit;
}

.pagination > li > a,
.pagination > li > span {
    color: #00e2d9;
}

.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
    background-color: #00e2d9;
    border-color: #00e2d9;
    color: #fff;
}

/*-----------------------
    SEDEBAR WIDGETS
------------------------*/

.single-widget {
    overflow: hidden;
}

.single-widget h3 {
    font-size: 20px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    position: relative;
}

.single-widget h3::after {
    background: rgba(0, 0, 0, 0) url("assets/site_new/img/widgets-line.png") no-repeat scroll left bottom;
    bottom: 0;
    content: "";
    height: 10px;
    left: 0;
    position: absolute;
    width: 100px;
}

.single-widget a {
    border-color: #ddd;
    color: #676767;
}

.single-widget a:hover {
    border-color: #00e2d9;
    color: #00e2d9;
}

/*-----------------------
    ABOUT WIDGET
------------------------*/

.single-widget.about-widget img {
    border-radius: 9px;
    margin-bottom: 20px;
}

/*-----------------------
    RECENT POST WIDGET
-------------------------*/

.single-widget.post-widget li {
    margin-bottom: 20px;
}

.single-widget.post-widget li:last-child {
    margin-bottom: 0;
}

.single-widget.post-widget li img {
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
}

.post-widget .post-meta a {
    color: #676767;
    margin-right: 10px;
}

.post-widget .post-meta a:hover {
    color: #00e2d9;
}

/*------------------------
    TAG WIDGET
--------------------------*/

.tagcloud a {
    border: 1px solid #ddd;
    color: #676767;
    display: inline-block;
    margin: 5px 3px;
    padding: 10px 20px;
}

.tagcloud a:hover {
    border-color: #00e2d9;
    color: #00e2d9;
}

/*-----------------------
    WIDGET CATEGORIES
------------------------*/

.single-widget.categories li {
    display: block;
    position: relative;
}

.single-widget.categories li::before {
    background: #676767 none repeat scroll 0 0;
    content: "";
    display: inline-block;
    height: 2px;
    left: 0;
    position: relative;
    top: -3px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 10px;
}

.single-widget.categories li a {
    color: #676767;
    display: inline-block;
    padding: 10px;
}

.single-widget.categories li:hover::before {
    background: #00e2d9 none repeat scroll 0 0;
    width: 20px;
}

.single-widget.categories li a:hover {
    color: #00e2d9;
}

/*-----------------------
    TWITTER WIDGET
------------------------*/

.single-widget.twitter-feed li {
    margin-bottom: 20px;
}

.single-widget.twitter-feed li:last-child {
    margin-bottom: 0;
}

/*------------------------
    SUBSCRIBER WIDGET
-------------------------*/

.widget-subscriber-form input,
.widget-subscriber-form button {
    background: #fff none repeat scroll 0 0;
    border: 0 none;
    color: #282828;
    font-size: 16px;
    letter-spacing: 1px;
    margin-bottom: 15px;
    padding: 10px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    width: 100%;
}

.widget-subscriber-form {
    background: #00e2d9;
    background-image: -webkit-gradient(linear, right top, left top, from(#81ee8e), color-stop(#2deab6), color-stop(#00e2d9), color-stop(#00d7f2), to(#00c9fd));
    background-image: linear-gradient(to left, #81ee8e, #2deab6, #00e2d9, #00d7f2, #00c9fd);
    padding: 20px;
}

.widget-subscriber-form button {
    margin-bottom: 0;
}

.widget-subscriber-form button:hover {
    background: #282828;
    color: #fff;
}

/*------------------------
    INSTAFEED WIDGET
--------------------------*/

.single-widget.instafeed li {
    float: left;
    width: 33.33%;
}

.stellarnav.dark li a{color: #000 !important;}
.search-and-signup-button a{color:#000 !important;}
.search-and-signup-button a:hover{color:000 !important;border-color:<?php echo $THEMECOLORCODE; ?> !important;}
</style>