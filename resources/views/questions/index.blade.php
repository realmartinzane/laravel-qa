@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">Ask Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                   @foreach($questions as $q)
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{ $q->votes }}</strong> {{ str_plural('vote', $q->votes) }}
                                </div>
                                <div class="status {{ $q->status }}">
                                    <strong>{{ $q->answers }}</strong> {{ str_plural('answer', $q->answers) }}
                                </div>
                                <div class="view">
                                    {{ $q->views . " " . str_plural('view', $q->views) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="mt-0"><a href="{{ $q->url}}">{{ $q->title }}</a></h3>
                                <p class="lead">Asked by <a href="${{ $q->user->url }}">{{ $q->user->name }}</a></p>
                                <small class="text-muted">{{ $q->created_date }}</small>
                                {{ str_limit($q->body, 250)}}
                            </div>
                        </div>
                        <hr>
                   @endforeach
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
