<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }} | Student Portal</title>
    @vite('resources/css/app.css')
</head>
<body class="portal">
    @include('partials.student-sidebar', ['activePage' => $activePage])

    <main class="main-content">
        <header class="topbar">
            <span>Student Portal <span class="breadcrumb">/ {{ $pageTitle }}</span></span>
            <a class="profile-link" href="#profile">Alex Morgan</a>
        </header>

        <div class="blank-page" aria-label="{{ $pageTitle }}"></div>
    </main>
</body>
</html>
