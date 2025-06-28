<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCPServer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url',
        'status',
        'description',
        'api_key',
        'last_ping_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'last_ping_at' => 'datetime',
    ];

    /**
     * The default status value.
     *
     * @var string
     */
    protected $attributes = [
        'status' => 'inactive',
    ];
}
