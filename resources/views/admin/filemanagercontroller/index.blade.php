@extends('admin.layouts.master')

@section('content')
    <iframe src="{{ url('/admin/filemanagercontroller') }}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
@endsection