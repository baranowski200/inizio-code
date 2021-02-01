@extends('master.master')

@section('content')

    <section class="landing position-relative">

        <div class="landing-img col-12 col-lg-6 position-absolute">

        </div>

        <div class="container d-flex w-100 h-100 p-lg-5 position-relative">
            <div class="col-12 col-md-8 col-lg-5 p-5 my-auto">
                <h1 class="pb-3 pt-5">
                    <b>ičoSNIFFER</b>
                </h1>
                <p>
                    Vyhledávač IČO v systému ministerstva financí ARES. Manipulace s databází pomocí balíčku <b>Eloquent</b>,
                    instalovaného pomocí <b>Composer</b>.
                </p>
            </div>
        </div>
    </section>

    <section class="py-5 container">
        <div class="container py-5">
            <h2>
                O aplikaci
            </h2>
        </div>

        <div class="d-flex mx-auto justify-content-center flex-wrap about-flex text-center">
            <div class="col-12 col-lg-3 p-5">
                <i class="fas fa-keyboard"></i>
                <p>Zadáte Vámi zvolené IČO a zadáte čmuchání</p>
            </div>
            <div class="col-12 col-lg-3 p-5">
                <i class="fas fa-file-code"></i>
                <p>API <b>ARES</b> Vámi zvolené IČO vyhodnotí</p>
            </div>
            <div class="col-12 col-lg-3 p-5">
                <i class="fas fa-quote-left"></i>
                <p>Dostanete zpracované výsledky v přehledném formátu</p>
            </div>
        </div>
    </section>

    <section class="py-5 sniff">
        <div class="container py-5 text-center">
            <h2>Zachtělo se Vám čmuchat?</h2>
            <a class="btn btn-dark" href="/sniff">Čmuchej</a>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5 text-center">
            <h2>Historie čmuchání</h2>
            <a class="btn btn-dark" href="/history">Historie</a>
        </div>
    </section>

@endsection
