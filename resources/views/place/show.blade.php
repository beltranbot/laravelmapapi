@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">Place {{$place->id}}</h4>
            </div>
            <div class="panel-body">
                <div>
                    <form action="">
    
                        {{-- @include('place.forms.user') --}}
                        {{-- @include('place.forms.risk') --}}
                        @include('place.forms.minimal')                    
                    </form>
                </div>
                <div>
                    @include('place.include.map')
                </div>
            </div>
        </div>
    </div>

@endsection