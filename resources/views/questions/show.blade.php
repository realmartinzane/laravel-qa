@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-items-center">
                            <h1>{{ $question->title }}</h2>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="media">
                        <vote-component
                            :model="{{ $question }}"
                            :name="'question'">
                        </vote-component>
                        <div class="media-body">
                            {!! $question->body_html !!}
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <user-info-component
                                        :model="{{ $question }}"
                                        :label="'Asked'">
                                    </user-info-component>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <answers-component
        :question="{{ $question }}">
    </answers-component>
    @include('answers._create')
</div>
@endsection
