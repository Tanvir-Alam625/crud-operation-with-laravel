@extends('layouts.guest')
@section('messages')
    <div class="container">
        <div class="row " style="margin-top: 70px">
            <div class="col-12">
              <div class="w-100">
                @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                    </div>
            @endif
              </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($messages as $message)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $message-> name}}</td>
                        <td>{{ $message-> email}}</td>
                        <td>{{ $message-> message}}</td>
                      </tr>
                      @empty
                          <tr>
                            <td colspan="50"><p class="text-center">Not Found Data</p></td>
                          </tr>
                      @endforelse
                     
                    </tbody>
                  </table>
            </div>

        </div>

    </div>
@endsection