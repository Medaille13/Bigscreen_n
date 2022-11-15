@extends('administration.layout')
@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="col p-5">
            <div>
                <canvas id="graphA"></canvas>
            </div>
        </div>
        <div class="col p-5">
            <div>
                <canvas id="graphB"></canvas>
            </div>
        </div>
    </div>
    <div class="row align-items-start">
        <div class="col p-5">
            <div>
                <canvas id="graphC"></canvas>
            </div>
        </div>
        <div class="col p-5">
            <div>
                <canvas id="graphD"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const dataA = {
        labels: [
        'Occulus Rift/s',
        'HTC Vive',
        'Windows Mixed Reality',
        'PSVR',
        ],
        datasets: [{
            label: 'Pie Charts Question 6',
            data: [{{$countsA['Occulus Rift/s']}},{{$countsA['HTC Vive']}},{{$countsA['Windows Mixed Reality']}},{{$countsA['PSVR']}}],
            
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(255, 75, 210)'
            ],
            hoverOffset: 4
        }]
    };   
    
    const configA = {
        type: 'pie',
        data: dataA,
    };    
    
    const myChartA = new Chart(
    document.getElementById('graphA'),
    configA
    );
    
    //Graphique B
    const dataB = {
        labels: [
        'SteamVR',
        'Occulus store',
        'Viveport',
        'Playstation VR',
        'Google Play',
        'Windows store',
        ],
        datasets: [{
            label: 'Pie Chart Question 7',
            data: [{{$countsB['SteamVR']}},{{$countsB['Occulus store']}},{{$countsB['Viveport']}},{{$countsB['Playstation VR']}},{{$countsB['Google Play']}},{{$countsB['Windows store']}}],
            
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(80, 205, 10)',
            'rgb(180, 205, 86)',
            'rgb(205, 25, 86)'
            ],
            hoverOffset: 4
        }]
    };   
    
    const configB = {
        type: 'pie',
        data: dataB,
    };    
    
    const myChartB = new Chart(
    document.getElementById('graphB'),
    configB
    );
    // Fin graphique B
    
    
    //Graphique C
    const dataC = {
        labels: [
        'Regarder des émissions TV en direct',
        'Regarder des films',
        'Jouer en solo',
        'Jouer en team'
        ],
        datasets: [{
            label: 'Pie Chart Question 10',
            data: [{{$countsC['Regarder des émissions TV en direct']}},{{$countsC['Regarder des films']}},{{$countsC['Jouer en solo']}},{{$countsC['Jouer en team']}}],
            
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(115, 25, 86)'
            ],
            hoverOffset: 4
        }]
    };   
    
    const configC = {
        type: 'pie',
        data: dataC,
    };    
    
    const myChartC = new Chart(
    document.getElementById('graphC'),
    configC
    );
    
    //graphD
    const dataD = {
        labels: [
        '1',
        '2',
        '3',
        '4',
        '5'    
        ],
        datasets: [
        @foreach($countsD as $question_id=>$reponses)
        {
            @if($question_id == 11)
            label: 'qualité de l’image',
            backgroundColor: 'rgba(255, 99, 132, 0.2) opacité',
            @elseif($question_id == 12)
            label: 'confort d’utilisation',
            backgroundColor: 'rgba(10, 40, 12, 0.4    ) opacité',
            @elseif($question_id == 13)
            label: 'connexion réseau',
            backgroundColor: 'rgba(255, 99, 132, 0.6    ) opacité',
            @elseif($question_id == 14)
            label: 'qualité des graphismes',
            backgroundColor: 'rgba(255, 50, 255, 0.8    ) opacité',
            @elseif($question_id == 15)
            label: 'qualité audio',    
            backgroundColor: 'rgba(255, 99, 132, 0.1    ) opacité',        
            @endif
            
            data: [{{implode(',',$reponses)}}],
            fill: true,
            borderColor: 'rgb(100, 99, 12)',
            pointBackgroundColor: 'rgb(255, 99, 132)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)'
        }, 
        @endforeach
        /*{
            label: 'confort d’utilisation',
            data: [28, 48, 40, 19, 96],
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            pointBackgroundColor: 'rgb(54, 162, 235)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(54, 162, 235)'
        },
        {
            label: 'connexion réseau',
            data: [28, 48, 40, 19, 100],
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            pointBackgroundColor: 'rgb(54, 162, 235)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(54, 162, 235)'
        },
        {
            label: 'qualité des graphismes',
            data: [28, 48, 40, 27, 100],
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            pointBackgroundColor: 'rgb(54, 162, 235)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(54, 162, 235)'
        },
        {
            label: 'qualité audio',
            data: [28, 10, 15, 27, 100],
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            pointBackgroundColor: 'rgb(54, 162, 235)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(54, 162, 235)'
        }
    */
    ]
    };
    
    const configD = {
        type: 'radar',
        data: dataD,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        },
    };
    const myChartD = new Chart(
    document.getElementById('graphD'),
    configD
    );
</script>
</script>
@endsection
