$(function() {
  // Page Index
  if ($(".slider").length) {
    $(".slider").slides({
      preload:false,
      generateNextPrev:false,
      effect:"fade",
      crossfade:true,
      play:4000,
      animationStart: function(current){
        $('.slider .caption').delay(100).stop().animate({  top:-400},300);
      },
      animationComplete: function(current){
        $('.slider .caption').delay(100).stop().animate({  top:175  },300);
      },
      slidesLoaded: function() {
        $('.slider .caption').delay(100).stop().animate({  top:175  },300);
      }
    });  
  };
  if ($(".swiper-container").length) {
    var mySwiper = new Swiper('.swiper-container',{
      slidesPerView: 6,
      scrollbar: {
        container: '.swiper-scrollbar',
        hide: false,
        draggable: true,
        snapOnRelease: true
      }
    })  
  };
  $(".size .item").hover(function() {
    $(this).find(".dr-down").css("display","block")
  },function() {
    $(this).find(".dr-down").css("display","none")
  })

  $(".main .dr-down a").click(function() {
    if (!$(this).is(".active")) {
      $(this).parents(".dr-down").find("a").removeClass("active").find("input").removeAttr("checked");
      $(this).addClass("active").find("input").attr("checked",true)
      var eq = $(this).parents(".item").index()-1;
      $(this).parents(".dr-down").prev().html($(this).find("span").html()).parent().css("background-color","#f7941e").parent().prev().find(".item").eq(eq).css("background-color","#f7941e");
    };
  })
  $(".color .addColorv").click(function (event) {
    event.preventDefault();
    if ($(this).parents(".color").find(".drop").css("display") != "block") {
      $(this).parents(".color").find(".drop").css("display","block");
      $("body").bind("click", closeColorsFilter.bind(window.event))
    } else{
      console.log("lmgf")
      $(this).parents(".color").find(".drop").css("display","none");
      $("body").unbind("click", closeColorsFilter)
    };
  });
  function closeColorsFilter (event) {
    if( $(event.target).closest(".color .drop").length || $(event.target).closest(".color .addColorv").length ) 
    return;
    $(".color .drop").css("display","none");
    event.stopPropagation();
  };
  var iC = 1;
  $(".item-color").click(function (event) {
    event.preventDefault();
    if (!$(this).parents(".backet1").length) {
      if ($(this).is(".selected")) {
        $(this).removeClass("selected").find("input").removeAttr("checked");
        var dataic = $(this).attr("data-ic");
        $(this).removeAttr("data-ic");
        $(this).parents(".color").find(".selColor[data-ic = "+dataic+"]").remove();
        CheckColorWidth();
        CheckDropdownColorWidth();
      } else{
        $(this).addClass("selected").attr("data-ic",iC).find("input").attr("checked",true)
        var color = $(this).css("background-color"),
            css   = {"background-color":color},
            block = $("<div />", {"class":"selColor"}).css(css);
        block.attr("data-ic",iC);
        if ($(this).hasClass("no-gr")) {
          block.addClass("noshad")
        };
        $(this).parents(".color").find(".addColorv").before(block)
        iC++;
        CheckColorWidth();
        CheckDropdownColorWidth();
      };
    };
      
  })

  function CheckColorWidth () {
    if ($(".color .selColor").length > 11) {
      $(".color .selColor").width(18)
    } else{
      $(".color .selColor").width(30)
    };
  };
  function CheckDropdownColorWidth () {
    if ($(".color .addColorv").offset().left + 25 + $(".color .drop").outerWidth() > $(window).width()) {
      $(".color .drop").css({"top":"95px","right":"0px"})
    } else {
      $(".color .drop").css({"top":"0","right":"-370px"})
    }
  };





  $(".share-wrap .share").click(function (event) {
    event.preventDefault();
    if ($(this).next(".wrap-shared-popup").css("display") != "block") {
      $(this).next(".wrap-shared-popup").css("display","block");
      $("body").bind("click", closeSharing.bind(window.event))
    } else{
      $(this).next(".wrap-shared-popup").css("display","none");
      $("body").unbind("click", closeSharing)
    };
  });
  function closeSharing (event) {
    if( $(event.target).closest(".wrap-shared-popup").length || $(event.target).closest(".share-wrap .share").length ) 
    return;
    $(".wrap-shared-popup").css("display","none");
    event.stopPropagation();
  };
  $(".content-items .item").mouseout(function (event) { 
    event.stopPropagation()
    if (!$(event.relatedTarget).parents(".item").length) {
      $(this).find(".wrap-shared-popup").css("display","none");
    };
  })
  window.showPopup = function showPopup (event,isBG,top) {
    if (event.currentTarget != undefined) {
      event.preventDefault();
    };
    if (isBG) {
      $(".screenBlock").css("display","block")
    };
    if (!top) {
      var top = $(window).height()/2;
      var position = "fixed";
    } else {
      var position = "absolute";
      this.css("margin-top",0)
    };
    console.log(this)
    this.css({
      "top":"-1000px",
      "display":"block",
      "position": position
    })
    this.animate({
      "top": top
    },400);
  };
  window.showPopup2 = function showPopup (event,isBG,top) {
    if (event.currentTarget != undefined) {
      event.preventDefault();
    };
    if (isBG) {
      $(".screenBlock").css("display","block")
    };
    if (!top) {
      var top = $(window).height()/2;
      var position = "fixed";
    } else {
      var position = "absolute";
      this.css("margin-top",0)
    };
    this.css({
      "top":"-1000px",
      "display":"block",
      "position": position
    })
    this.animate({
      "top": top
    },400);
  };

  $(".login-buton").click(
      showPopup.bind($(".popup.login"),window.Event,true,128)
  );
  $(".popup .close").click(function (event) {
    event.preventDefault();
    $(".popup").fadeOut(200).promise().then(function() {
      $(".screenBlock").css("display","none")
    })
  })
  $(".logout_butt").click(function(){
    $(this).parents('.logged:first').find('.logout_form').submit();

    return false;
  });
  //***auth popup: errors***
  if(_AUTH_FORM && _login && _AUTH_ERROR)
  {
    $(".login-buton").click();
  }





  // Page Detail
  $(".params .sel-visible").click(function (event) {
    event.preventDefault();
    if ($(this).next(".sel-list-wr").css("display") != "block") {
      $(this).next(".sel-list-wr").css("display","block");
      $("body").bind("click", closeDetailFilter.bind(window.event))
    } else{
      $(this).next(".sel-list-wr").css("display","none");
      $("body").unbind("click", closeDetailFilter)
    };
  });
  function closeDetailFilter (event) {
    if( $(event.target).closest(".params .sel-visible").length || $(event.target).closest(".params .sel-list-wr").length ) 
    return;
    $(".params .sel-list-wr").css("display","none");
    event.stopPropagation();
  };
  $(".select .col2 a").click(function() {
    if (!$(this).is(".active")) {
      $(this).parents(".col2").find("a").removeClass("active").find("input").removeAttr("checked");
      $(this).addClass("active").find("input").attr("checked",true)
      $(this).parents(".select").find("div.size span").html("<span>"+$(this).find(".tp").html()+"</span> "+$(this).find(".tp").attr("data-sm"))
    };
  })
  $(".item-col").click(function (event) {
    event.preventDefault();
    if (!$(this).is(".selected")) {
      $(this).parents(".col1").find(".item-col").removeClass("selected").find("input").removeAttr("checked")
      $(this).addClass("selected").find("input").attr("checked",true);

      $(this).parents(".select").find("div.color div").css("background-color",$(this).css("background-color"))
    };
  });
  if ($("#showcase").length) {
    $("#showcase").awShowcase({
      content_width:      500,
      content_height:     500,
      fit_to_parent:      false,
      auto:         false,
      interval:       3000,
      continuous:       false,
      loading:        true,
      tooltip_width:      200,
      tooltip_icon_width:   32,
      tooltip_icon_height:  32,
      tooltip_offsetx:    18,
      tooltip_offsety:    0,
      arrows:         true,
      buttons:        true,
      btn_numbers:      true,
      keybord_keys:     true,
      mousetrace:       false,
      pauseonover:      true,
      stoponclick:      true,
      transition:       'hslide',
      transition_delay:   300,
      transition_speed:   500,
      show_caption:     'onhover',
      thumbnails:       true,
      thumbnails_position:  'outside-last',
      thumbnails_direction: 'horizontal',
      thumbnails_slidex:    0,
      dynamic_height:     false,
      speed_change:     true,
      viewline:       false
    });
  };

  $(".left-side .color .select .sel-visible").click(function (event) {
    event.preventDefault();
    if ($(this).siblings(".sel-list-wr").css("display") != "block") {
      $(this).siblings(".sel-list-wr").css("display","block");
      $("body").bind("click", closeDetail2Filter.bind(window.event))
    } else{
      $(this).siblings(".sel-list-wr").css("display","none");
      $("body").unbind("click", closeDetail2Filter)
    };
  });
  function closeDetail2Filter (event) {
    if( $(event.target).closest(".left-side .color .select .sel-visible").length || $(event.target).closest(".left-side .color .select .sel-list-wr").length ) 
    return;
    $(".left-side .color .select .sel-list-wr").css("display","none");
    event.stopPropagation();
  };
  $(".item-col2").click(function (event) {
    event.preventDefault();
    if (!$(this).is(".selected")) {
      $(this).parents(".col1").find(".item-col2").removeClass("selected").find("input").removeAttr("checked")
      $(this).addClass("selected").find("input").attr("checked",true);

      $(this).parents(".select").find("div.sel-visible div").css("background-color",$(this).css("background-color"))
    };
  });

  
  $(".backet1 .list tr").hover(function() {
    $(this).prev().css("border-bottom","1px solid #cdcdcd")
  },function() {
    $(this).prev().removeAttr("style")
  })


  $(".valuechange").find("button").click(function (event) {
    event.preventDefault();
    if ($(this).hasClass("plus")) {
      $(this).siblings("input").val(parseFloat($(this).siblings("input").val())+1);
    } else if ($(this).siblings("input").val() > 0) {
      $(this).siblings("input").val(parseFloat($(this).siblings("input").val())-1);
    };
  })


  $(".list tr .copy").click(function (event) {
    event.preventDefault();
    var tr = $("<tr />",{
      html: $(this).parents("tr").html()
    });
    $(this).parents("tr").after(tr)
  })

  $(".list tr .delete").click(function (event) {
    event.preventDefault();
    $(this).parents("tr").remove();
  })

  $(".checkb").click(function() {
    if (!$(this).is(".checked")) {
      $(this).addClass("checked").find("input").attr("checked",true);
    } else{
      $(this).removeClass("checked").find("input").removeAttr("checked");
    };
  })

  $(".radio-wr").click(function() {
    $(".radio-wr").removeClass("active").find("input").removeAttr("checked");
    $(this).addClass("active").find("input").attr("checked",true);
  })






  $("table.list td.color > a, table.list td.size > a, table.list .dr-down").hover(function() {
    $(this).parents("td").find(".dr-down").css("display","block")
  },function() {
    $(this).parents("td").find(".dr-down").css("display","none")
  })

  $("td.size .dr-down a").click(function() {
    if (!$(this).is(".active")) {
      $(this).parents(".dr-down").find("a").removeClass("active").find("input").removeAttr("checked");
      $(this).addClass("active").find("input").attr("checked",true)
      var eq = $(this).parents(".item").index()-1;
      $(this).parents(".dr-down").prevAll("span").html($(this).find("span").html());
    };
  })
  $(".item-col3").click(function (event) {
    event.preventDefault()
    if (!$(this).is(".selected")) {
      $(this).parents("ul").find(".item-col3").removeClass("selected").find("input").removeAttr("checked")
      $(this).addClass("selected").find("input").attr("checked",true);

      $(this).parents("td.color").children("span").css("background-color",$(this).css("background-color"))
    };
  });


})