import Vue from 'vue'
import featherlight from 'featherlight';
import foundation from 'foundation';
import Headhesive from 'headhesive';
import whatInput from 'what-input';
import Project from './components/Project.vue';
import ProjectGroup from './components/ProjectGroup.vue';
import ProjectLightbox from './components/ProjectLightbox.vue';

$(document).ready(function(){
  var signaltrace = {};


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
      displayMode: 'large',
      lightboxOpen: false,
      projectData: {},
      selectedGroup: '',
      selectedProjects: [],
      selectedProject: {}
    },
    components: {
      'project': Project,
      'project-group': ProjectGroup,
      'project-lightbox': ProjectLightbox
    },
    methods: {
      setLayout: function(){
        let app = this;
        if(($('.layout-large').css("display") != "none")){app.displayMode = "large";}
        if(($('.layout-medium').css("display") != "none")){app.displayMode = "medium";}
        if(($('.layout-small').css("display") != "none")){app.displayMode = "small";}
      },
      showProjects: function(group){
        this.selectedGroup = group.client;
        this.selectedProjects = group.projects;

        if(this.displayMode === 'small'){
          setTimeout(function(){
            $('body, html').animate({
              scrollTop: $('#project-list').offset().top
            }, 1000);
          }, 100);
        }
      }
    },
    mounted: function(){
      let app = this;

      app.setLayout();
      $(window).on('resize', function(){
        app.setLayout();
      })

      $.getJSON("/data/projects.json", function(allProjects) {
        if(allProjects){
          app.projectData = allProjects;
        }
      });
    }
  });
});


