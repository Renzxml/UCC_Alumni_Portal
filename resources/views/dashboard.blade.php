@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-2">Card 1</h2>
        <p class="text-gray-600">Some quick example text to build on the card title.</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-2">Card 2</h2>
        <p class="text-gray-600">Some quick example text to build on the card title.</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-2">Card 3</h2>
        <p class="text-gray-600">Some quick example text to build on the card title.</p>
    </div>
</div>

{{-- ✅ Chart Section --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-4">Users Overview</h2>
        <canvas id="usersChart"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold mb-4">Monthly Growth</h2>
        <canvas id="growthChart"></canvas>
    </div>
</div>

{{-- Chart.js Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Users Chart (Pie)
    const ctx1 = document.getElementById('usersChart').getContext('2d');
    new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ['Active', 'Inactive', 'Pending'],
            datasets: [{
                label: 'Users',
                data: [120, 45, 30],
                backgroundColor: ['#10B981', '#EF4444', '#F59E0B'],
            }]
        }
    });

    // Growth Chart (Line)
    const ctx2 = document.getElementById('growthChart').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'New Users',
                data: [10, 25, 18, 40, 32, 50],
                borderColor: '#3B82F6',
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                fill: true,
                tension: 0.3
            }]
        }
    });
</script>
@endsection
