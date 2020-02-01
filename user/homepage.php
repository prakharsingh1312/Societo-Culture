<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('assets/img/bg10.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">A Place to Share and Discover New Stories</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section" style="padding:10px 0;">
        <h3 class="title text-center">Upcoming Events</h3>

        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center" style="flex:1 ; max-width:100%;">
            <ul class="nav nav-pills nav-pills-rose">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="1" data-toggle="tab">Art</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="2" data-toggle="tab">Business</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="3" data-toggle="tab">Cultural</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="4" data-toggle="tab">Educational</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="5" data-toggle="tab">MUN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="6" data-toggle="tab">Photography</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="7" data-toggle="tab">Seminars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="8" data-toggle="tab">Technical</a>
              </li>

            </ul>
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="pill1"></div>
              <div class="tab-pane" id="pill2"></div>
              <div class="tab-pane" id="pill3"></div>
              <div class="tab-pane" id="pill4"></div>
              <div class="tab-pane" id="pill5"></div>
              <div class="tab-pane" id="pill6"></div>
              <div class="tab-pane" id="pill7"></div>
              <div class="tab-pane" id="pill8"></div>
              <div class="tab-pane" id="pill9"></div>
            </div>
          </div>
        </div>


        <div class="row">


          <?php echo upcoming_events(); ?>



        </div>
      </div>
    </div>



    <div id="comments">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="media-area">
                    <h3 class="title text-center">Announcements</h3>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                         <?php echo show_announcements(); ?>

                            <div class="carousel-item active">
                                <div class="media" style="padding:0% 10% 0% 10%;">
                                    <a class="float-left" href="#pablo">
                                        <div class="avatar">
                                            <img class="media-object" src="./assets/img/faces/avatar.jpg" alt="...">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Raghav <small>&#xB7; 1 hour ago</small></h4>
                                        <p>Chance too good. God level bars. I&apos;m so proud of @LifeOfDesiigner #1 song in the country. Panda! Don&apos;t be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                                        <p>All praises and blessings to the families of people who never gave up on dreams. Don&apos;t forget, You&apos;re Awesome!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="media" style="padding:0% 10% 0% 10%;">
                                    <a class="float-left" href="#pablo">
                                        <div class="avatar">
                                            <img class="media-object" src="./assets/img/faces/avatar.jpg" alt="...">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Tina Andrew <small>&#xB7; 2 hours ago</small></h4>
                                        <p>Chance too good. God level bars. I&apos;m so proud of @LifeOfDesiigner #1 song in the country. Panda! Don&apos;t be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                                        <p>All praises and blessings to the families of people who never gave up on dreams. Don&apos;t forget, You&apos;re Awesome!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev"  href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"  style="color:#e91d63" aria-hidden="true"><i class="material-icons">arrow_back_ios</i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" style="color:#e91d63" aria-hidden="true"><i class="material-icons">arrow_forward_ios</i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="title text-center">Past Events</h3>
    <div class="row" style="padding:10px 0;">

      <?php echo past_events(); ?>

<!--     <div class="col-md-6 ml-auto mr-auto">
      <div class="card card-background" style="background-image: url('./assets/img/examples/card-blog3.jpg')">
        <div class="card-body">
                <h6 class="card-category text-info">Materials</h6>
                <h3 class="card-title">The Sculpture Where Details Matter</h3>
                <p class="card-description">
                      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="#pablo" class="btn btn-danger btn-round">
                  <i class="material-icons">subject</i> Read Article
                </a>
              </div>
            </div>
    </div> -->

</div>
</div>