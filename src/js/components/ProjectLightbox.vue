<template>
    <div id="project-lightbox" class="lightbox">
        <div id="project-images" v-if="project && project.images" class="slider project-images">
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
            }
        },
        methods:{

        },
        mounted: function(){

        },
        watch:{
            isOpen: function(){
                let comp = this;
                if(this.isOpen)
                {
            if(this.project && this.project.images){


                
                $.featherlight('#project-lightbox', {
                    afterOpen: function(){
                        console.dir(comp.project);
                        

                    $('.project-images').slick();
                        console.log('huh');
                    },
                    afterClose: function(){
                                                                if($('.slick-initialized').length > 0)
                {
                    $('.project-images').slick('unslick');                   
                }
                        comp.$emit('lightbox-closed');
                    }
                });
                
                
            }

                }
            }
        },
        updated: function(){

        }
    }


</script>



