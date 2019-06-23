<answer-component :answer="{{ $answer }}" inline-template>
    <div class="media post">
        <vote-component
            :model="{{ $answer }}"
            :name="'answer'">
        </vote-component>

        <div class="media-body" >
            <form v-show="editing" @submit.prevent="update">
                <div class="form-group" >
                    <textarea rows="10" v-model="body" class="form-control" required></textarea>
                </div>
                <button class="btn btn-outline-primary" :disabled="isInvalid">Update</button>
                <button class="btn btn-outline-secondary" @click="cancel" type="button">Cancel</button>
            </form>
            <div v-show="!editing">
                <div v-html="bodyHtml"></div>
                <div class="row">
                    <div class="col-4">
                        <div class="ml-auto">
                            @can('update', $answer)
                                <a @click.prevent="edit" class="btn btn-sm btn-outline-info">Edit</a>
                            @endcan
                            @can('delete', $answer)
                            <button @click="destroy" class="btn btn-sm btn-outline-danger">Delete</button>
                            @endcan
                        </div>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <user-info-component
                        :model="{{ $answer }}"
                        :label="'Answered'">

                        </user-info-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</answer-component>