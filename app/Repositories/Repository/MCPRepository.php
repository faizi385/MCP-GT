<?php

namespace App\Repositories\Repository;

use App\Repositories\Interfaces\MCPInterface;
use App\Models\MCPServer;
use App\Repositories\Repository\BaseRepository;

class MCPRepository extends BaseRepository implements MCPInterface
{
    function __construct(MCPServer $model)
    {
        parent::__construct($model);
    }

 
}
