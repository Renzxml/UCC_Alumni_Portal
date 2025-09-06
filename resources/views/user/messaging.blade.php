@extends('layouts.user_app')

@section('title', 'Messages')

@section('content')
<!-- Bootstrap Icons only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .chat-wrapper {
        display: flex;
        height: 85vh;
        gap: 1rem;
    }

    .sidebar {
        width: 25%;
        background: white;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        padding: 1rem;
    }

    .chat-content {
        flex: 1;
        background: white;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
    }

    .chat-area {
        flex: 1;
        padding: 1rem;
        overflow-y: auto;
    }

    .chat-input {
        display: flex;
        border-top: 1px solid #ddd;
        padding: 0.75rem;
    }

    .chat-input input {
        flex: 1;
        border-radius: 20px;
        border: 1px solid #ddd;
        padding: 0.5rem 1rem;
        outline: none;
    }

    .chat-input button {
        margin-left: 0.5rem;
        border-radius: 50%;
    }
</style>

<div class="container-fluid py-3">
    <div class="chat-wrapper">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Menu -->
            <div class="mb-3">
                <button class="btn btn-link text-dark fw-medium d-flex align-items-center gap-2 p-0 mb-2">
                    <i class="bi bi-pencil-square"></i> Create Request
                </button>
                <button class="btn btn-link text-dark fw-medium d-flex align-items-center gap-2 p-0">
                    <i class="bi bi-clock-history"></i> History
                </button>
            </div>

            <!-- User list -->
            <div class="list-group flex-grow-1 overflow-auto">
                <button class="list-group-item list-group-item-action d-flex align-items-start gap-2 active">
                    <i class="bi bi-person-circle fs-3"></i>
                    <div>
                        <div class="fw-bold">Juan Dela Cruz</div>
                        <small class="text-muted">Need help with documents.</small>
                    </div>
                </button>
                <button class="list-group-item list-group-item-action d-flex align-items-start gap-2">
                    <i class="bi bi-person-circle fs-3"></i>
                    <div>
                        <div class="fw-bold">Maria Santos</div>
                        <small class="text-muted">Can we reschedule?</small>
                    </div>
                </button>
            </div>
        </div>

        <!-- Chat Content -->
        <div class="chat-content">
            <div class="chat-area">
                <p class="text-muted">Select a user to start messaging...</p>
            </div>

            <div class="chat-input">
                <input type="text" placeholder="Type a message...">
                <button class="btn btn-primary">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap (JS only for icons/buttons) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
