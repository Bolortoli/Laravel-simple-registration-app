<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js"></script>

@extends('layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card" style="background-color: #71acbc; padding: 15px;">
        <div class="card-body">
            <h5 class="card-title">Оюутны код оруулах   </h5>
            <form action="search" method="post">
                {{ csrf_field() }} 
                <div class="form-group">
                    <input type="text" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="Хайх" value="Хайх" class="btn btn-primary">
                </div>
            </form>

            <ul>
            @if($errors->any())

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            @endif
            </ul>
            @if(isset($result))
                @foreach($result as $student)
                    <h1>{{ $student }}</h1>
                @endforeach
            @endif
        </div>
    </div>
</div>

@stop
