@extends('main')
@section('title','| Contact')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name='email'>Email:</label>
                    <input type="" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name='sub'>Subject:</label>
                    <input type="" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name='sub'>Message:</label>
                    <textarea type="" name="mes" id="mes" class="form-control"></textarea>
                </div>
                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
            </div>
    </div>
</div>
@endsection