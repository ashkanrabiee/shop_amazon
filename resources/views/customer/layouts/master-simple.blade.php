<!DOCTYPE html>
<html lang="fa">

@include('customer.layouts.head-tag')
@yield('head-tag')

<body>

@include('customer.layouts.header')

@yield('content')


@include('customer.layouts.footer')

@include('customer.layouts.script')
@yield('script')

</body>

</html>