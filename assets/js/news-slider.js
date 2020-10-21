$(document).ready(function(){

    var $sb = $(".slider-box");
  
    $sb.each(function(){
  
      var $this = $(this),
          $sc = $this.find(".slider-content"),
          $si = $sc.find(".slider-item"),
          $sp = $this.find(".slider-pagin"),
          $sfb = $this.find(".slider-fillbar"),
          $sbg = $this.find(".slider-background"),
          currentSlider = 0;
  

      function speedo(elem){
        let s = elem.data("speed");
          if(s < 1300){
            s = 1300;
            elem.data("speed", s);
            elem.attr("data-speed", s);
          }
        return s;
      }
  

      function animateFillBar(){
        if($sfb != null){
          $sfb.stop().animate({
              width: "0%"
          }, 0, "linear" ).animate({
              width: "100%"
          }, speedo($this), "linear" );
        }
      }
      animateFillBar();
  
  
    
      function changeBackground(){
        if($sbg != null){
          let url = $si.eq(currentSlider).data("background-url");
  
          $sbg.fadeOut(function(){
            $sbg.css({"background-image":`url(${url})`}).fadeIn();
          });
        }
      }
      changeBackground();
  
  
     
      function setSlider(sid){
        animateFillBar();
  
        $si.removeClass("active");
        $sp.find("li").removeClass("active");
  
        if(sid==null){
          currentSlider++; 
        }
        else{
          currentSlider = sid;
        }
  
        if(currentSlider > $si.length-1){
          currentSlider = 0;
        }
  
        $si.eq(currentSlider).addClass("active");
        $sp.find("li").eq(currentSlider).addClass("active");
  
        changeBackground();
      }
  
    
      var autoslide = $this.data("auto-slide"), asInterval;
      if(autoslide){
        let speed = speedo($this);
        asInterval = setInterval(setSlider, speed);
      }
  
   
      var sii = 0, paginHTML = "";
      paginHTML+="<ul>";
      $si.each(function(){
        if($sp == null) return;
        $(this).attr(`data-id`,sii);
        paginHTML+=`<li><a href="#" data-target="${$this.attr("id")}" data-target-id="${sii}"><span></span></a></li>`;
        sii++;
      });
  
      paginHTML+="</ul>";
      $sp.append(paginHTML);
  
      $sp.find("li").eq(0).addClass("active");
      $sp.find("a").each(function(e){
  
        $(this).on("click",function(){
          setSlider($(this).data("target-id"));
  
          clearInterval(asInterval);
          let speed = speedo($this);
          asInterval = setInterval(setSlider, speed);
  
          e.preventDefault;
          return false;
        });
      });
    });
  });