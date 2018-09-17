@extends('_layouts.master')

@section('body')


    <nav class="level navbar is-fixed-top">
        <p class="level-item has-text-centered"></p>
        <p class="level-item has-text-centered">
            <a class="link is-info">Resturant</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="title is-3 papyrus">TD Vietnam Palace</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info">Menu</a>
        </p>
        <p class="level-item has-text-centered"></p>
    </nav>

<section class="hero is-info is-large has-bg-img">
    <div class="hero-body">
        <div class="container">
            <h1 class="title papyrus has-text-centered">
                Best Vietnamese food in Stratford, CT
            </h1>
        </div>
    </div>

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
</section>

@include('_layouts.about')

<hr>

@include('_layouts.menu')

@endsection
