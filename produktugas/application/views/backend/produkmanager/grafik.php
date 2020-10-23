<!-- Begin Page Content -->
<div class="container-fluid">
  	<!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= esc_html($this->title) ?></h6>
      </div>
      <div class="card-body">
        <?php
            foreach($data as $data){
                $kategori[] = $data->nmKategori;
                $produk[] = (float) $data->jml;
            }
        ?>
      	<canvas id="canvas" width="1000" height="280"></canvas>
 
        <!--Load chart js-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script>
     
            var ctx = document.getElementById('canvas');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php return json_encode($kategori);?>,
                    datasets: [{
                        label: '# of Votes',
                        data: <?php return json_encode($produk);?>,
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
        
      </div>
    </div>
</div>