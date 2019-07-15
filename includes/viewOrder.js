
$(document).ready(function (){
    var orders=0;
    var price =0;
    orders = sessionStorage.getItem('ordersArr');
    var orderArr= orders.split(',');
    var arr2= 0;

    $('h3').each(function(index, item){
        var str1= ($(item).html()).replace(/[^0-9]/g,'');
        var int1= parseInt(str1);
        price =  int1;
    });
    
     $.each(orderArr, function(index, value){
        $('#orders').append("<h3>"+value+"</h3>");
         var strValue = (value.replace(/[^0-9]/g,''));
         var intValue = parseInt(strValue);
         price = price + intValue;
    });

    $("#total").append("<h3>"+ price + "₪</h3>");
    sessionStorage.setItem('totalPrice',price);
    $('.tot').append("<h2>"+ price + "₪</h2>");
})
