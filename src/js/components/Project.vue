<template>
    <div class="cell medium-6 project">
        <a class="project__image" target="_blank" :data-featherlight="projectData.imglarge"><img class="project-image" :src="projectData.img"></a>
        <h3 class="project-title">{{projectData.name}}</h3><a target="_blank" class="project-url" :href="projectData.url">{{projectData.url}}</a>
        <div class="project-body">
            <div class="project-body__content" v-html="projectData.body"></div>
            <ul v-if="projectData.notes && projectData.notes.length > 0" class="notes">
                <li v-for="note in projectData.notes">{{note}}</li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        props:{
            projectData: {}
        },
        computed: {

        },
        data(){
            return{
            }
        },
        methods:{

        }
    }


</script>

