@extends('Admin.Clients.ClientAd')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div style=" flex: 1;padding-left: 104px;" class="col-md-11">
        <header>
            @include('Admin.layoutsAd.HeaderAd')
        </header>
        <main>
            @include('Admin.layoutsAd.bodyAd')

        </main>
    </div>



    </div>
@endsection


@section('css')
@endsection
