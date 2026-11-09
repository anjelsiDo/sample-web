<aside class="sidebar">
    <a class="brand" href="{{ route('students.dashboard') }}">Student Portal</a>

    <nav aria-label="Main navigation">
        @foreach ([
            ['page' => 'dashboard', 'label' => 'Dashboard', 'url' => route('students.dashboard')],
            ['page' => 'courses', 'label' => 'My Courses', 'url' => route('students.section', ['section' => 'courses'])],
            ['page' => 'schedule', 'label' => 'Schedule', 'url' => route('students.section', ['section' => 'schedule'])],
            ['page' => 'grades', 'label' => 'Grades', 'url' => route('students.section', ['section' => 'grades'])],
            ['page' => 'messages', 'label' => 'Messages', 'url' => route('students.section', ['section' => 'messages'])],
        ] as $item)
            <a
                class="nav-link{{ $activePage === $item['page'] ? ' active' : '' }}"
                href="{{ $item['url'] }}"
                @if ($activePage === $item['page']) aria-current="page" @endif
            >{{ $item['label'] }}</a>
        @endforeach
    </nav>

    <div class="student">
        <span class="student-avatar">AM</span>
        <span><strong>Alex Morgan</strong><small>Student</small></span>
    </div>
</aside>
