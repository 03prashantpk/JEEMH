<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => 'Details'])

<body>

    <!-- ***** Preloader Start ***** -->
    @include('components.preloader')
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('components.header')
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Featured Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-banner header-text">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="images/syllabus.png" alt="" style="border-radius: 23px; width: 350px;">
                                    </div>
                                    <div class="col-lg-8">
                                        <iframe style="width: 100%; height: 350px !important; border-radius: 23px; box-shadow:  11px 11px 4px #222222,
                                            -11px -11px 4px #262626;" src="https://www.youtube.com/embed/1-xdlbziBTU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Featured End ***** -->

                    <!-- ***** Details Start ***** -->
                    <div class="game-details">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Syllabus</h2>
                            </div>
                            <div class="col-lg-12">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="left-info">
                                                <div class="left">
                                                    <h4>Fortnite</h4>
                                                    <span>Sandbox</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa fa-star"></i> 4.8</li>
                                                    <li><i class="fa fa-download"></i> 2.3M</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-info">
                                                <ul>
                                                    <li><i class="fa fa-star"></i> 4.8</li>
                                                    <li><i class="fa fa-download"></i> 2.3M</li>
                                                    <li><i class="fa fa-server"></i> 36GB</li>
                                                    <li><i class="fa fa-gamepad"></i> Action</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="images/details-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="images/details-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="images/details-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                                        </div>
                                        <div class="col-lg-12">
                                            <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="main-border-button">
                                                <a href="#">Download Fortnite Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Details End ***** -->



                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</body>

</html>