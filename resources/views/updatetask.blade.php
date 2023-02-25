<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks Update</h1>
        <form method="POST" action="/edittask"  >
            @csrf

            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/> </br>
            <input type="hidden" name="id" value="{{$taskdata->id}}"/>
            <input type="submit" class="btn btn-warning" value="Update"/>
            &nbsp;  &nbsp;
            <a href="/tasks"  class="btn btn-danger">Cancel</a>
        </form>
        </div>
    </div>

</body>
</html>
