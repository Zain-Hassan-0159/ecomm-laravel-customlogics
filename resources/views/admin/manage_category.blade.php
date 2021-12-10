@extends('admin/layout');

@section('container')
<h1 class="mb-5">Manage Category</h1>
<a href="category">
    <button class="btn btn-success">Back Category</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Credit Card</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Pay Invoice</h3>
            </div>
            <hr>
            <form action="" method="post" novalidate="novalidate">
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                    <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Pay $100.00</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection