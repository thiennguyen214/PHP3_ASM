!function(){"use strict";!function(o){var e=localStorage.getItem("fmp_location");o(document).ready((function(){n.fmLocationSet(),n.fmLocationOptionChange(),n.fmAddBodyClassForModal("fmp-popup-modal","fmp-location-popup"),n.fmLocationPopupClose(),n.fmSetLocationFormVal(),n.fmSpecialMenuPopup()}));var n={fmSetLocationFormVal:function(){if(null!=e){var n=JSON.parse(e);o(".fmp-location-name").val(n.value).html(n.value)}else o(".fmp-location-title").css("display","none")},fmLocationPopupClose:function(){o(".fmp-popup-modal").on("click",".fmp-close",(function(){n.closePopUp("fmp-location-popup",".fmp-popup-modal")}))},fmLocationOptionChange:function(){o(".fmp-location").on("change",(function(){o(".confirm-msg").removeClass("fmp-hidden")}))},fmLocationSet:function(){o(".fmp-popup-modal").on("click",".fmp-save-option",(function(){if(n.saveLocationData(),o(".confirm-msg").addClass("fmp-hidden"),e){var a=JSON.parse(e);o(".fmp-location-name").val(a.value).html(a.value),o(".fmp-location-title").css("display","block")}else o(".fmp-location-title").css("display","none")}))},saveLocationData:function(){var n=o(".fmp-location option:selected").val(),a=o(".fmp-location option:selected").text(),t=""===n?"":a;localStorage.setItem("fmp_location",JSON.stringify({name:n,value:t})),o("#filter_location").find('option[text="'.concat(t,'"]')).prop("selected",!0),o(".fmp-popup-modal").fadeOut(),o("body").removeClass("fmp-location-popup"),e=localStorage.getItem("fmp_location")},fmAddBodyClassForModal:function(e,n){null!==document.querySelector("."+e)&&(o("."+e).fadeIn(),o("body").addClass(n))},fmSpecialMenuPopup:function(){o(".menu-popup-close").on("click",(function(){n.closePopUp("",".fmp-menu-popup"),n.specialMenuSave()}));var e=o(".fmp-menu-popup");if(e.length>0){var a=JSON.parse(localStorage.getItem("fmp_special_menu"))||{fmp_special_menu:null},t=a.endDate?new Date(a.endDate):null;t&&new Date-t>864e5&&localStorage.removeItem("fmp_special_menu"),a.fmp_special_menu&&"yes"===a.fmp_special_menu?e.fadeOut():e.delay(3e3).fadeIn()}},specialMenuSave:function(){var o={fmp_special_menu:"yes",endDate:new Date};localStorage.setItem("fmp_special_menu",JSON.stringify(o))},closePopUp:function(){o("body").removeClass(arguments.length<=0?void 0:arguments[0]),o(arguments.length<=1?void 0:arguments[1]).css("display","none").addClass("fmp-hidden")}};window.initFoodMenu=function(){o(".fmp-wrapper").each((function(){var e=o(this),n=o(this).attr("data-layout"),a=e.find(".fmp-pre-loader"),t=e.find(".fmp-content-loader");n&&(0===a.find(".fmp-loading-overlay").length&&a.append('<div class="fmp-loading-overlay"></div><div class="fmp-loading fmp-ball-clip-rotate"><div></div></div>'),e.find(".fmp-content-loader").removeClass("element-loading"),t.find(".fmp-loading, .fmp-loading-overlay").fadeOut(100,(function(){var e=this;setTimeout((function(){o(e).remove()}),700)})),setTimeout((function(){t.removeClass("fmp-pre-loader")}),700))}))},o(window).on("load",(function(){window.initFoodMenu()}))}(jQuery)}();