

<!DOCTYPE html>
<html lang="en">

<title> @yield('title') </title>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>

<body>




@yield('content')



<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col-md">

                <i class="fas fa-phone"></i>  &nbsp;<span class="phone"> 01-097230  </span>, &nbsp; <i class="fas fa-envelope"></i> &nbsp; defaultname@gmail.com
            </div>

            <div class="col-md text-right">

                Let's Work Together , Get Quote
            </div>

        </div>
    </div>

</div>


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><span>Default</span><span>Name</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-right" id="main-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home  &nbsp;<i class="fas fa-home"></i> |  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#feature"> Features &nbsp;<i class="fas fa-feather"> | </i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    About Us &nbsp;<i class="fas fa-person-booth"> | </i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#why-us"><i class="fas fa-file-video"></i> Why Us </a>
                    <a class="dropdown-item" href="#who-are-we"> <i class="fas fa-yandex"></i> Who Are We </a>
                    <a class="dropdown-item" href="#our-goals"> <i class="fas fa-subscript"></i> Our Gloas </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#contact-us"><i class="fas fa-yandex"></i> Contact Us</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/openBlog">Blog&nbsp;<i class="fas fa-blog"></i> | </a>
            </li>






            <li class="nav-item">
                <a class="nav-link" href="/openRequest">Request System &nbsp;<i class="fas fa-user-plus"></i> | </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="#contact-us">Contact &nbsp;<i class="fas fa-connectdevelop"></i> | </a>
            </li>


            <li class="nav-item">
                <a class="nav-link btn btn-outline-light"  href="/login">Login &nbsp;<i class="fas fa-user"></i> | </a>
            </li>




        </ul>

    </div>
    </div>



</nav>


<!-- Slider -->


@yield('slider')



<!-- End SLider -->


<!-- Feature -->
@yield('features')

<!-- End Feature -->


<!-- Feature -->
@yield('featured-work')

<!-- End Feature -->

<!-- Start Why Us -->

@yield('why-us')

<!-- End Why Us -->



<!-- Start Who Are We-->

@yield('who-are-we')

<!-- End Who Are We  -->

<!-- Start Who Are We-->

@yield('request-system')

<!-- End Who Are We  -->


<!-- Start Who Are We-->

@yield('our-gloas')

<!-- End Who Are We  -->



<!-- Start Who Are We-->

@yield('blog')

<!-- End Who Are We  -->


<!-- Start Who Are We-->

@yield('one-blog')

<!-- End Who Are We  -->



<!-- Start Who Are We-->

@yield('login')

<!-- End Who Are We  -->







<!-- Start Footer -->


<div class="footer">
<div class="contact-us" id="contact-us">
    <div class="container">

        <div class="row">



            <div class="col-lg-6 col-md-12">

                <form>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control"    placeholder="Your Name">


                            </div>

                            <div class="col-lg-6">

                                <label for="User Name">Email</label>
                                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">

                            </div>

                        </div>

                        <br><br><br> <br>

                        <label>Your Text Message</label>
                        <textarea class="form-control"> </textarea>


                        <button type="submit" class="btn btn-primary">Send Message</button>



                    </div>


                </form>



            </div>




            <div class="col-lg-6 col-md-12">


                <div class="contact-info" style="margin-top: 30px">



                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold" style="font-size: 30px">Contact Information</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Yemen , Sana'a , Hail St</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> defaultname@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    <p>
                        <i class="fab fa-whatsapp mr-3"></i> +967495939599</p>

                </div>


                <button type="submit" class="btn btn-primary text-right" style="margin-right: 60px">
                    <i class="fab fa-apple"></i> Download For IOS</button>

                <button type="submit" class="btn btn-primary text-right">
                    <i class="fab fa-android"></i> Download For Android</button>
            </div>




        </div>

        <hr style="background-color: #fff; margin-top: 60px" >

        <p style="color: #fff" class="text-center">Design By Eng.
            <a href="https://facebook.com/alqubatiabdulhakim" style="color: #EB3A2E;">Hakim Qubati</a></p>
    </div>

    </div>
</div>

</div>


<!-- End Footer -->






<!-- jQuery -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/javascript.js')}}"></script>
</body>

</html>
