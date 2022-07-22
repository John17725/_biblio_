@extends('layouts.app')
<script {{ asset('resources/js/app.js') }} defer></script>
<script>
    window.routes = {
        'getdatastudent' : '{{ route('prestamos.get.datastudent') }}',
        'getbookdatalend' : '{{ route('prestamos.get.databook') }}',
        'postnewlend' : '{{ route('prestamos.new.lend') }}',
        'postnewlends' : '{{ route('prestamos.new.lends') }}',
    }
</script>
@section('content')
    <div id='app'>
        <new-lend />
    </div>
@endsection
