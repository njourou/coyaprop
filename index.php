<?php
include "./init/includes/header.php";
?>

<div class="header-carousel offset-bottom">
            <div class="swiper-container h-100">
                <div class="swiper-wrapper h-100">  
                    <div class="swiper-slide">
                        <div class="slide-item swiper-lazy" data-background="assets/images/props/flat-1/1-big.jpg">
                            <div class="swiper-lazy-preloader"></div> 
                            <span class="d-none" data-slide-title="Modern and quirky flat"></span>
                            <span class="d-none" data-slide-location="611 W 180th St, New York, NY 10033, USA"></span>
                            <span class="d-none" data-slide-price="$ 1,300,000"></span> 
                        </div> 
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-item swiper-lazy" data-background="assets/images/props/house-1/5-big.jpg">
                            <div class="swiper-lazy-preloader"></div> 
                            <span class="d-none" data-slide-title="Comfortable family house"></span>
                            <span class="d-none" data-slide-location="3rd Ave & James St, Seattle, WA 98104, USA"></span>
                            <span class="d-none" data-slide-price="$ 2,550,000"></span> 
                        </div> 
                    </div> 
                    <div class="swiper-slide">
                        <div class="slide-item swiper-lazy" data-background="assets/images/props/office-2/6-big.jpg">
                            <div class="swiper-lazy-preloader"></div> 
                            <span class="d-none" data-slide-title="Luxury office space"></span>
                            <span class="d-none" data-slide-location="230 W 55th St, New York, NY 10019, USA"></span>
                            <span class="d-none" data-slide-price="$ 2,500,000"></span> 
                        </div> 
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-item swiper-lazy" data-background="assets/images/props/apartment/1-big.jpg">
                            <div class="swiper-lazy-preloader"></div> 
                            <span class="d-none" data-slide-title="Centrally located apartment"></span>
                            <span class="d-none" data-slide-location="1627 Vine St, Los Angeles, CA 90028, USA"></span>
                            <span class="d-none" data-slide-price="$ 5,600 /month"></span> 
                        </div> 
                    </div>
                </div>     
                <button class="swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                    <span class="mdc-fab__ripple"></span>
                    <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                </button>
                <button class="swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                    <span class="mdc-fab__ripple"></span>
                    <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                </button>  
                <div class="slide-info column center-xs middle-xs">
                    <div id="active-slide-info" class="mdc-card p-4 column center-xs middle-xs">
                        <h1 class="slide-title">Title</h1>
                        <p class="location row center-xs middle-xs"> 
                            <i class="material-icons mat-icon-lg primary-color">location_on</i>
                            <span class="px-1">Location</span>
                        </p> 
                        <a href="#" class="mdc-button mdc-button--raised price"> 
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">price</span>    
                        </a>                  
                    </div>  
                </div>  
            </div>
        </div>
    <!-- End Hero -->

    <main id="main">



    </main>
    <?php
    include "./init/includes/footer.php";
    ?>