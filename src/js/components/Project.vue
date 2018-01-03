<template>
        <div class="cell medium-6 project">
            <a class="project__image" data-featherlight="#project-lightbox" target="_blank" v-on:click.prevent="projectSelected"><img class="project-image" :src="projectData.img"></a>
            <h3 class="project-title">{{projectData.name}}</h3>
            <a v-if="projectData.url" target="_blank" class="project-url" :href="projectData.url">{{projectData.url}}</a>
            <div class="project-body">
                <div class="project-body__content" v-html="projectData.body"></div>
                <ul v-if="projectData.notes && projectData.notes.length > 0" class="notes">
                    <li v-for="note in projectData.notes">{{note}}</li>
                </ul>
            </div>
            <project-lightbox :project="projectData" :is-open="lightboxOpen" v-on:lightbox-closed="closeLightbox"></project-lightbox>
        </div>
</template>
<script>
    import ProjectLightbox from './ProjectLightbox.vue';

    export default {
        props:{
            projectData: {}
        },
        computed: {

        },
        components: {
            'project-lightbox': ProjectLightbox,
        },
        data(){
            return{
                lightboxOpen: false,
            }
        },
        methods:{
            closeLightbox: function(){
                this.lightboxOpen = false;
            },
            showLightbox: function(project){
                this.lightboxOpen = true;
            },
            projectSelected: function(){
                this.$emit('project-selected', this.projectData);
                this.lightboxOpen = true;
            }
        }
    }
</script>

