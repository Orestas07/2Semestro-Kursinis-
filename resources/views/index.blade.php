<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budger</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/59bcbfb8a3.js" crossorigin="anonymous"></script>
    <script src="node_modules/chart.js/dist/chart.js"></script>
</head>
<body>

    <div class="header">
        <header>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo">Budger</label>
                <ul class="nav_link">
                <li><a class="active" href="#">DashBoard</a></li>
                <li><a href="Budget.php">Budget</a></li>
                <li><a href="goals.php">Goals</a></li>
                <li><a href="profile.php">Profile</a></li>
              </ul>  
            </nav>
        </header>
    </div>
<div class="containerChange">


<!-- Money Start-->
<div class="Money-box">
    <a class="text">Money:</a>
    <a class="money">245€</a>
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



 <!-- Footer Start-->

<!-- Footer End-->
</div>

<div class="footer">
    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
    <ul class="menu">
        <li><a href="#"> Home</a></li>
        <li><a href="#">Budget </a></li>
        <li><a href="#"> Spending</a></li>
    </ul>
    <p>Budger @2022| All Rights Reserved</p>
    </footer>
</div>

</body>
</html>