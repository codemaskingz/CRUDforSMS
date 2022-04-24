<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=href ="{{ URL::asset('css/style.css') }}" >
    <title>Student Management System</title>
  </head>
  <body>
  @include("navbar")

  <div class="row header-container justify-content-center">
      <div class="header">
          <h1 style="text-align: center;">Student Management System</h1>
      </div>
  </div>

  @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

            </section>
        </div>
    </div>  
  @elseif($layout == 'create')
  <div class="container-fluid mt-4">
      <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
            <div class="card mb-3">
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Enter the Information of New students</h5>
                    <form action="/store" method="post">
                    @csrf
                    <div class="form=group">  
                        <label>CNE</label>
                        <input name="cne" type="text" class="form-control" placeholder="Enter cne" >
                    </div>
                    <div class="form=group">  
                        <label>First Name</label>
                        <input name="firstName" type="text" class="form-control" placeholder="Enter First Name" >
                    </div>
                    <div class="form=group">  
                        <label>Last Name</label>
                        <input  name="lastName" type="text" class="form-control" placeholder="Enter Last Name" >
                    </div>
                    <div class="form=group">  
                        <label>Age</label>
                        <input name="age" type="text" class="form-control" placeholder="Enter your Age" >
                    </div>
                    <div class="form=group">  
                        <label>Speciality</label>
                        <input name="speciality" type="text" class="form-control" placeholder="speciality" >
                    </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
                </div>
            </div>
            </section>
        </div>
    </div>  
  @elseif($layout == 'show')
  <div class="container-fluid mt-4">
      <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">

            </section>
        </div>
    </div>  
  @elseif($layout == 'edit')
  <div class="container-fluid mt-4">
      <div class="row">
      <section class="col">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5fArpf3Pj_m_4-NoQPb85Uq7orkaMu6uacg&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update Information of Students</h5>

                        <form action="/update/{{$student->id}}" method="post">
                        @method('PUT')
                            @csrf
                            <div class="form=group">  
                                <label>CNE</label>
                                <input value ="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter cne" >
                            </div>
                            <div class="form=group">  
                                <label>First Name</label>
                                <input value ="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter First Name" >
                            </div>
                            <div class="form=group">  
                                <label>Last Name</label>
                                <input  value ="{{$student->lastName}}" name="lastName" type="text" class="form-control" placeholder="Enter Last Name" >
                            </div>
                            <div class="form=group">  
                                <label>Age</label>
                                <input  value ="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter your Age" >
                            </div>
                            <div class="form=group">  
                                <label>Speciality</label>
                                <input  value ="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="speciality" >
                            </div>
                            <input type="submit" class="btn btn-info" value="update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
             
            </section>
        </div>
    </div>  
  @endif
<footer></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>