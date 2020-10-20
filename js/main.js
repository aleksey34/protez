document.addEventListener("DOMContentLoaded", function() {

	// Custom JS


});

// top side menu show and hide
jQuery(document).ready(function($) {
	
const outShowBtn = jQuery(".top-side-menu-open-btn");
const inHideBtn = jQuery(".top-side-menu-close-btn");

const sideMenu = jQuery(".top-side-menu");


//console.log(outShowBtn.length);
if(!inHideBtn.length || !outShowBtn.length)  return false;

outShowBtn.on("click" , function(event){ 
	
	sideMenu.addClass('show');
});

inHideBtn.on("click" , function(event){
	sideMenu.removeClass('show');
});


	jQuery(document).mouseup(function (e){ // событие клика по веб-документу
		
		if (!sideMenu.is(e.target) // если клик был не по нашему блоку
		    && sideMenu.has(e.target).length === 0) { // и не по его дочерним элементам
			sideMenu.removeClass('show'); // скрываем его
		}
	});



});

 ;jQuery(document).on('ready' , function (event) {

 	const clearInputBtn = jQuery(".header-search-clear-btn");

     // ajax search in header search form
     const resultPlace = jQuery(".ajax-search-result");
     const searchInput = jQuery("#searchform input[type=text]");

     if(!searchInput.length) return false;

     searchInput.on("keyup" , function (event) {

         let inputVal  = searchInput.val().trim();

         if(!inputVal.length){
            clearInputBtn
                .addClass("header-search-clear-btn_hidden")
                .text("");
         }


         if(inputVal.length < 4){
             resultPlace
                 .empty();
             return false;
         }



         const nonce = ajaxSearchData.nonce;
         const  action =  "search-ajax"; //ajaxSearchData.action;
         const url = ajaxSearchData.url;

         const data ={action  , s: inputVal, nonce,};

         jQuery.ajax({
             url,
             data,
             type: "post",
             dataType: "json",
             method: "post",
             beforeSend: function(){
                 clearInputBtn
                    .removeClass("header-search-clear-btn_hidden")
					 .text("ищем...");
             },
             error: function (res) {
                 resultPlace
                     .empty()
                     .html('<ul> <li>Ошибка сервера</li> </ul>');
                 clearInputBtn
                     .text("очистить...");
             },
             success: function (res) {
                 if(res.success){
                     resultPlace
                         .empty()
                         .html(res.data.html);
                     clearInputBtn
                         .text("очистить...");
                 }else{
                     resultPlace
                         .empty()
                         .html('<ul> <li>Ошибка сервера</li> </ul>');
                    clearInputBtn
                         .text("очистить...");
                 }
             }
         });
     });

     if(clearInputBtn.length){
         clearInputBtn.on("click" , function (event) {
             event.preventDefault();
             searchInput.val('');
             resultPlace.empty();
             jQuery(this).addClass("header-search-clear-btn_hidden");
         });
	 }

 });