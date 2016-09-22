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
                offersHtml +='<div class=" col-md-2 list-group-item list-group-item-info alignment-c">' + response[i].name + '</div>' +
                                
                                '<div class="col-md-8">' + 
                                    '<div class="col-md-2 alignment">' + '<b> Details: </b>' +'</div>' +
                                    '<div class="col-md-10 offer_details list-group-item ">' + response[i].details + '</div>' + 
                                    '<div class="col-md-2 alignment">' + '<b> Category: </b>' +'</div>' +
                                    '<div class="col-md-10 offer_details list-group-item ">' + response[i].category + '</div>' +
                                    '<div class="col-md-2 alignment">' + '<b> Price: </b>' +'</div>' +
                                    '<div class=" col-md-10 offer_details list-group-item ">' + response[i].price + '</div>' +
                                    '<div class="col-md-2 alignment">' + '<b> Time: </b>' +'</div>' +
                                    '<div class="col-md-10 offer_details list-group-item ">' + response[i].time + '</div>' +
                                '</div>' + 
                             '</div><br/>';
     
            }
            $('.offers_list').html(offersHtml);
        }    
    });
}


$(function(){
    listOffers();
    
    // ADD offer
    
    $('#add_offer').on('click',function(){
        var inputData = $('#createOfferForm').serialize();
        $.ajax({
            url: document.location.origin + '/offers/add',
            data: inputData, 
            method: "POST",            
            success: function (response) {
                if (response == 1) {
                    $('#createOfferForm')[0].reset();
                }
                else {
                    alert ("You failed ! hah");
                }
            }
        });
    });
    
    $('.nav-link').click(function (e) {
        $(".nav-link").removeClass("active");
        $(this).tab('show');
        
        
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target; // newly activated tab
        e.relatedTarget; // previous active tab
    });
});