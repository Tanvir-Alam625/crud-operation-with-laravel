@extends('layouts.guest')
@section('home')
<div class="container">
    <div class="row p-4 mt-6">
        <div class="col-12">
            <div class="card ">
                <img class="card-img-top" height="300"  src="https://media.istockphoto.com/id/178799159/photo/hiking-the-path-at-bryce-canyon-national-park.jpg?s=170667a&w=0&k=20&c=NLaxRSo429esVJ26JRvU7_t-NUs1c7YAXLqOwGHvF0Y=" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <a href="{{ @url('/contact') }} " class="btn btn-primary">Contact</a>
                </div>
              </div>
        </div>
    </div>

</div>
@endsection