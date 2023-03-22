@extends('dashboard.views')
@section('container')


<p class="dashboard_user">walcome : {{auth()->user()->username}}  </p>
    
{{-- <p class="dashboard_nama">nama  </p> --}}

@endsection