<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BlameableObserver
{
    /**
     * @param Model $model
     */
    public function creating(Model $model)
    {
        $model->created_by = Auth::user()->id;
        $model->updated_by = Auth::user()->id;
    }

    /**
     * @param Model $model
     */
    public function updating(Model $model)
    {
        $model->updated_by = Auth::user()->id;
    }
}
