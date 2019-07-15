$(document).ready(function(){

    var aKeyValue = window.location.search.substring(1).split('&');
    
    var eventPlace = aKeyValue[0].split("=")[1];
    var eventImg = aKeyValue[0].split("=")[2];
    var eventDate= aKeyValue[0].split("=")[3];
    var eventName = aKeyValue[0].split("=")[4];

    var name= eventName.replace("%20", " ");
    
    //  console.log('Event Img: ', eventImg);
    //  console.log('Event date: ', eventDate);
    //   console.log('Event Name: ', eventName);
        
        $('#eventImg').attr('src', eventImg);
        $('h2').append(name);
        $('h3').append(eventPlace);
        $('h4').append(eventDate);
        var dataString = 'event_name=' + name;
        console.log(dataString);
        
        $('#delete').click(function(){
        
            var dataString = 'name=' + name;
            console.log(dataString);
          $.ajax({
            type: "POST",
            url: "delete.php",
            data: dataString,
            cache: true,
            success: function(data){
            alert(data);
          }
          });
          window.location="mainPage.php";

          return false;
        })
        
    })       

       
    
