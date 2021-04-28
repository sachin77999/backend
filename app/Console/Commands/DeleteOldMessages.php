<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Message;
class DeleteOldMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteoldmessages';

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
     * @return int
     */
    public function handle()
    {
//        return 0;
   //  echo "whatever \n";  
$messages=Message::whereDate('created_at','>',Carbon::now()->subMinutes(10))->count();
dd($messages);
}
}
