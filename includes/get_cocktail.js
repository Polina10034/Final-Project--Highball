$(document).ready(function primary(){
    var count =0;
    var cocktailsArr = [];

    $.getJSON('data/categories.json', function(data){
       $.each(data.cocktailType, function(){
           count++;
           $('.cocktails').append("<section class='border'><img src=" + this.url + " class='rounded mx-auto d-blocko cktailImg' alt='logo'><i class='fa fa-plus-circle float-right fa-4x' aria-hidden='true'></i><h3>"+ this.name + this.price +"</h3><p>" + this.discription + "</p></section>")
       })

       //selecting chosen items///
       $('section').click(function(){
           console.log(this);
           var container = $(this).closest('.border');
           var name = container.children('h3').text();
           console.log($(this).css('background-color'));
           if($(this).css('background-color')=='rgb(7, 7, 7)'){
                $(this).css('background-color', '');
                console.log($(this).css('background-color'));
                cocktailsArr.splice($.inArray(name,cocktailsArr),1);
                        console.log(cocktailsArr);
           }  
            else{
                $(this).css('background-color', 'rgb(7,7,7');
                console.log($(this).css('background-color'));
                cocktailsArr.push(name);
                console.log(cocktailsArr);
                console.log(cocktailsArr.length);
            }

           
       })
    })
    $('#goBack').on('click',function(){
         sessionStorage.setItem('ordersArr',cocktailsArr);
       
    });

})