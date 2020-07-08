<?php

namespace App\Console\Commands;

use App\Models\jobs;
use Carbon\Carbon;
use Illuminate\Console\Command;


class DeleteJobCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:job';

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
     * @return mixed
     */
    public function handle()
    {
        jobs::where('enddate','<',Carbon::now('Asia/Ho_Chi_Minh'))->delete();
        $this->info("delete:job chạy thành công");
    }
}
