<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    @if (isset($title))
      {{ $title }}
    @else
      {{ config('app.name', 'Dhiya Az Zahra') }}
    @endif
  </title>

  <!-- Fonts Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/b1f9711591.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
  <!-- Navbar -->
  @include('layouts.navigation')

  <!-- Sidebar -->
  @include('layouts.sidebar')

  <!-- Content -->
  <div class="flex flex-col w-full gap-6 px-4 py-10 sm:px-6 md:px-8 lg:ps-72">
    {{ $slot }}
  </div>

  @livewireScripts
</body>

{{-- <body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</body> --}}

</html>
