@extends('main')
@section('title','| All Categories')
@section('body')


    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th>{{$category->id}}</th>
                            <th>{{$category->name}}</th>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">

                <form class="" action="{{route('categories.store')}}" method="post">
                    {{ csrf_field() }}
                    <h2>New Category</h2>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="" class="form-control">
                    <input type="submit" name="" value="Create New Category" class="btn btn-success btn-block form-spacing-top ">
                </form>
            </div>
        </div>
    </div><!--end of .row-->
@endsection
