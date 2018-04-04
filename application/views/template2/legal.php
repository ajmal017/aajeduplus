<?php $this->view('template2/includes/header'); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= imagePath('assets/template2/images/background/4.jpg','',1200,0); ?>);">
        <div class="auto-container">
            <h1>Legal</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section-->
    <section class="projects">
        <div class="auto-container">
            <div class="row">
                <center>
                    <iframe src="<?php echo base_url(); ?>aajfxcoin/assets/template2/aajfxcoin/CERTIFICATE_OF_INCORPORATION.PDF#toolbar=0&navpanes=0&statusbar=0&view=Fit;readonly=true; disableprint=true;" style="width:800px;height:1020px;border: none;align:center;" ></iframe>                    
                </center>
            </div>
        </div>
    </section>
    <!--End Projects Section-->
<?php $this->view('template2/includes/footer'); ?>