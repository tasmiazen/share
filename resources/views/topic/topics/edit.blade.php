@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Topic #{{ $topic->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/topic/topics') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($topic, [
                            'method' => 'PATCH',
                            'url' => ['/topic/topics', $topic->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('topic.topics.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
