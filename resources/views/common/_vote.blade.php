@if($model instanceof App\Question)
    @php
        $name = 'question';
        $URI = 'questions';
    @endphp
@elseif($model instanceof App\Answer)
    @php
        $name = 'answer';
        $URI = 'answers';
    @endphp
@endif

@php
    $formId = $name . '-' . $model->id;
    $formAction = "/{$URI}/{$model->id}/vote";
@endphp


<div class="d-flex flex-column vote-controls">
    <a title="This {{ $name }} is useful" 
        class="vote-up {{ Auth::guest() ? 'off' : '' }}"
        onclick="event.preventDefault(); document.querySelector('#up-vote-{{ $formId }}').submit();">
        <i class="fas fa-caret-up fa-3x"></i>
    </a>
    <form action="{{ $formAction }}" method="POST" id="up-vote-{{ $formId }}" style="display: none">
        @csrf
        <input type="hidden" name="vote" value="1">
    </form>
    <span class="votes-count">{{ $model->votes_count }}</span>
    <a title="This {{ $name }} is not useful" 
        class="vote-down {{ Auth::guest() ? 'off' : '' }}"
        onclick="event.preventDefault(); document.querySelector('#down-vote-{{ $formId }}').submit();">
        <i class="fas fa-caret-down fa-3x"></i>
    </a>
    <form action="{{ $formAction }}" method="POST" id="down-vote-{{ $formId }}" style="display: none">
        @csrf
        <input type="hidden" name="vote" value="-1">
    </form>

    @if($model instanceof App\Question)
        <favorite-component
            :question="{{ $model }}">
        </favorite-component>
    @elseif($model instanceof App\Answer)
        <accept-component
            :answer="{{ $model }}">
        </accept-component>
    @endif
</div>