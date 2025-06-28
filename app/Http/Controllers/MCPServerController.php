<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Crudable;
use App\Repositories\Interfaces\MCPInterface;
use Illuminate\Http\Request;

class MCPServerController extends Controller
{   use Crudable;
    protected $mcpRepository;

    public function __construct(MCPInterface $mcpRepository)
    {
        $this->mcpRepository = $mcpRepository;
    }

 
}
