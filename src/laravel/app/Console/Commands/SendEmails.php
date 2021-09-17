<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';
    protected static $defaultDescription = 'send email' ;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return \Illuminate\Database\Eloquent\Builder|\LaravelIdea\Helper\App\Models\_IH_Order_QB
     */
    public function handle()
    {
        return  Order::query() -> where( 'expire_at' ,'<' , now() )
            ->where( function( $query ) {
                $query -> where( 'payment_state' , '=' ,  Order::PAYMENT_STATE_UNPAID )
                    ->orWhere('payment_state', '=' , Order::PAYMENT_STATE_FAILED )  ->get() ;
            }) -> delete() ;
    }
}
