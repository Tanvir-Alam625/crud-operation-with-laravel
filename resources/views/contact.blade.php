@extends("layouts.guest")
@section('contact')
<div class="container mt-4">
        <form action=" {{ url('/insert') }} " method="POST" >
            
          @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Your Name</label>
                <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name">
                @error('name')
                <p class="text-danger">{{ $message }}</p>                    
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Email</label>
                <input type="text" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                <p class="text-danger">{{ $message }}</p>                    
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Your Message</label>
                <textarea name="message" name="message"  class="form-control" cols="30" rows="10"></textarea>
                @error('message')
                <p class="text-danger">{{ $message }}</p>                    
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
    </div>

@endsection