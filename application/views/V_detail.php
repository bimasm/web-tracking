<style type="text/css">
    .title-label{
        color: black;
        background-color: #dee2e6;
        padding: 10px 30px 10px 30px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: transparent;
        background-clip: border-box;
        border: 1px solid black;
        border-radius: 0px;
        width: 300px;
        height: 250px;
    }

.thermometer{
    margin:50% 0 0 50%;
    left:0px;
    top:-100px;
    width:22px;
    height:150px;
    display:block;
    font:bold 14px/152px helvetica, arial, sans-serif;
    text-align:center;
    text-indent: 36px;
    background: linear-gradient(top, #fff 0%, #fff 50%, #db3f02 50%, #db3f02 100%);
    border-radius:22px 22px 0 0;
    border:5px solid #4a1c03;
    border-bottom:none;
    position:absolute;
    box-shadow:inset 0 0 0 4px #fff;
    color:#4a1c03;
}

.thermometer:before{
    content:' ';
    width:44px;
    height:44px;
    display:block;
    position:absolute;
    top:142px;
    left:-16px;
    z-index:-1; 
    background:#c70000;
    border-radius:44px;
    border:5px solid #4a1c03;
    box-shadow:inset 0 0 0 4px #fff;
}

.thermometer:after{
    content:' ';
    width:12px;
    height:<?php $s=(70/100)*150; echo $s; ?>px;
    display:block;
    position:absolute;
    top:<?php $s=150-(70/100*150)+2; echo $s; ?>px;
    left:0px;
    background:#c70000;
}
</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-12">
          <h2 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp;NON TRACKING</h2>
          <h2 style="color: white">CHANNELS ID : 1111</h2>
          <br>
      </div>
  </div>
  <div class="row" style="text-align: -webkit-center;">
      <div class="col-1">
      </div>
      <div class="col-5">
        <label class="title-label">Temperature</label>
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                    <span style="margin-left: 30px;">70°C</span>
                    <span class="thermometer"></span>​
                </div>
                <div class="col-auto">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-5">
    <label class="title-label">Temperature Result Card</label>
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
                <canvas id="a" width="100" height="100"></canvas>
            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-1">
</div>
</div>
<br>
<div class="row" style="text-align: -webkit-center;">
  <div class="col-1">
  </div>
  <div class="col-5">
    <label class="title-label">Humidity</label>
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">

            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-5">
    <label class="title-label">Humidity Result Card</label>
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <canvas id="b" width="100" height="100"></canvas>
          </div>
          <div class="col-auto">
          </div>
      </div>
  </div>
</div>
</div>
<div class="col-1">
</div>
</div>
<br>
<div class="row" style="text-align: -webkit-center;">
  <div class="col-1">
  </div>
  <div class="col-5">
    <label class="title-label">Altitude</label>
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">

            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-5">
    <label class="title-label">Altitude Result Card</label>
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
                <canvas id="c" width="100" height="100"></canvas>
            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-1">
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script>
    var ctx = document.getElementById('a');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
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

<script>
    var ctx = document.getElementById('b');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
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

<script>
    var ctx = document.getElementById('c');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
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
