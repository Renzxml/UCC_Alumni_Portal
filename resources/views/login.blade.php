<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Login</h2>
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required autofocus>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
