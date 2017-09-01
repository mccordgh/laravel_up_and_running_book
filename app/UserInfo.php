<?php

namespace LaravelUpAndRunning;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    /**
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
//    public function scopeAllVips($query)
//    {
//        return $query->where('status', 'vip')->OrderBy('last_name');
//    }
//
//    public function scopeAllMembers($query)
//    {
//        return $query->where('status', 'vip')->OrderBy('last_name');
//    }
//
//    public function scopeAllNonMembers($query)
//    {
//        return $query->where('status', 'vip')->OrderBy('last_name');
//    }
//
//    private function getStatus($status)
//    {
//        return $query->
//    }
}
