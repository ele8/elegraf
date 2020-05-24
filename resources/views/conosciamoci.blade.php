@extends('layouts.front')

@section('content')

<h3>Conosciamoci</h3>

<section class="contacts">
    <div class="form-container">
            @if (Session::has('flash_message'))
                <div class="alert-success">{{Session::get('flash_message')}}</div>
            @endif
        <form method="post" action="{{ route('conosciamoci.store') }}">
            @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label>Cognome</label>
                    <input type="text" class="form-control" name="cognome">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Raccontaci un po' del tuo Progetto o della tua Richiesta...</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
    </div>
    <div class="pic-container">
        <img src="/img/contact.jpg" alt="conosciamoci">
    </div>
</section>
@endsection
