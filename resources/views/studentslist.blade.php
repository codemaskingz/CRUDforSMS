
<div class="card mb-3">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP0v8E1Syd-rnpHQ3SuXzBTYlIxHr2ADI2bw&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the information about students in the system</p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">speciality</th>
            <th scope="col">operations</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student) 
        <tr>
            <td>{{$student->cne}}</td>
            <td>{{$student->firstName}}</td> 
            <td>{{$student->lastName}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->speciality}}</td>
            <td>
            <a href="/edit/{{$student->id}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="/delete/{{$student->id}}" class="btn btn-sm btn-warning">Delete</a>
            </td>
        </tr>
        @endforeach 
        </tbody>
    </table>
  </div>
</div>













