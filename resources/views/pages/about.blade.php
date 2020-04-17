@extends('layouts.app', ['title' =>'About'])


@section('content')
    <div class="container">

        <h2>What is Laracarte?</h2>
        <p> Laracarte is clone app of <a href="https://Laramap.com " target="_blank">Laramap.com</a> </p>

        <div class="row">
            <div class="col-md-6">

                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been built by Pedy DOVENON for learning purpose. </strong>
                </p>
            </div>
        </div>

        <p> free free to help to improve the <a href="https://github.com/pedyDOVENON/Laracarte-PD"> source code</a></p>

        <hr>

        <h2>what is Laramap?</h2>

        <p>Laramap is the website by which laracarte was  inspired :) </p>
        <p>More info <a href="https://laramap.com/about"></a> here</p>
        <hr>

        <h2>Which tools and services are used in laracarte?</h2>
        <p>Basically it's built in laravel & bootstrap. But there's a bunch of services used for email and other sections. </p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazone S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>heroku</li>
        </ul>
    </div>

@endsection