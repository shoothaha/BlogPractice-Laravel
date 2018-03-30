
@extends('blogviews.main')


@section('title', '| Homepage')

@section('content')     
        
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">    
                    <h1 class="display-4">Welcome to my Laravel Blog Practice Page</h1>
                    <p class="lead">This is a blog web app which made while I learn how to use Laravel framework.</p>
                    <hr class="my-4">
                    <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Top Posts</a>
                    </p>                  
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8" style="background-color: #e3f2fd;">
                <h3>Posts</h3>
                Below will possibly shows the main contents of blogs.

                <p><a href="#" class="btn btn-primary">Read More</a></p>
            </div>
            
            <hr>

            <div class="col-md-3 col-md-offset-1" style="background-color: #C0FFCA">
                
                <h3>Side Bar</h3>
                Here would be the sidebar or side-page contents.
            </div>

            <hr>

            <div class="col-md-8" style="background-color: #e3f2fd;">
                <h3>Posts</h3>
                Below will possibly shows the main contents of blogs.

                <p><a href="#" class="btn btn-primary">Read More</a></p>
            </div>
            
            <hr>

            <div class="col-md-8" style="background-color: #e3f2fd;">
                <h3>Posts</h3>
                Below will possibly shows the main contents of blogs.

                <p><a href="#" class="btn btn-primary">Read More</a></p>
            </div>
            
            <hr>

            <div class="col-md-8" style="background-color: #e3f2fd;">
                <h3>Posts</h3>
                Below will possibly shows the main contents of blogs.

                <p><a href="#" class="btn btn-primary">Read More</a></p>
            </div>

            
        </div>

@endsection






