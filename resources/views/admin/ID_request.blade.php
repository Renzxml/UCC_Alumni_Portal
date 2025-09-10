@extends('../layouts.admin_app')

@section('title', 'ID Request')

@section('content')

<div>
    <!-- Shared Section -->
    <div class="bg-white shadow rounded-lg p-6 flex flex-col items-start w-full">
        <h3 id="section-title" class="text-lg font-semibold mb-4 text-left w-full">ID Reuest</h3>
        <p id="section-desc" class="text-gray-600 text-left w-full">Manage ID Request here.</p>

        <input type="text" placeholder="Search..." class="mt-4 p-2 border border-gray-300 rounded w-full">

        <!-- Container that switches between table and cards -->
        <div id="content-container" class="mt-6 w-full">
            <!-- Default Alumni table -->
            <div id="table-view" class="overflow-x-auto">
                <table class="min-w-full bg-white text-left">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-left">Name</th>
                            <th class="py-2 px-4 border-b text-left">Status</th>
                            <th class="py-2 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                            <td class="py-2 px-4 border-b">John Doe</td>
                            <td class="py-2 px-4 border-b">Active</td>
                            <td class="py-2 px-4 border-b">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 ml-2">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Card view -->
            <div id="card-view" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Cards will be injected dynamically -->
            </div>
        </div>
    </div>
</div>
@endsection