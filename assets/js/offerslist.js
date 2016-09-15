/* global $ */

function listOffers(){

    $.ajax({
        url: window.location.host +  '/listOffers',
        success: function(response) { 
            var articlesHtml = "";
            for(var i = 0; i < response.length; i++) {
                articlesHtml += '<div class="row">' +
                                '<br/>';
                articlesHtml +='<div class="col-md-4">' + response[i].user_id + '</div>' +
                                '<div class="col-md-8 offer_details">' + response[i].details + '</div>' +
                                '<div>' + 
                                    '<button id="del" class="btn-danger" data-delete-id="' + response[i].id + '">Delete</button>' +
                                    '<br/>'+
                                '</div>' +
                                '</div>';
     
            }
            $('.offers_list').html(articlesHtml);
        }    
    });
}


$(function(){
    listOffers();
});