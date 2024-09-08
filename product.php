<style>
   .tab-container ul.tab-list {
        display: flex;
        justify-content: center;
        gap: 50px;
        padding: 0;
        list-style: none;
        margin:auto;
        width:fit-content;
        position: relative;
    }
    .tab-container ul.tab-list li{
        padding: 10px 0px;
    text-align: center;
    background: grey;
    width: 100px;
}

    .tab-container .tab-content .product-container .pro-item img{
        width:100%;
    }
    .tab-container .tab-content .product-container .pro-item .card{
        overflow:hidden;
        border-radius:10px;
    }
    .item-detail-wrap{
        position: absolute;
        top: 100%;
        right: 0;
        padding: 5px 20px;
        background: #fff;
        left: 0;
        /* display: flex; */
        transition: all 1s ease-in-out;
        color: #000;
        opacity:0;
        /* z-index: 999999999999999999; */
    }
    .item-detail-wrap p{
        margin:0;
    }
    .tab-container .tab-content .product-container .pro-item .card:hover .item-detail-wrap{
        /* position: relative;
         */
         /* bottom:0; */
         top:0%;
         opacity: 1;
         box-shadow: 0px 5px 10px 2px grey;
         /* transform:translateY(-100%) */
    }
    .tab-container .tab-content .product-container .pro-item .m-block-gap{
        margin-block: calc(var(--bs-gutter-x)* .5);
   
    }
    .tab-container ul.tab-list:before{
        content: '';
    width: 100px;
    height: 10px;
    background: red;
    position: absolute;
    left: 0;
    }
    .product-container .pro-item .card .overlay{
    background-image: linear-gradient(#efefef00, #000000a6), linear-gradient(#00000000, #00000000);
    background-size: 100% 100%, 100% 0%;
    background-repeat: no-repeat;
    background-position: left top, right bottom;
    background-color: transparent;
    transition: all 1s ease-in-out;
    height: 100%;
    }
    .product-container .pro-item .card:hover .overlay{
        
        background-size: 100% 0%, 100% 100%;
    }
</style>
<section class="banner-section">
    <div class="container-fluid product-bnr banner-bg  bnr-height">
            
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="container">
            <div class="tab-container">
                <ul class="tab-list">
                    <li class="tab-item active" data-tab="tab1">Belt</li>
                    <li class="tab-item" data-tab="tab2">Bag</li>
                    <li class="tab-item" data-tab="tab3">Garment</li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="belt-tab tab-pane active">
                        <div class="container product-container ">
                            <div class="row pro-item" >
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt0.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt1.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt2.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt3.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt4.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt5.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt6.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt7.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt8.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt9.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt10.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt11.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt12.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt13.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt14.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt15.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt16.webp" alt="">
                                            <div class="item-detail-wrap">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt17.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt18.webp" alt="">
                                            <div class="item-detail-wrap">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="bag-tab tab-pane">
                        <div class="container product-container ">
                            <div class="row pro-item">
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag1.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag2.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag3.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag4.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag5.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag6.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag7.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag8.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag9.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag10.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag11.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag4.webp" alt="">
                                            <div class="item-detail-wrap">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class=" garment-tab tab-pane">
                        <div class="container product-container ">
                            <div class="row pro-item">
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment0.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment1.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment2.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment3.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment4.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment5.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment6.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment7.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment8.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment9.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment10.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment11.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment12.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment13.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment14.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment15.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment16.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment17.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment18.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment19.webp" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<SCript>
    document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll('.tab-item');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs and panes
            tabs.forEach(item => item.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));

            // Add active class to clicked tab and corresponding pane
            tab.classList.add('active');
            document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
        });
    });
});
</SCript>


