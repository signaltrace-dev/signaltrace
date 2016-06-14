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

  $('.nav a').on('click', function(){
    var section = $(this).data('section');
    if(section){
      $('html, body').animate({
          scrollTop: $('#' + section).offset().top
      }, 1000);
    }
  });

  $('.project').on('hover', function(){
    $(this).children('.project-body').first().show();
  });

  $('#work .thumbnail').on('click', function(){
    $('#projects').html('').hide();
    $('#work .thumbnail').removeClass('active');
    $(this).addClass('active');
    var clientName = $(this).data('client');
    $.getJSON("/data/projects.json", function(json) {
        if(json[clientName]){
          var client = json[clientName];
          var count = client.length;
          $(client).each(function(i, project){
            var $div = $('<div>', {class: 'column project'});
            $div.prepend('<h3 class="project-title">' + project.name + '</h4>');
            $div.prepend('<a target="_blank" data-featherlight href="/img/'+project.imglarge+'"><img class="project-image" src="/img/' + project.img + '" /></a>');
            $div.append('<a target="_blank" class="project-url" href="'+project.url+'">' + project.url + '</a>');
            $div.append('<div class="project-body">' + project.body + '</div>');
            $('#projects').append($div);

            if (!--count) {
              $('#projects').fadeIn();
              if(signaltrace.displayMode === "small"){
                $('html, body').animate({
                    scrollTop: $('#projects').offset().top - 45
                }, 1000);
              }
            }
          });
        }
    });
  });
});
