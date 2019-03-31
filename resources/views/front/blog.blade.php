@extends('front.master')

@section('title')
    <?php echo 'Our Blog' ?>
@endsection



@section('blog')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2">

                <button class="btn btn-outline-danger"
                        style="width: 100%; padding-left: 5px;margin-right: 0 ;border: 1px solid red;font-weight: bold;">
                    Our News
                    <i class="fas fa-newspaper fa-1x"></i>
                </button>

            </div>

            <div class="col-lg-10 col-md-10">
                <marquee style="font-weight: bold;color: #12526E;">
                    Some quick example text to build on the card title and make up
                    the
                    bulk
                    of
                    the card's content.
                </marquee>
            </div>


        </div>
    </div>

    <div class="blog">

        <div class="container" style="max-width: 80%">
            <div class="row">


                <div class="col-lg-8 col-md-8">


                    <div id="carouselExampleIndicators" class="carousel slide card" data-ride="carousel"
                         style="width:100%; height: 34rem; margin-left:  0; background-color: #1b4b72">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slider/001.jpg" class="d-block w-100" alt="..."/>


                            </div>
                            <div class="carousel-item">
                                <img src="images/slider/002.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slider/003.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>

                        </a>
                    </div>


                    <div class="row">


                        <div class="card" style="width: 18rem;">
                            <a href="/oneblog">
                                <img class="card-img-top" src="images/backgrounds/001.jpg" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                            <a href="/oneblog">
                                <img class="card-img-top" src="images/backgrounds/001.jpg" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                            <a href="/oneblog">
                                <img class="card-img-top" src="images/backgrounds/001.jpg" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                            <a href="/oneblog">
                                <img class="card-img-top" src="images/backgrounds/001.jpg" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>


                    </div>

                </div>


                <div class="col-lg-4 col-md-4">

                    <form class="form-inline" style="width: 100%;">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search"
                              >
                    </form>


                    <div class="card" style="width: 100%;">
                        <a href="/oneblog">
                            <img class="card-img-top" src="images/backgrounds/001.jpg" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection
