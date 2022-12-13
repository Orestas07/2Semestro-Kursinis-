@extends("mainlayout")
@section("content")

<div class="containerChange">


<!-- Money Start-->
<div class="Money-box">
    <a class="text">Money:</a>
    <a class="money">245€</a>
    <a clasas="">Goal:?</a>
</div>
<!-- Money End-->

<!-- Graph Start-->
    <div class="content-large">
        <canvas id="myChart"></canvas>
        <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Spending',
                    data: [1687, 1500, 1000, 1474,1300, 1173,1375,1673,1577,1575,1366,1104],
                    fill:true,
                    tension:0.2,
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
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
        </script>
    </div>
 <!-- Graph End-->


<!-- Table Start-->
    <div class="Transactions">
    <table>
        <thead>
            <th colspan="4">Recent transactions</th>
            
        </thead>
        <tr>
          <th class="Icon">Where</th>
          <th class="Where">Bought</th>
          <th class="Amount">Cost</th>
          <th class="Date">Date</th>
        </tr>
        <tr>
          <td>McDonalds</td>
          <td>Big Mac Meal,9 Piece chicken nuggets</td>
          <td>10€</td>
          <td>2022-10-07</td>
        </tr>
        <tr>
            <td>SportLand</td>
            <td>Nike Shoes</td>
            <td>120€</td>
            <td>2022-10-08</td>
          </tr>
          <tr>
            <td>Pepco</td>
            <td>Plates,Blanket</td>
            <td>30€</td>
            <td>2022-10-12</td>
          </tr>
          <tr>
            <td>SportLand</td>
            <td>Nike Shoes</td>
            <td>120€</td>
            <td>2022-11-08</td>
          </tr>
          <tr>
            <td>SportLand</td>
            <td>Nike Shoes</td>
            <td>120€</td>
            <td>2022-11-08</td>
          </tr>
          <tr>
            <td>SportLand</td>
            <td>Nike Shoes</td>
            <td>120€</td>
            <td>2022-11-08</td>
          </tr>
      </table>
    </div>
<!-- Table End-->

</div>


@endsection