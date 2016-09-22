/* global $ */

function listOffers(){

    $.ajax({
        url: document.location.origin  +  '/offers/list',
        success: function(response) { 
            console.log(response);
            var offersHtml = "";
            for(var i = 0; i < response.length; i++) {
                offersHtml += '<div class="row list-group">' +
                                '<br/>';
                offersHtml +='<div class="col-md-2 list-group-item list-group-item-action list-group-item-info">' + response[i].user_id + '</div>' +
                                '<div class="col-md-8 offer_details list-group-item list-group-item-action">' + response[i].details + '</div>' +
                                '<div>' + 
                                    '<button id="del" class="btn btn-outline-danger" data-delete-id="' + response[i].id + '">Delete</button>' +
                                    '<br/>'+
                                '</div>' +
                                '</div>';
     
            }
            $('.offers_list').html(offersHtml);
        }    
    });
}


$(function(){
    listOffers();
    
    // DELETE offer
    
     $('.offers_list').on('click', '[data-delete-id]', function() {
        var id = $(this).data('delete-id');
        $.ajax({
            url: document.location.origin + 'admin/articles/delete',
            method: 'DELETE',
            data: {'id': id},
            success: function(response) { 
                if (response.deleted == 1) {
                    listOffers();   
                } 
                else {
                    alert("HAHA");
                }
            }
        });    
    });
    
});