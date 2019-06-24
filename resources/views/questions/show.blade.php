@extends('layouts.app')

@section('content')
    <question-page-component
        :question="{{ $question }}">
    </question-page-component>
@endsection
