<?php $this->view('template2/includes/header'); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= imagePath('assets/template2/images/background/4.jpg','',1000,0); ?>); background-position: 0 79px;">
        <div class="auto-container">
            <h1>Services</h1>
        </div>
    </section>
    <!--End Page Title-->
    <style>
    .content
    {
        height:317px;
    }
    </style>
    <!--Services Section-->
    <section class="services-section style-two">
        <div class="auto-container">
            <div class="sec-title">
                <h4>We focus on helping PEOPLE analyze data in a wiser way and make smarter decisions. Our financial analytical services provide information regarding the profitability, efficiency, liquidity and stability of the company.</h4>
            </div>
            <div class="row clearfix">
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-transport"></span>
                            <h3><a>Investment Planning</a></h3>
                            <div class="text">Typically, these goals could include buying a house, a car, child's education, marriage, building an emergency fund, retirement planning and so on. Making smarter investment plans helps achieve the above listed goals more effectively and timely. </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-money-3"></span>
                            <h3><a href="news-detail.html">Retirement Planning</a></h3>
                            <div class="text">Retirement planning, in a financial context, refers to the allocation of savings or revenue for retirement. The goal of retirement planning is to achieve financial independence. </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block Two-->
                <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <span class="icon flaticon-monitor"></span>
                            <h3><a href="news-detail.html">Risk management</a></h3>
                            <div class="text">Risk management is the identification, assessment, and prioritization of risks followed by coordinated and economical application of resources to minimize, monitor, and control the probability and/or impact of unfortunate events[1] or to maximize the realization of opportunities. Risk management’s objective is to assure uncertainty does not deflect the endeavor from the business goals. </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>
    <!--End Services Section-->
<?php $this->view('template2/includes/footer'); ?>