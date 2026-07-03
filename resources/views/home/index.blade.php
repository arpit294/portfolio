@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section -->
    @include('home.hero')

    <!-- 2. About Section -->
    @include('home.about')

    <!-- 3. Skills Section -->
    @include('home.skills')

    <!-- 4. Projects Section -->
    @include('home.projects')

    <!-- 5. Experience Section -->
    @include('home.experience')

    <!-- 6. Services Section -->
    @include('home.services')

    <!-- 7. Certificates Section -->
    @include('home.certificates')

    <!-- 8. Contact Section -->
    @include('home.contact')
@endsection
