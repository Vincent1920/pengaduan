@extends('home')
@section('container')
<div class="new_pengaduan">
    <input id="x" value="Editor content goes here" type="hidden" name="content">
    <trix-editor input="x"></trix-editor>
</div>
@endsection