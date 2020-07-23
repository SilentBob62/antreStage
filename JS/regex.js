
inputs=document.getElementsByClassName("input");
for (i=0;i<inputs.length;i++){
    addEventListener("input",verif);
}
function verif(e){
    var monInput=e.target;
    if (monInput.value==""){
        monInput.style.border="2px solid red";
    }
    else if (!monInput.checkValidity()){
        monInput.style.border="2px solid red";
        monInput.value="";
    }
    else{
        monInput.style.border="2px solid rgb(100, 207, 0)";
    }
}