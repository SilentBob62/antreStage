choix= document.getElementById("choix");
input= document.getElementsByTagName("input");
tousHabitue=document.getElementsByName("idParticipant");
choix.addEventListener("change", function(){
    tabValue=[];
    idEvenement=choix.value;
    inputSelect=document.getElementsByClassName(idEvenement);
    for(a=0;a<tousHabitue.length;a++)
    {
        habitueGene=tousHabitue[a].parentNode;
        habitueGene.style.background="";
    }
    for(i=0;i<inputSelect.length;i++)
    {
        tabValue[i]=inputSelect[i].value;
        listeHabitue=document.getElementsByClassName("habitue"+tabValue[i]);
        habitue=listeHabitue[0].parentNode;
        habitue.style.background="green";
    }
    
});