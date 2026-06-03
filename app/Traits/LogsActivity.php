<?php

namespace App\Traits;

use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Model;

trait LogsActivity
{
    protected function logAction(string $action, ?Model $model = null, ?string $description = null, ?array $changes = null): ActivityLog
    {
        return ActivityLog::log($action, $model, $description, $changes);
    }
}
