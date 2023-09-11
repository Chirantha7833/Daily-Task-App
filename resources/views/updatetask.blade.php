<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body></br>
    <div class="container">
        <div class="text-center">
        <h1>Update</h1></div>

        <form action="/updatetasks" method="head">
            {{csrf_field()}}
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/></br>
            <input type="hidden" name="id" value="{{$taskdata->id}}"/>
            <input type="submit" class="btn btn-success" value="update"></button>
            <input type="button" class="btn btn-danger" value="Cancel"></button>
        </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>