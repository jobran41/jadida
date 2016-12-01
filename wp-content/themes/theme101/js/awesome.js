$(document).ready(function($) {
    
   
    
    if($( "#section3" ).hasClass( "active" )){
        alert('jjjjjjjj');  
    }
  
    $('.contenairehuil').delegate('.huilclose2','click',function(){
        //alert('jooooooo');
        $('.contenairehuil').hide();
    });
    
   /* $('.contenairemayo').delegate('.huilclose2','click',function(){
        //alert('jooooooo');
        $('.contenairemayo').hide(); 
    });*/ 
   // $('.uk-subnav.stylenav li.parent0 ').click(function(){
        //$('.uk-subnav.stylenav li.fils').css('display','block');  
       // alert('hiiiiiiiiiiii'); 
    //}); 
    
    $('#margarine , #margarinepro ').delegate('.uk-subnav.stylenav li.parent1','click',function(){ 
       $('.uk-subnav.stylenav li.fils').css('display','block');   
    });
    
    $(' #margarine , #margarinepro ').delegate('.uk-subnav.stylenav li.parent2,.uk-subnav.stylenav li.parent3,.uk-subnav.stylenav li.parent4','click',function(){
       $('.uk-subnav.stylenav li.fils').css('display','none');  
    });
    
     $(' #margarinepro').delegate('.uk-subnav.stylenav li.parent2','click',function(){ 
       $('.uk-subnav.stylenav li.sfils').css('display','block');    
    });
    
    $(' #margarinepro ').delegate('.uk-subnav.stylenav li.parent1,.uk-subnav.stylenav li.parent4,.uk-subnav.stylenav li.parent3 ','click',function(){
       $('.uk-subnav.stylenav li.sfils').css('display','none');   
    });
    
       
  $("a[rel='trigger_news']").click(function () {
            $("#carousel_videos").slideUp();
            $("#carousel_recette").slideUp();
            $("#carousel_astuce").slideUp();
            
            if($( "#carousel_news" ).hasClass( "HiddenBlock" )){
                $("#carousel_news").removeClass("HiddenBlock");
                $("#carousel_news").slideDown();
            }else{
                $("#carousel_news").slideToggle();
            }
              return false;
          });

          $("a[rel='trigger_videos']").click(function () {
            $("#carousel_news").slideUp();
            $("#carousel_recette").slideUp();
            $("#carousel_astuce").slideUp();

            if($( "#carousel_videos" ).hasClass( "HiddenBlock" )){
                $("#carousel_videos").removeClass("HiddenBlock");
                $("#carousel_videos").slideDown();
            }else{
                $("#carousel_videos").slideToggle();
            }
              return false;
          });

           $("a[rel='trigger_recette']").click(function () {
            $("#carousel_news").slideUp();
            $("#carousel_videos").slideUp();
            $("#carousel_astuce").slideUp();

            if($( "#carousel_recette" ).hasClass( "HiddenBlock" )){
                $("#carousel_recette").removeClass("HiddenBlock");
                $("#carousel_recette").slideDown();
            }else{
                $("#carousel_recette").slideToggle();
            }
              return false;
          });

            $("a[rel='trigger_astuce']").click(function () {
            $("#carousel_news").slideUp();
            $("#carousel_videos").slideUp();
            $("#carousel_recette").slideUp();

            if($( "#carousel_astuce" ).hasClass( "HiddenBlock" )){
                $("#carousel_astuce").removeClass("HiddenBlock");
                $("#carousel_astuce").slideDown();
            }else{
                $("#carousel_astuce").slideToggle();
            }
              return false;
          });

          $(".close_trigger").click(function () {
              $("#carousel_news,#carousel_videos,#carousel_recette,#carousel_astuce").slideUp();
              return false;
          });
          $(".openbottom").click(function () {
              $(".mapcontent").slideToggle();
              return false;
          });
          $(".closebottom").click(function () {
              $(".mapcontent").slideToggle();
              return false;
          });
   var isAnimatedSecond = $('.second .is-animated'),
      isAnimatedSecondSingle = $('.second .is-animated__single'),
      isAnimatedThird = $('.third .is-animated'),
      isAnimatedThirdSingle = $('.third .is-animated__single'), 
      isAnimatedFourth = $('.fourth .is-animated'),   
      isAnimatedFourthSingle = $('.fourth .is-animated__single');

     
     $('#fullpage').fullpage({
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage','contact'],
				sectionsColor: ['#C63D0F', '#1BBC9B',  '#e1e1e1','#002145','#002145'],
				navigation: false, 
				navigationPosition: 'right', 
				responsiveWidth: 900,
				menu: '#menu',
                                onLeave: function(index, nextIndex, direction) {
                                    if( index == 1 && nextIndex == 2 ) { 
                                      //alert('screen 1');
                                       isAnimatedSecond.addClass('animated fadeInUpBig');
                                        /*
                                        a.forEach(function() {
                                             $isAnimatedSecond.eq(i).css('animation-delay', delay);
                                        });*/
                                        var t= 0.3;
                                      $('.overfl .is-animated').each(function(i, elem){
                                          t = t + 0.2; 
                                          $(elem).addClass('animated fadeInUpBig').css('animation-delay', String(t)+'s');
                                      });
                                     
                                   /* $isAnimatedSecond.eq(0).css('animation-delay', '.3s');
                                    $isAnimatedSecond.eq(1).css('animation-delay', '.6s');
                                    $isAnimatedSecond.eq(2).css('animation-delay', '.9s');
                                    $isAnimatedSecond.eq(3).css('animation-delay', '.11s'); 
                                    $isAnimatedSecond.eq(4).css('animation-delay', '.15s'); 
                                    $isAnimatedSecond.eq(5).css('animation-delay', '.17s'); 
                                    $isAnimatedSecond.eq(6).css('animation-delay', '.19s'); */
                                    
                                    isAnimatedSecondSingle.addClass('animated rollIn').css('animation-delay', '1.7s');
                                      
                                      
                                    }
                                    else if( ( index == 1 || index == 2 ) && nextIndex == 3 ) {
                                   // alert('screen 2');
                                    isAnimatedThird.addClass('animated fadeInUpBig'); 
                                    isAnimatedThird.eq(0).addClass('animated fadeInRightBig').css('animation-delay', '.3s'); 
                                    isAnimatedThird.eq(1).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                                    isAnimatedThirdSingle.addClass('animated bounceInDown').css('animation-delay', '1.6s');
                                    
                                    
                                }
                                 else if( ( index == 1 || index == 2 || index == 3 ) && nextIndex == 4 ) {
                                     //alert('screen 3'); 
                                    isAnimatedFourth.addClass('animated zoomIn').css('animation-delay', '.6s');
                                    isAnimatedFourthSingle.addClass('animated bounceInDown').css('animation-delay', '1.2s');
                                    /*isAnimatedFourthSingle.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                                      $(this).removeClass('lightSpeedIn').addClass('zoomOutDown');
                                    });*/
                                 }
                            }
                                
        /*afterLoad: function(anchorLink, index){
            var loadedSection = $(this);
            //using index
            if(index == 3){
               // alert("Section 3 ended loading"); 
            }

        }*/
                                
			});
       
    $(".modaliso").click(function(){
        setTimeout(mafonction, 100); 
    });
    
    $('.my-tab-content').click(function () {
        // new location
        location.href= $(this).data('href');
    });
   $('.opensection').click(function (e) {  
       e.preventDefault();   
       console.log($(this).parents('.tab-pane').find('.contenairehuil')); 
       $(this).parents('.tab-pane').find('.contenairehuil').html($(this).find('.contenumodal').html()).show();
      //var k = $(this).parent('.tab-pane').find('contenairehuil').selector; 
       //console.dir(k); 
       //j=JSON.stringify(k); 
       //alert(j);  
       //console.log(k);
    // $('.contenairehuil').html($(this).find('.contenumodal').html()); 
    // $('.contenairehuil').show();
     
    });
    
     /*$('.opensectionmayo').click(function (e) {
       e.preventDefault();
         $('.contenairemayo').html($(this).find('.contenumodalmayo').html()); 
         $('.contenairemayo').show();
         
    });  */
    
    //console.log(k); 
    //var k = $('.opensectionmayo').attr('data-contenaire'); 
    //console.log(k);
    /*if($('#huil div ul.uk-slideset li[data-uk-filter="469"]:first-child')){
        
    }else{
        
    }*/
   
    
     
    
    
    
    
    Slider.init();
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
    var scene2 = document.getElementById('scene2');
    var parallax2 = new Parallax(scene2);
});

 
        
        function  mafonction(){
            
        var modalisocount = $(".uk-modal.uk-open").length;     
        $('.uk-lightbox-content .uk-slidenav').remove();
         console.log(modalisocount);
         if(modalisocount==2){
             $('.uk-modal.uk-open').first().css('visibility','hidden');
         }
    }
    
    function layupdateHTML(layer, value) {
  var lay = document.getElementById(layer);
  if(typeof lay !== 'undefined' && lay !== null) {
    document.getElementById(layer).innerHTML = value;
  }
}
function paraupdateHTML(scene, value) {
  var para = document.getElementById(scene);
  if(typeof para !== 'undefined' && para !== null) {
    document.getElementById(scene).innerHTML = value;
  }
}
$('#filtre li a').click(function() {          
    $('#filtre li').removeClass('filtre-actif');        
    $(this).parent().addClass('filtre-actif');        
    var valeurFiltre = $(this).text().toLowerCase();  
    $('div.work').hide();             
    if (valeurFiltre == 'tout') {           
            $('div.work').show('fast');         
        }
    else {  
      $('div.work').each(function() {     
        if(!$(this).hasClass(valeurFiltre)) {     
                    $(this).hide('fast');         
                } else {  
                    $(this).show('fast');           
                }  
      });
        }  

    return false;                   
  });
// TweenMax.to('.logo1', 2, {right: 16%});
TweenMax.to('.logo2', 2, {left:0,ease:Elastic.easeOut,delay:0.5});
TweenMax.to('.logo1', 3, {right:0,ease:Elastic.easeOut,delay:1.5});
TweenMax.to('.smalprod', 4, {bottom:0,opacity:1,ease:Elastic.easeOut,delay:2});
// TweenMax.to('.smalprod', 5, {right:0,ease:Elastic.easeOut,delay:2.5});
// TweenMax.to('.smalprod', 2, {left:0,right:none,ease:Elastic.easeOut,delay:4});
TweenMax.to('.prodlarge', 5, {right:168,ease:Elastic.easeOut,delay:2.5});
// TweenMax.to('.mapcontent .mapbtn', 2, {height:530})



 // $(document).ready(function() {
 //   var act = $('uk-subnav > .uk-active >a');
 //  });
 
