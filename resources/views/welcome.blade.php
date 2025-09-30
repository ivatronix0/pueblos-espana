@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pueblos') }}</div>

                    <div class="card-body">
                        @foreach ($pueblos as $pueblo)
                            <div class="pueblo">
                                <h2>{{ $pueblo->Mun }}</h2>
                                <p>{{ $pueblo->Descripcion }}</p>
                                <img src="{{ $pueblo->Foto }}" alt="{{ $pueblo->Mun }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
