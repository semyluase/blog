<?php include('inc/header.php')?>
    
    
    <div class="wrapper">
        <div id="carousel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo base_url();?>assets/img/image1.jpeg" alt="Awesome Image">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url();?>assets/img/image2.jpeg" alt="Awesome Image">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url();?>assets/img/image3.jpeg" alt="Awesome Image">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32658820.982468687!2d99.42153869186359!3d-2.2753998596693403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1600439427456!5m2!1sen!2sid" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <br>
                            <h5>Peta Indonesia</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
<?php include('inc/footer.php');?>