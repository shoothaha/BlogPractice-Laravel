@extends('blogviews.main')


@section('title', '| Contact')


@section('content')


        <div class="row">
            <div class="col-md-12">
                <h1>Contact Page</h1>
                <hr>

                <div class="form-group">
                    <label name="email">Email:</label>
                    <br>
                    <input id="email" name="email" class="<form-control>">
                </div>

                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <br>
                    <input id="subject" name="subject" class="<form-control>">
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                </div>

                <input type="submit" value="send message" class="btn btn-success">
            </div>
        </div>
 
 @endsection