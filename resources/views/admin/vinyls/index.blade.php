<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin index</title>
</head>

<body>

    <div>

    </div>


    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vinyls as $vinyl)
                <tr class="">
                    <td scope="row">{{$vinyl->id}}</td>
                    <td>{{$vinyl->title}}</td>
                    <td>{{$vinyl->artist}}</td>
                    <td>{{$vinyl->cover}}</td>
                    <td>{{$vinyl->genre}}</td>
                    <td>{{$vinyl->duration}}</td>
                    <td>View Edit Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</body>

</html>