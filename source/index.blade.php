@extends('_layouts.master')

@section('body')


    <nav class="level navbar is-fixed-top">
        <p class="level-item has-text-centered is-hidden-touch"></p>
        <p class="level-item has-text-centered is-hidden-touch">
            <a class="link is-info">Resturant</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="title is-3 papyrus">TD Vietnam Palace</a>
        </p>
        <p class="level-item has-text-centered is-hidden-touch">
            <a class="link is-info">Menu</a>
        </p>
        <p class="level-item has-text-centered is-hidden-touch"></p>
    </nav>

<section class="hero is-info is-large has-bg-img header">
    <div class="hero-body">
    </div>
</section>

<nav class="level on-hero">
    <!-- Left side -->
    <div class="level-left">
        <div class="level-item">
            <p class="title is-2 has-text-success papyrus">Open Now!!</p>
        </div>

    </div>

    <!-- Right side -->
    <div class="level-right">
        <div class="level-item">
            <div class="media">
                <figure class="media-left">
                    <img src="/assets/images/yelp_logo.png">
                </figure>

                <p class="image">
                    <img src="/assets/images/yelp_4stars.png" alt="">
                </p>

            </div>

        </div>
        <div class="level-item">
        </div>
    </div>
</nav>

@include('_layouts.about')

<hr>

@include('_layouts.menu')

@endsection
