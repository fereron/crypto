<?php

namespace App\Http\Controllers;

use App\Market;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $portfolios = Portfolio::with('trades.market')->get();

        foreach ($portfolios as $portfolio) {
            foreach ($portfolio->trades as $trade) {
                $portfolio->profit += $trade->price / $trade->market->rate* $trade->value * 100;
            }
        }

        return view('index', ['portfolios' => $portfolios]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $markets = Market::where('BaseCurrency', 'BTC')->get();

        return view('create', ['markets' => $markets]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $portfolio = Portfolio::create([
            'name' => $request->input('name')
        ]);

        foreach ($request->input('trade') as $trade) {
            $filtered = array_filter($trade, 'strlen');

            if ($filtered) {

                $validator = \Validator::make($filtered, [
                    'market' => 'required',
                    'price' => 'required',
                    'value' => 'required',
                ]);
                if ($validator->fails()) {
                    $portfolio->delete();
                    return redirect()->back()->with(['validation_error' => 'All fields in the column must be filled']);
                }

                $portfolio->trades()->create([
                    'market_id' => $trade['market'],
                    'price' => $trade['price'],
                    'value' => $trade['value']
                ]);
            }
        }

        return redirect()->route('index');
    }
}
