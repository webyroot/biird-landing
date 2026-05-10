@extends('layouts.app')

@php
    $hero = \App\Models\HeroSection::where('is_active', true)->first();
    $community = \App\Models\CommunitySection::where('is_active', true)->first();
    $mentors = \App\Models\MentorSection::where('is_active', true)->first();
    $features = \App\Models\FeatureSection::where('is_active', true)->first();
    $videos = \App\Models\VideoSection::where('is_active', true)->first();
    $cta = \App\Models\CtaSection::where('is_active', true)->first();
    $footer = \App\Models\FooterSection::where('is_active', true)->first();
@endphp

@section('title', $hero->main_title ?? 'Biird - Where African Women Rise, Lead & Thrive')
@section('description', $hero->description ?? 'Join a community of African women ready to grow together.')

@section('content')
    @include('components.landing.navbar')
    @include('components.landing.hero', ['section' => $hero])
    @include('components.landing.features', ['section' => $community])
    @include('components.landing.stats', ['section' => $mentors])
    @include('components.landing.ecosystem', ['section' => $features])
    @include('components.landing.videos', ['section' => $videos])
    @include('components.landing.cta', ['section' => $cta])
    @include('components.landing.footer', ['section' => $footer])
@endsection
