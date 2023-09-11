<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>
<body>

<div class="container">
    <div class="text-center">
        <h1>Daily Task</h1>
        <div class="row">
            <div class="col-md-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role ="alert">
                    {{$error}}
                </div>
                @endforeach
                 <form action="/savetask" method="POST">
                    {{csrf_field()}}
                     
                    <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here"></br>
                <input type="submit" class="btn btn-primary" value="SAVE">
                <!-- <input type="button" class="btn btn-warning" value="CLEAR"> --></br></br>

                </form>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>TASK</th>
                    <th>COMPLETED</th>
                    <th>ACTION</th>

                    @foreach($task as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                        @if($task->iscompleted)
                        <button class="btn btn-success" >Completed</button>
                        <!-- <button type="button" class="btn btn-success">Success</button> -->
                        @else
                       <button class="btn btn-warning" >Not Completed</button>
                       @endif
                    </td>
                    <td>
                    @if(!$task->iscompleted)
                    
                    <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Completed</a>
                    @else 
                    <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Not Completed</a>
                    @endif
                    <a href="/removetask/{{$task->id}}" class="btn btn-light btn-sm">Temove Task</a>
                    <a href="/update/{{$task->id}}" class="btn btn-danger">Update</a>

                    
                    </td>
                    


                    </tr>
                    @endforeach
</table>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>