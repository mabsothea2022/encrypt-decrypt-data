<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="content">
            <h1>All infor</h1>
        <a href="{{ route("data.store") }}" class="btn btn-primary" role="button">Add New Member</a>
        <hr>
        <table class="table table-secondary">
            <thead>
                <th>#</th>
                <th>ID</th>
                <th>Card Name</th>
                <th>Card No</th>
                <th>Expired Month</th>
                <th>Expired Year</th>
                <th>CVV</th>
                <th>Action</th>
            </thead>
            <tbody>
                <div class="container">
                    <div class="table-responsive">
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
    
                    </div>
                </div>
            </tbody>
        </table>
    </div>
</div>