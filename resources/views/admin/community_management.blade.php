@extends('../layouts.admin_app')

@section('title', 'Community Management')

@section('content')

<div>
    <h2 class="text-2xl font-semibold mb-6">Community Management</h2>

    <!-- Tabs -->
    <div class="bg-green-100 text-green-800 p-4 rounded mb-6 flex space-x-4">
        <button onclick="showTab('alumni')" id="btn-alumni"
            class="tab-btn bg-green-600 text-white px-4 py-2 rounded">Alumni</button>
        <button onclick="showTab('forums')" id="btn-forums"
            class="tab-btn bg-green-600 text-white px-4 py-2 rounded">Forums</button>
        <button onclick="showTab('jobs')" id="btn-jobs"
            class="tab-btn bg-green-600 text-white px-4 py-2 rounded">Jobs Request</button>
        <button onclick="showTab('events')" id="btn-events"
            class="tab-btn bg-green-600 text-white px-4 py-2 rounded">Events</button>
    </div>

    <!-- Shared Section -->
    <div class="bg-white shadow rounded-lg p-6 flex flex-col items-start w-full">
        <h3 id="section-title" class="text-lg font-semibold mb-4 text-left w-full">Alumni</h3>
        <p id="section-desc" class="text-gray-600 text-left w-full">Manage alumni members here.</p>

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

<!-- Script for Dynamic Content -->
<script>
    const content = {
        alumni: {
            title: "Alumni",
            desc: "Manage alumni members here.",
            type: "table",
            rows: `
                <tr>
                    <td class="py-2 px-4 border-b">John Doe</td>
                    <td class="py-2 px-4 border-b">Active</td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</button>
                        <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 ml-2">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">Jane Doe</td>
                    <td class="py-2 px-4 border-b">Inactive</td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</button>
                        <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 ml-2">Delete</button>
                    </td>
                </tr>
            `
        },
        forums: {
            title: "Forums",
            desc: "Manage community forums here.",
            type: "table",
            rows: `
                <tr>
                    <td class="py-2 px-4 border-b">General Discussion</td>
                    <td class="py-2 px-4 border-b">Pending</td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</button>
                        <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 ml-2">Delete</button>
                    </td>
                </tr>
            `
        },
        jobs: {
            title: "Job Requests",
            desc: "Manage job requests here.",
            type: "card",
            cards: [
                {
                    title: "Software Developer",
                    description: "Looking for a skilled Laravel + Vue developer.",
                    image: "https://via.placeholder.com/300x150",
                    likes: 12,
                    comments: 4,
                    shares: 2
                },
                {
                    title: "Graphic Designer",
                    description: "Hiring for branding and UI/UX projects.",
                    image: "https://via.placeholder.com/300x150",
                    likes: 8,
                    comments: 2,
                    shares: 1
                }
            ]
        },
        events: {
            title: "Events",
            desc: "Manage events here.",
            type: "card",
            cards: [
                {
                    title: "Alumni Homecoming",
                    description: "Join us for the 2025 alumni gathering.",
                    image: "https://via.placeholder.com/300x150",
                    likes: 25,
                    comments: 10,
                    shares: 5
                },
                {
                    title: "Tech Conference",
                    description: "Annual conference on AI, IoT, and Cloud Computing.",
                    image: "https://via.placeholder.com/300x150",
                    likes: 40,
                    comments: 15,
                    shares: 8
                }
            ]
        }
    };

    function showTab(tabId) {
        const tab = content[tabId];
        document.getElementById('section-title').innerText = tab.title;
        document.getElementById('section-desc').innerText = tab.desc;

        if (tab.type === "table") {
            document.getElementById('table-view').classList.remove('hidden');
            document.getElementById('card-view').classList.add('hidden');
            document.getElementById('table-body').innerHTML = tab.rows;
        } else {
            document.getElementById('table-view').classList.add('hidden');
            document.getElementById('card-view').classList.remove('hidden');

            // Render cards
            document.getElementById('card-view').innerHTML = tab.cards.map(card => `
                <div class="bg-white border rounded-lg shadow p-4 flex flex-col">
                    <img src="${card.image}" alt="${card.title}" class="rounded-lg mb-4">
                    <h4 class="font-semibold text-lg mb-2">${card.title}</h4>
                    <p class="text-gray-600 mb-4">${card.description}</p>
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>👍 ${card.likes}</span>
                        <span>💬 ${card.comments}</span>
                        <span>↗ ${card.shares}</span>
                    </div>
                    <div class="mt-4 flex space-x-2">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</button>
                        <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
                    </div>
                </div>
            `).join("");
        }

        // Reset button styles
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('bg-green-800'));
        document.getElementById('btn-' + tabId).classList.add('bg-green-800');
    }
</script>

@endsection
