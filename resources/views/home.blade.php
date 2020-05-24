@extends('layouts.front')

@section('content')

<div class="intro">
    <h2 class="hero hidden">ELEGRAF</h2>
</div>

<div class="claim">
    <img src="/img/divider.svg" alt="" class="divider-to-bot">
    <h3 class="claim-text">Esperti nella Creazione di Siti Luxury per Blogger ed Influencer</h3>
    <img src="/img/divider.svg" alt="" class="divider-to-top">
</div>
<div class="blog-area">
    <h3 class="area-title">Ultimi Blog</h3>
    <div class="blog-carousel">
        <div class="blog-cell">
            <img src="/img/blogs/anna-jane/anna-jane-sposa.jpg" class="main-img" alt="Blog Anna Jane">
            <img src="/img/blogs/anna-jane/anna-jane-celeste.jpg" class="additional-img" alt="Blog Anna Jane">
            <h3 class="blog-title">Anna Jane</h3>
            <button class="call-to-action">Lo Voglio</button>
        </div>

        <div class="blog-cell">
            <img src="/img/blogs/rose-mary/rose-mary-casale.jpg" class="main-img" alt="Blog Anna Jane">
            <img src="/img/blogs/rose-mary/rose-mary-campo.jpg" class="additional-img" alt="Blog Anna Jane">
            <h3 class="blog-title">Rose Mary</h3>
            <button class="call-to-action">Lo Voglio</button>
        </div>

        <div class="blog-cell">
            <img src="/img/blogs/louise/louise-mare.jpg" class="main-img" alt="Blog Anna Jane">
            <img src="/img/blogs/louise/louise-ritratto.jpg" class="additional-img" alt="Blog Anna Jane">
            <h3 class="blog-title">Louise</h3>

            <button class="call-to-action">Lo Voglio</button>
        </div>

    </div>
</div>
@endsection
