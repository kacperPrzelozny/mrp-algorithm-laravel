<?php

namespace App\Console\Commands;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CreateOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:create {period_id} {item_id} {amount}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command that inserts a new order and calculate MRP for the item';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $order = Order::query()->create([
            'period_id' => $this->argument('period_id'),
            'item_id' => $this->argument('item_id'),
            'amount' => $this->argument('amount'),
            'order_date' => Carbon::now(),
        ]);

        print_r($order);
    }
}
