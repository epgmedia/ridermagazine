timely.define("scripts/calendar_feeds/facebook/facebook_utility_functions",["jquery_timely","ai1ec_config","external_libs/bootstrap/tab"],function(e,t){e.fn.shift=function(){var e=this.get(0);return this.splice(0,1),e};var n=function(t){var n=e(t),r=e("<input />",{type:"hidden",name:n.attr("name"),value:n.attr("value")});n.after(r),setTimeout(function(){e('#facebook button[type="submit"]').prop("disabled",!0)},10),e("#facebook .ai1ec-btn").unbind("click"),e("#facebook .ai1ec-btn").click(function(e){e.preventDefault()})},r=function(n){var r=n.closest(".ai1ec-facebook-items");n.closest(".ai1ec-facebook-subscriber").remove();var i=e(".ai1ec-facebook-subscriber",r);e("> .ai1ec-row",r).each(function(){var n=e(this);n.html("");for(var s=0;s<2;s++){if(s===0&&i.length===0){n.remove();if(e("> .ai1ec-row",r).length===0){var o=e("<div />",{"class":"no_subscription",text:t.no_more_subscription});r.append(o)}return}var u=i.shift();n.append(u)}})};return{block_all_submit_and_ajax:n,cancel_element_and_reorder_other:r}}),timely.define("scripts/calendar_feeds/facebook/facebook_ajax_handlers",["jquery_timely","scripts/calendar_feeds/facebook/facebook_utility_functions","libs/utils"],function(e,t,n){var r=function(t){var r=".ai1ec-facebook-multiselect-container[data-type="+t.type+"] .ajax-loading";e(r).css("visibility","hidden");if(t.errors===!0){var i=n.make_alert(t.error_messages.join("<br/>"),"error");e("#alerts").append(i);return}e(" .ai1ec-facebook-multiselect-container[data-type="+t.type+"] .ai1ec-facebook-multiselect").replaceWith(t.html);var s=n.make_alert(t.message,"success");e("#alerts").append(s)},i=function(t){var r=".ai1ec-facebook-refresh[data-id="+t.id+"]";e(r).closest(".ai1ec-facebook-subscriber").find(".ajax-loading-user").css("visibility","hidden");var i;if(t.exception!==undefined)i=n.make_alert(t.message,"error");else{var s=t.errors?"warning":"success";i=n.make_alert(t.message,s)}e("#alerts").append(i)},s=function(r){var i=".ai1ec-facebook-remove[data-id="+r.id+"]",s=e(i);s.closest(".ai1ec-facebook-subscriber").find(".ajax-loading-user").css("visibility","hidden");var o;if(r.errors===!0)o=n.make_alert(r.error_message,"error");else{o=n.make_alert(r.message,"success");var u=r.logged==="true"?!0:!1;u?(e("#ai1ec_facebook_subscribe_yours").show(),s.closest("#ai1ec-facebook").find(".ai1ec-facebook-category-tag-wrapper").remove(),s.closest(".ai1ec-facebook-subscriber").find("a.ai1ec-btn").remove()):(t.cancel_element_and_reorder_other(s),e(".ai1ec-facebook-multiselect-container[data-type="+r.type+"] .ai1ec-facebook-multiselect").replaceWith(r.html))}e("#alerts").append(o)};return{handle_refresh_multiselect:r,handle_refresh_events:i,handle_remove_events:s}}),timely.define("scripts/calendar_feeds/facebook/facebook_event_handlers",["jquery_timely","ai1ec_config","scripts/calendar_feeds/facebook/facebook_utility_functions","scripts/calendar_feeds/facebook/facebook_ajax_handlers","libs/utils"],function(e,t,n,r,i){var s=i.get_ajax_url(),o=function(r){var i=e("select.ai1ec-facebook-multiselect option:selected").length;if(i===0)return window.alert(t.select_one_option),!1;if(i>10)return window.alert(t.no_more_than_ten),!1;n.block_all_submit_and_ajax(this)},u=function(e){n.block_all_submit_and_ajax(this)},a=function(t){t.preventDefault(),e.ajaxSetup({timeout:24e5}),e(this).closest(".ai1ec-facebook-multiselect-title-wrapper").find(".ajax-loading").css("visibility","visible");var n=e(this).closest(".ai1ec-facebook-multiselect-container").data("type"),i={action:"ai1ec_refresh_facebook_objects",ai1ec_type:n};e.post(s,i,r.handle_refresh_multiselect,"json")},f=function(t){t.preventDefault();var n=e(this).closest(".ai1ec-facebook-items").data("type");e(this).closest(".ai1ec-facebook-subscriber").find(".ajax-loading-user").css("visibility","visible");var i={action:"ai1ec_refresh_events",ai1ec_post_id:e(this).data("id"),ai1ec_type:n};e.post(s,i,r.handle_refresh_events,"json")},l=function(t){t.preventDefault();var n=e(this).closest(".ai1ec-facebook-subscriber").find(".ai1ec-facebook-name").text(),r=e(this).data("id");e("#ai1ec-facebook-modal #ai1ec-facebook-user-modal").text(n),e("#ai1ec-facebook-modal a.ai1ec-btn").data("user_id",r).data("el",this).data("logged",e(this).hasClass("logged")),e("#ai1ec-facebook-modal").modal({show:!0,backdrop:!0})},c=function(t){t.preventDefault(),e("#ai1ec-facebook-modal").modal("hide");var n=e(this).hasClass("remove")?!0:!1,i=e(this).data("el"),o=e(i).closest(".ai1ec-facebook-subscriber").find(".ajax-loading-user");o.css("visibility","visible");var u=e(this).data("logged"),a=e(i).closest(".ai1ec-facebook-items").data("type"),f={action:"ai1ec_remove_subscribed",ai1ec_post_id:e(this).data("user_id"),ai1ec_remove_events:n,ai1ec_logged_user:u,type:a};e.post(s,f,r.handle_remove_events,"json")},h=function(t){t.preventDefault(),e("#ai1ec_facebook_connect_modal").modal({show:!0,backdrop:!0})},p=function(n){var r=!0;e("#ai1ec_facebook_connect_modal input:text").each(function(){this.value===""&&(r=!1)});if(r===!0)e("#ai1ec_facebook_connect_modal").modal("hide"),e("#ai1ec_facebook_modal_submit").click();else{var s=i.make_alert(t.app_id_and_secret_are_required,"error");e("#ai1ec_facebook_connect_modal .ai1ec-modal-body").prepend(s)}};return{do_controls_before_subscribing:o,handle_click_on_submit_buttons:u,refresh_multiselect:a,refresh_events:f,remove_subscription:l,modal_remove_subscription:c,click_on_facebook_connect_button_opens_modal_if_app_id_and_secret_are_not_set:h,click_on_save_button_in_modal_trigger_submit:p}}),timely.define("scripts/facebook",["jquery_timely","domReady","scripts/calendar_feeds/facebook/facebook_event_handlers","scripts/calendar_feeds/facebook/facebook_utility_functions"],function(e,t,n,r){var i=function(){e("#ai1ec_subscribe_users").on("click",n.do_controls_before_subscribing),e("input[type=submit]").not("#ai1ec_subscribe_users, #ai1ec_file_submit").click(n.handle_click_on_submit_buttons),e(".ai1ec-facebook-refresh-multiselect").click(n.refresh_multiselect),e(".ai1ec-facebook-items").on("click",".ai1ec-facebook-refresh",n.refresh_events),e(".ai1ec-facebook-items").on("click",".ai1ec-facebook-remove",n.remove_subscription),e("#ai1ec-facebook-modal").on("click","a.remove, a.keep",n.modal_remove_subscription),e("#ai1ec-facebook-connect a").click(n.click_on_facebook_connect_button_opens_modal_if_app_id_and_secret_are_not_set),e(document).on("click","#ai1ec_facebook_connect_modal a.keep",n.click_on_save_button_in_modal_trigger_submit)},s=function(){t(function(){i()})};return{start:s}}),timely.require(["scripts/facebook"],function(e){e.start()}),timely.define("pages/facebook",function(){});