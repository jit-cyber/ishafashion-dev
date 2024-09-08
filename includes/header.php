<style>
    .show-m-menu{
    display: none;
}
.isha-web-mobile-logo{
    display: none;
}

    @media  ( max-width:440px){
        .isha-web-fixed-header-container{
        position: relative;
        display:flex;
        }
        .isha-web-standard-logo{
            display: none;
        }
        
        .isha-web-mobile-logo{
            display: block;
            width: 50%  !important;
            margin:auto;
        }
            
        .show-m-menu{
            /* position: fixed; */
            padding: 20px;
            display: block;
        }

        
        .isha-web-main-menu {
            display: none;
        }
        .isha-web-desk-menu ul.isha-web-menu {
            display: block;
        }
        .menu-visible{
            display:block
        }
        header ul.isha-web-menu li.menu-item a {
                text-decoration: none;
                color: #000;
            }
    
}


</style>

<header id="main-header" class="container-fluid isha-web-fixed-header-container">
<a href="" class="show-m-menu"><i class=" fa fa-bars"></i></a>
    <div class="isha-web-fixed-header-wrapper">
        <!-- start isha-web sticky header wrapper -->
        <div class="isha-web-header">
            <div class="isha-web-row">
                <div class="isha-web-logo" >
                    <a class="isha-web-logo-link" href="https://isha-web.com/">

                        <!-- standard logo -->
                        <img src="image/logo-white.png" alt="isha-web Logo"
                        class="isha-web-standard-logo">

                        <!-- mobile logo -->
                        <img src="image/logo.png"  alt="isha-web Logo" class="isha-web-mobile-logo">

                    </a>
                </div>
                <!-- <div class="isha-web-mobile-menu-icons">
                    <a href="#" class="isha-web-icon awb-icon-bars" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu-bc2-0"></a>
                </div> -->

            </div>
        </div>
        <div id="main-menu" class="isha-web-main-menu">
            <div class="isha-web-row">
                <nav class="isha-web-desk-menu" aria-label="Main Menu">
                    <ul id="menu" class="isha-web-menu">
                        <li id="m-item0"  class="menu-item  menu-item-home " >
                            <a href="/home" class="isha-web-background-highlight">
                                <span class="menu-text">Home

                                </span>
                            </a>
                        </li>
                        <li id="m-item1" class="menu-item  menu-item-about " >
                            <a href="/about" class="isha-web-background-highlight">
                                <span class="menu-text">About us

                                </span>
                            </a>
                        </li>
                        <li id="m-item2"  class="menu-item  menu-item-product " >
                            <a href="/product" class="isha-web-background-highlight">
                                <span class="menu-text">Product

                                </span>
                            </a>
                        </li>
                        <li id="m-item3" class="menu-item  menu-item-feature " >
                            <a href="/feature" class="isha-web-background-highlight">
                                <span class="menu-text">Features

                                </span>
                            </a>
                        </li>
                        <li  id="m-item4" class="menu-item  menu-item-contact " >
                            <a href="/contact" class="isha-web-background-highlight">
                                <span class="menu-text">Contact us

                                </span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </nav>
                <!-- <nav class="isha-web-mobile-nav-holder isha-web-mobile-menu-text-align-left" aria-label="Main Menu Mobile">
                    <ul id="mobile-menu-bc2-0" class="isha-web-menu">
                        <li id="mobile-menu-item-5116" class="isha-web-mobile-nav-item isha-web-mobile-current-nav-item" data-item-id="5116" style=""><a href="https://isha-web.com/" class="isha-web-background-highlight"><span class="menu-text">Home</span></a></li>
                        <li id="mobile-menu-item-5185" class="isha-web-mobile-nav-item" data-item-id="5185" style=""><a href="https://isha-web.com/about-us/" class="isha-web-background-highlight"><span class="menu-text">About Us</span></a></li>
                        
                    </ul>
                </nav> -->

            </div>
        </div>
    </div>
    <!-- end isha-web sticky header wrapper -->
    <div class="isha-web-clearfix"></div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Select the toggle button and the header
    const toggleButton = document.querySelector('.show-m-menu');
    const menu = document.querySelector('#main-menu');
    
    // Add click event listener to the toggle button
    toggleButton.addEventListener('click', function (event) {
        event.preventDefault();  // Prevent the default anchor click behavior
        menu.classList.toggle('menu-visible');  // Toggle a class on the header
    });
});
</script>