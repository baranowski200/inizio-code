@extends('master.master')

@section('content')

    <section class="container p-5 history">

        <h1 class="pt-5 text-center">
            Výsledky řazené Z-A
        </h1>

        <div class="d-flex justify-content-center pb-5">
            <a class="btn btn-dark mx-1" href="/history">Zpět</a>
            <a class="btn btn-dark mx-1" href="/historyaz">A-Z</a>
            <a class="btn btn-dark mx-1" href="/historyasc">Vzestupně</a>
            <a class="btn btn-dark mx-1" href="/historydesc">Sestupně</a>
        </div>

    @foreach($history->sortByDesc('jmeno') as $q)

        <div class="card m-3 p-3 col-12 col-lg-6 mx-auto">

            <div class="d-flex flex-column justify-content-between">
                <div class="m-0">
                    <h2 class="m-0">Podle hledání: <b style="color: #ad0707">{{$q->request}}</b></h2>
                </div>

                <div class="m-0">
                    <p class="m-0">Datum hledání: <b>{{$q->created_at}}</b></p>
                </div>
            </div>


            <div class="py-3">
                <table class="col-12">
                    <tr>
                        <td class="col-6"><b>Údaj</b></td>
                        <td class="col-6" style="text-align: right"><b>Výsledek</b></td>
                    </tr>
                    <tr>
                        <td>IČO</td>
                        <td style="text-align: right">{{$q->ico}}</td>
                    </tr>
                    <tr>
                        <td>Jméno</td>
                        <td style="text-align: right">{{$q->jmeno}}</td>
                    </tr>
                    <tr>
                        <td>Okres:</td>
                        <td style="text-align: right">{{$q->okres}}</td>
                    </tr>
                    <tr>
                        <td>Adresa:</td>
                        <td style="text-align: right">{{$q->adresa}}</td>
                    </tr>
                    <tr>
                        <td>Datum vzniku činnosti</td>
                        <td style="text-align: right">{{$q->vznik}}</td>
                    </tr>
                    <tr>
                        <td>Datum platnosti činnosti</td>
                        <td style="text-align: right">{{$q->platnost}}</td>
                    </tr>
                </table>
            </div>

            <div class="pt-3" style="text-align: right">
                <a class="btn btn-dark" href="/history/{{$q->id}}">Detail</a>
            </div>

    </div>

    @endforeach

    </section>

@endsection
