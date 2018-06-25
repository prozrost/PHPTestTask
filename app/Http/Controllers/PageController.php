<?php

namespace App\Http\Controllers;

use App\Jobs\SavePageVisitJob;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('pages_index', ['pages' => $pages]);
    }

    public function get(Page $page, Request $request)
    {
        $additionalFields = [
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'http_referer' => $request->server('HTTP_REFERER')
        ];

        $this->dispatch(new SavePageVisitJob($page, $additionalFields));

        return view("page_". $page->id);
    }
}
