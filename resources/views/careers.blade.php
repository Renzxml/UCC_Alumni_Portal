@extends('layouts.app')

@section('title', 'Careers')

@section('content')
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <form action="#" method="POST">
        @csrf
        <div>
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required>
        </div>
        <div>
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div>
            <label for="description">Job Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <div>
            <label for="requirements">Requirements:</label>
            <textarea id="requirements" name="requirements" rows="3"></textarea>
        </div>
        <div>
            <label for="contact_email">Contact Email:</label>
            <input type="email" id="contact_email" name="contact_email" required>
        </div>
        <div>
            <button type="submit">Post Job</button>
        </div>
    </form>
</div>
@endsection