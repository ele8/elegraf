@extends('layouts.front')

@section('content')
<h3>Servizi</h3>
<div class="claim">
    <img src="/img/divider.svg" alt="" class="divider-to-bot">
    <h3 class="claim-text">Creiamo il Sito web Cucito a mano su Misura per Te</h3>
    <img src="/img/divider.svg" alt="" class="divider-to-top">
</div>
<div class="servizi-tab">
    <div class="tab-picture">
        <img src="" alt="">
    </div>
    <div class="tab-copy">
        <div class="title">Curiamo ogni dettaglio</div>
        <div class="description">Ti offriamo un Servizio Completo per rendere efficace la tua immagine coordinata.</div>
        <button>Lo Voglio</button>
    </div>
</div>

<div class="blog-area">
    <h3 class="area-title">Ultimi Blog</h3>
    <div class="blog-carousel servizi">
        <div class="blog-cell">
            <img src="/img/blogs/anna-jane/anna-jane-sposa.jpg" class="main-img" alt="Blog Anna Jane">

            <div class="pack">
                <h3 class="blog-title">Anna Jane</h3>
                Design + Media Kit + Sito Web
                <button class="call-to-action">Lo Voglio</button>
            </div>

        </div>

        <div class="blog-cell">
            <img src="/img/blogs/rose-mary/rose-mary-casale.jpg" class="main-img" alt="Blog Anna Jane">

            <div class="pack">
                <h3 class="blog-title">Rose Mary</h3>
                Design + Media Kit + Sito Web
                <button class="call-to-action">Lo Voglio</button>
            </div>

        </div>

        <div class="blog-cell">
            <img src="/img/blogs/louise/louise-mare.jpg" class="main-img" alt="Blog Anna Jane">

            <div class="pack">
                <h3 class="blog-title">Louise</h3>
                Design + Media Kit + Sito Web
                <button class="call-to-action">Lo Voglio</button>
            </div>

        </div>

    </div>
</div>
<h2>Pacchetti</h2>
<div class="pacchetti-area">
    <div class="card silver">
        <h2 class="title">Silver</h2>
        <div class="description"> Ci occupiamo del Design, lo Sviluppo ed il lancio del tuo Blog. Traduciamo in realtà i tuoi Sogni.</div>
        <h5 class="resume">Sito Web + Media Kit</h5>
        <a href="/pacchetti"><button>Scopri di più</button></a>

    </div>
    <div class="card gold">
        <h2 class="title">Gold</h2>
        <div class="description">Non realizziamo solo il tuo sito web. Costruiamo la tua Immagine Digitale. Oltre a cucire il tuo Blog su misura, ci  occupiamo del Design dei tuoi Social Network.</div>
        <h5 class="resume">Sito Web + Social Network</h5>
        <a href="/pacchetti"><button>Scopri di più</button></a>
    </div>
    <div class="card platinum">
        <h2 class="title">Platinum</h2>
        <div class="description">Vai oltre il Blog e lancia il tuo Brand. Noi pensiamo a sviluppare il tuo Negozio Online integrato al tuo Blog</div>
        <h5 class="resume">Sito Web + E-Shop</h5>
        <a href="/pacchetti"><button>Scopri di più</button></a>
    </div>
</div>
@endsection
