    <!--========== SWIPER SLIDER ==========-->
@extends('layouts.frontend_layout.app')

@section('content')  
<style>
    @-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1.5, 1.5);
  }
  to {
    -webkit-transform: scale(1, 1);
  }
}

@keyframes zoom {
  from {
    transform: scale(1.5, 1.5);
  }
  to {
    transform: scale(1, 1);
  }
}

.carousel-inner .item > img {
  -webkit-animation: zoom 20s;
  animation: zoom 20s;
}

.tabs .-primary {
  display: flex;
}
.tabs .-primary > li {
  flex-grow: 1;
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	.bs-example{
    	margin: 20px;
    }
    body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="frontend_theme/frontend_images/1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="frontend_theme/frontend_images/2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="frontend_theme/frontend_images/3.jpg" alt="Flower">
    </div>
    <div class="item">
      <img src="frontend_theme/frontend_images/4.jpg" alt="Flower">
    </div>
    <div class="item">
      <img src="frontend_theme/frontend_images/8.png" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
<!--                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Latest News</h2>
                </div>-->
                <div class="bs-example">
                    <ul class="nav nav-pills">
                        <div class="tab">
                            <button class="tablinks active" onclick="openCity(event, 'London')">Shubham Resort</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Rooms</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Banquet</button>
                         </div>
                    </ul>
                </div>
                <div id="London" class="tabcontent" style="display:block">
                  <div class="row">
                    <div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/hall/1.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Swasti: The Lawn</p>
                                <!--<h3 class="g-font-size-22--xs g-letter-spacing--1">Swasti: The Lawn</h3>-->
                                <p>Can Host 1000-1500 guests. Area: 40,000 sq</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/hall/2.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Soham: Mini Hall</p>
                                <!--<h3 class="g-font-size-22--xs g-letter-spacing--1">Soham: Mini Hall</h3>-->
                                <p>AC Hall with capacity of 100 -150 guests</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                     <div class="col-sm-3 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/hall/3.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p style="margin-left:-10px;text-align: left;" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Shagun: Mini Lawn</p>
                                <!--<h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Jacks of All. Experts in All.</a></h3>-->
                                <p>Can Host 1000 guests. Area: 20,000 sq ft</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-3">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/hall/4.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p  class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Shree: The Hall</p>
                                <!--<h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Finding your Perfect Place.</a></h3>-->
                                <p>AC Hall with capacity of 600 guests</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                </div>
                </div>

                <div id="Paris" class="tabcontent">
                  <div class="row">
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/img/970x970/01.jpg" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Create Something Great.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/img/970x970/02.jpg" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Jacks of All. Experts in All.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-4">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/img/970x970/03.jpg" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Finding your Perfect Place.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                </div>
                </div>

                <div id="Tokyo" class="tabcontent">
                  <div class="row">
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/restorant/img1.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Great Location</p>
<!--                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Create Something Great.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>-->
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/restorant/img2.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Quality Family Time</p>
<!--                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Create Something Great.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>-->
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-4">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="frontend_theme/frontend_images/restorant/img3.png" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Unique Flavours</p>
<!--                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Finding your Perfect Place.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>-->
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                </div>
                </div>
                
            </div>
        </div>
        <!--========== END SWIPER SLIDER ==========-->
      
        <!-- End Clients -->

       
        <!-- End News -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection