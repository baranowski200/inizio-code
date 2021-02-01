@extends('master.master')

@section('content')

    <section class="container p-5 history d-flex h-100">

        <div class="my-auto mx-auto col-12 col-lg-6">



            <h1 class="pt-5 text-center">
                Detail výsledku
            </h1>

            <div class="pt-1 col-12">

                    <div class="card m-3 p-3">

                        <div class="d-flex flex-column">
                            <div>
                                <h2 class="m-0">Podle hledání: <b>{{$q->request}}</b></h2>
                            </div>

                            <div>
                                <p class="m-0">Datum hledání: <b>{{$q->created_at}}</b></p>
                            </div>
                        </div>


                        <div class="col-12 py-4">
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

                        <div class="pt-2 d-flex justify-content-end">
                            <a class="btn btn-dark mx-1" href="javascript:if(window.print)window.print()">Tisk</a>
                            <a class="btn btn-light mx-1" href="/history">Zpět</a>
                        </div>

                    </div>


            </div>

        </div>

    </section>

@endsection
