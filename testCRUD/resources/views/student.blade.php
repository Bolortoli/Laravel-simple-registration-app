<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js"></script>

@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <h1>Бүх оюутан</h1>
        <ul>
        @foreach($studentsList as $student)

            <li><a href="{{ $student[0] }}">{{ $student[0] }}</a></li>

        @endforeach
        </ul>
    </div>
@stop