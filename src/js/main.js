import Vue from 'vue'
import featherlight from 'featherlight';
import foundation from 'foundation';
import Headhesive from 'headhesive';
import whatInput from 'what-input';
import Project from './components/Project.vue';
import ProjectGroup from './components/ProjectGroup.vue';

$(document).ready(function(){
  var signaltrace = {};

  if(($('.layout-large').css("display") != "none")){signaltrace.displayMode = "large";}
  if(($('.layout-medium').css("display") != "none")){signaltrace.displayMode = "medium";}
  if(($('.layout-small').css("display") != "none")){signaltrace.displayMode = "small";}

  var options = {
      offset: '#work',
      offsetSide: 'top',
      classes: {
          clone:   'nav--clone',
          stick:   'nav--stick',
          unstick: 'nav--unstick'
      }
  };
  var header = new Headhesive('.nav', options);

  $('.nav a').on('click', function(e){
    e.preventDefault();
    var section = $(this).data('section');
    if(section && $('#' + section).length > 0){
      $('html, body').animate({
          scrollTop: $('#' + section).offset().top
      }, 1000);
    }
  });

  new Vue({
    el: '#projects',
    data: {
        projectData: {},
        selectedGroup: '',
        selectedProjects: []
    },
    components: {
      'project': Project,
      'project-group': ProjectGroup
    },
    methods: {
      showProjects: function(group){
        this.selectedGroup = group.client;
        this.selectedProjects = group.projects;
      }
    },
    mounted: function(){
      let app = this;
      
      $.getJSON("/data/projects.json", function(allProjects) {
        if(allProjects){
          app.projectData = allProjects;
        }
      });
    }
  });
});


