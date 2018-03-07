<?php

namespace App\Console\Commands;

use App\Market;
use Illuminate\Console\Command;
use Pepijnolivier\Bittrex\Bittrex;


class Markets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:markets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update markets';

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
        $this->updateMarkets();
    }

    private function updateMarkets()
    {
        $markets = Bittrex::getMarkets();

        foreach ($markets['result'] as $i => $res) {

            if (Market::where('MarketName', $res['MarketName'])->first()) {
                continue;
            }

            Market::create($res);
        }
    }
}
