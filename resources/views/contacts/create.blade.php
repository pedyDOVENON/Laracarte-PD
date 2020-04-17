@extends('layouts.app', ['title' =>'Contact'])


@section('content')
    <div class="container">

        <div class="row">

            <div class=" col-md-8  col-md-offset-2 col-sm-10 col-sm-offset-1">
                 <h2> Get In Touch </h2>
                <p class="text-muted">If you having trouble with this services , please <a href="mailto::peddydovenon@gmail.com">ask for help.</a>

                </p>

                <form action="#" method="POST">

                    <div class="form-group">

                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">

                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>

                    <div class="form-group">

                        <label for="message" class="form-label sr-only ">Message</label>
                        <textarea  class="form-control" name="message"  cols="10" rows="10" required="required"></textarea>
                    </div>

                    <div class="form-group">

                       <button class="btn btn-dark btn-block"> Submit Enquiry &raquo;</button>
                    </div>



                </form>

            </div>
        </div>

    </div>

@endsection