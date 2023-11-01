<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => 'Browse'])

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

                    <!-- ***** Start Stream Start ***** -->
                    <div class="start-stream">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>JEE</em> Mastery Subject's</h4>
                            </div>
                            <div class="row subject-names text-center">
                                <div class="col-lg-4 subject-name">
                                    <div class="item">
                                        <div class="icon text-center">
                                            <img src="images/physics.png" alt="" style="max-width: 30%; object-fit: cover;">
                                        </div>
                                        <h4>Physics</h4>
                                        <div class="main-button">
                                            <a href="streams/physics">Browse Now</a>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 subject-name">
                                    <div class="item">
                                        <div class="icon text-center">
                                            <img src="images/organic.png" alt="" style="max-width: 30%; object-fit: cover;">
                                        </div>
                                        <h4>Organic Chemistry</h4>
                                        <div class="main-button">
                                            <a href="streams/Organic Chemistry">Browse Now</a>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 subject-name">
                                    <div class="item">
                                        <div class="icon text-center">
                                            <img src="images/inorganic.png" alt="" style="max-width: 30%; object-fit: cover;">
                                        </div>
                                        <h4>Inorganic Chemistry</h4>
                                        <div class="main-button">
                                            <a href="streams/InOrganic Chemistry">Browse Now</a>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 subject-name">
                                    <div class="item">
                                        <div class="icon text-center">
                                            <img src="images/physical.png" alt="" style="max-width: 30%; object-fit: cover;">
                                        </div>
                                        <h4>Physical Chemistry</h4>
                                        <div class="main-button">
                                            <a href="streams/Physical Chemistry">Browse Now</a>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 subject-name">
                                    <div class="item">
                                        <div class="icon text-center">
                                            <img src="images/maths.png" alt="" style="max-width: 30%; object-fit: cover;">
                                        </div>
                                        <h4>Mathematics</h4>
                                        <div class="main-button">
                                            <a href="streams/math">Browse Now</a>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="margin: 1.5%;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Start Stream End ***** -->

                    <!-- ***** Featured Games Start ***** -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="featured-games header-text" style="border-radius: 22px; background: linear-gradient(145deg, #0e0e0e, #101010); box-shadow:  6px 6px 8px #0a0a0a, -6px -6px 8px #141414;">
                                <div class="heading-section">
                                    <h4><em>Recommended</em> Books</h4>
                                </div>
                                <div class="owl-features owl-carousel">
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="https://ramabookdepot.com/wp-content/uploads/2021/06/81NyT6pR3iL.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Mechanics 1</h6>
                                            </div>
                                        </div>
                                        <h4>DC Pandey<br><span>Physics</span></h4>
                                        <ul>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="https://5.imimg.com/data5/PN/GV/MY-25525853/essential-organic-chemistry-for-jee-main-and-advanced-text-book.png" alt="">
                                            <div class="hover-effect">
                                                <h6>Organic Chemistry</h6>
                                            </div>
                                        </div>
                                        <h4>Ranjeet Sahi<br><span>Chemistry</span></h4>
                                        <ul>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="https://rukminim1.flixcart.com/image/850/1000/kiqbma80-0/book/b/e/e/a-textbook-of-physical-chemistry-for-jee-main-and-advanced-2020-original-imafygytyycupzcb.jpeg" alt="">
                                            <div class="hover-effect">
                                                <h6>Physical Chemistry</h6>
                                            </div>
                                        </div>
                                        <h4>DR. RK Gupta<br><span>Chemistry</span></h4>
                                        <ul>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="https://m.media-amazon.com/images/I/61e5cjTnwML._AC_UF1000,1000_QL80_.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>InOrganic Chemistry</h6>
                                            </div>
                                        </div>
                                        <h4>MC Graw Hill<br><span>Chemistry</span></h4>
                                        <ul>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="https://images.meesho.com/images/products/223757410/vvsh5_512.webp" alt="">
                                            <div class="hover-effect">
                                                <h6>Maths Test Paper</h6>
                                            </div>
                                        </div>
                                        <h4>Rizwan<br><span>Maths</span></h4>
                                        <ul>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ***** Featured Games End ***** -->


                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</body>

</html>