<?php $this->view('template2/includes/header'); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= imagePath('assets/template2/images/background/4.jpg','',1200,0); ?>);">
        <div class="auto-container">
            <h1>Services</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section-->
    <section class="projects">
        <div class="auto-container">
            <div class="sec-title">
                <h2><span class="theme_color">Trader</span></h2>
            </div>
            <div class="row">
                <center>
                    <img src="<?= imagePath('assets/template2/aajfxcoin/trader_link.jpg','',1000,0); ?>" alt="image" style="width:600px;height:600px;">
                </center>
            </div>
        </div>
    </section>
    <!--End Projects Section-->
<?php $this->view('template2/includes/footer'); ?>