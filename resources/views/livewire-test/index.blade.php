{{-- <html>
  <head>
    @livewireStyles
  </head>
  <body>
    livewireテスト
    <div>
      @if (session()->has('message'))
          <div>
              {{ session('message') }}
          </div>
      @endif
    </div> --}}
    {{-- <livewire:counter /> --}}
    {{-- @livewire('counter')
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
  </body>
</html> --}}
<html>
  <head>
    @livewireStyles
  </head>
  <body>
    livewireテスト
    @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
    @endif

    {{-- <livewire:counter /> --}}
    @livewire('counter')
    @livewireScripts
  </body>
</html>