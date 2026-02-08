<style>
   .tab-container ul.tab-list {
        display: flex;
        justify-content: center;
        gap: 5px;
        padding: 0;
        list-style: none;
        margin:auto;
        width:fit-content;
        position: relative;
    }
    .tab-container ul.tab-list li{
        padding: 10px 0px;
    text-align: center;
    background: #ffffff;
    width: 150px;
    position: relative;
    color: #000000;
    border-radius: 20px 20px 0  0;
    border: 1px solid #b8b8b8;
    border-bottom: 0;
    box-shadow: 0 0 5px 1px #9f9f9f4a;
    font-size: 18px;
    font-weight: 600;
}
.tab-container ul.tab-list li:hover{
    background: #266851;
    color: #fff;
}
.tab-container ul.tab-list li:active{
       /* background: red; */
    /* color: #fff; */
    box-shadow: none;
    width: 140px;
}

.tab-container ul.tab-list li.active {
    background: #00291b;
    color: #fff;
} 
.tab-content{
    border-top: 5px solid #00291b;
    border-radius: 20px;
    padding: 50px;
    background: linear-gradient(180deg, #00291b 10%, transparent 50%);
    z-index: 99;
    position: relative;
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
    /* .tab-container ul.tab-list .tab-item.active:before{
        content: '';
    width: 100%;
    height: 10px;
    background: red;
    position: absolute;
    left: 0;
    top:0;
    } */
    .product-container .pro-item .card .overlay{
    background-image:linear-gradient(#efefef00, #0000001f), linear-gradient(#00000000, #00000000);
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

    @media (max-width:576px) {
    
        .tab-container ul.tab-list{
            width: auto;
            gap: 5px;
        }
        .tab-container ul.tab-list li {
            padding: 5px 0px;
    
            width: 90px;
            
            border-radius: 10px 10px 0  0;
            border: 1px solid #b8b8b8;
            border-bottom: 0;
            
            font-size: 14px;
            font-weight: 600;
        }
        .tab-content{
            padding:5px
        }
        .tab-container ul.tab-list li:active{
            width: 80px;
        }
        

    }
</style>
<section class="banner-section">
    <div class="container-fluid product-bnr banner-bg  bnr-height">
            
    </div>
</section>
<section>
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="tab-container">
                <ul class="tab-list">
                    <li class="tab-item active" data-tab="tab1">Garment</li>
                    <li class="tab-item" data-tab="tab2">Bag</li>
                    <li class="tab-item" data-tab="tab3">Belt</li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class=" garment-tab tab-pane active">
                        <div class="container product-container ">
                            <div class="row pro-item">
                                
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-4.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-7.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-8.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-9.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-10.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-11.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-12.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-13.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-14.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-6.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-17.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-15.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-16.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-18.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-19.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-20.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-21.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-1.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-2.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-3.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-model-5.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-j-1.webp" alt="" loading="lazy" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-j-2.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-j-3.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-j-4.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-j-5.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-j-6.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-ssj-1.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-ssj-2.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-g-1.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-lp-1.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-lp-2.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-lp-3.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-s-1.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-s-2.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-s-3.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/garment/garment-s-4.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div> -->
                               
                                
                               
                                
                                
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="bag-tab tab-pane">
                        <div class="container product-container ">
                            <div class="row pro-item">
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag1.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag2.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag3.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag4.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag5.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag6.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag7.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag8.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag9.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag10.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag11.webp" alt="" loading="lazy">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="belt-tab tab-pane ">
                        <div class="container product-container ">
                            <div class="row pro-item" >
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt0.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt1.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt2.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt3.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt4.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt5.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt6.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt7.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt8.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt9.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt10.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt11.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt12.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt13.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt14.webp" alt="" loading="lazy">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/belt/belt15.webp" alt="" loading="lazy">
                                             
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


