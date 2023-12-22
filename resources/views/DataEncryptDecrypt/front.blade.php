{{-- https://www.youtube.com/watch?v=MlgGvANMoos&t=1201s --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <title>Encrypt & Decrypt</title>
</head>
<body>
    <div class="container py-5">
        <div class="content">
            <h1>All information Card</h1>
            <a href="{{ route("data.create") }}" class="btn btn-primary" role="button">Add New Card</a>
            <hr>
            <table id="example" class="table table-striped table-hover" style="width:100%">
                <thead>
                    <th>#</th>
                    <th>Card Name</th>
                    <th>Card No</th>
                    <th>Expired Month</th>
                    <th>Expired Year</th>
                    <th>CVV</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>{{ $e->card_name }}</td>
                            <td>{{ $e->card_no }}</td>
                            <td>{{ $e->exp_month }}</td>
                            <td>{{ $e->exp_year }}</td>
                            <td>{{ $e->cvv }}</td>
                            <td>
                                <div class="col">
                                   <form action="{{ route("data.destroy",$e->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        {{-- <a class="btn btn-info btn-sm" href="{{ route("data.show",$e->id) }}">View</a> --}}
                                        {{-- <a class="btn btn-secondary btn-sm" href="{{ route("data.edit",$e->id) }}">Edit</a> --}}
                                        <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="./js/datatables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>
</html>






