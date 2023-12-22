{{-- https://www.youtube.com/watch?v=MlgGvANMoos&t=1201s --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Encryption and Decryption User Data using Crypt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="title">Encrypt and Decrypt Data</h2>
        <div class="content">
            <hr>
            <form action="{{ route("data.store") }}" method="POST">
                @csrf
                @method("POST")
                <div class="table-responsive">
                    <table class="table table-primary">
                        <tbody>
                            <tr>
                                <div class="mb-3">
                                    <label for="" class="form-label">Card Name</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="card_name"
                                        id="card_name"
                                        aria-describedby="helpId"
                                        placeholder="Card Name"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Card NO</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="card_no"
                                        id="card_no"
                                        aria-describedby="helpId"
                                        placeholder="Card No"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Expired Month</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="exp_month"
                                        id="exp_month"
                                        aria-describedby="helpId"
                                        placeholder="Exp month"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Expired Year</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="exp_year"
                                        id="exp_year"
                                        aria-describedby="helpId"
                                        placeholder="EXP year"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">CVV : </label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="cvv"
                                        id="cvv"
                                        aria-describedby="helpId"
                                        placeholder="CVV"
                                        required
                                    />
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>