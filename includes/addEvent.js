window.onload = function (){

    var box01 = document.getElementById('id02');
    box01.setAttribute("class","w3lightBox modal");
    box01.style.display='block';
    box01.style.width = '100%';

    document.getElementsByClassName('modal')[1].style.display='block';
    console.log(document.getElementsByClassName('modal')[1]);

    var element = document.getElementsByClassName('back-link');
    for(var i=0; i<2; i++){
    element[i].setAttribute('href', document.referrer);
    element[i].onclick = function() {
        history.back();
        return false;
      }
    }
}