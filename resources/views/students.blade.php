<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="portal">
    @include('partials.student-sidebar', ['activePage' => 'dashboard'])

    <main class="main-content" id="dashboard">
        <header class="topbar">
            <span>Student Portal <span class="breadcrumb">/ Dashboard</span></span>
            <a class="profile-link" href="#profile">Alex Morgan</a>
        </header>

        <div class="dashboard">
            <section class="welcome">
                <p class="eyebrow">STUDENT OVERVIEW</p>
                <h1>Welcome back, Alex</h1>
                <p>Here’s a quick look at your semester.</p>
            </section>

            <section class="summary" aria-label="Academic summary">
                <article class="card">
                    <p>Enrolled courses</p>
                    <strong>4</strong>
                </article>
                <article class="card" id="grades">
                    <p>Current GPA</p>
                    <strong>3.82</strong>
                </article>
                <article class="card">
                    <p>Credits completed</p>
                    <strong>42 <small>/ 60</small></strong>
                </article>
            </section>

            <div class="content-grid">
                <section class="panel" id="courses">
                    <h2>My Courses</h2>
                    <a class="course" href="#courses">
                        <span><strong>Human-Computer Interaction</strong><small>CS 340 · Prof. Williams</small></span>
                        <span class="grade">A-</span>
                    </a>
                    <a class="course" href="#courses">
                        <span><strong>Applied Mathematics</strong><small>MATH 221 · Dr. Patel</small></span>
                        <span class="grade">B+</span>
                    </a>
                    <a class="course" href="#courses">
                        <span><strong>Data Structures &amp; Algorithms</strong><small>CS 250 · Prof. Chen</small></span>
                        <span class="grade">A</span>
                    </a>
                </section>

                <section class="panel" id="schedule">
                    <h2>Upcoming</h2>
                    <article class="event">
                        <time>10:00 AM</time>
                        <span><strong>Human-Computer Interaction</strong><small>Science Hall, Room 204</small></span>
                    </article>
                    <article class="event">
                        <time>1:30 PM</time>
                        <span><strong>Applied Mathematics</strong><small>West Building, Room 12</small></span>
                    </article>
                    <a class="more-link" href="#schedule">View schedule →</a>
                </section>
            </div>

            <section class="notice" id="messages">
                <h2>Campus announcement</h2>
                <p>Midterms are coming up. Check your courses for review sessions and exam dates.</p>
            </section>
        </div>
    </main>
</body>
</html>
