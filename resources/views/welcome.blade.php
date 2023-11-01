<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => 'Home'])

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
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To JEE Mastery Hub</h6>
                  <h4><em>Unlocking</em> Success in JEE Exams</h4>
                  <div class="main-button">
                    <a href="browse">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Most Popular</em> Subjects</h4>
                </div>
                <div class="row">
                  @foreach($physicsChapters as $chapter)
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <p class="text-center" style="color: orange;">{{ $chapter->subject }}</p>
                      <img src="https://live.staticflickr.com/8658/16524400322_773dd854a5_b.jpg" alt="">
                      <h4 style="width: 60% !important;">{{ $chapter->chaptername }}<br><span>{{ $chapter->teachername }}</span></h4>
                      <ul>
                        <li>{{ $chapter->price }}</li>
                        <li style="color: #00FF00;">₹{{ $chapter->amount }}</li>
                      </ul>
                    </div>
                  </div>
                  @endforeach


                  @foreach($organicChapters as $chapter)
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <p class="text-center" style="color: orange;">{{ $chapter->subject }}</p>
                      <img src="https://img.freepik.com/premium-vector/3d-vector-molecule-scientific-banner-medicine-biology-chemistry-science-concept_112554-982.jpg" alt="">
                      <h4 style="width: 60% !important;">{{ $chapter->chaptername }}<br><span>{{ $chapter->teachername }}</span></h4>
                      <ul>
                        <li>{{ $chapter->price }}</li>
                        <li style="color: #00FF00;">₹{{ $chapter->amount }}</li>
                      </ul>
                    </div>
                  </div>
                  @endforeach
                  
                  @foreach($InorganicChapters as $chapter)
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <p class="text-center" style="color: orange;">{{ $chapter->subject }}</p>
                      <img src="https://st4.depositphotos.com/36770416/39100/i/450/depositphotos_391007480-stock-photo-titration-technique-laboratory.jpg" alt="">
                      <h4 style="width: 60% !important;">{{ $chapter->chaptername }}<br><span>{{ $chapter->teachername }}</span></h4>
                      <ul>
                        <li>{{ $chapter->price }}</li>
                        <li style="color: #00FF00;">₹{{ $chapter->amount }}</li>
                      </ul>
                    </div>
                  </div>
                  @endforeach
                  
                  @foreach($mathChapters as $chapter) 
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <p class="text-center" style="color: orange;">{{ $chapter->subject }}'s</p>
                      <img src="https://i.materialise.com/blog/wp-content/uploads/2018/05/5428546305_18175d5a46_b.jpg " alt="">
                      <h4 style="width: 60% !important;">{{ $chapter->chaptername }}<br><span>{{ $chapter->teachername }}</span></h4>
                      <ul>
                        <li>{{ $chapter->price }}</li>
                        <li style="color: #00FF00;">₹{{ $chapter->amount }}</li>
                      </ul>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>

            <div class="main-button text-center">
              <a href="browse">View All Subjects</a>
            </div>
          </div>

          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li>
                    <h4>Dota 2</h4><span>Sandbox</span>
                  </li>
                  <li>
                    <h4>Date Added</h4><span>24/08/2036</span>
                  </li>
                  <li>
                    <h4>Hours Played</h4><span>634 H 22 Mins</span>
                  </li>
                  <li>
                    <h4>Currently</h4><span>Downloaded</span>
                  </li>
                  <li>
                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                  </li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li>
                    <h4>Fortnite</h4><span>Sandbox</span>
                  </li>
                  <li>
                    <h4>Date Added</h4><span>22/06/2036</span>
                  </li>
                  <li>
                    <h4>Hours Played</h4><span>740 H 52 Mins</span>
                  </li>
                  <li>
                    <h4>Currently</h4><span>Downloaded</span>
                  </li>
                  <li>
                    <div class="main-border-button"><a href="#">Donwload</a></div>
                  </li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li>
                    <h4>CS-GO</h4><span>Sandbox</span>
                  </li>
                  <li>
                    <h4>Date Added</h4><span>21/04/2036</span>
                  </li>
                  <li>
                    <h4>Hours Played</h4><span>892 H 14 Mins</span>
                  </li>
                  <li>
                    <h4>Currently</h4><span>Downloaded</span>
                  </li>
                  <li>
                    <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>


  @include('components.footer')

</body>

</html>