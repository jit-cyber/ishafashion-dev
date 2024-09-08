<style>
    footer{
        background:#011015;
        /* background: rgb(0 11 21); */
    }
    footer .footer-wrapper{
        padding-block:50px;
    }
    
    footer .footer-wrapper ul {
        list-style: none;
        column-count:2;
    }
    footer .footer-wrapper .footer-logo{
        width: 100%;
    }
    footer .footer-wrapper .social-media-container{
        margin-top: 10px;
        border-top: 5px solid #fff;
        padding-top: 10px;
    }
    footer .footer-wrapper .social-media-container i{
        color:#fff;
        font-size:1.5em;
        margin-right:5px;
    }
    @media  ( max-width:440px){
        footer .footer-wrapper ul{
            column-count:1;
        }
        .footer-left{
            order:3;
            .footer-logo{
                width: 80%;
                margin: auto;
            }
        }

        
    }

</style>
<footer class="container-fluid ">
<div class="footer">
  <div class="container">
    <div class="footer-wrapper">
      <div class="container">
          <div class="row">
              <div class="footer-left col-md-3">
                <img src="image/logo-white.png" loading="lazy" alt="" class="footer-logo">
                <div class="social-media-container">
                    <a href=""><i class="fa-brands fa-2x fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-2x fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-2x fa-facebook"></i></a>
                        
                </div>
              </div>
              <div  class="footer-center col-md-6">
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
              
              </div>
              <div class="footer-right col-md-3">
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
</footer>