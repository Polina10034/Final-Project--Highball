window.onload = function (){
        
//cocktail light box function////////////////////////
    // Get the modal
    var box01 = document.getElementById('id01');  

            console.log(box01);

    function show() {
        box01.setAttribute("class","w3lightBox modal");
        box01.style.display='block';
        box01.style.width = '100%';
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == box01) {
        box01.style.display = "none";
        }
    }
    document.getElementsByClassName('signupbtn')[0].addEventListener('click',close);
  
    document.getElementsByClassName('close')[0].addEventListener('click',close);

    function close(){
        box01.style.display = "none";
    }
    document.getElementById("make").addEventListener("click", show);

}
//cocktail light box function//////////////////////
// onclick="document.getElementById('id01').style.display='none'" style="width: auto;" class="close w3lightBox" title="Close Modal"
