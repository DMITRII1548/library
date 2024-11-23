@extends('layouts.main')

@section('head')

@endsection

@section('content')
    <iframe src="{{ $book->fileSrc }}" frameborder="0" style="width: 100%; height: 80vh"></iframe>

@endsection
