<template>
    <div class="row mt-4 v-cloak" v-if="count">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ title }}</h2>
                    </div>
                    <hr>
                    <answer-component v-for="answer in answers" :key="answer.id" :answer="answer">

                    </answer-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AnswerComponent from './Answer';

export default {
    props: ['answers', 'count'],

    components:
    {
        AnswerComponent
    },

    computed:
    {
        title()
        {
            return `${this.count} ${this.count > 1 ? 'Answers' : 'Answer'}`;
        }
    }
}
</script>
