<?php

namespace App\Jobs;

use App\Page;
use App\PageVisit;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SavePageVisitJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var Page
     */
    private $page;
    /**
     * @var array
     */
    private $additionalFields;

    /**
     * Create a new job instance.
     *
     * @param Page $page
     * @param array $additionalFields
     */
    public function __construct(Page $page, array $additionalFields)
    {
        $this->page = $page;
        $this->additionalFields = $additionalFields;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pageVisit = new PageVisit();

        $pageVisit->page_id = $this->page->id;
        $pageVisit->user_agent = $this->additionalFields['user_agent'];
        $pageVisit->ip = $this->additionalFields['ip'];
        $pageVisit->http_referer = $this->additionalFields['http_referer'];
        $pageVisit->save();
     }
}
