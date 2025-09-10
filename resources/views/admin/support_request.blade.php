@extends('../layouts.admin_app')

@section('title', 'Support')

@section('content')
<div class="flex h-90vh bg-white shadow rounded-lg overflow-hidden">
    <!-- Sidebar (People list) -->
    <div class="w-1/3 border-r border-gray-200 flex flex-col min-h-0">
        <div class="p-4 border-b">
            <h3 class="text-lg font-semibold">Support Requests</h3>
            <input type="text" placeholder="Search..." 
                   class="mt-2 p-2 border border-gray-300 rounded w-full">
        </div>
        <!-- scrollable user list -->
        <div class="flex-1 overflow-y-auto min-h-0">
            <ul id="user-list" class="divide-y divide-gray-200">
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('John Doe')">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-gray-500 truncate">I need help with my account...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('Jane Smith')">
                    <p class="font-medium">Jane Smith</p>
                    <p class="text-sm text-gray-500 truncate">My payment didn’t go through...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('John Doe')">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-gray-500 truncate">I need help with my account...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('Jane Smith')">
                    <p class="font-medium">Jane Smith</p>
                    <p class="text-sm text-gray-500 truncate">My payment didn’t go through...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('John Doe')">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-gray-500 truncate">I need help with my account...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('Jane Smith')">
                    <p class="font-medium">Jane Smith</p>
                    <p class="text-sm text-gray-500 truncate">My payment didn’t go through...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('John Doe')">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-gray-500 truncate">I need help with my account...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('Jane Smith')">
                    <p class="font-medium">Jane Smith</p>
                    <p class="text-sm text-gray-500 truncate">My payment didn’t go through...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('John Doe')">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-gray-500 truncate">I need help with my account...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('Jane Smith')">
                    <p class="font-medium">Jane Smith</p>
                    <p class="text-sm text-gray-500 truncate">My payment didn’t go through...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('John Doe')">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-gray-500 truncate">I need help with my account...</p>
                </li>
                <li class="p-4 hover:bg-gray-100 cursor-pointer" onclick="openChat('Jane Smith')">
                    <p class="font-medium">Jane Smith</p>
                    <p class="text-sm text-gray-500 truncate">My payment didn’t go through...</p>
                </li>
                <!-- Add more dynamically -->
            </ul>
        </div>
    </div>

    <!-- Chat Window -->
    <div class="flex-1 flex flex-col min-h-0">
        <!-- Header -->
        <div class="p-4 border-b">
            <h3 id="chat-user" class="text-lg font-semibold">Name of Recipient</h3>
        </div>

        <!-- Messages (scrollable inside container) -->
        <div id="messages-container" 
             class="flex-1 p-4 overflow-y-auto space-y-3 bg-gray-50 min-h-0">
        </div>

        <!-- Input (sticks to bottom) -->
        <form id="message-form" 
              class="flex p-4 border-t" 
              autocomplete="off" 
              onsubmit="sendMessage(event)">
            <input type="text" id="message-input" 
                   class="flex-1 border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none" 
                   placeholder="Type your message..." />
            <button type="submit" 
                    class="bg-blue-600 text-white px-6 py-2 rounded-r-lg hover:bg-blue-700">
                Send
            </button>
        </form>
    </div>
</div>

<!-- JS -->
<script>
    function openChat(user) {
        document.getElementById("chat-user").textContent = user;
        const messages = document.getElementById("messages-container");
        messages.innerHTML = `
            <div class="flex justify-start">
                <div class="bg-gray-300 text-gray-800 rounded-lg px-4 py-2 max-w-xs">
                    Hi, I need help with my account.
                </div>
            </div>
            <div class="flex justify-end">
                <div class="bg-blue-500 text-white rounded-lg px-4 py-2 max-w-xs">
                    Sure, what seems to be the problem?
                </div>
            </div>
        `;
    }

    function sendMessage(e) {
        e.preventDefault();
        const input = document.getElementById("message-input");
        if (input.value.trim() === "") return;

        const messages = document.getElementById("messages-container");

        const msg = document.createElement("div");
        msg.className = "flex justify-end";
        msg.innerHTML = `<div class="bg-blue-500 text-white rounded-lg px-4 py-2 max-w-xs">${input.value}</div>`;
        messages.appendChild(msg);

        // scroll to bottom
        messages.scrollTop = messages.scrollHeight;

        input.value = "";
    }
</script>
@endsection
