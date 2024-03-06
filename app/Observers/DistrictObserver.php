<?php

namespace App\Observers;

use App\Models\District;
use Illuminate\Support\Facades\Log;

class DistrictObserver
{

    public function test()
    {
        Log::alert("METHOD ISLEDI");
    }

    /**
     * Handle the District "created" event.
     */
    public function created(District $district): void
    {
        //
    }

    /**
     * Handle the District "updated" event.
     */
    public function updated(District $district): void
    {
        //
    }

    /**
     * Handle the District "deleted" event.
     */
    public function deleted(District $district): void
    {
        //
    }

    /**
     * Handle the District "restored" event.
     */
    public function restored(District $district): void
    {
        //
    }

    /**
     * Handle the District "force deleted" event.
     */
    public function forceDeleted(District $district): void
    {
        //
    }
}
