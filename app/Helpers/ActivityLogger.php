<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ActivityLogger
{
    /**
     * Log aktivitas user
     */
    public static function log(string $activityType, string $module, string $description, array $properties = [])
    {
        DB::table('activity_logs')->insert([
            'user_id' => Auth::id(),
            'activity_type' => $activityType,
            'module' => $module,
            'description' => $description,
            'properties' => json_encode($properties),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    /**
     * Log pembuatan data baru
     */
    public static function created(string $module, string $itemName, array $data = [])
    {
        self::log(
            'create',
            $module,
            "Membuat {$module} baru: {$itemName}",
            $data
        );
    }

    /**
     * Log update data
     */
    public static function updated(string $module, string $itemName, array $data = [])
    {
        self::log(
            'update',
            $module,
            "Memperbarui {$module}: {$itemName}",
            $data
        );
    }

    /**
     * Log penghapusan data
     */
    public static function deleted(string $module, string $itemName, array $data = [])
    {
        self::log(
            'delete',
            $module,
            "Menghapus {$module}: {$itemName}",
            $data
        );
    }
}