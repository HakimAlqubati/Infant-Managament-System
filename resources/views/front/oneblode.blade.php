@extends('front.master')
@section('title')
    <?php echo 'One Blog' ?>
@endsection

@section('one-blog')


    <div class="one-blog">
        <div class="container">
            <img src="images/slider/001.jpg" alt="..." class="img-thumbnail">
            <h3>Title of Blog</h3>

            <p>&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged.</p>


            <p>&nbsp;&nbsp; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged.</p>


            <div class="comment-section">
                <hr>
                <h2 style="color: #1b4b72">Add Your Comment <i class="fas fa-comment"></i></h2>
                <hr>
                <form style="color: #1b4b72">
                    <div class="form-group">

                        <div class="row">
                            <div class="col-lg-6">
                                <h5 for="User Name"><i class="fas fa-users"></i> User Name </h5>
                                <input type="text" class="form-control" placeholder="Your Name">


                            </div>

                            <div class="col-lg-6">

                                <h5 for="Email"><i class="fas fa-envelope-square"></i> Email</h5>
                                <input type="email" class="form-control" aria-describedby="emailHelp"
                                       placeholder="Enter email">

                            </div>

                        </div>

                        <br>

                        <h5><i class="fas fa-comment"></i> Your Comment</h5>
                        <textarea class="form-control"> </textarea>


                        <button  type="submit" class="btn btn-primary text-center">Add Comment</button>


                    </div>


                </form>


            </div>
        </div>
    </div>




@endsection