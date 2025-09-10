@extends('../layouts.admin_app')

@section('title', 'Analytics')

@section('content')

<div>
<div class="bg-white shadow rounded-lg p-6 flex flex-col items-start w-full">
      <h3 id="section-title" class="text-lg font-semibold mb-4 text-left w-full">Analytics</h3>
      <p id="section-desc" class="text-gray-600 text-left w-full">View analytics and reports here.</p>
      <input type="text" placeholder="Search..." class="mt-4 p-2 border border-gray-300 rounded w-full">

      <!-- Cards for Graphs and Charts -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mt-6">
            <!-- Card 1: Example Chart -->
            <div class="bg-gray-50 rounded-lg shadow p-4 flex flex-col items-start">
                 <h4 class="font-semibold mb-2">User Growth</h4>
                 <canvas id="userGrowthChart" class="w-full h-40"></canvas>
            </div>
            <!-- Card 2: Example Chart -->
            <div class="bg-gray-50 rounded-lg shadow p-4 flex flex-col items-start">
                 <h4 class="font-semibold mb-2">Active vs Inactive Users</h4>
                 <canvas id="activeUsersChart" class="w-full h-40"></canvas>
            </div>
      </div>

      <!-- Container that switches between table and cards -->
      <div id="content-container" class="mt-6 w-full">
            <!-- Default Alumni table -->
            <div id="table-view" class="overflow-x-auto">
                 <table class="min-w-full bg-white text-left">
                      <thead>
                            <tr>
                                 <th class="py-2 px-4 border-b text-left">Metric</th>
                                 <th class="py-2 px-4 border-b text-left">Value</th>
                                 <th class="py-2 px-4 border-b text-left">Change</th>
                            </tr>
                      </thead>
                      <tbody id="table-body">
                            <tr>
                                 <td class="py-2 px-4 border-b">Total Users</td>
                                 <td class="py-2 px-4 border-b">195</td>
                                 <td class="py-2 px-4 border-b text-green-600">+5%</td>
                            </tr>
                            <tr>
                                 <td class="py-2 px-4 border-b">Active Users</td>
                                 <td class="py-2 px-4 border-b">120</td>
                                 <td class="py-2 px-4 border-b text-red-600">-2%</td>
                            </tr>
                            <tr>
                                 <td class="py-2 px-4 border-b">New Signups</td>
                                 <td class="py-2 px-4 border-b">50</td>
                                 <td class="py-2 px-4 border-b text-green-600">+10%</td>
                            </tr>
                      </tbody>
</div>
@endsection