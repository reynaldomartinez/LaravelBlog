@extends('main')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <div class="text-left">
                        <h6>Trending</h6>
                    </div>
                    <div class="text-center">
                        <h1>Rey's Blog</h1>
                        <p>Check out my latest article where i explain my journey to learning Vue.js!</p>
                    </div>
                    <div class="text-right">
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Click to read!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Robots Incoming</h3>
                    <p>The new generation where robots are incoming!....</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            <hr>
                <div class="post">
                    <h3>Robots Incoming</h3>
                    <p>The new generation where robots are incoming!....</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h3>Trending: </h3><h5>flame!</h5>
            </div>
        </div>
@endsection