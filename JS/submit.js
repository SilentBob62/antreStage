
// tel=document.getElementById("telParticipant2");
// form=document.getElementsByClassName("form");


//     tel.addEventListener("change", function(){
//         tel.form.submit();
//     });
/***********************************variables******************************************************** */
/**********************************************************liste participations */
nom=document.getElementsByClassName("formNomParticipant");
prenom=document.getElementsByClassName("formPrenomParticipant");
mail=document.getElementsByClassName("formMailParticipant");
tel=document.getElementsByClassName("formTelParticipant");
prevenu=document.getElementsByClassName("formPrevenu");
presence=document.getElementsByClassName("formPresence");
reglement=document.getElementsByClassName("formReglement");
/**************************************************************liste evenements */
nomEvenement=document.getElementsByClassName("formNomEvenement");
nbMaxJoueur=document.getElementsByClassName("formnbMaxJoueur");
coutEvenement=document.getElementsByClassName("formCoutEvenement");
nomJeu=document.getElementsByClassName("formNomJeu");
dateEvenement=document.getElementsByClassName("formDateEvenement");
/********************************************************************Liste Lot */
nomLot=document.getElementsByClassName("nomLot");

/********************************************************************addEventListener */
/**********************************************************participations */
for(let i=0;i<nom.length;i++)
{
    nom[i].addEventListener("change", function(){
        nom[i].form.submit();
    });
    prenom[i].addEventListener("change", function(){
        prenom[i].form.submit();
    });
    mail[i].addEventListener("change", function(){
        mail[i].form.submit();
    });
    tel[i].addEventListener("change", function(){
        tel[i].form.submit();
    });
    prevenu[i].addEventListener("change", function(){
        tel[i].form.submit();
    });
    presence[i].addEventListener("change", function(){
        tel[i].form.submit();
    });
    reglement[i].addEventListener("change", function(){
        tel[i].form.submit();
    });
}
/**************************************************************evenements */
for(let i=0;i<nomEvenement.length;i++)
{
    nomEvenement[i].addEventListener("change", function(){
        nomEvenement[i].form.submit();
    });
    nbMaxJoueur[i].addEventListener("change", function(){
        nbMaxJoueur[i].form.submit();
    });
    coutEvenement[i].addEventListener("change", function(){
        coutEvenement[i].form.submit();
    });
    nomJeu[i].addEventListener("change", function(){
        nomJeu[i].form.submit();
    });
    dateEvenement[i].addEventListener("change", function(){
        dateEvenement[i].form.submit();
    });
}
/******************************************************************Liste Lot */
for(let i=0;i<nomLot.length;i++)
{
    nomLot[i].addEventListener("change", function(){
        nomLot[i].form.submit();
    });
}

