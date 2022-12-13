@extends("mainlayout")
@section("content")


<div class="containerChange">


        <div class="RecentTrans">

        <div class="Transactions1">
            <table>
                <thead>
                    <tr>
                        <th colspan="3">Recent transactions</th>
                        <th>
                            <div class="">
                            <div class="input-data">
                                <input type="text" required>
                                <div class="underline">
                                <label>Search</label>
                                </div>
                            </div>
                        </div></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th class="Icon">Where</th>
                        <th class="Where">Bought</th>
                        <th class="Amount">Cost</th>
                        <th class="Date">Date</th>
                        <th class="Amount"></th>  
                    </tr>
                </thead>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{$transaction->description}}</td>
                    <td>{{$transaction->location}}</td>
                    <td>{{$transaction->cost}}€</td>
                    <td>{{$transaction->purchase_date}}</td>
                    <td><a href="/transaction/{{$transaction->id}}/edit" class="pirmyn-link">EDIT<i class="fa-solid fa-arrow-right"></i></a></td><!-- Edit mygtukas--> 
                </tr>
                @endforeach
            </table>
            </div>

        </div>
    <form method="POST">
        <div class="modal fade" id="goalform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    

                        <div class="form-group">
                            <br>
                            <label class="">Where bought</label>
                            <input name="order_item_model" required="required" type="text" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <br>
                            <label class="">What bought</label>
                            <input name="order_item_model" required="required" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <br>
                            <label class="">Cost</label>
                            <input name="order_item_model" required="required" type="number" class="form-control">
                        </div>

                        <div class="form-group">
                            <br>
                                
                                <div class="input-data">
                                    <input type="date"required>
                                    <div class="underline"></div>
                                    <label></label>
                                </div>
                            
                        </div>
                    

                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Uždaryti</button>
                        <button type="submit" name="Edit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


<div class="BarGraph">
        <label>
            Daily Spending
        </label>
        <canvas id="myChart"></canvas>
        <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        <?php
            $days = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

            $chart_transactions = Auth::user()->wallet->transactions()->orderBy('purchase_date')->get();

            {{-- $chart_transactions[0]->purchase_date->format('m') --}}

            foreach($chart_transactions as $transaction)
            {
                if ($transaction->purchase_date->format('m') == 12)
                {
                    $days[$transaction->purchase_date->format('d')-1] += $transaction->cost;
                }
            }
        ?>


        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
                datasets: [{
                    label: 'October', 
                    data: [<?php 
            echo(collect($days)->implode(', ')); 
            ?>],
                    {{-- data: [20, 0, 13, 50, 10, 0,2,15,14,0,3,4,30,15,20,17,50,4,10,15,50,14,30,100,13,17,20,26,0,0,5], --}}
                    
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>

    </div>

    <div class="IncomeGrid">
        <div class="Income">
            <a href='/transactions/create'>Create transaction</a>
            {{-- <div>
            <br><br>
                <label>Purchases</label>
            </div>
            <br><br>
            <div class="wrapper">
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label>Where</label>
                </div>
            </div>
            <div class="wrapper">
                <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label>Bought</label>
                </div>
            </div>
            <div class="wrapper">
                <div class="input-data">
                    <input type="number" required>
                    <div class="underline"></div>
                    <label>Cost</label>
                </div>
            </div>
            <div class="wrapper">
                <div class="input-data">
                    <input type="date"required>
                    <div class="underline"></div>
                    <label></label>
                </div>
            </div>
            <div class="wrapper">
                <button class="btn-1"><a type="submit">Submit</a></button>
            </div> --}}
        </div>

    </div>

</div>




@endsection
