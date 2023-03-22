@extends('dashboard.views')
@section('container')
   {{-- @dd("user") --}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My Post By {{auth()->user()->username}}  </h1>
  </div>
  
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/pengaduan/create" class="btn btn-primary"> Creat new post</a>
  
    <table class="table table-striped table-sm">
        <thead>
          
          <tr>
            <th scope="col">user</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">menu</th>
          </tr>
        </thead>
        <tbody>
          
          {{-- @foreach ( $posts as $post) --}}
           @foreach($user as $comments)
           <tr>
             {{-- <td>{{$users->user_id->title}}</td> --}}
             <td>{{ $comments->user_id }}</td>
             <td>{{ $comments->title }}</td>
             <td>{{ $comments->body }}</td>
             {{-- <td>{{ $comments->comment }}</td> --}}
             <td>
               <a href="" class="badge bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
               
               
               <a href=""class="badge bg-warning"><span data-feather="edit"></span> </a>
               
               <form action="" method="post" class="d-inline">
                 @method('delete')
                 @csrf
                 <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                 </button>
                </form>
              </td>
            </tr>
            @endforeach
     
        </tbody>
      </table>
    </div>
@endsection