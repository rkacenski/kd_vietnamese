@extends('_layouts.master')

@section('body')


<nav class="level navbar is-fixed-top">
    <p class="level-item has-text-centered is-hidden-touch">
        <a href="#resturant" class="link is-info">Restaurant</a>
    </p>
    <p class="level-item has-text-centered is-hidden-touch">
        <a href="#gallery" class="link is-info">Gallery</a>
    </p>
    <p class="level-item has-text-centered">
        <a class="title is-3 papyrus">TD Vietnam Palace</a>
    </p>

    <p class="level-item has-text-centered is-hidden-touch">
        <a href="#menu" class="link is-info">Menu</a>
    </p>
    <p class="level-item has-text-centered is-hidden-touch">
        <a href="tel:475-282-9268" class="link is-info">📞 (475) 282-9268</a>
    </p>
</nav>

<section class="hero is-large header">
    <img class="hero-body" style="padding: 0" src="/assets/images/banner.jpg" />
</section>

{{--
<nav class="level on-hero">
    <!-- Left side -->
    <div class="level-left">
        <div class="level-item">
            <p class="title is-3 has-text-success papyrus">Call us: (475) 282-9268</p>
        </div>

    </div>

    <!-- Right side -->
    <div class="level-right">
        <div class="level-item">
            <a alt="yelp" href="https://www.yelp.com/biz/td-vietnam-palace-stratford-2">
                <div class="media">
                    <figure class="media-left">
                        <img src="/assets/images/yelp_logo.png">
                    </figure>

                    <div class="i-stars large-4" title="4.0 star rating"></div>

                </div>
            </a>
        </div>
        <div class="level-item">
        </div>
    </div>
</nav>
--}}

@include('_layouts.about')

<hr>

@include('_layouts.specials')

@include('_layouts.menu')

@include('_layouts.gallery')

@endsection
