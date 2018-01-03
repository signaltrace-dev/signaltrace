<template>
    <div class="cell large-3 medium-4">
        <div :class="'client-logo ' + activeClass" :style="projectStyle" v-on:click="showData"></div>
    </div>
</template>
<script>
    export default {
        props:{
            group: {},
            selectedGroup: ''
        },
        computed: {
            activeClass: function(){
                return this.selectedGroup == this.group.client ? "active" : "";
            },
            projectStyle: function(){
                return this.group.clientLogo ? `background-image: url(${this.group.clientLogo})` : '';
            }
        },
        data(){
            return{
                isSelected: false
            }
        },
        methods:{
            showData: function(){
                this.$emit('group-selected', this.group);
                    $('.project__image').featherlight({
                    targetAttr: 'href'
                });
            }
        }
    }


</script>

