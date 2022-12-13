@extends("mainlayout")
@section("content")




<div class="goaltable">
    <a href="/goals/create">CREATE</a>
   <table class="goalstable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Goals</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($goals as $goal)
        <tr>
            <td>{{ $goal->id }}</td>
            <td>{{ $goal->description }}</td>
            <td><a href="/goal/{{$goal->id}}/edit" class="pirmyn-link">EDIT <i class="fa-solid fa-arrow-right"></i></a>
            <a href="/goal/{{$goal->id}}/delete" class="pirmyn-link">DYLYTE <i class="fa-solid fa-arrow-right"></i></a></td>
        </tr>
        @endforeach
    </tbody>
   </table>

   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
  
</div>

@endsection