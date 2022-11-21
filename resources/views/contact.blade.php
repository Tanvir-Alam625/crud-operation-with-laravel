@extends("layouts.guest")
@section('contact')
<div class="container mt-4">
        <form action="" method="POST" >
            <div class="form-group">
                <label for="exampleInputEmail1">Your Name</label>
                <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Email</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Message</label>
                <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
    </div>

@endsection