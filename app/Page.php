<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class, 'page_id');
    }

    public function visits()
    {
        return $this->hasMany(PageVisit::class, 'page_id');
    }

    public function getYesterdayCR()
    {
        $yesterdayOrders = $this->orders
            ->where('created_at', '<=', Carbon::yesterday()->endOfDay()->toDateTimeString())
            ->where('created_at', '>=', Carbon::yesterday()->startOfDay()->toDateTimeString())
            ->count();

        $yesterdayVisits = $this->visits
            ->where('created_at', '<=', Carbon::yesterday()->endOfDay()->toDateTimeString())
            ->where('created_at', '>=', Carbon::yesterday()->startOfDay()->toDateTimeString())
            ->count();

        if ($yesterdayOrders > 0 & $yesterdayVisits > 0) {
            $yesterdayCR = $yesterdayOrders / $yesterdayVisits;

            return $yesterdayCR;
        }

        return 0;
    }

    public function getTodayCR()
    {
        $todayOrders = $this->orders
            ->where('created_at', '<=', Carbon::now()->endOfDay()->toDateTimeString())
            ->where('created_at', '>=', Carbon::now()->startOfDay()->toDateTimeString())
            ->count();

        $todayVisits = $this->visits
            ->where('created_at', '<=', Carbon::now()->endOfDay()->toDateTimeString())
            ->where('created_at', '>=', Carbon::now()->startOfDay()->toDateTimeString())
            ->count();

        if ($todayOrders > 0 & $todayVisits > 0) {
            $todayCR = $todayOrders / $todayVisits;

            return $todayCR;
        }

        return 0;
    }

    public function getWeekCR()
    {
        $weekOrders = $this->orders
            ->where('created_at', '>=',Carbon::now()->startOfWeek())
            ->where('created_at', '<=', Carbon::now()->endOfWeek())
            ->count();

        $weekVisits = $this->visits
            ->where('created_at', '>=',Carbon::now()->startOfWeek())
            ->where('created_at', '<=', Carbon::now()->endOfWeek())
            ->count();

        if ($weekOrders > 0 & $weekVisits > 0) {
            $weekCR = $weekOrders / $weekVisits;

            return $weekCR;
        }

        return 0;
    }

}
