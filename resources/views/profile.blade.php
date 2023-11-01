<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => $userData->name ?: 'Profile'])

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

                    <!-- ***** Banner Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile ">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="https://cdn.dribbble.com/users/3290721/screenshots/17511461/media/486c5a6365c5f6283d9511b02241792a.png" alt="" style="border-radius: 23px;">
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <div class="main-info header-text">
                                            
                                            <span> {{ $userData->isPremium ? 'Premium' : 'Freemium' }}  </span>
                                            <h4>{{ $userData->name }}</h4>
                                            <p>{{ $userData->email }}</p>
                                            <p>Joined On {{ $userData->created_at->format('j F Y') }}</p>
                                            <div class="main-border-button">
                                                <a href="#">Watch Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <ul>
                                            <li>Total Available Chapters <span>3</span></li>
                                            <li>Total Purchases <span>{{ $userData->totalPurchases }}  </span></li>
                                            <li>Total Likes <span>0</span></li>
                                            <li>DPP <span>9</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="clips">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="heading-section">
                                                        <h4>Your Purchases</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="images/clip-01.jpg" alt="" style="border-radius: 23px;">
                                                            <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>First Clip</h4>
                                                            <span><i class="fa fa-eye"></i> 250</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="images/clip-02.jpg" alt="" style="border-radius: 23px;">
                                                            <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Second Clip</h4>
                                                            <span><i class="fa fa-eye"></i> 183</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="images/clip-03.jpg" alt="" style="border-radius: 23px;">
                                                            <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Third Clip</h4>
                                                            <span><i class="fa fa-eye"></i> 141</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="images/clip-04.jpg" alt="" style="border-radius: 23px;">
                                                            <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Fourth Clip</h4>
                                                            <span><i class="fa fa-eye"></i> 91</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="main-button">
                                                        <a href="#">Load More Clips</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                  
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</body>

</html>