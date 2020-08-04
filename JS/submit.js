
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
info=document.getElementsByClassName("formInfo");
/**************************************************************liste evenements */
nomEvenement=document.getElementsByClassName("formNomEvenement");
nbMaxJoueur=document.getElementsByClassName("formnbMaxJoueur");
coutEvenement=document.getElementsByClassName("formCoutEvenement");
nomJeu=document.getElementsByClassName("formNomJeu");
dateEvenement=document.getElementsByClassName("formDateEvenement");
informationSupplementaire=document.getElementsByClassName("formInformationSupplementaire");
/**********************************************************liste participants */
nomParticipant=document.getElementsByClassName("formNomDuParticipant");
prenomParticipant=document.getElementsByClassName("formPrenomDuParticipant");
mailParticipant=document.getElementsByClassName("formMailDuParticipant");
telParticipant=document.getElementsByClassName("formTelDuParticipant");
preferenceDuParticipant=document.getElementsByClassName("formPreferenceDuParticipant");
/********************************************************************Liste Lot */
nomLot=document.getElementsByClassName("nomLot");
/********************************************************************tournois */
scoreA=document.getElementsByClassName("score0");
scoreB=document.getElementsByClassName("score1");
scoreC=document.getElementsByClassName("score2");
scoreD=document.getElementsByClassName("score3");
scoreE=document.getElementsByClassName("score4");
scoreF=document.getElementsByClassName("score5");
scoreG=document.getElementsByClassName("score6");

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
        prevenu[i].form.submit();
    });
    presence[i].addEventListener("change", function(){
        presence[i].form.submit();
    });
    reglement[i].addEventListener("change", function(){
        reglement[i].form.submit();
    });
    info[i].addEventListener("change", function(){
        info[i].form.submit();
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
    informationSupplementaire[i].addEventListener("change", function(){
        informationSupplementaire[i].form.submit();
    });
}
/**********************************************************liste participants */
for(let i=0;i<nomParticipant.length;i++)
{
    nomParticipant[i].addEventListener("change", function(){
        nomParticipant[i].form.submit();
    });
    prenomParticipant[i].addEventListener("change", function(){
        prenomParticipant[i].form.submit();
    });
    mailParticipant[i].addEventListener("change", function(){
        mailParticipant[i].form.submit();
    });
    telParticipant[i].addEventListener("change", function(){
        telParticipant[i].form.submit();
    });
    preferenceDuParticipant[i].addEventListener("change", function(){
        preferenceDuParticipant[i].form.submit();
    });
}
/******************************************************************Liste Lot */
for(let i=0;i<nomLot.length;i++)
{
    nomLot[i].addEventListener("change", function(){
        nomLot[i].form.submit();
    });
}
/********************************************************************tournois */
for(let i=0;i<scoreA.length;i++)
{
    scoreA[i].addEventListener("change", function(){
        scoreA[i].form.submit();
    });
}
for(let i=0;i<scoreB.length;i++)
{
    scoreB[i].addEventListener("change", function(){
        scoreB[i].form.submit();
    });
}
for(let i=0;i<scoreC.length;i++)
{
      scoreC[i].addEventListener("change", function(){
        scoreC[i].form.submit();
    });
}
for(let i=0;i<scoreD.length;i++)
{
      scoreD[i].addEventListener("change", function(){
        scoreD[i].form.submit();
    });
}
for(let i=0;i<scoreE.length;i++)
{
      scoreE[i].addEventListener("change", function(){
        scoreE[i].form.submit();
    });
}
for(let i=0;i<scoreF.length;i++)
{
     scoreF[i].addEventListener("change", function(){
        scoreF[i].form.submit();
    });
}
for(let i=0;i<scoreG.length;i++)
{
     scoreG[i].addEventListener("change", function(){
        scoreG[i].form.submit();
    });
}

