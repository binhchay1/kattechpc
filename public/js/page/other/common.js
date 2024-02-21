function setUserOption(key, value, return_url) {
    window.location = "/ajax/user_set_option.php?key="+key+"&value="+value+"&return_url=" + encodeURIComponent(return_url);
}

function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam)
        {
            return sParameterName[1];
        }
    }
}
//Popup hotline

function showImagePrice(){
    var arr_price;
    $(".img_price").each(function(){
        str_price = $(this).text().trim();

        if(str_price !='Liên hệ' && str_price !='Contact' && $(this).find("span").length == 0){
            arr_price = str_price.split("");
            for(i=0;i< arr_price.length;i++){
                if(arr_price[i] == 0) arr_price[i] = "<span class='price-number-small-0'></span>";
                if(arr_price[i] == 1) arr_price[i] = "<span class='price-number-small-1'></span>";
                if(arr_price[i] == 2) arr_price[i] = "<span class='price-number-small-2'></span>";
                if(arr_price[i] == 3) arr_price[i] = "<span class='price-number-small-3'></span>";
                if(arr_price[i] == 4) arr_price[i] = "<span class='price-number-small-4'></span>";
                if(arr_price[i] == 5) arr_price[i] = "<span class='price-number-small-5'></span>";
                if(arr_price[i] == 6) arr_price[i] = "<span class='price-number-small-6'></span>";
                if(arr_price[i] == 7) arr_price[i] = "<span class='price-number-small-7'></span>";
                if(arr_price[i] == 8) arr_price[i] = "<span class='price-number-small-8'></span>";
                if(arr_price[i] == 9) arr_price[i] = "<span class='price-number-small-9'></span>";
                if(arr_price[i] == '.') arr_price[i] = "<span class='price-number-small-dot'></span>";
                if(i> arr_price.length - 4) arr_price[i]="";
            }

            $(this).html(arr_price);
        }
    });

    var arr_full_price;
    $(".img_price_full").each(function(){
        str_price = $(this).text().trim();

        if(str_price !='Liên hệ' && str_price !='Contact' && $(this).find("span").length == 0){
            arr_price = str_price.split("");

            for(i=0;i< arr_price.length;i++){
                if(arr_price[i] == 0) arr_price[i] = "<span class='price-number-small-0'></span>";
                if(arr_price[i] == 1) arr_price[i] = "<span class='price-number-small-1'></span>";
                if(arr_price[i] == 2) arr_price[i] = "<span class='price-number-small-2'></span>";
                if(arr_price[i] == 3) arr_price[i] = "<span class='price-number-small-3'></span>";
                if(arr_price[i] == 4) arr_price[i] = "<span class='price-number-small-4'></span>";
                if(arr_price[i] == 5) arr_price[i] = "<span class='price-number-small-5'></span>";
                if(arr_price[i] == 6) arr_price[i] = "<span class='price-number-small-6'></span>";
                if(arr_price[i] == 7) arr_price[i] = "<span class='price-number-small-7'></span>";
                if(arr_price[i] == 8) arr_price[i] = "<span class='price-number-small-8'></span>";
                if(arr_price[i] == 9) arr_price[i] = "<span class='price-number-small-9'></span>";
                if(arr_price[i] == '.') arr_price[i] = "<span class='price-number-small-dot'></span>";
                if(arr_price[i] == "VNĐ") arr_price[i] = "";
            }
            $(this).html(arr_price);
        }
    });
}

$(document).ready(function(){

    //showImagePrice();
});

$(document).ajaxStop(function(){
    //showImagePrice();
});

//Compare Pro
//$(document).ready(function(){
//        $("#product_compare_list").val("");
//        $("input.p_check").removeAttr("checked");
//        $("input.p_check").click(function(){
//            if($(this).is(":checked")){
//                $(".compare_area").prepend("<a href='#' class='"+$(this).attr("id")+"'><img src='"+$(this).attr("name")+"' alt='' /><i class='bg icon_del_compare'></i></a>");
//            }else{
//                $("."+$(this).attr("id")).remove();
//            }

//            $(".compare_area a").click(function(){
//              $("#"+$(this).attr("class")).click();
//              $("#"+$(this).attr("class")).removeAttr("checked");
//              $(this).remove();
//              return false;
//            });
//            if($(".compare_area a").length >= 2) $(".btn_compare").show();
//            else $(".btn_compare").hide();
//        });

//    });

//Conver format price to price
function convertPrice(formatPrice){
    str = formatPrice.substring(0,formatPrice.length - 4);
    str1 = str.replace('.','');
    str2 = str1.replace('.','');
    str3 = str2.replace('.','');

    return str3;
}



//POPUP
var urlLogin = "";

function confirmimage(url){
//$('select').hide();
    $('.popup').show();
    $('.overlay').show();
//window.location = url;
    urlLogin = url;
}
function closePop(){
//$('select').show();
    $('.popup').hide();
    $('.overlay').hide();
}
function confirmLogin(url){
//$('select').hide();
    $('.popup_login').show();
    $('.overlay').show();
//window.location = url;
    urlLogin = url;
}

function forwardLogin(){
    window.location = 'http://aha.vn';
}
$(document).keypress(function(e) {

    // ESCAPE key pressed
    if (escape(e.keyCode) == 27) {
        closePop();
        windown.close();
    }
});


/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!
/***************************/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopup(){
    //loads popup only if it is disabled
    if(popupStatus==0){
        $("#backgroundPopup").css({
            "opacity": "0.7"
        });
        $("#backgroundPopup").fadeIn("slow");
        $("#popupContact").fadeIn("slow");
        popupStatus = 1;
    }
}

//disabling popup with jQuery magic!
function disablePopup(){
    //disables popup only if it is enabled
    if(popupStatus==1){
        $("#backgroundPopup").fadeOut("slow");
        $("#popupContact").fadeOut("slow");
        popupStatus = 0;
    }
}

//centering popup
function centerPopup(){
    //request data for centering
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var popupHeight = $("#popupContact").height();
    var popupWidth = $("#popupContact").width();
    //centering
    $("#popupContact").css({
        "position": "fixed",
        "top": windowHeight/2.6-popupHeight/2.6,
        "left": windowWidth/2-popupWidth/2
    });

   console.log(windowHeight);
  console.log(popupHeight);
    //only need force for IE6

    $("#backgroundPopup").css({
        "height": windowHeight
    });

}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){

    //LOADING POPUP
    //centering with css
    centerPopup();
    //load popup
    loadPopup();
    //Click the button event!
    $("#button").click(function(){
        //centering with css
        centerPopup();
        //load popup
        loadPopup();
    });

    //CLOSING POPUP
    //Click the x event!
    $("#popupContactClose").click(function(){
        disablePopup();
    });
    //Click out event!
    $("#backgroundPopup").click(function(){
        disablePopup();
    });
    //Press Escape event!
    $(document).keypress(function(e){
        if(e.keyCode==27 && popupStatus==1){
            disablePopup();
        }
    });

});

  function kiemtratonkho(product_id, holder){
      var url = "/ajax/hanoipc.php?action=product-store-status&product_id="+product_id;
      var html = "";
      var kho = "";
      $.getJSON(url,function(data){
      var Ton101 = parseInt(data.Ton101);
      var Ton102 = parseInt(data.Ton102);
      var Ton103 = parseInt(data.Ton103);
      var Ton104 = parseInt(data.Ton104);
      var Ton105 = parseInt(data.Ton105);
      var Ton106 = parseInt(data.Ton106);
      var Ton107 = parseInt(data.Ton107);
      var Ton108 = parseInt(data.Ton108);
      var Ton110 = parseInt(data.Ton110);
      var Ton111 = parseInt(data.Ton111);
      var Ton112 = parseInt(data.Ton112);
      var Ton113 = parseInt(data.Ton113);
      var Ton114 = parseInt(data.Ton114);
      var Ton115 = parseInt(data.Ton115);
      var Ton116 = parseInt(data.Ton116);
      var Ton117 = parseInt(data.Ton117);
      var Ton118 = parseInt(data.Ton118);
      var Ton119 = parseInt(data.Ton119);
      var Ton120 = parseInt(data.Ton120);
      var Ton121 = parseInt(data.Ton121);


        if(Ton101 > 0 || Ton108 > 0) kho+="<li data-ton='Ton101'><a href='https://g.page/Hanoicomputer-131LTN?share' target='_blank'>131 Lê Thanh Nghị - Hai Bà Trưng - Hà Nội\n</a></li>";
        if(Ton102 > 0) kho+="<li data-ton='Ton102'><a href='https://goo.gl/maps/HjsFAcNVyw5Fis986' target='_blank'>43 Thái Hà - Đống Đa - Hà Nội\n</a></li>";
        if(Ton103 > 0) kho+="<li data-ton='Ton103'><a href='https://goo.gl/maps/u5Dxd4H9VGrDMxAy9' target='_blank'>406 Tô Hiệu - Lê Chân - Hải Phòng\n</a></li>";
        if(Ton104 > 0) kho+="<li data-ton='Ton104'><a href='https://goo.gl/maps/F4pMPa2dAC1eM5N37' target='_blank'>79 Nguyễn Văn Huyên - Cầu Giấy - Hà Nội\n</a></li>";
        if(Ton105 > 0) kho+="<li data-ton='Ton105'><a href='https://goo.gl/maps/CzLnr822wLZsAc8Y6' target='_blank'>511 Quang Trung - Hà Đông - Hà Nội\n</a></li>";
        if(Ton106 > 0) kho+="<li data-ton='Ton106'><a href='https://maps.app.goo.gl/43TKFym6kQH2jFzt6' target='_blank'>478 Cách Mạng Tháng 8 - Quận 3 - TP HCM\n</a></li>";
        if(Ton107 > 0) kho+="<li data-ton='Ton107'><a href='https://goo.gl/maps/gekRdgZKZ3uSMP5K6' target='_blank'>398 Nguyễn Văn Cừ - Long Biên - Hà Nội\n</a></li>";
        if(Ton110 > 0) kho+="<li data-ton='Ton110'><a href='https://goo.gl/maps/Jm2PveMiFZAbwFfZ8' target='_blank'>299 Minh Khai - Từ Sơn - Bắc Ninh\n</a></li>";
        if(Ton112 > 0) kho+="<li data-ton='Ton112'><a href='https://goo.gl/maps/zvdq1YTb3FqiDn1n8' target='_blank'>CT4A Bắc Linh Đàm - Hoàng Mai - Hà Nội\n</a></li>";
        if(Ton113 > 0) kho+="<li data-ton='Ton113'><a href='https://goo.gl/maps/7fomF4VxLzkpGhkJ6' target='_blank'>77 Cao Lỗ - Đông Anh - Hà Nội\n</a></li>";
        if(Ton114 > 0) kho+="<li data-ton='Ton114'><a href='https://goo.gl/maps/7HV7RTa47iDf2Ncs5' target='_blank'>57 Trần Phú - Hà Đông - Hà Nội\n</a></li>";
        if(Ton115 > 0) kho+="<li data-ton='Ton115'><a href='https://maps.app.goo.gl/acG6NLyviutydw8x7' target='_blank'>356 Nguyễn Thị Minh Khai – Dĩnh Kế - Bắc Giang\n</a></li>";
        if(Ton116 > 0) kho+="<li data-ton='Ton116'><a href='https://goo.gl/maps/TKjooSmeg7D5ARRS8' target='_blank'>145B Trường Chinh - Phủ Lý - Hà Nam\n</a></li>";
        if(Ton117 > 0) kho+="<li data-ton='Ton117'><a href='https://goo.gl/maps/aVjvZjsj3kRqBNKg8' target='_blank'>156 Nguyễn Sỹ Sách - Thành Phố Vinh - Nghệ An\n</a></li>";
        if(Ton118 > 0) kho+="<li data-ton='Ton118'><a href='https://goo.gl/maps/vVkUtyFhJyFv584Y6' target='_blank'>118 Lương Ngọc Quyến - Quang Trung - Thái Nguyên\n</a></li>";
        if(Ton119 > 0) kho+="<li data-ton='Ton119'><a href='https://maps.app.goo.gl/KZrU5U8r8NxRqaiz8' target='_blank'>164 Lạc Long Quân - Đông Vệ - Thanh Hóa\n</a></li>";

      if(Ton101 > 0 || Ton102 > 0 || Ton103 > 0 || Ton104 > 0 || Ton105 > 0 || Ton106 > 0 || Ton107 > 0 || Ton110 > 0 || Ton111 > 0 || Ton112 > 0 || Ton113 > 0 || Ton114 > 0 || Ton115 > 0 || Ton116 > 0 || Ton117 > 0 || Ton118 > 0 || Ton119 > 0 || Ton120 > 0 || Ton121 > 0 ){
            html+='<span class="detail">'+kho+'</span>';
      }else{
        html+='<li>Liên hệ</li>';
      }
      $(holder).addClass("loaded");
    $(holder).html(html);
      });
  }
//TOOLTIP
    function tooltip2019(){
        var w_tooltip = $("#tooltip").width();
        var h_tooltip = 0;
        var pad = 10;
        var x_mouse = 0; var y_mouse = 0;
        var wrap_left = 0;
        var wrap_right = 0;
        var wrap_top = 0;
        var wrap_bottom = 0;
        $(".p-component .p-img").mousemove(function(e){
         content_tooltip = $(this).parents(".p-component").find(".hover_content_pro");
         if(content_tooltip.length == 0){
         return;
         $("#tooltip").hide();
        }
        $("#tooltip").html(content_tooltip.html());

        wrap_left = 0;
        wrap_top = $(window).scrollTop();
        wrap_bottom = $(window).height();
        wrap_right = $(window).width();
        x_mouse = e.pageX;
        y_mouse = e.pageY;
        h_tooltip = $("#tooltip").height();


        if(x_mouse + w_tooltip > wrap_right) $("#tooltip").css("left",x_mouse - w_tooltip - pad);
        else $("#tooltip").css("left",x_mouse + pad);


        if(y_mouse - h_tooltip < wrap_top) $("#tooltip").css("top",wrap_top);
        else $("#tooltip").css("top",y_mouse - h_tooltip - pad);
         $("#tooltip").show();

        });

        $(".p-component .p-img").mouseout(function(){
            $("#tooltip").hide();
        });
    }

$(document).ready(function(e) {
  tooltip2019();
});

$(document).ajaxStop(function(e){
    tooltip2019();
})

//kmai tooltip

function kmai2019(){
    let w_tooltip = $("#kmaitooltip").width();
    let h_tooltip = 0;
    let pad = 10;
    let x_mouse = 0; let y_mouse = 0;
    let wrap_left = 0;
    let wrap_right = 0;
    let wrap_top = 0;
    let wrap_bottom = 0;
    $(".p-component .p-haskmai").mousemove(function(e){
     content_tooltip = $(this).parents(".p-component").find(".kmai-ndung");
     if(content_tooltip.length == 0){
     return;
     $("#kmaitooltip").hide();
    }
    $("#kmaitooltip").html(content_tooltip.html());

    wrap_left = 0;
    wrap_top = $(window).scrollTop();
    wrap_bottom = $(window).height();
    wrap_right = $(window).width();
    x_mouse = e.pageX;
    y_mouse = e.pageY;
    h_tooltip = $("#kmaitooltip").height();


    if(x_mouse + w_tooltip > wrap_right) $("#kmaitooltip").css("left",x_mouse - w_tooltip - pad);
    else $("#kmaitooltip").css("left",x_mouse + pad);


    if(y_mouse - h_tooltip < wrap_top) $("#kmaitooltip").css("top",wrap_top);
    else $("#kmaitooltip").css("top",y_mouse - h_tooltip - pad -30);
     $("#kmaitooltip").show();

    });

    $(".p-component .p-haskmai").mouseout(function(){
        $("#kmaitooltip").hide();
    });
}

$(document).ready(function(e) {
  kmai2019();
});

$(document).ajaxStop(function(e){
    kmai2019();
})
function compare_product(return_url) {
    var e = document.getElementById("product_compare_list");
    if (e == "undefined" || e == null) {
        alert("Cần có biến product_compare_list trong template");
        return false
    }
    var t = 0;
    if (e.value.length > 1) {
        current_list_id = e.value.split(",");
        t = current_list_id.length - 2
    }
    if (t > 1) {
        window.location = "/so-sanh?list=" + e.value + "&return_url=" + return_url;
    } else {
        alert("Bạn cần chọn tối thiểu 2 sản phẩm để so sánh");
        return false
    }
}


function sort_sub_nav(col_number, col_item, item_html_sort, parent_content){
        //Khoi tao
        var col_number = col_number; //so cot, = 0 neu muon sap xep tu dong theo theo so hang
        var col_item = col_item; //so hang trong 1 cot, = 0 neu muon sap xep tu dong theo so cot
        var item_html_sort = item_html_sort; //Phan tu muon sap xep
        var parent_content = parent_content;
        var item_per_col=0; //so phan tu 1 cot
        /*...............................*/
        var total_item = item_html_sort.length;
        if(col_item!=0) item_per_col = col_item;
        if(col_item==0 && col_number > 0) item_per_col = Math.ceil(total_item/col_number);

        var table_html = "";
        table_html+= "<table class='tbl_sub_nav'><tr><td valign='top'>";
        for(i=0;i<total_item; i++){
            table_html+= item_html_sort.parent().children(":eq("+i+")").html();
            if((i+1)%item_per_col==0) table_html+="</td><td valign='top'>";
        }
        table_html+="</tr></table></td>";
        parent_content.children().remove();
        parent_content.append(table_html);
    }



//show popup
function showPopup(a){
  if(a == 'popup-youtube'){
    var url = $("#url-video-popup").val();
    $("#content-popup-youtube").html('<iframe width="495" height="315" src='+url+' frameborder="0" allowfullscreen></iframe>');
  }
  $("#bg-opacity").fadeIn();
  $("#"+a).fadeIn();
}

//close popup:
function closePopupCommon(){
    if($("#content-popup-youtube iframe").length > 0) $("#content-popup-youtube").empty();
    $(".popup-common").fadeOut();
    $("#bg-opacity").fadeOut();
}

function formatCurrency(a) {
  var b = parseFloat(a).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1.").toString();
  var len = b.length;
  b = b.substring(0, len - 3);
  return b;
}

 function kiemtrokhohangNew2020(holder) {
    $(holder).on('mouseenter',function(){
        $(this).addClass('ajax-loading');
         var khohangHolder = $(this).parents(".p-component").find('.js-dongbotonkho');
         var idSp = khohangHolder.attr('data-id');
         if(khohangHolder.hasClass('loaded')==false && $(this).hasClass('ajax-finished') == false){
           kiemtratonkho(idSp,khohangHolder);
           $(this).addClass('ajax-finished');
       }
    })
 }

 $(document).ready(function(e) {
    kiemtrokhohangNew2020('.p-component .p-img')
 })

 $(document).ajaxStop(function(e){
    kiemtrokhohangNew2020('.p-component .p-img')
 })
