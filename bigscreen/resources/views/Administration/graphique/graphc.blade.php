<div>
  <canvas id="myChart"></canvas>
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
        data: [{{$countsC['Regarder des émissions TV en direct']}},{{$countsC['Regarder des films']}},{{$countsC['Jouer en solo']}},{{$countsC['Jouer en team']}}],
   
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]
    };   
    
    const config = {
      type: 'pie',
      data: data,
    };    
    
    const myChart = new Chart(
    document.getElementById('myChart'),
    config
    );
    
  </script>
