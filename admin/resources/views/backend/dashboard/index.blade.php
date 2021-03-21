@extends('backend.layouts.app')

@section('title', 'Dashboard')
@section('nav.dashboard', 'active')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/Chart.min.css') }}">
@endsection

@section('content')
    
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
                    Registrados por Mes
                </h2>
                <div class="row">
                    <div class="col-md-12">
                        <canvas id="myChart" width="400" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/colors.js') }}"></script>

    <script>
        

        var monthColors = [];

        for (var i = 0; i < 6 ; i++ ) {
            monthColors.push(randomColor());
        }
        
        console.log(monthColors);

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Amarillo'],
                datasets: [{
                    label: 'Enero',
                    data: [12, 19, 3, 5, 2, 3, 55],
                    backgroundColor: randomColor() + "4D",
                    borderColor: monthColors,
                    borderWidth: 5
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>

@endsection