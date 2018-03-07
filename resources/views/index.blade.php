@extends('layout/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Portfolio Name</th>
                        <th>Currencies</th>
                        <th>Profit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{ $portfolio->name }}</td>
                            <td>
                                @foreach($portfolio->trades as $key => $trade)
                                    {{ $trade->market->MarketName }}

                                    @if ($key !== ($portfolio->trades->count() - 1))
                                        {{ "," }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $portfolio->profit }} %</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

