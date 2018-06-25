<?php

namespace App\Console\Commands;

use App\Page;
use Illuminate\Console\Command;

class CountCRCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count-pages-cr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Counting CR for pages';

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
        $pages = Page::all();

        foreach ($pages as $page) {
            $page->yesterday_cr = $page->getYesterdayCR();
            $page->today_cr = $page->getTodayCR();
            $page->week_cr = $page->getWeekCR();
            $page->save();
        }
    }
}
