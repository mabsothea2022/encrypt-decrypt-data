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
 
  {{-- <style>
    h2.title {
        background: #104880;
        padding: 10px;
        text-align: center;
        color: #fff;
        border-radius: 5px;
        border-bottom: solid 7px #112233;
    }
    .my-form {
        border: solid 1px #123;
        padding: 30px;
        border-radius: 5px;
    }
    li.error {
        color: #e60e0e;
        font-weight: 600;
        list-style: none;
    }
    .has-error .form-control {
        border-color: #e41814;
    }
  </style> --}}
</head>
<body>
    <div class="container">
        <h2 class="title">Encrypt and Decrypt Data</h2>
        {{-- <div class="row">
            <div class="col-md-4 my-form">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ error }}</li>
                    @endforeach
                </ul>
                <form action="{{ route("data.store") }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-group {{ $errors->has('card_name') ? 'has-error' : '' }}">
                        <label for="card_name">Name on Card</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="card_name"
                            id="card_name"
                            aria-describedby="helpId"
                        />   
                    </div>
                    <div class="form-group {{ $errors->has('card_no') ? 'has-error' : '' }}">
                        <label for="card_no">Card Number</label>
                        <input 
                            type="text"
                            class="form-control"
                            name="card_no"
                            id="card_no"
                            aria-describedby="helpId"
                        />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('exp_month') || $errors->has('exp_year') ? 'has-error' : ''}}">
                                <label for="Expiration">Exp. Month/Year : </label>
                                <div class="row">
                                    <div class="col-md-6" style="padding-right: 5px;">
                                        <input 
                                            type="text"
                                            class="form-control"
                                            name="exp_month"
                                            id="exp_month"
                                            aria-describedby="helpId"
                                        />
                                    </div>
                                    <div class="col-md-6" style="padding-left: 5px;">
                                        <input type="text"
                                            class="form-control"
                                            name="exp_year"
                                            id="exp_year"
                                            aria-describedby="helpId"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('cvv') ? 'has-error' : ''}}">
                                <label for="">CVV</label>
                                <input type="text" 
                                    class="form-control" 
                                    name="cvv" 
                                    id="cvv"
                                    aria-describedby="helpId"    
                                />
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> --}}
        <div class="content">
            <h1>Add New Employee</h1>
            <hr>
            <form action="{{ route("data.store") }}" method="POST">
                @csrf
                @method("POST")
                <div class="table-responsive">
                    <table class="table table-primary">
                        <tbody>
                            <tr>
                                <div class="mb-3">
                                    <label for="" class="form-label"><strong>First Name</strong></label>
                                    <input 
                                        type="text"
                                        class="card_name"
                                        name="card_name"
                                        id="card_name"
                                        aria-describedby="helpId"
                                        placeholder="Card Name"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"><strong>Last Name</strong></label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="card_no"
                                        id="card_no"
                                        aria-describedby="helpId"
                                        placeholder="Card No"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"><strong>Gender</strong></label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="exp_month"
                                        id="exp_month"
                                        aria-describedby="helpId"
                                        placeholder="Exp month"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"><strong>Email Address</strong></label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="exp_year"
                                        id="exp_year"
                                        aria-describedby="helpId"
                                        placeholder="EXP year"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"><strong>Phone Number</strong></label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="cvv"
                                        id="cvv"
                                        aria-describedby="helpId"
                                        placeholder="CVV"
                                    />
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-warning" href="{{ route("data.index") }}">Back</a>
                <button type="submit" class="btn btn-primary">SAVE</button>
            </form>
        </div>
    
    </div>
</body>
</html>