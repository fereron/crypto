<?php

namespace App\Console\Commands;

use App\Market;
use Illuminate\Console\Command;
use Pepijnolivier\Bittrex\Bittrex;

class Rates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update rates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->updateRates();
    }

    private function updateRates()
    {
        $rates = Bittrex::getMarketSummaries();

        foreach ($rates['result'] as $rate) {

            $market = Market::where('MarketName', $rate['MarketName'])->first();

            if ($market) {

                $market->rate = $rate['Last'];
                $market->save();
            }
        }
    }
}
