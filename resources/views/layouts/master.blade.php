<!-- !-- resources/views/layouts/master.blade.php--> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>

<div>
    @include('layouts.header')
</div>

<div>
    @yield('content')
</div>

<div>
    @include('layouts.footer')
</div>

@yield('script ')
</body>
</html>


{{-- @include()
@yield() -> @section()
@stack() -> @push() dung cho nhung thang con --}}


{{-- <a href="{{ asset('assets/backend/plugins/.....')  }}"></a> Cach nay chen duong dan tuyet doi vao *nen dung*
or <a href="http/laravel19.zent/assets/backend/plugins/......"></a> --}}