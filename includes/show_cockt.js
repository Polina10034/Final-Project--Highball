var drinkName, drinkPrice, drinkDis;

function getDrinkId(){
    var aKeyValue = window.location.search.substring(1).split('&'),
    drinkId = aKeyValue[0].split("=")[1];
    return drinkId;
}

$(document).ready(function(){
    $.getJSON('data/categories.json', function (data){
        var drinkId = getDrinkId();

        $.each(data.cocktailType, function(i, obj){
            if(obj.id == drinkId){
                drinkName = obj.name;
                drinkPrice = obj.price;
                drinkDis = obj.discription;
            }
        });
        console.log('book.Price: ', bookPrice);
        $('h1').html(drinkName);
        $('#drinkPrice').html(drinkPrice);
    })
})
