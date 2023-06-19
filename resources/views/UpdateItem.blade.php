@extends('Layout')
@section('content')

    <div class="card" style="width: 70%;padding: 10px;margin: 0 auto;">
        <div class="card-header"><h2>Inventory Information</h2></div>
            <div class="card-body">
                <div class="modal-body">
                    <form action="/inventorydata/{{$inventory_data->id}}/update" method="POST">
                        {{csrf_field()}}

                        <!-- input fill for product name -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input name="ItemName" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name" value="{{$inventory_data->ItemName}}">
                        </div>

                        <!-- input fill for item quantity -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                            <input name="ItemQuantity" type="integer" class="form-control" id="exampleFormControlInput1" placeholder="Enter Quantity" value="{{$inventory_data->ItemQuantity}}">
                        </div>

                        <!-- input fill for item price -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input name="ItemPrice" type="double" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price (per item)" value="{{$inventory_data->ItemPrice}}">
                        </div>

                        <!-- input fill for item expiry date -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Expiry Date</label>
                            <input name="ItemExpiryDate" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Expiry Date" value="{{$inventory_data->ItemExpiryDate}}">
                        </div>

                        <!-- input fill for item latest update -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Latest Update</label>
                            <input name="ItemDateUpdated" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Latest Update" value="{{$inventory_data->ItemDateUpdated}}">
                        </div>

                        <!-- button for submit -->
                        <button type="submit" class="btn btn-success btn-sm">UPDATE</button>
                    </form>
                    <!-- button for cancel -->
                    </div>
                    <a href="/inventorydata" class="btn btn-danger btn-sm" title="Back to Main Page"><i class="fa fa-plus" aria-hidden="true"></i>CANCEL</a>
                </div>
            </div>
        </div>
    </div>

@endsection