@extends('layout/app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h4 class="mb-3">Create portfolio</h4>

                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif

                @if ( Session::has('validation_error'))
                    <div class="alert alert-danger">
                        {{ session('validation_error') }}
                    </div>
                @endif

                <form action="{{ route('store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="col-md-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="currencies">Currencies</label>
                            <select class="custom-select d-block w-100" id="currencies" name="trade[1][market]">
                                <option value="">Choose...</option>
                                @foreach($markets as $market)
                                    <option value="{{ $market->id }}">{{ $market->MarketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" step="0.0001" name="trade[1][price]">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="value">Purchase amount</label>
                            <input type="number" class="form-control" id="value" name="trade[1][value]">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="currencies">Currencies</label>
                            <select class="custom-select d-block w-100" id="currencies" name="trade[2][market]">
                                <option value="">Choose...</option>
                                @foreach($markets as $market)
                                    <option value="{{ $market->id }}">{{ $market->MarketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" step="0.0001" name="trade[2][price]">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="value">Purchase amount</label>
                            <input type="number" class="form-control" id="value" name="trade[2][value]">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="currencies">Currencies</label>
                            <select class="custom-select d-block w-100" id="currencies" name="trade[3][market]">
                                <option value="">Choose...</option>
                                @foreach($markets as $market)
                                    <option value="{{ $market->id }}">{{ $market->MarketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" step="0.0001" name="trade[3][price]">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="value">Purchase amount</label>
                            <input type="number" class="form-control" id="value" name="trade[3][value]">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="currencies">Currencies</label>
                            <select class="custom-select d-block w-100" id="currencies" name="trade[4][market]">
                                <option value="">Choose...</option>
                                @foreach($markets as $market)
                                    <option value="{{ $market->id }}">{{ $market->MarketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" step="0.0001" name="trade[4][price]">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="value">Purchase amount</label>
                            <input type="number" class="form-control" id="value" name="trade[4][value]">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="currencies">Currencies</label>
                            <select class="custom-select d-block w-100" id="currencies" name="trade[5][market]">
                                <option value="">Choose...</option>
                                @foreach($markets as $market)
                                    <option value="{{ $market->id }}">{{ $market->MarketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" step="0.0001" name="trade[5][price]">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="value">Purchase amount</label>
                            <input type="number" class="form-control" id="value" name="trade[5][value]">
                        </div>
                    </div>
                    <hr class="mb-4">

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>


    <br>
@endsection

