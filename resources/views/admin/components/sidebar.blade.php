<aside class="admin-sidebar">
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Overview</a></li>
            <li><a href="{{ url('/admin/users') }}">Users</a></li>
            <li><a href="{{ url('/admin/educations') }}">Education</a></li>
            <li><a href="{{ url('/admin/skills') }}">Skills</a></li>
            <li><a href="{{ url('/admin/projects') }}">Projects</a></li>
            <li><a href="{{ url('/admin/personal-details') }}">Personal Details</a></li>
            <li><a href="{{ url('/admin/experiences') }}">Experience</a></li>
            <li><a href="{{ url('/admin/achievements') }}">Achievements</a></li>
            <li><a href="{{ url('/admin/messages') }}">Messages</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
