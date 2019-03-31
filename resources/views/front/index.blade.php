@extends('front.master')

@section('title')
    <?php echo 'Welcome to Our System' ?>
@endsection

@section('slider')



    <div class="slider  d-none  d-sm-block">

        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">


                <h1>Welcome To Our System DefaultName <br>
                    <a href="#"> <span>Watch Video </span> </a></h1>
                <div class="overlay"></div>

                <div class="carousel-item carousel-one active">


                </div>

                <div class="carousel-item carousel-two"></div>

                <div class="carousel-item carousel-three"></div>

            </div>


        </div>


    </div>

@endsection


@section('features')

    <div class="features text-center" id="feature">

        <div class="container">
            <div class="row">

                <div class="cardo col-lg-3 col-md-4 col-sm-6 col-xs-12">

                    <i class="fas fa-home fa-4x rounded-circle"></i>
                    <h3>Feature 1</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                </div>


                <div class="cardo col-lg-3 col-md-4 col-sm-6 col-xs-12">

                    <i class="fab fa-android  fa-4x rounded-circle"></i>
                    <h3>Feature 2</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                </div>


                <div class="cardo col-lg-3 col-md-4 col-sm-6 col-xs-12">

                    <i class="fas fa-yen-sign fa-4x rounded-circle"></i>
                    <h3>Feature 3</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                </div>


                <div class="cardo col-lg-3 col-md-4 col-sm-6 col-xs-12">

                    <i class="fas fa-file-video fa-4x rounded-circle"></i>
                    <h3>Feature 4</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                </div>

            </div>
        </div>

    </div>







@endsection


@section('featured-work')


    <div class="featured-work text-center">

        <div class="container">


            <h3>Featured Work</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.</p>


            <br><br><br>
            <ul class="list-unstyled row">

                <li data-class="all" class="col-md active"> All</li>
                <li data-class=".feature1" class="col-md">Feature 1</li>
                <li data-class=".feature2" class="col-md">Feature 2</li>
                <li data-class=".feature3" class="col-md">Feature 3</li>
                <li data-class=".feature4" class="col-md">Feature 4</li>

            </ul>

        </div>

        <div class="shuffle_imgs">

            <div class="row">

                <div class="col-sm">
                    <img class="feature1" src="images/featured-work/001.jpg" alt=""/>
                </div>

                <div class="col-sm">
                    <img class="feature3" src="images/featured-work/002.jpg" alt=""/>
                </div>

                <div class="col-sm">
                    <img class="feature4" src="images/featured-work/003.jpg" alt=""/>
                </div>


            </div>

            <div class="row">


                <div class="col-sm">
                    <img class="feature2" src="images/featured-work/004.jpg" alt=""/>
                </div>


                <div class="col-sm">
                    <img class="feature2" src="images/featured-work/005.jpg" alt=""/>
                </div>

                <div class="col-sm">
                    <img class="feature3" src="images/featured-work/006.jpg" alt=""/>
                </div>


            </div>

            <div class="row">

                <div class="col-sm">
                    <img class="feature2" src="images/featured-work/007.jpg" alt=""/>
                </div>

                <div class="col-sm">
                    <img class="feature4" src="images/featured-work/008.jpg" alt=""/>
                </div>

                <div class="col-sm">
                    <img class="feature4" src="images/featured-work/009.jpg" alt=""/>
                </div>


            </div>


        </div>

    </div>


@endsection


@section('why-us')

    <div class="why-us text-center" id="why-us">

        <div class="hakim">

            <div class="container">
                <i class="fab fa-react fa-7x"></i>
                <h3>Why Us</h3>

                <div class="row">

                    <div class="col-sm">
                        <h2>Title 1 <i class="fab fa-twitter"></i></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>

                    </div>

                    <div class="col-sm">
                        <h2>Title 2 <i class="fab fa-facebook-messenger"></i></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>

                    </div>


                </div>

                <div class="row">


                    <div class="col-sm">
                        <h2>Title 3 <i class="fab fa-youtube"></i></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>

                    </div>

                    <div class="col-sm">
                        <h2>Title 4 <i class="fab fa-whatsapp"></i></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>

                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection


@section('our-gloas')

    <div class="our-goals" id="our-goals">

        <div class="container-fluid">
            <div class="row">

                <div class="backgroundgloas col-lg-6 col-md-6 col-sm12">

                    <img src="images/goals.jpg" alt="" class="img-thumbnail"/>

                </div>

                <div class="col-lg-6 col-md-6 col-sm12">

                    <h3 style="color:#fff; font-size: 40px; font-weight: bold">Goals 1 </h3>
                    <p style="color:#fff; font-size: 15px; font-weight: bold">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry.</p>


                    <h3 style="color:#fff; font-size: 40px; font-weight: bold">Goals 2 </h3>
                    <p style="color:#fff; font-size: 15px; font-weight: bold">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry.</p>




                    <h3 style="color:#fff; font-size: 40px; font-weight: bold">Goals 3 </h3>
                    <p style="color:#fff; font-size: 15px; font-weight: bold">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry.</p>





                </div>


            </div>
        </div>
    </div>

@endsection




@section('who-are-we')




    <div class="who-are-we text-center" id="who-are-we">

        <div class="overlay2">

            <div class="container">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">


                            <div class="carousel-caption d-none d-block">
                                <img class="img-circle" src="images/man-1.jpg" alt="...">
                                <p>e quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on</p>
                                <h6>Eng.Computer</h6>
                                <h5>Gmaes Adeson</h5>
                            </div>

                        </div>

                        <div class="carousel-item">


                            <div class="carousel-caption d-none d-block">
                                <img class="img-circle"   src="images/man-2.jpg" alt="...">
                                <p>e quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on</p>
                                <h6>Android Developer</h6>
                                <h5>Mohammed Arab</h5>
                            </div>

                        </div>

                        <div class="carousel-item">


                            <div class="carousel-caption d-none d-block">
                                <img class="img-circle" src="images/man-3.jpg" alt="...">
                                <p>e quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on</p>
                                <h6>Programmer</h6>
                                <h5>Mark Amy</h5>
                            </div>

                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>

        </div>

    </div>




@endsection




