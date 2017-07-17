@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>CONTACT</h1>
            <form action="">
                <div class="form-group">
                    <label for="" name="email">E-mail:</label>
                    <input id="email" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="10" >Type message...</textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Send Message">
            </form>
        </div>
    </div>
@endsection
