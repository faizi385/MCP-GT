<template>
  <AppLayout>
    <div class="space-y-6 ">
      <div>
        <h1 class="text-2xl font-bold text-foreground">My MCP Server</h1>
        <p class="mt-1 text-sm text-muted-foreground">A description of an MCP server that does things.</p>
      </div>

      <div class="bg-white rounded-lg shadow-md p-4 sm:p-6 border border-border flex flex-col sm:flex-row sm:items-start gap-4">
        <div class="flex-1">
          <h2 class="text-lg font-semibold text-foreground mb-1">🚀 Your MCP Server is Live!</h2>
          <p class="text-sm text-muted-foreground mb-4">{Some extra context, description... click the button below to see your live MCP Server!}</p>
          <div class="flex flex-wrap sm:flex-nowrap gap-2 items-center w-full">
            <Button class="w-full sm:w-[300px]">
              View your MCP
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13v5a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h5m9-4l-6 6m6-6v4m0-4h-4" />
              </svg>
            </Button>
            <Input :model-value="'https://mcpgt.com/mcp/jkfl0ffsdeegjlkorsgcp'" readonly class="w-full sm:w-[300px]" />
          </div>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2">
         <div class="flex items-center gap-2 mb-4">
          <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <circle cx="4" cy="6" r="1.5" fill="currentColor" /><line x1="7" y1="6" x2="20" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <circle cx="4" cy="12" r="1.5" fill="currentColor" /><line x1="7" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <circle cx="4" cy="18" r="1.5" fill="currentColor" /><line x1="7" y1="18" x2="20" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
          <h3 class="text-base font-semibold text-foreground">Usage</h3>
        </div>
          <hr class="mb-6 mt-3 border-t border-gray-200" />
          <div class="flex gap-2 mb-3 text-sm font-medium text-muted-foreground">
            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded">VSCode</button>
            <button class="px-3 py-1 hover:bg-gray-100 rounded">Claude</button>
            <button class="px-3 py-1 hover:bg-gray-100 rounded">Cursor</button>
            <button class="px-3 py-1 hover:bg-gray-100 rounded">OpenAI</button>
            <button class="px-3 py-1 hover:bg-gray-100 rounded">AnyWhereLLM</button>
          </div>
          <p class="text-sm font-medium text-muted-foreground">1. Follow the <span class="text-pink-300">Use MCP servers in Vs Code documentation</span>, and create a <code class="bg-gray-100 px-1 rounded text-s">.vscode/mcp.json</code> file in your project</p>
          <div class="bg-gray-100 border border-gray-200 shadow rounded-lg p-4 mt-4">
              <pre class="text-sm overflow-x-auto text-gray-700">
<code>{
  "servers": {
    "my-mcp": {
      "type": "studio",
      "command": "npx",
      "args": [
        "myMcp@latest",
        "studio"
      ],
      "env": {
        "MCP_API_URL": "https://mcpgt.com/mcp/jklf83ohdcsnidsi3",
        "MCP_API_TOKEN": "********"
      }
    }
  }
}
</code>
  </pre>
          </div>
        </div>
        <div class="mt-2">
              <h3 class="text-base font-semibold text-muted-foreground flex items-center gap-2">
            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.828 10.172a4 4 0 010 5.656l-1.414 1.414a4 4 0 01-5.656-5.656l1.414-1.414m6.364-6.364a4 4 0 015.656 5.656l-1.414 1.414a4 4 0 01-5.656-5.656l1.414-1.414" />
            </svg>
            Base URL
          </h3>
         <div class="flex items-center">
           <Input :model-value="'https://mcpgt.com/mcp/jkfluyaarirw3ew'" readonly />
          </div>
          <h3 class="text-sm font-semibold text-muted-foreground mb-2 mt-5">Tools Included</h3>
          <ul class="space-y-2 text-sm">
            <li class="border rounded-md p-2">search <span class="text-muted-foreground text-xs block">a tool description</span></li>
            <li class="border rounded-md p-2">list_projects <span class="text-muted-foreground text-xs block">a tool description</span></li>
            <li class="border rounded-md p-2">create_projects <span class="text-muted-foreground text-xs block">a tool description</span></li>
            <li class="border rounded-md p-2">get_database_tables <span class="text-muted-foreground text-xs block">a tool description</span></li>
          </ul>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Components/Layout/AppLayout.vue'
import Input from '@/Components/Ui/Input.vue'
import Button from '@/Components/Ui/Button.vue' 
</script>
