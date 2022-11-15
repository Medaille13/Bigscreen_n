<div>
  <canvas id="deux"></canvas>
</div>  
@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const data = {
      labels: [
      'Red',
      'Blue',
      'Yellow'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [{{$countsB['SteamVR']}},{{$countsB['Occulus store']}},{{$countsB['Viveport']}},{{$countsB['Playstation VR']}},{{$countsB['Google Play']}},{{$countsB['Windows store']}}],
        
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 205, 86)',
        ],
        hoverOffset: 4
      }]
    };   
    
    const config = {
      type: 'pie',
      data: data,
    };    
    
    const myChart = new Chart(
    document.getElementById('deux'),
    config
    );
    
  </script>
