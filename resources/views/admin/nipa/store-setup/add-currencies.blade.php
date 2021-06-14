@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Add Currencies</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Fill in the form below to specify the account details.</p>
                </div>
                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">Currency display configurations</h6>
                        <hr />
                        <p>Configure how the currency is presented to your customers.</p>
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Display name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Default to DOP in these countries
                                            </label>
                                            <input type="text" class="form-control">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6 class="mb-0 text-uppercase">Transactions</h6>
                        <hr />
                        <p>Transacting currency</p>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    {{-- <div>
                                        <div class="breadcrumb-title-two">
                                            <h6 class="mb-0 text-uppercase">Transactions</h6>

                                        </div>

                                        <div class="breadcrumb-subtitle">
                                            <p>Transacting currency</p>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">DOP - Dominican
                                                    Peso</label>
                                                <p>Customers will be charged in DOP. Must set up payment provider that
                                                    supports this currency.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">BDT -
                                                    Bangladeshi Taka (Default currency)</label>
                                                <p>Customers will see prices in DOP but will be charged in BDT.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <div class="breadcrumb-title-two">
                                            <h6 class="mb-0 text-uppercase">Exchange rate</h6>

                                        </div>

                                        <div class="breadcrumb-subtitle">
                                            <p>Set the exchange rate to autoconvert your prices and shipping quotes for
                                                this currency. Use price lists to set fixed prices by currency.</p>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Set static conversion rate</label> <br>
                                            <p>1 BDT equals</p>
                                            <select class="form-control col-md-12 mb-3"
                                                aria-label="Default select example">
                                                <option value="">000</option>
                                            </select>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <h6 class="mb-0 text-uppercase">Currency display</h6>
                        <hr />
                        <p>Customize how your currency displays.</p>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div>
                                        <div class="breadcrumb-title-two">
                                            <h4 class="mb-0 text-uppercase">$1,234.56</h4>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Symbol</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Symbol placement</label> <br>
                                            <select class="form-control col-md-12 mb-3"
                                                aria-label="Default select example">
                                                <option value="">......</option>
                                            </select>
                                        </div>
                                   
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Decimal token</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Thousand token</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Decimal places</label> <br>
                                            <select class="form-control col-md-12 mb-3"
                                                aria-label="Default select example">
                                                <option value="">.....</option>
                                            </select>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->
</div>
<!--End content-wrapper-->

@endsection