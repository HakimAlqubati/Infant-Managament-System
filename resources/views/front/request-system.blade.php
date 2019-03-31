@extends('front.master')

@section('title')
    <?php echo 'Request Service' ?>
@endsection

@section('request-system')
<div class="request-system">
    <div class="hakim3">
        <div class="container">

       <h3>Please Fill These Filds to Request the  Service : </h3>
            <form>
                <div class="form-group">

                   <div class="row">
                       <div class="col-lg-6 col-md-6">


                           <div class="form-group">
                               <label for="username">First Name</label>
                               <input type="text" class="form-control"  placeholder="First Name">
                           </div>

                           <div class="form-group">
                               <label for="username">Last Name</label>
                               <input type="text" class="form-control"   placeholder="Last Name">
                           </div>


                           <label for="exampleInputEmail1">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           <small style="color: #fff" id="emailHelp">We'll never share your email with anyone else.</small>

                           <div class="form-group">
                               <label for="username">Phone Number</label>
                               <input type="number" class="form-control"   placeholder="Your Phone">
                           </div>


                       </div>

                       <div class="col-lg-6 col-md-6">

                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Select Country</label>
                               <select class="form-control" id="exampleFormControlSelect1">
                                   <option>Yemen</option>
                                   <option>Saudi</option>
                                   <option>Oman</option>
                                   <option>UAE</option>
                                   <option>Iraq</option>
                               </select>
                           </div>

                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Select the City</label>
                               <select class="form-control" id="exampleFormControlSelect1">
                                   <option>Sana'a</option>
                                   <option>Taiz</option>
                                   <option>Aden</option>
                                   <option>Ib</option>
                                   <option>Mareb</option>
                               </select>
                           </div>


                           <div class="form-group">
                               <label for="username">Noun of Centre</label>
                               <input type="number" class="form-control"  placeholder="Centre Noun">
                           </div>



                       </div>
                   </div>


                </div>


                <div class="form-group">
                    <label for="username">More Information Profile</label>
                    <textarea  class="form-control"></textarea>
                </div>




                <button type="submit" class="btn btn-primary">Save and Request</button>
            </form>

        </div>
    </div>
</div>

@endsection