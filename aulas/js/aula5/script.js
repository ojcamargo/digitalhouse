var nav = {
  type: 'slide',
  slide:{
    next: function next(){
      if($('#sec-'+(app.slide+1)).length == 0) return;
      $('#sec-'+app.slide).fadeOut(function(){
        app.subitem = 0;
        app.slide++;
        var callback = app.special[nav.type][app.slide] || function(){};
        $('#sec-'+app.slide).fadeIn(callback);
      });
    },
    last: function last(){
      if(app.slide == 0) return;
      $('#sec-'+app.slide).fadeOut(function(){
        app.subitem = 0;
        app.slide--;
        var callback = app.special[nav.type][app.slide] || function(){};
        $('#sec-'+app.slide).fadeIn(callback);
      });
    }
  },
  subitem:{
    next: function next(){
      if($('#sec-'+app.slide+' .sub-'+(app.subitem+1)).length == 0){
        if($('#sec-'+(app.slide+1)).length == 0) return;
        nav.type = 'slide'
        app.nav = nav[nav.type];
        app.nav.next();
        $('.sub').slideUp();
        return;
      }
      $('#sec-'+app.slide+' .sub-'+app.subitem).slideUp(function(){
        app.subitem++;
        var callback = app.special[nav.type][app.slide] ? (app.special[nav.type][app.slide][app.subitem] || function(){}) : function(){};
        $('#sec-'+app.slide+' .sub-'+app.subitem).slideDown(callback);
      });
    },
    last: function last(){
      if(app.subitem == 0){
        nav.type = 'slide';
        app.nav = nav[nav.type];
        app.nav.last();
        if(app.slide != 0) $('.sub').slideUp();
        return;
      }
      $('#sec-'+app.slide+' .sub-'+app.subitem).slideUp(function(){
        app.subitem--;
        var callback = app.special[nav.type][app.slide] ? (app.special[nav.type][app.slide][app.subitem] || function(){}) : function(){};
        $('#sec-'+app.slide+' .sub-'+app.subitem).slideDown(callback);
      });
    }
  },
  subfunc: function(){
    nav.type = 'subitem';
    app.subitem = 0;
    app.nav = nav[nav.type];
    var callback = app.special[nav.type][app.slide] ? (app.special[nav.type][app.slide][app.subitem] || function(){}) : function(){};
    $('#sec-'+app.slide+' .sub-'+app.subitem).slideDown(callback);
  }
}
var app = {
  slide: 0,
  subitem: 0,
  nav: nav[nav.type],
  special: {
    slide: {
      2: nav.subfunc
    },
    subitem: {
    }
  }
}

// console.log(nav.slide);

$('#sec-'+app.slide).fadeIn();

$(document).on('keyup', function(evt){
  // console.log(evt);
  if(["ArrowLeft","PageUp"].indexOf(evt.key) > -1){
    app.nav.last();
  }
  if(["ArrowRight","PageDown"].indexOf(evt.key) > -1){
    app.nav.next();
  }
})
