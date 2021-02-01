@extends('master.master')

@section('content')

    <section class="container sniffer d-flex">

        <div class="p-5 card mx-auto my-auto" style="max-width: 20rem">
            <form action="sniffres" method="POST" class="text-center">
                @csrf
                <label for="ico">IČO:&nbsp;</label>
                <input type="text" name="ico">
                <button type="submit" class="mt-3 btn btn-dark">
                    Čmuchej!
                </button>
            </form>
        </div>

    </section>



@endsection
