<template>
    <div class="lightbox" ref="projectLightbox">
        <div v-if="project && project.images" class="project-images">
            <img v-for="image in project.images" :src="image"></img>
        </div>
    </div>
</template>
<script>
    import slick from 'slick-carousel';
    import slickLightbox from 'slick-lightbox';
    export default {
        props:{
            isOpen: false,
            project: {}
        },
        computed: {

        },
        data(){
            return{
                currentProject: this.project
            }
        },
        methods:{

        },
        mounted: function(){

        },
        watch:{
            currentProject: function(){

            },
            isOpen: function(){
                let comp = this;
                if(this.isOpen)
                {
                    if(this.project && this.project.images){
                        let element = $(comp.$refs.projectLightbox);
                        $.featherlight(element, {
                            afterOpen: function(){
                                 $('.project-images').slick();
                            },
                            afterClose: function(){
                                if($('.slick-initialized').length > 0)
                                {
                                    $('.project-images').slick('unslick');                   
                                }
                                comp.$emit('lightbox-closed');
                                comp.currentProject = {};
                            }
                        });
                    }

                }
                else{

                }
            }
        },
        updated: function(){

        }
    }


</script>



