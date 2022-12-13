@extends("mainlayout")
@section("content")



<div class="container-fluid d-flex justify-content-center">
    <div class="row">
        
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"> 
     		
                </span>
                   
                    <span> </span>
            </div>

            </div>
        
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder=" " name="Name" value=""></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" name="SurName" placeholder=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="Email" name="Email" value=""></div>
                        <div class="col-md-12"><label class="labels">Phone Number</label><input type="number" class="form-control" placeholder="enter address line 1" Name="Phone" value=""></div>
                        <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter address line 2" name="pass1" value=""></div>
                <div class="col-md-12"><label class="labels">Repeat Password</label><input type="text" class="form-control" placeholder="enter address line 2" name="pass2" value=""></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"></div> 
                    </div>     
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button " type="button"><a class="text-reset text-decoration-none"href="edit.php">Save Profile</a></button></div>
                </div>
            </div>
        
        <div class="col-md-4">
            <div class="p-3 py-5">
               <br><br>
               <form method="POST" action="/wallet/edit">
                @csrf
                <div class="col-md-12"><label class="labels">Balance</label><input name="balance" type="number" class="form-control" placeholder="Balance" name="Earn" value="{{$wallet->balance}}"></div> <br>
                <div class="col-md-12"><label class="labels">Average Monthly Income</label><input name="avg_income" type="number" class="form-control" placeholder="Monthly-income" name="Earn" value="{{$wallet->avg_income}}"></div> <br>
                <div class="col-md-12"><label class="labels">Loans</label><input name="loans" type="number" class="form-control" placeholder="Loans" name="Loans" value="{{$wallet->loans}}"></div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="Budget_Save">Save budget</button></div>
               </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection