@extends('master.master')

@section('content')

    <section class="container p-5 d-flex result">

        <div class="mx-auto my-auto">



        <h1>Výsledek:</h1>

        <br>

        @if($passer['pocet_zaznamu'] == 0)
            Pro Váš request <b>({{$passer['request']}})</b> nebyl nalezen žádný platný záznam.

                <div class="d-flex pt-5 justify-content-center">
                    <div class="mx-2">
                        <a class="btn btn-dark" href="/sniff">Čmuchat znovu</a>
                    </div>
                </div>
        @else

            <div class="d-flex flex-wrap">
                <div class="col-12 col-lg-6 my-auto">
                    <div>
                        <h2><b>{{$passer['jmeno']}}</b></h2>
                    </div>
                    <div>
                        <h2><b>IČO: </b>{{$passer['ico']}}</h2>
                    </div>
                </div>
                <div class="d-flex col-12 col-lg-6">
                    <table class="my-auto">
                        <tr>
                            <td><b>Okres registrace:&nbsp;&nbsp;</b></td>
                            <td class="">{{$passer['okres']}}</td>
                        </tr>
                        <tr>
                            <td><b>Adresa:&nbsp;&nbsp;</b></td>
                            <td>{{$passer['adresa']}}</td>
                        </tr>
                        <tr>
                            <td><b>Vznik registrace:&nbsp;&nbsp;</b></td>
                            <td>{{$passer['vznik']}}</td>
                        </tr>
                        <tr>
                            <td><b>Platnost registrace:&nbsp;&nbsp;</b></td>
                            <td>{{$passer['platnost']}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="d-flex pt-5 justify-content-center">
                <div class="mx-2">
                    <a class="btn btn-dark" href="/sniff">Čmuchat dále</a>
                </div>
                <div class="mx-2">
                    <a class="btn btn-light" href="javascript:if(window.print)window.print()">Tisk</a>
                </div>
            </div>

        @endif
        </div>
    </section>

@endsection
