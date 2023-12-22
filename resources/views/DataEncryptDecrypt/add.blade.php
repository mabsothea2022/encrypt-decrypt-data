<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="container">
    <div class="content">
        <h1>Add New Card</h1>
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
            <a class="btn btn-warning" href="{{ route("data.index") }}">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
