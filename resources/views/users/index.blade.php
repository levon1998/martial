@extends('welcome')
@section('title')
    Martial arts
@endsection
@section('content')
    @include('users.sections.home')
    @include('users.sections.about')
    @include('users.sections.service')
    @include('users.sections.team')
    @include('users.sections.news')
    @include('users.sections.price')
    @include('users.sections.contact')
@endsection