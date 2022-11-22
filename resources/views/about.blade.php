<html>
<head>
    <tittle> my project </tittle>
</head>
<body>
    
 About page<br>
{{ $fullName }} 
{!! $college !!}

@foreach ($student as $students)
{{$students}}<br>

@endforeach

@if($fullName == 'milee patel')
<br>hurree<br><br>
@else($fullName == 'dhvani patel')
Milee<br>
@endif

@extends('layouts.main')
@push('title')
     <title>about</title>
@endpush     
@section('main-section')
milee patel
@endsection

</body>
</html>
