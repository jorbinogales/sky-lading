@extends('layouts.app')

@section('title', 'Fallido')
    
<style>
.person-layer {
    position: absolute;
    z-index: 2;
    left: 225px;
}
.message-layer {
    position: absolute;
    z-index: 3;
    left: 500px;
    top: 195px;
}
@media (max-width: 600px) {
    .container {
        height: 100%;
    }
    .row {
        height: 100%;
    }
    .person-layer {
        display: none;
    }
    .message-layer {
        display: flex;
        justify-content: center;
        align-items: center;
        position: unset;
        width: 100%;
        height: 100%;
    }
    .message-layer img {
        width: 100%;
        padding:20px;
    }
}
</style>

@section('content')
    <div class="container">
        <div class="row">

            <div class="person-layer">
                <img src="{{ asset('images/el2.png') }}" alt="">
            </div>

            <div class="message-layer">
                <img src="{{ asset('images/messagetwo.png') }}" alt="">
            </div>

        </div>
    </div>
@endsection