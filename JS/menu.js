
// nombreTour = document.getElementById("tourMax").innerHTML;
poolB = document.getElementsByClassName("poolB");
if (poolB.length == 1) {
    nbPool = 2;
    inputJoueurA = document.getElementsByClassName("numJoueurA");
    nombreInputA = inputJoueurA.length;
    inputJoueurB = document.getElementsByClassName("numJoueurB");
    nombreInputB = inputJoueurA.length;
    nombreDeJoueurPoolA = document.getElementById("poolA").attributes.nombre.value;
    nombreDeJoueurPoolA = parseInt(nombreDeJoueurPoolA);
    chiffreA = document.getElementsByClassName("tourA");
    infoTabA = document.getElementsByClassName("infoTabA");
    nombreDeJoueurPoolB = document.getElementById("poolB").attributes.nombre.value;
    nombreDeJoueurPoolB = parseInt(nombreDeJoueurPoolB);
    chiffreB = document.getElementsByClassName("tourB");
    infoTabB = document.getElementsByClassName("infoTabB");
}
else {
    nbPool = 1;
    inputJoueurA = document.getElementsByClassName("numJoueurA");
    nombreInput = inputJoueurA.length;
    nombreDeJoueurPoolA = document.getElementById("poolA").attributes.nombre.value;
    nombreDeJoueurPoolA = parseInt(nombreDeJoueurPoolA);
    chiffreA = document.getElementsByClassName("tourA");
    infoTabA = document.getElementsByClassName("infoTabA");
}

tabJoueur = [];

for (i = 0; i < nombreDeJoueurPoolA; i++) {
    tabJoueur[i] = "score"+inputJoueurA[i].attributes.joueur.value;
}

scoreTotal = document.getElementsByClassName("scoreTotal");

switch (nombreDeJoueurPoolA) {
    case 3:
        for (let i = 0; i < 9; i++) {
            switch (i) {
                case 0:
                case 1:
                case 2:
                    inputJoueurA[i].addEventListener("input", function () {
                        idJoueur = inputJoueurA[i].attributes.joueur.value;
                        idJoueur=parseInt(idJoueur);
                        idscore="score"+idJoueur;
                        scoreTotal=document.getElementById(idscore);
                        ancienScore=parseInt(scoreTotal.innerHTML);
                        nouveauScore=parseInt(inputJoueurA[i].value);
                        scoreTotal.innerHTML =ancienScore+nouveauScore;
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[0].style.background == "rgb(151, 238, 151)" && inputJoueurA[1].style.background == "rgb(151, 238, 151)" && inputJoueurA[2].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(3, 90, 3)";
                                infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[0].style.background != "rgb(151, 238, 151)" || inputJoueurA[1].style.background != "rgb(151, 238, 151)" || inputJoueurA[2].style.background != "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(83, 11, 11)";
                                infoTabA[0].style.border = "red solid 2px";
                            }
                        }
                        if(chiffreA[0].style.background == "rgb(3, 90, 3)" && chiffreA[1].style.background == "rgb(3, 90, 3)" && chiffreA[2].style.background == "rgb(3, 90, 3)")
                        {
                            score1=document.getElementById(tabJoueur[0]).innerHTML;
                            score2=document.getElementById(tabJoueur[1]).innerHTML;
                            score3=document.getElementById(tabJoueur[2]).innerHTML;
                            score1=parseInt(score1);
                            score2=parseInt(score2);
                            score3=parseInt(score3);
                            if (score1>=score2 && score1>=score3)
                            {
                                // alert(score1+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[0];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score2>=score3 && score2>=score1)
                            {
                                // alert(score2+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[1];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score3>score1)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score3>=score2 && score3>=score1)
                            {
                                // alert(score3+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[2];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>score1)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                        }                                         
                    });
                    break;
                case 3:
                case 4:
                case 5:
                    inputJoueurA[i].addEventListener("input", function () {
                        idJoueur = inputJoueurA[i].attributes.joueur.value;
                        idJoueur=parseInt(idJoueur);
                        idscore="score"+idJoueur;
                        scoreTotal=document.getElementById(idscore);
                        ancienScore=parseInt(scoreTotal.innerHTML);
                        nouveauScore=parseInt(inputJoueurA[i].value);
                        scoreTotal.innerHTML =ancienScore+nouveauScore;
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[3].style.background == "rgb(151, 238, 151)" && inputJoueurA[4].style.background == "rgb(151, 238, 151)" && inputJoueurA[5].style.background == "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(3, 90, 3)";
                                infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[3].style.background != "rgb(151, 238, 151)" || inputJoueurA[4].style.background != "rgb(151, 238, 151)" || inputJoueurA[5].style.background != "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(83, 11, 11)";
                                infoTabA[1].style.border = "red solid 2px";
                            }
                        }
                        if(chiffreA[0].style.background == "rgb(3, 90, 3)" && chiffreA[1].style.background == "rgb(3, 90, 3)" && chiffreA[2].style.background == "rgb(3, 90, 3)")
                        {
                            score1=document.getElementById(tabJoueur[0]).innerHTML;
                            score2=document.getElementById(tabJoueur[1]).innerHTML;
                            score3=document.getElementById(tabJoueur[2]).innerHTML;
                            score1=parseInt(score1);
                            score2=parseInt(score2);
                            score3=parseInt(score3);
                            if (score1>=score2 && score1>=score3)
                            {
                                // alert(score1+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[0];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score2>=score3 && score2>=score1)
                            {
                                // alert(score2+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[1];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score3>score1)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score3>=score2 && score3>=score1)
                            {
                                // alert(score3+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[2];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>score1)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                        }                                        
                    });
                    break;
                case 6:
                case 7:
                case 8:
                    inputJoueurA[i].addEventListener("input", function () {
                        idJoueur = inputJoueurA[i].attributes.joueur.value;
                        idJoueur=parseInt(idJoueur);
                        idscore="score"+idJoueur;
                        scoreTotal=document.getElementById(idscore);
                        ancienScore=parseInt(scoreTotal.innerHTML);
                        nouveauScore=parseInt(inputJoueurA[i].value);
                        scoreTotal.innerHTML =ancienScore+nouveauScore;
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[6].style.background == "rgb(151, 238, 151)" && inputJoueurA[7].style.background == "rgb(151, 238, 151)" && inputJoueurA[8].style.background == "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(3, 90, 3)";
                                infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[6].style.background != "rgb(151, 238, 151)" || inputJoueurA[7].style.background != "rgb(151, 238, 151)" || inputJoueurA[8].style.background != "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(83, 11, 11)";
                                infoTabA[2].style.border = "red solid 2px";
                            }
                        }
                        if(chiffreA[0].style.background == "rgb(3, 90, 3)" && chiffreA[1].style.background == "rgb(3, 90, 3)" && chiffreA[2].style.background == "rgb(3, 90, 3)")
                        {
                            score1=document.getElementById(tabJoueur[0]).innerHTML;
                            score2=document.getElementById(tabJoueur[1]).innerHTML;
                            score3=document.getElementById(tabJoueur[2]).innerHTML;
                            score1=parseInt(score1);
                            score2=parseInt(score2);
                            score3=parseInt(score3);
                            if (score1>=score2 && score1>=score3)
                            {
                                // alert(score1+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[0];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score2>=score3 && score2>=score1)
                            {
                                // alert(score2+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[1];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score3>score1)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score3>=score2 && score3>=score1)
                            {
                                // alert(score3+" est le plus grand")
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[2];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>score1)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                        }                     
                    });
                    break;
            }
        }
        break;
        /************************************************************************************************************************************************************************************************
         * *********************************************************************************************************************************************************************************************/
    case 4:
        for (let i = 0; i < 12; i++) {
            switch (i) {
                case 0:
                case 1:
                case 2:
                case 3:
                    inputJoueurA[i].addEventListener("input", function () {
                        idJoueur = inputJoueurA[i].attributes.joueur.value;
                        idJoueur=parseInt(idJoueur);
                        idscore="score"+idJoueur;
                        scoreTotal=document.getElementById(idscore);
                        ancienScore=parseInt(scoreTotal.innerHTML);
                        nouveauScore=parseInt(inputJoueurA[i].value);
                        scoreTotal.innerHTML =ancienScore+nouveauScore;
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[0].style.background == "rgb(151, 238, 151)" && inputJoueurA[1].style.background == "rgb(151, 238, 151)" && inputJoueurA[2].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[3].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(3, 90, 3)";
                                infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[0].style.background != "rgb(151, 238, 151)" || inputJoueurA[1].style.background != "rgb(151, 238, 151)" || inputJoueurA[2].style.background != "rgb(151, 238, 151)"
                                && inputJoueurA[3].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(83, 11, 11)";
                                infoTabA[0].style.border = "red solid 2px";
                            }
                        }
                        if(chiffreA[0].style.background == "rgb(3, 90, 3)" && chiffreA[1].style.background == "rgb(3, 90, 3)" && chiffreA[2].style.background == "rgb(3, 90, 3)")
                        {
                            score1=document.getElementById(tabJoueur[0]).innerHTML;
                            score2=document.getElementById(tabJoueur[1]).innerHTML;
                            score3=document.getElementById(tabJoueur[2]).innerHTML;
                            score4=document.getElementById(tabJoueur[3]).innerHTML;
                            score1=parseInt(score1);
                            score2=parseInt(score2);
                            score3=parseInt(score3);
                            score4=parseInt(score4);
                            if (score1>=score2 && score1>=score3 && score1>=score4)
                            {
                                // alert(score1+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[0];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>=score3 && score2>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score3>=score2 && score3>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score2>=score1 && score2>=score3 && score2>=score4)
                            {
                                // alert(score2+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[1];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score1>=score3 && score1>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score3>=score1 && score3>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else{
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score3>=score1 && score3>=score2 && score3>=score4)
                            {
                                // alert(score3+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[2];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score1>=score2 && score1>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score2>=score1 && score2>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else
                            {
                                // alert(score4+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[3];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if (score1>=score2 && score1>=score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                if (score2>=score1 && score2>=score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else{
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                        }
                    });
                    break;
                case 4:
                case 5:
                case 6:
                case 7:
                    inputJoueurA[i].addEventListener("input", function () {
                        idJoueur = inputJoueurA[i].attributes.joueur.value;
                        idJoueur=parseInt(idJoueur);
                        idscore="score"+idJoueur;
                        scoreTotal=document.getElementById(idscore);
                        ancienScore=parseInt(scoreTotal.innerHTML);
                        nouveauScore=parseInt(inputJoueurA[i].value);
                        scoreTotal.innerHTML =ancienScore+nouveauScore;
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[4].style.background == "rgb(151, 238, 151)" && inputJoueurA[5].style.background == "rgb(151, 238, 151)" && inputJoueurA[6].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[7].style.background == "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(3, 90, 3)";
                                infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[4].style.background != "rgb(151, 238, 151)" || inputJoueurA[5].style.background != "rgb(151, 238, 151)" || inputJoueurA[6].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[7].style.background != "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(83, 11, 11)";
                                infoTabA[1].style.border = "red solid 2px";
                            }
                        }
                        if(chiffreA[0].style.background == "rgb(3, 90, 3)" && chiffreA[1].style.background == "rgb(3, 90, 3)" && chiffreA[2].style.background == "rgb(3, 90, 3)")
                        {
                            score1=document.getElementById(tabJoueur[0]).innerHTML;
                            score2=document.getElementById(tabJoueur[1]).innerHTML;
                            score3=document.getElementById(tabJoueur[2]).innerHTML;
                            score4=document.getElementById(tabJoueur[3]).innerHTML;
                            score1=parseInt(score1);
                            score2=parseInt(score2);
                            score3=parseInt(score3);
                            score4=parseInt(score4);
                            if (score1>=score2 && score1>=score3 && score1>=score4)
                            {
                                // alert(score1+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[0];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>=score3 && score2>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score3>=score2 && score3>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score2>=score1 && score2>=score3 && score2>=score4)
                            {
                                // alert(score2+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[1];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score1>=score3 && score1>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score3>=score1 && score3>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else{
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score3>=score1 && score3>=score2 && score3>=score4)
                            {
                                // alert(score3+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[2];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score1>=score2 && score1>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score2>=score1 && score2>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else
                            {
                                // alert(score4+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[3];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if (score1>=score2 && score1>=score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                if (score2>=score1 && score2>=score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else{
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                        }
                    });
                    break;
                case 8:
                case 9:
                case 10:
                case 11:
                    inputJoueurA[i].addEventListener("input", function () {
                        idJoueur = inputJoueurA[i].attributes.joueur.value;
                        idJoueur=parseInt(idJoueur);
                        idscore="score"+idJoueur;
                        scoreTotal=document.getElementById(idscore);
                        ancienScore=parseInt(scoreTotal.innerHTML);
                        nouveauScore=parseInt(inputJoueurA[i].value);
                        scoreTotal.innerHTML =ancienScore+nouveauScore;
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[8].style.background == "rgb(151, 238, 151)" && inputJoueurA[9].style.background == "rgb(151, 238, 151)" && inputJoueurA[10].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[11].style.background == "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(3, 90, 3)";
                                infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[8].style.background != "rgb(151, 238, 151)" || inputJoueurA[9].style.background != "rgb(151, 238, 151)" || inputJoueurA[10].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[11].style.background != "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(83, 11, 11)";
                                infoTabA[2].style.border = "red solid 2px";
                            }
                        }
                        if(chiffreA[0].style.background == "rgb(3, 90, 3)" && chiffreA[1].style.background == "rgb(3, 90, 3)" && chiffreA[2].style.background == "rgb(3, 90, 3)")
                        {
                            score1=document.getElementById(tabJoueur[0]).innerHTML;
                            score2=document.getElementById(tabJoueur[1]).innerHTML;
                            score3=document.getElementById(tabJoueur[2]).innerHTML;
                            score4=document.getElementById(tabJoueur[3]).innerHTML;
                            score1=parseInt(score1);
                            score2=parseInt(score2);
                            score3=parseInt(score3);
                            score4=parseInt(score4);
                            if (score1>=score2 && score1>=score3 && score1>=score4)
                            {
                                // alert(score1+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[0];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score2>=score3 && score2>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score3>=score2 && score3>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score2>=score1 && score2>=score3 && score2>=score4)
                            {
                                // alert(score2+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[1];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if(score1>=score3 && score1>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else if(score3>=score1 && score3>=score4)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else{
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[3];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                            else if (score3>=score4 && score3>=score2 && score3>=score1)
                            {
                               // alert(score3+" est le plus grand");
                               premierA=document.getElementById("1A");
                               id="1"+tabJoueur[2];
                               joueur=document.getElementById(id);
                               prenomJoueur=joueur.attributes.prenomJoueur.value;
                               nomJoueur=joueur.attributes.nomJoueur.value;
                               identiteJoueur=prenomJoueur+" "+nomJoueur;
                               premierA.innerHTML=identiteJoueur;
                               if(score1>=score2 && score1>=score4)
                               {
                                   secondA=document.getElementById("2A");
                                   id2="1"+tabJoueur[0];
                                   joueur2=document.getElementById(id2);
                                   prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                   nomJoueur2=joueur2.attributes.nomJoueur.value;
                                   identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                   secondA.innerHTML=identiteJoueur2;
                               }
                               else if(score2>=score1 && score2>=score4)
                               {
                                   secondA=document.getElementById("2A");
                                   id2="1"+tabJoueur[1];
                                   joueur2=document.getElementById(id2);
                                   prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                   nomJoueur2=joueur2.attributes.nomJoueur.value;
                                   identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                   secondA.innerHTML=identiteJoueur2;
                               }
                               else
                               {
                                   secondA=document.getElementById("2A");
                                   id2="1"+tabJoueur[3];
                                   joueur2=document.getElementById(id2);
                                   prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                   nomJoueur2=joueur2.attributes.nomJoueur.value;
                                   identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                   secondA.innerHTML=identiteJoueur2;
                               }
                            }
                            else
                            {
                                // alert(score4+" est le plus grand");
                                premierA=document.getElementById("1A");
                                id="1"+tabJoueur[3];
                                joueur=document.getElementById(id);
                                prenomJoueur=joueur.attributes.prenomJoueur.value;
                                nomJoueur=joueur.attributes.nomJoueur.value;
                                identiteJoueur=prenomJoueur+" "+nomJoueur;
                                premierA.innerHTML=identiteJoueur;
                                if (score1>=score2 && score1>=score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[0];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                if (score2>=score1 && score2>=score3)
                                {
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[1];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                                else{
                                    secondA=document.getElementById("2A");
                                    id2="1"+tabJoueur[2];
                                    joueur2=document.getElementById(id2);
                                    prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                    nomJoueur2=joueur2.attributes.nomJoueur.value;
                                    identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                    secondA.innerHTML=identiteJoueur2;
                                }
                            }
                        }
                    });
                    break;
            }
        }
        break;
    case 5:
        for (let i = 0; i < 25; i++) {
            switch (i) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[0].style.background == "rgb(151, 238, 151)" && inputJoueurA[1].style.background == "rgb(151, 238, 151)" && inputJoueurA[2].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[3].style.background == "rgb(151, 238, 151)" && inputJoueurA[4].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(3, 90, 3)";
                                infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[0].style.background != "rgb(151, 238, 151)" || inputJoueurA[1].style.background != "rgb(151, 238, 151)" || inputJoueurA[2].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[3].style.background != "rgb(151, 238, 151)" || inputJoueurA[4].style.background != "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(83, 11, 11)";
                                infoTabA[0].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[5].style.background == "rgb(151, 238, 151)" && inputJoueurA[6].style.background == "rgb(151, 238, 151)" && inputJoueurA[7].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[8].style.background == "rgb(151, 238, 151)" && inputJoueurA[9].style.background == "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(3, 90, 3)";
                                infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[5].style.background != "rgb(151, 238, 151)" || inputJoueurA[6].style.background != "rgb(151, 238, 151)" || inputJoueurA[7].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[8].style.background != "rgb(151, 238, 151)" || inputJoueurA[9].style.background != "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(83, 11, 11)";
                                infoTabA[1].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 10:
                case 11:
                case 12:
                case 13:
                case 14:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[10].style.background == "rgb(151, 238, 151)" && inputJoueurA[11].style.background == "rgb(151, 238, 151)" && inputJoueurA[12].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[13].style.background == "rgb(151, 238, 151)" && inputJoueurA[14].style.background == "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(3, 90, 3)";
                                infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[10].style.background != "rgb(151, 238, 151)" || inputJoueurA[11].style.background != "rgb(151, 238, 151)" || inputJoueurA[12].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[13].style.background != "rgb(151, 238, 151)" || inputJoueurA[14].style.background != "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(83, 11, 11)";
                                infoTabA[2].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[15].style.background == "rgb(151, 238, 151)" && inputJoueurA[16].style.background == "rgb(151, 238, 151)" && inputJoueurA[17].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[18].style.background == "rgb(151, 238, 151)" && inputJoueurA[19].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(3, 90, 3)";
                                infoTabA[3].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[15].style.background != "rgb(151, 238, 151)" || inputJoueurA[16].style.background != "rgb(151, 238, 151)" || inputJoueurA[17].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[18].style.background != "rgb(151, 238, 151)" || inputJoueurA[19].style.background != "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(83, 11, 11)";
                                infoTabA[3].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 20:
                case 21:
                case 22:
                case 23:
                case 24:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[20].style.background == "rgb(151, 238, 151)" && inputJoueurA[21].style.background == "rgb(151, 238, 151)" && inputJoueurA[22].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[23].style.background == "rgb(151, 238, 151)" && inputJoueurA[24].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(3, 90, 3)";
                                infoTabA[4].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[20].style.background != "rgb(151, 238, 151)" || inputJoueurA[21].style.background != "rgb(151, 238, 151)" || inputJoueurA[22].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[23].style.background != "rgb(151, 238, 151)" || inputJoueurA[24].style.background != "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(83, 11, 11)";
                                infoTabA[4].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
            }
        }
        break;
    case 6:
        for (let i = 0; i < 30; i++) {
            switch (i) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[0].style.background == "rgb(151, 238, 151)" && inputJoueurA[1].style.background == "rgb(151, 238, 151)" && inputJoueurA[2].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[3].style.background == "rgb(151, 238, 151)" && inputJoueurA[4].style.background == "rgb(151, 238, 151)" && inputJoueurA[5].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(3, 90, 3)";
                                infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[0].style.background != "rgb(151, 238, 151)" || inputJoueurA[1].style.background != "rgb(151, 238, 151)" || inputJoueurA[2].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[3].style.background != "rgb(151, 238, 151)" || inputJoueurA[4].style.background != "rgb(151, 238, 151)" || inputJoueurA[5].style.background != "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(83, 11, 11)";
                                infoTabA[0].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[6].style.background == "rgb(151, 238, 151)" && inputJoueurA[7].style.background == "rgb(151, 238, 151)" && inputJoueurA[8].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[9].style.background == "rgb(151, 238, 151)" && inputJoueurA[10].style.background == "rgb(151, 238, 151)" && inputJoueurA[11].style.background == "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(3, 90, 3)";
                                infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[6].style.background != "rgb(151, 238, 151)" || inputJoueurA[7].style.background != "rgb(151, 238, 151)" || inputJoueurA[8].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[9].style.background != "rgb(151, 238, 151)" || inputJoueurA[10].style.background != "rgb(151, 238, 151)" || inputJoueurA[11].style.background != "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(83, 11, 11)";
                                infoTabA[1].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 12:
                case 13:
                case 14:
                case 15:
                case 16:
                case 17:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[12].style.background == "rgb(151, 238, 151)" && inputJoueurA[13].style.background == "rgb(151, 238, 151)" && inputJoueurA[14].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[15].style.background == "rgb(151, 238, 151)" && inputJoueurA[16].style.background == "rgb(151, 238, 151)" && inputJoueurA[17].style.background == "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(3, 90, 3)";
                                infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[12].style.background != "rgb(151, 238, 151)" || inputJoueurA[13].style.background != "rgb(151, 238, 151)" || inputJoueurA[14].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[15].style.background != "rgb(151, 238, 151)" || inputJoueurA[16].style.background != "rgb(151, 238, 151)" || inputJoueurA[17].style.background != "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(83, 11, 11)";
                                infoTabA[2].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 18:
                case 19:
                case 20:
                case 21:
                case 22:
                case 23:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[18].style.background == "rgb(151, 238, 151)" && inputJoueurA[19].style.background == "rgb(151, 238, 151)" && inputJoueurA[20].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[21].style.background == "rgb(151, 238, 151)" && inputJoueurA[22].style.background == "rgb(151, 238, 151)" && inputJoueurA[23].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(3, 90, 3)";
                                infoTabA[3].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[18].style.background != "rgb(151, 238, 151)" || inputJoueurA[19].style.background != "rgb(151, 238, 151)" || inputJoueurA[20].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[21].style.background != "rgb(151, 238, 151)" || inputJoueurA[22].style.background != "rgb(151, 238, 151)" || inputJoueurA[23].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(83, 11, 11)";
                                infoTabA[3].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 24:
                case 25:
                case 26:
                case 27:
                case 28:
                case 29:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[24].style.background == "rgb(151, 238, 151)" && inputJoueurA[25].style.background == "rgb(151, 238, 151)" && inputJoueurA[26].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[27].style.background == "rgb(151, 238, 151)" && inputJoueurA[28].style.background == "rgb(151, 238, 151)" && inputJoueurA[29].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(3, 90, 3)";
                                infoTabA[4].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[24].style.background != "rgb(151, 238, 151)" || inputJoueurA[25].style.background != "rgb(151, 238, 151)" || inputJoueurA[26].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[27].style.background != "rgb(151, 238, 151)" || inputJoueurA[28].style.background != "rgb(151, 238, 151)" || inputJoueurA[29].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(83, 11, 11)";
                                infoTabA[4].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
            }
        }
        break;
    case 7:
        for (let i = 0; i < 49; i++) {
            switch (i) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[0].style.background == "rgb(151, 238, 151)" && inputJoueurA[1].style.background == "rgb(151, 238, 151)" && inputJoueurA[2].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[3].style.background == "rgb(151, 238, 151)" && inputJoueurA[4].style.background == "rgb(151, 238, 151)" && inputJoueurA[5].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[6].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(3, 90, 3)";
                                infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[0].style.background != "rgb(151, 238, 151)" || inputJoueurA[1].style.background != "rgb(151, 238, 151)" || inputJoueurA[2].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[3].style.background != "rgb(151, 238, 151)" || inputJoueurA[4].style.background != "rgb(151, 238, 151)" || inputJoueurA[5].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[6].style.background != "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(83, 11, 11)";
                                infoTabA[0].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                case 13:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[7].style.background == "rgb(151, 238, 151)" && inputJoueurA[8].style.background == "rgb(151, 238, 151)" && inputJoueurA[9].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[10].style.background == "rgb(151, 238, 151)" && inputJoueurA[11].style.background == "rgb(151, 238, 151)" && inputJoueurA[12].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[13].style.background == "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(3, 90, 3)";
                                infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[7].style.background != "rgb(151, 238, 151)" || inputJoueurA[8].style.background != "rgb(151, 238, 151)" || inputJoueurA[9].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[10].style.background != "rgb(151, 238, 151)" || inputJoueurA[11].style.background != "rgb(151, 238, 151)" || inputJoueurA[12].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[13].style.background != "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(83, 11, 11)";
                                infoTabA[1].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;

                case 14:
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:
                case 20:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[14].style.background == "rgb(151, 238, 151)" && inputJoueurA[15].style.background == "rgb(151, 238, 151)" && inputJoueurA[16].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[19].style.background == "rgb(151, 238, 151)" && inputJoueurA[17].style.background == "rgb(151, 238, 151)" && inputJoueurA[18].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[20].style.background == "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(3, 90, 3)";
                                infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[14].style.background != "rgb(151, 238, 151)" || inputJoueurA[15].style.background != "rgb(151, 238, 151)" || inputJoueurA[16].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[19].style.background != "rgb(151, 238, 151)" || inputJoueurA[17].style.background != "rgb(151, 238, 151)" || inputJoueurA[18].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[20].style.background != "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(83, 11, 11)";
                                infoTabA[2].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 21:
                case 22:
                case 23:
                case 24:
                case 25:
                case 26:
                case 27:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[21].style.background == "rgb(151, 238, 151)" && inputJoueurA[22].style.background == "rgb(151, 238, 151)" && inputJoueurA[23].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[24].style.background == "rgb(151, 238, 151)" && inputJoueurA[25].style.background == "rgb(151, 238, 151)" && inputJoueurA[26].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[27].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(3, 90, 3)";
                                infoTabA[3].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[21].style.background != "rgb(151, 238, 151)" || inputJoueurA[22].style.background != "rgb(151, 238, 151)" || inputJoueurA[23].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[24].style.background != "rgb(151, 238, 151)" || inputJoueurA[25].style.background != "rgb(151, 238, 151)" || inputJoueurA[26].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[27].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(83, 11, 11)";
                                infoTabA[3].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 28:
                case 29:
                case 30:
                case 31:
                case 32:
                case 33:
                case 34:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[28].style.background == "rgb(151, 238, 151)" && inputJoueurA[29].style.background == "rgb(151, 238, 151)" && inputJoueurA[30].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[31].style.background == "rgb(151, 238, 151)" && inputJoueurA[32].style.background == "rgb(151, 238, 151)" && inputJoueurA[33].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[34].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(3, 90, 3)";
                                infoTabA[4].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[28].style.background != "rgb(151, 238, 151)" || inputJoueurA[29].style.background != "rgb(151, 238, 151)" || inputJoueurA[30].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[31].style.background != "rgb(151, 238, 151)" || inputJoueurA[32].style.background != "rgb(151, 238, 151)" || inputJoueurA[33].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[34].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(83, 11, 11)";
                                infoTabA[4].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 35:
                case 36:
                case 37:
                case 38:
                case 39:
                case 40:
                case 41:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[35].style.background == "rgb(151, 238, 151)" && inputJoueurA[36].style.background == "rgb(151, 238, 151)" && inputJoueurA[37].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[38].style.background == "rgb(151, 238, 151)" && inputJoueurA[39].style.background == "rgb(151, 238, 151)" && inputJoueurA[40].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[41].style.background == "rgb(151, 238, 151)") {
                                chiffreA[5].style.background = "rgb(3, 90, 3)";
                                infoTabA[5].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[35].style.background != "rgb(151, 238, 151)" || inputJoueurA[36].style.background != "rgb(151, 238, 151)" || inputJoueurA[37].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[38].style.background != "rgb(151, 238, 151)" || inputJoueurA[39].style.background != "rgb(151, 238, 151)" || inputJoueurA[40].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[41].style.background == "rgb(151, 238, 151)") {
                                chiffreA[5].style.background = "rgb(83, 11, 11)";
                                infoTabA[5].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 42:
                case 43:
                case 44:
                case 45:
                case 46:
                case 47:
                case 48:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[42].style.background == "rgb(151, 238, 151)" && inputJoueurA[43].style.background == "rgb(151, 238, 151)" && inputJoueurA[44].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[45].style.background == "rgb(151, 238, 151)" && inputJoueurA[46].style.background == "rgb(151, 238, 151)" && inputJoueurA[47].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[48].style.background == "rgb(151, 238, 151)") {
                                chiffreA[6].style.background = "rgb(3, 90, 3)";
                                infoTabA[6].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[42].style.background != "rgb(151, 238, 151)" || inputJoueurA[43].style.background != "rgb(151, 238, 151)" || inputJoueurA[44].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[45].style.background != "rgb(151, 238, 151)" || inputJoueurA[46].style.background != "rgb(151, 238, 151)" || inputJoueurA[47].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[48].style.background == "rgb(151, 238, 151)") {
                                chiffreA[6].style.background = "rgb(83, 11, 11)";
                                infoTabA[6].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
            }
        }
        break;
    case 8:
        for (let i = 0; i < 56; i++) {
            switch (i) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[0].style.background == "rgb(151, 238, 151)" && inputJoueurA[1].style.background == "rgb(151, 238, 151)" && inputJoueurA[2].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[3].style.background == "rgb(151, 238, 151)" && inputJoueurA[4].style.background == "rgb(151, 238, 151)" && inputJoueurA[5].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[6].style.background == "rgb(151, 238, 151)" && inputJoueurA[7].style.background == "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(3, 90, 3)";
                                infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[0].style.background != "rgb(151, 238, 151)" || inputJoueurA[1].style.background != "rgb(151, 238, 151)" || inputJoueurA[2].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[3].style.background != "rgb(151, 238, 151)" || inputJoueurA[4].style.background != "rgb(151, 238, 151)" || inputJoueurA[5].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[6].style.background != "rgb(151, 238, 151)" || inputJoueurA[7].style.background != "rgb(151, 238, 151)") {
                                chiffreA[0].style.background = "rgb(83, 11, 11)";
                                infoTabA[0].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                case 13:
                case 14:
                case 15:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[8].style.background == "rgb(151, 238, 151)" && inputJoueurA[9].style.background == "rgb(151, 238, 151)" && inputJoueurA[10].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[11].style.background == "rgb(151, 238, 151)" && inputJoueurA[12].style.background == "rgb(151, 238, 151)" && inputJoueurA[13].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[14].style.background == "rgb(151, 238, 151)" && inputJoueurA[15].style.background == "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(3, 90, 3)";
                                infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[8].style.background != "rgb(151, 238, 151)" || inputJoueurA[9].style.background != "rgb(151, 238, 151)" || inputJoueurA[10].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[11].style.background != "rgb(151, 238, 151)" || inputJoueurA[12].style.background != "rgb(151, 238, 151)" || inputJoueurA[13].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[14].style.background != "rgb(151, 238, 151)" || inputJoueurA[15].style.background != "rgb(151, 238, 151)") {
                                chiffreA[1].style.background = "rgb(83, 11, 11)";
                                infoTabA[1].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 16:
                case 17:
                case 18:
                case 19:
                case 20:
                case 21:
                case 22:
                case 23:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[16].style.background == "rgb(151, 238, 151)" && inputJoueurA[17].style.background == "rgb(151, 238, 151)" && inputJoueurA[18].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[19].style.background == "rgb(151, 238, 151)" && inputJoueurA[20].style.background == "rgb(151, 238, 151)" && inputJoueurA[21].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[22].style.background == "rgb(151, 238, 151)" && inputJoueurA[23].style.background == "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(3, 90, 3)";
                                infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[16].style.background != "rgb(151, 238, 151)" || inputJoueurA[17].style.background != "rgb(151, 238, 151)" || inputJoueurA[18].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[19].style.background != "rgb(151, 238, 151)" || inputJoueurA[20].style.background != "rgb(151, 238, 151)" || inputJoueurA[21].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[22].style.background != "rgb(151, 238, 151)" || inputJoueurA[23].style.background != "rgb(151, 238, 151)") {
                                chiffreA[2].style.background = "rgb(83, 11, 11)";
                                infoTabA[2].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 24:
                case 25:
                case 26:
                case 27:
                case 28:
                case 29:
                case 30:
                case 31:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[24].style.background == "rgb(151, 238, 151)" && inputJoueurA[25].style.background == "rgb(151, 238, 151)" && inputJoueurA[26].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[27].style.background == "rgb(151, 238, 151)" && inputJoueurA[28].style.background == "rgb(151, 238, 151)" && inputJoueurA[29].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[30].style.background == "rgb(151, 238, 151)" && inputJoueurA[31].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(3, 90, 3)";
                                infoTabA[3].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[24].style.background != "rgb(151, 238, 151)" || inputJoueurA[25].style.background != "rgb(151, 238, 151)" || inputJoueurA[26].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[27].style.background != "rgb(151, 238, 151)" || inputJoueurA[28].style.background != "rgb(151, 238, 151)" || inputJoueurA[29].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[30].style.background == "rgb(151, 238, 151)" || inputJoueurA[31].style.background == "rgb(151, 238, 151)") {
                                chiffreA[3].style.background = "rgb(83, 11, 11)";
                                infoTabA[3].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 32:
                case 33:
                case 34:
                case 35:
                case 36:
                case 37:
                case 38:
                case 39:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[32].style.background == "rgb(151, 238, 151)" && inputJoueurA[33].style.background == "rgb(151, 238, 151)" && inputJoueurA[34].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[35].style.background == "rgb(151, 238, 151)" && inputJoueurA[36].style.background == "rgb(151, 238, 151)" && inputJoueurA[37].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[38].style.background == "rgb(151, 238, 151)" && inputJoueurA[39].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(3, 90, 3)";
                                infoTabA[4].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[32].style.background != "rgb(151, 238, 151)" || inputJoueurA[33].style.background != "rgb(151, 238, 151)" || inputJoueurA[34].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[35].style.background != "rgb(151, 238, 151)" || inputJoueurA[36].style.background != "rgb(151, 238, 151)" || inputJoueurA[37].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[38].style.background == "rgb(151, 238, 151)" || inputJoueurA[39].style.background == "rgb(151, 238, 151)") {
                                chiffreA[4].style.background = "rgb(83, 11, 11)";
                                infoTabA[4].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 40:
                case 41:
                case 42:
                case 43:
                case 44:
                case 45:
                case 46:
                case 47:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[40].style.background == "rgb(151, 238, 151)" && inputJoueurA[41].style.background == "rgb(151, 238, 151)" && inputJoueurA[42].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[43].style.background == "rgb(151, 238, 151)" && inputJoueurA[44].style.background == "rgb(151, 238, 151)" && inputJoueurA[45].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[46].style.background == "rgb(151, 238, 151)" && inputJoueurA[47].style.background == "rgb(151, 238, 151)") {
                                chiffreA[5].style.background = "rgb(3, 90, 3)";
                                infoTabA[5].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[40].style.background != "rgb(151, 238, 151)" || inputJoueurA[41].style.background != "rgb(151, 238, 151)" || inputJoueurA[42].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[43].style.background != "rgb(151, 238, 151)" || inputJoueurA[44].style.background != "rgb(151, 238, 151)" || inputJoueurA[45].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[46].style.background == "rgb(151, 238, 151)" || inputJoueurA[47].style.background == "rgb(151, 238, 151)") {
                                chiffreA[5].style.background = "rgb(83, 11, 11)";
                                infoTabA[5].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
                case 48:
                case 49:
                case 50:
                case 51:
                case 52:
                case 53:
                case 54:
                case 55:
                    inputJoueurA[i].addEventListener("input", function () {
                        if (inputJoueurA[i].style.background != "rgb(151, 238, 151)") {
                            inputJoueurA[i].style.background = "rgb(151, 238, 151)";
                            if (inputJoueurA[48].style.background == "rgb(151, 238, 151)" && inputJoueurA[49].style.background == "rgb(151, 238, 151)" && inputJoueurA[50].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[51].style.background == "rgb(151, 238, 151)" && inputJoueurA[52].style.background == "rgb(151, 238, 151)" && inputJoueurA[53].style.background == "rgb(151, 238, 151)"
                                && inputJoueurA[54].style.background == "rgb(151, 238, 151)" && inputJoueurA[55].style.background == "rgb(151, 238, 151)") {
                                chiffreA[6].style.background = "rgb(3, 90, 3)";
                                infoTabA[6].style.border = "rgb(115, 255, 0) solid 2px";
                            }
                        }
                        else {
                            inputJoueurA[i].style.background = "";
                            if (inputJoueurA[48].style.background != "rgb(151, 238, 151)" || inputJoueurA[49].style.background != "rgb(151, 238, 151)" || inputJoueurA[50].style.background != "rgb(151, 238, 151)"
                                || inputJoueurA[51].style.background != "rgb(151, 238, 151)" || inputJoueurA[52].style.background != "rgb(151, 238, 151)" || inputJoueurA[53].style.background == "rgb(151, 238, 151)"
                                || inputJoueurA[54].style.background == "rgb(151, 238, 151)" || inputJoueurA[55].style.background == "rgb(151, 238, 151)") {
                                chiffreA[6].style.background = "rgb(83, 11, 11)";
                                infoTabA[6].style.border = "red solid 2px";
                            }
                        }
                    });
                    break;
            }
        }
        break;

}
/*****************************************************************************************************************************************************************************************************************************
 * ***************************************************************************************************************************************************************************************************************************
 * ***************************************************************************************************************************************************************************************************************************
 */
// nombreDeJoueur=nombreDeJoueurPoolA+nombreDeJoueurPoolB;
if (poolB.length == 1) {
    tabJoueurB = [];

    for (i = 0; i < nombreDeJoueurPoolB; i++) {
    tabJoueurB[i] = "score"+inputJoueurB[i].attributes.joueur.value;
    }
    switch (nombreDeJoueurPoolB) {
        case 3:
            for (let i = 0; i < 9; i++) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                        inputJoueurB[i].addEventListener("input", function () {
                            idJoueurB = inputJoueurB[i].attributes.joueur.value;
                            idJoueurB=parseInt(idJoueurB);
                            idscoreB="score"+idJoueurB;
                            scoreTotal=document.getElementById(idscoreB);
                            ancienScoreB=parseInt(scoreTotal.innerHTML);
                            nouveauScoreB=parseInt(inputJoueurB[i].value);
                            scoreTotal.innerHTML =ancienScoreB+nouveauScoreB;
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[0].style.background == "rgb(151, 238, 151)" && inputJoueurB[1].style.background == "rgb(151, 238, 151)" && inputJoueurB[2].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(3, 90, 3)";
                                    infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[0].style.background != "rgb(151, 238, 151)" || inputJoueurB[1].style.background != "rgb(151, 238, 151)" || inputJoueurB[2].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(83, 11, 11)";
                                    infoTabB[0].style.border = "red solid 2px";
                                }
                            }
                            if(chiffreB[0].style.background == "rgb(3, 90, 3)" && chiffreB[1].style.background == "rgb(3, 90, 3)" && chiffreB[2].style.background == "rgb(3, 90, 3)")
                            {
                                score1=document.getElementById(tabJoueurB[0]).innerHTML;
                                score2=document.getElementById(tabJoueurB[1]).innerHTML;
                                score3=document.getElementById(tabJoueurB[2]).innerHTML;
                                if (score1>=score2 && score1>=score3)
                                {
                                    // alert(score1+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[0];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score2>=score3 && score2>=score1)
                                {
                                    // alert(score2+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[1];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score3>score1)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score3>=score2 && score3>=score1)
                                {
                                    // alert(score3+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[2];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>score1)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                            }                 
                        });
                        break;
                    case 3:
                    case 4:
                    case 5:
                        inputJoueurB[i].addEventListener("input", function () {
                            idJoueurB = inputJoueurB[i].attributes.joueur.value;
                            idJoueurB=parseInt(idJoueurB);
                            idscoreB="score"+idJoueurB;
                            scoreTotal=document.getElementById(idscoreB);
                            ancienScoreB=parseInt(scoreTotal.innerHTML);
                            nouveauScoreB=parseInt(inputJoueurB[i].value);
                            scoreTotal.innerHTML =ancienScoreB+nouveauScoreB;
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[3].style.background == "rgb(151, 238, 151)" && inputJoueurB[4].style.background == "rgb(151, 238, 151)" && inputJoueurB[5].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(3, 90, 3)";
                                    infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[3].style.background != "rgb(151, 238, 151)" || inputJoueurB[4].style.background != "rgb(151, 238, 151)" || inputJoueurB[5].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(83, 11, 11)";
                                    infoTabB[1].style.border = "red solid 2px";
                                }
                            }
                            if(chiffreB[0].style.background == "rgb(3, 90, 3)" && chiffreB[1].style.background == "rgb(3, 90, 3)" && chiffreB[2].style.background == "rgb(3, 90, 3)")
                            {
                                score1=document.getElementById(tabJoueurB[0]).innerHTML;
                                score2=document.getElementById(tabJoueurB[1]).innerHTML;
                                score3=document.getElementById(tabJoueurB[2]).innerHTML;
                                if (score1>=score2 && score1>=score3)
                                {
                                    // alert(score1+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[0];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score2>=score3 && score2>=score1)
                                {
                                    // alert(score2+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[1];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score3>score1)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score3>=score2 && score3>=score1)
                                {
                                    // alert(score3+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[2];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>score1)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                            } 
                            
                        });
                        break;
                    case 6:
                    case 7:
                    case 8:
                        inputJoueurB[i].addEventListener("input", function () {
                            idJoueurB = inputJoueurB[i].attributes.joueur.value;
                            idJoueurB=parseInt(idJoueurB);
                            idscoreB="score"+idJoueurB;
                            scoreTotal=document.getElementById(idscoreB);
                            ancienScoreB=parseInt(scoreTotal.innerHTML);
                            nouveauScoreB=parseInt(inputJoueurB[i].value);
                            scoreTotal.innerHTML =ancienScoreB+nouveauScoreB;
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[6].style.background == "rgb(151, 238, 151)" && inputJoueurB[7].style.background == "rgb(151, 238, 151)" && inputJoueurB[8].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(3, 90, 3)";
                                    infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[6].style.background != "rgb(151, 238, 151)" || inputJoueurB[7].style.background != "rgb(151, 238, 151)" || inputJoueurB[8].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(83, 11, 11)";
                                    infoTabB[2].style.border = "red solid 2px";
                                }
                            }
                            if(chiffreB[0].style.background == "rgb(3, 90, 3)" && chiffreB[1].style.background == "rgb(3, 90, 3)" && chiffreB[2].style.background == "rgb(3, 90, 3)")
                            {
                                score1=document.getElementById(tabJoueurB[0]).innerHTML;
                                score2=document.getElementById(tabJoueurB[1]).innerHTML;
                                score3=document.getElementById(tabJoueurB[2]).innerHTML;
                                if (score1>=score2 && score1>=score3)
                                {
                                    // alert(score1+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[0];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score2>=score3 && score2>=score1)
                                {
                                    // alert(score2+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[1];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score3>score1)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score3>=score2 && score3>=score1)
                                {
                                    // alert(score3+" est le plus grand")
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[2];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>score1)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                            } 
                        });
                        break;
                }
            }
            break;
        case 4:
            for (let i = 0; i < 12; i++) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                        inputJoueurB[i].addEventListener("input", function () {
                            idJoueurB = inputJoueurB[i].attributes.joueur.value;
                            idJoueurB=parseInt(idJoueurB);
                            idscoreB="score"+idJoueurB;
                            scoreTotal=document.getElementById(idscoreB);
                            ancienScoreB=parseInt(scoreTotal.innerHTML);
                            nouveauScoreB=parseInt(inputJoueurB[i].value);
                            scoreTotal.innerHTML =ancienScoreB+nouveauScoreB;
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[0].style.background == "rgb(151, 238, 151)" && inputJoueurB[1].style.background == "rgb(151, 238, 151)" && inputJoueurB[2].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[3].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(3, 90, 3)";
                                    infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[0].style.background != "rgb(151, 238, 151)" || inputJoueurB[1].style.background != "rgb(151, 238, 151)" || inputJoueurB[2].style.background != "rgb(151, 238, 151)"
                                    && inputJoueurB[3].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(83, 11, 11)";
                                    infoTabB[0].style.border = "red solid 2px";
                                }
                            }
                            if(chiffreB[0].style.background == "rgb(3, 90, 3)" && chiffreB[1].style.background == "rgb(3, 90, 3)" && chiffreB[2].style.background == "rgb(3, 90, 3)")
                            {
                                score1=document.getElementById(tabJoueurB[0]).innerHTML;
                                score2=document.getElementById(tabJoueurB[1]).innerHTML;
                                score3=document.getElementById(tabJoueurB[2]).innerHTML;
                                score4=document.getElementById(tabJoueurB[3]).innerHTML;
                                score1=parseInt(score1);
                                score2=parseInt(score2);
                                score3=parseInt(score3);
                                score4=parseInt(score4);
                                if (score1>=score2 && score1>=score3 && score1>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[0];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>=score3 && score2>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score3>=score2 && score3>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score2>=score1 && score2>=score3 && score2>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[1];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=scrore3 && score1>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score3>=score1 && score3>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score3>=score1 && score3>=score2 && score3>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[2];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=score2 && score1>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score2>=score1 && score2>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[3];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=score2 && score1>=score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score2>=score1 && score2>=score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                            }
                        });
                        break;
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                        inputJoueurB[i].addEventListener("input", function () {
                            idJoueurB = inputJoueurB[i].attributes.joueur.value;
                            idJoueurB=parseInt(idJoueurB);
                            idscoreB="score"+idJoueurB;
                            scoreTotal=document.getElementById(idscoreB);
                            ancienScoreB=parseInt(scoreTotal.innerHTML);
                            nouveauScoreB=parseInt(inputJoueurB[i].value);
                            scoreTotal.innerHTML =ancienScoreB+nouveauScoreB;
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[4].style.background == "rgb(151, 238, 151)" && inputJoueurB[5].style.background == "rgb(151, 238, 151)" && inputJoueurB[6].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[7].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(3, 90, 3)";
                                    infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[4].style.background != "rgb(151, 238, 151)" || inputJoueurB[5].style.background != "rgb(151, 238, 151)" || inputJoueurB[6].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[7].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(83, 11, 11)";
                                    infoTabB[1].style.border = "red solid 2px";
                                }
                            }
                            if(chiffreB[0].style.background == "rgb(3, 90, 3)" && chiffreB[1].style.background == "rgb(3, 90, 3)" && chiffreB[2].style.background == "rgb(3, 90, 3)")
                            {
                                score1=document.getElementById(tabJoueurB[0]).innerHTML;
                                score2=document.getElementById(tabJoueurB[1]).innerHTML;
                                score3=document.getElementById(tabJoueurB[2]).innerHTML;
                                score4=document.getElementById(tabJoueurB[3]).innerHTML;
                                score1=parseInt(score1);
                                score2=parseInt(score2);
                                score3=parseInt(score3);
                                score4=parseInt(score4);
                                if (score1>=score2 && score1>=score3 && score1>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[0];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>=score3 && score2>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score3>=score2 && score3>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score2>=score1 && score2>=score3 && score2>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[1];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=scrore3 && score1>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score3>=score1 && score3>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score3>=score1 && score3>=score2 && score3>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[2];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=score2 && score1>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score2>=score1 && score2>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[3];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=score2 && score1>=score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score2>=score1 && score2>=score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                            }
                        });
                        break;
                    case 8:
                    case 9:
                    case 10:
                    case 11:
                        inputJoueurB[i].addEventListener("input", function () {
                            idJoueurB = inputJoueurB[i].attributes.joueur.value;
                            idJoueurB=parseInt(idJoueurB);
                            idscoreB="score"+idJoueurB;
                            scoreTotal=document.getElementById(idscoreB);
                            ancienScoreB=parseInt(scoreTotal.innerHTML);
                            nouveauScoreB=parseInt(inputJoueurB[i].value);
                            scoreTotal.innerHTML =ancienScoreB+nouveauScoreB;
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[8].style.background == "rgb(151, 238, 151)" && inputJoueurB[9].style.background == "rgb(151, 238, 151)" && inputJoueurB[10].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[11].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(3, 90, 3)";
                                    infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[8].style.background != "rgb(151, 238, 151)" || inputJoueurB[9].style.background != "rgb(151, 238, 151)" || inputJoueurB[10].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[11].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(83, 11, 11)";
                                    infoTabB[2].style.border = "red solid 2px";
                                }
                            }
                            if(chiffreB[0].style.background == "rgb(3, 90, 3)" && chiffreB[1].style.background == "rgb(3, 90, 3)" && chiffreB[2].style.background == "rgb(3, 90, 3)")
                            {
                                score1=document.getElementById(tabJoueurB[0]).innerHTML;
                                score2=document.getElementById(tabJoueurB[1]).innerHTML;
                                score3=document.getElementById(tabJoueurB[2]).innerHTML;
                                score4=document.getElementById(tabJoueurB[3]).innerHTML;
                                score1=parseInt(score1);
                                score2=parseInt(score2);
                                score3=parseInt(score3);
                                score4=parseInt(score4);
                                if (score1>=score2 && score1>=score3 && score1>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[0];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score2>=score3 && score2>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score3>=score2 && score3>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score2>=score1 && score2>=score3 && score2>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[1];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=scrore3 && score1>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score3>=score1 && score3>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else if (score3>=score1 && score3>=score2 && score3>=score4)
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[2];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=score2 && score1>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score2>=score1 && score2>=score4)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[3];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                                else
                                {
                                    premierB=document.getElementById("1B");
                                    id="1"+tabJoueurB[3];
                                    joueur=document.getElementById(id);
                                    prenomJoueur=joueur.attributes.prenomJoueur.value;
                                    nomJoueur=joueur.attributes.nomJoueur.value;
                                    identiteJoueur=prenomJoueur+" "+nomJoueur;
                                    premierB.innerHTML=identiteJoueur;
                                    if(score1>=score2 && score1>=score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[0];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else if(score2>=score1 && score2>=score3)
                                    {
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[1];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                    else{
                                        secondB=document.getElementById("2B");
                                        id2="1"+tabJoueurB[2];
                                        joueur2=document.getElementById(id2);
                                        prenomJoueur2=joueur2.attributes.prenomJoueur.value;
                                        nomJoueur2=joueur2.attributes.nomJoueur.value;
                                        identiteJoueur2=prenomJoueur2+" "+nomJoueur2;
                                        secondB.innerHTML=identiteJoueur2;
                                    }
                                }
                            }
                        });
                        break;
                }
            }
            break;
        case 5:
            for (let i = 0; i < 25; i++) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[0].style.background == "rgb(151, 238, 151)" && inputJoueurB[1].style.background == "rgb(151, 238, 151)" && inputJoueurB[2].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[3].style.background == "rgb(151, 238, 151)" && inputJoueurB[4].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(3, 90, 3)";
                                    infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[0].style.background != "rgb(151, 238, 151)" || inputJoueurB[1].style.background != "rgb(151, 238, 151)" || inputJoueurB[2].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[3].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(83, 11, 11)";
                                    infoTabB[0].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[5].style.background == "rgb(151, 238, 151)" && inputJoueurB[6].style.background == "rgb(151, 238, 151)" && inputJoueurB[7].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[8].style.background == "rgb(151, 238, 151)" && inputJoueurB[9].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(3, 90, 3)";
                                    infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[5].style.background != "rgb(151, 238, 151)" || inputJoueurB[6].style.background != "rgb(151, 238, 151)" || inputJoueurB[7].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[8].style.background != "rgb(151, 238, 151)" || inputJoueurB[9].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(83, 11, 11)";
                                    infoTabB[1].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 10:
                    case 11:
                    case 12:
                    case 13:
                    case 14:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[10].style.background == "rgb(151, 238, 151)" && inputJoueurB[11].style.background == "rgb(151, 238, 151)" && inputJoueurB[12].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[13].style.background == "rgb(151, 238, 151)" && inputJoueurB[14].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(3, 90, 3)";
                                    infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[10].style.background != "rgb(151, 238, 151)" || inputJoueurB[11].style.background != "rgb(151, 238, 151)" || inputJoueurB[12].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[13].style.background != "rgb(151, 238, 151)" || inputJoueurB[14].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(83, 11, 11)";
                                    infoTabB[2].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 15:
                    case 16:
                    case 17:
                    case 18:
                    case 19:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[15].style.background == "rgb(151, 238, 151)" && inputJoueurB[16].style.background == "rgb(151, 238, 151)" && inputJoueurB[17].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[18].style.background == "rgb(151, 238, 151)" && inputJoueurB[19].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(3, 90, 3)";
                                    infoTabB[3].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[15].style.background != "rgb(151, 238, 151)" || inputJoueurB[16].style.background != "rgb(151, 238, 151)" || inputJoueurB[17].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[18].style.background != "rgb(151, 238, 151)" || inputJoueurB[19].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(83, 11, 11)";
                                    infoTabB[3].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 20:
                    case 21:
                    case 22:
                    case 23:
                    case 24:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[20].style.background == "rgb(151, 238, 151)" && inputJoueurB[21].style.background == "rgb(151, 238, 151)" && inputJoueurB[22].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[23].style.background == "rgb(151, 238, 151)" && inputJoueurB[24].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(3, 90, 3)";
                                    infoTabB[4].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[20].style.background != "rgb(151, 238, 151)" || inputJoueurB[21].style.background != "rgb(151, 238, 151)" || inputJoueurB[22].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[23].style.background != "rgb(151, 238, 151)" || inputJoueurB[24].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(83, 11, 11)";
                                    infoTabB[4].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                }
            }
            break;
        case 6:
            for (let i = 0; i < 30; i++) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[0].style.background == "rgb(151, 238, 151)" && inputJoueurB[1].style.background == "rgb(151, 238, 151)" && inputJoueurB[2].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[3].style.background == "rgb(151, 238, 151)" && inputJoueurB[4].style.background == "rgb(151, 238, 151)" && inputJoueurB[5].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(3, 90, 3)";
                                    infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[0].style.background != "rgb(151, 238, 151)" || inputJoueurB[1].style.background != "rgb(151, 238, 151)" || inputJoueurB[2].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[3].style.background != "rgb(151, 238, 151)" || inputJoueurB[4].style.background != "rgb(151, 238, 151)" || inputJoueurB[5].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(83, 11, 11)";
                                    infoTabB[0].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                    case 10:
                    case 11:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[6].style.background == "rgb(151, 238, 151)" && inputJoueurB[7].style.background == "rgb(151, 238, 151)" && inputJoueurB[8].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[9].style.background == "rgb(151, 238, 151)" && inputJoueurB[10].style.background == "rgb(151, 238, 151)" && inputJoueurB[11].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(3, 90, 3)";
                                    infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[6].style.background != "rgb(151, 238, 151)" || inputJoueurB[7].style.background != "rgb(151, 238, 151)" || inputJoueurB[8].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[9].style.background != "rgb(151, 238, 151)" || inputJoueurB[10].style.background != "rgb(151, 238, 151)" || inputJoueurB[11].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(83, 11, 11)";
                                    infoTabB[1].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 12:
                    case 13:
                    case 14:
                    case 15:
                    case 16:
                    case 17:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[12].style.background == "rgb(151, 238, 151)" && inputJoueurB[13].style.background == "rgb(151, 238, 151)" && inputJoueurB[14].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[15].style.background == "rgb(151, 238, 151)" && inputJoueurB[16].style.background == "rgb(151, 238, 151)" && inputJoueurB[17].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(3, 90, 3)";
                                    infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[12].style.background != "rgb(151, 238, 151)" || inputJoueurB[13].style.background != "rgb(151, 238, 151)" || inputJoueurB[14].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[15].style.background != "rgb(151, 238, 151)" || inputJoueurB[16].style.background != "rgb(151, 238, 151)" || inputJoueurB[17].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(83, 11, 11)";
                                    infoTabB[2].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 18:
                    case 19:
                    case 20:
                    case 21:
                    case 22:
                    case 23:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[18].style.background == "rgb(151, 238, 151)" && inputJoueurB[19].style.background == "rgb(151, 238, 151)" && inputJoueurB[20].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[21].style.background == "rgb(151, 238, 151)" && inputJoueurB[22].style.background == "rgb(151, 238, 151)" && inputJoueurB[23].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(3, 90, 3)";
                                    infoTabB[3].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[18].style.background != "rgb(151, 238, 151)" || inputJoueurB[19].style.background != "rgb(151, 238, 151)" || inputJoueurB[20].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[21].style.background != "rgb(151, 238, 151)" || inputJoueurB[22].style.background != "rgb(151, 238, 151)" || inputJoueurB[23].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(83, 11, 11)";
                                    infoTabB[3].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 24:
                    case 25:
                    case 26:
                    case 27:
                    case 28:
                    case 29:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[24].style.background == "rgb(151, 238, 151)" && inputJoueurB[25].style.background == "rgb(151, 238, 151)" && inputJoueurB[26].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[27].style.background == "rgb(151, 238, 151)" && inputJoueurB[28].style.background == "rgb(151, 238, 151)" && inputJoueurB[29].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(3, 90, 3)";
                                    infoTabB[4].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[24].style.background != "rgb(151, 238, 151)" || inputJoueurB[25].style.background != "rgb(151, 238, 151)" || inputJoueurB[26].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[27].style.background != "rgb(151, 238, 151)" || inputJoueurB[28].style.background != "rgb(151, 238, 151)" || inputJoueurB[29].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(83, 11, 11)";
                                    infoTabB[4].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                }
            }
            break;
        case 7:
            for (let i = 0; i < 49; i++) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[0].style.background == "rgb(151, 238, 151)" && inputJoueurB[1].style.background == "rgb(151, 238, 151)" && inputJoueurB[2].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[3].style.background == "rgb(151, 238, 151)" && inputJoueurB[4].style.background == "rgb(151, 238, 151)" && inputJoueurB[5].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[6].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(3, 90, 3)";
                                    infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[0].style.background != "rgb(151, 238, 151)" || inputJoueurB[1].style.background != "rgb(151, 238, 151)" || inputJoueurB[2].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[3].style.background != "rgb(151, 238, 151)" || inputJoueurB[4].style.background != "rgb(151, 238, 151)" || inputJoueurB[5].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[6].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(83, 11, 11)";
                                    infoTabB[0].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 7:
                    case 8:
                    case 9:
                    case 10:
                    case 11:
                    case 12:
                    case 13:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[7].style.background == "rgb(151, 238, 151)" && inputJoueurB[8].style.background == "rgb(151, 238, 151)" && inputJoueurB[9].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[10].style.background == "rgb(151, 238, 151)" && inputJoueurB[11].style.background == "rgb(151, 238, 151)" && inputJoueurB[12].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[13].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(3, 90, 3)";
                                    infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[7].style.background != "rgb(151, 238, 151)" || inputJoueurB[8].style.background != "rgb(151, 238, 151)" || inputJoueurB[9].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[10].style.background != "rgb(151, 238, 151)" || inputJoueurB[11].style.background != "rgb(151, 238, 151)" || inputJoueurB[12].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[13].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(83, 11, 11)";
                                    infoTabB[1].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;

                    case 14:
                    case 15:
                    case 16:
                    case 17:
                    case 18:
                    case 19:
                    case 20:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[14].style.background == "rgb(151, 238, 151)" && inputJoueurB[15].style.background == "rgb(151, 238, 151)" && inputJoueurB[16].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[19].style.background == "rgb(151, 238, 151)" && inputJoueurB[17].style.background == "rgb(151, 238, 151)" && inputJoueurB[18].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[20].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(3, 90, 3)";
                                    infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[14].style.background != "rgb(151, 238, 151)" || inputJoueurB[15].style.background != "rgb(151, 238, 151)" || inputJoueurB[16].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[19].style.background != "rgb(151, 238, 151)" || inputJoueurB[17].style.background != "rgb(151, 238, 151)" || inputJoueurB[18].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[20].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(83, 11, 11)";
                                    infoTabB[2].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 21:
                    case 22:
                    case 23:
                    case 24:
                    case 25:
                    case 26:
                    case 27:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[21].style.background == "rgb(151, 238, 151)" && inputJoueurB[22].style.background == "rgb(151, 238, 151)" && inputJoueurB[23].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[24].style.background == "rgb(151, 238, 151)" && inputJoueurB[25].style.background == "rgb(151, 238, 151)" && inputJoueurB[26].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[27].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(3, 90, 3)";
                                    infoTabB[3].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[21].style.background != "rgb(151, 238, 151)" || inputJoueurB[22].style.background != "rgb(151, 238, 151)" || inputJoueurB[23].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[24].style.background != "rgb(151, 238, 151)" || inputJoueurB[25].style.background != "rgb(151, 238, 151)" || inputJoueurB[26].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[27].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(83, 11, 11)";
                                    infoTabB[3].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 28:
                    case 29:
                    case 30:
                    case 31:
                    case 32:
                    case 33:
                    case 34:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[28].style.background == "rgb(151, 238, 151)" && inputJoueurB[29].style.background == "rgb(151, 238, 151)" && inputJoueurB[30].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[31].style.background == "rgb(151, 238, 151)" && inputJoueurB[32].style.background == "rgb(151, 238, 151)" && inputJoueurB[33].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[34].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(3, 90, 3)";
                                    infoTabB[4].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[28].style.background != "rgb(151, 238, 151)" || inputJoueurB[29].style.background != "rgb(151, 238, 151)" || inputJoueurB[30].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[31].style.background != "rgb(151, 238, 151)" || inputJoueurB[32].style.background != "rgb(151, 238, 151)" || inputJoueurB[33].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[34].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(83, 11, 11)";
                                    infoTabB[4].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 35:
                    case 36:
                    case 37:
                    case 38:
                    case 39:
                    case 40:
                    case 41:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[35].style.background == "rgb(151, 238, 151)" && inputJoueurB[36].style.background == "rgb(151, 238, 151)" && inputJoueurB[37].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[38].style.background == "rgb(151, 238, 151)" && inputJoueurB[39].style.background == "rgb(151, 238, 151)" && inputJoueurB[40].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[41].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[5].style.background = "rgb(3, 90, 3)";
                                    infoTabB[5].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[35].style.background != "rgb(151, 238, 151)" || inputJoueurB[36].style.background != "rgb(151, 238, 151)" || inputJoueurB[37].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[38].style.background != "rgb(151, 238, 151)" || inputJoueurB[39].style.background != "rgb(151, 238, 151)" || inputJoueurB[40].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[41].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[5].style.background = "rgb(83, 11, 11)";
                                    infoTabB[5].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 42:
                    case 43:
                    case 44:
                    case 45:
                    case 46:
                    case 47:
                    case 48:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[42].style.background == "rgb(151, 238, 151)" && inputJoueurB[43].style.background == "rgb(151, 238, 151)" && inputJoueurB[44].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[45].style.background == "rgb(151, 238, 151)" && inputJoueurB[46].style.background == "rgb(151, 238, 151)" && inputJoueurB[47].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[48].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[6].style.background = "rgb(3, 90, 3)";
                                    infoTabB[6].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[42].style.background != "rgb(151, 238, 151)" || inputJoueurB[43].style.background != "rgb(151, 238, 151)" || inputJoueurB[44].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[45].style.background != "rgb(151, 238, 151)" || inputJoueurB[46].style.background != "rgb(151, 238, 151)" || inputJoueurB[47].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[48].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[6].style.background = "rgb(83, 11, 11)";
                                    infoTabB[6].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                }
            }
            break;
        case 8:
            for (let i = 0; i < 56; i++) {
                switch (i) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[0].style.background == "rgb(151, 238, 151)" && inputJoueurB[1].style.background == "rgb(151, 238, 151)" && inputJoueurB[2].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[3].style.background == "rgb(151, 238, 151)" && inputJoueurB[4].style.background == "rgb(151, 238, 151)" && inputJoueurB[5].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[6].style.background == "rgb(151, 238, 151)" && inputJoueurB[7].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(3, 90, 3)";
                                    infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[0].style.background != "rgb(151, 238, 151)" || inputJoueurB[1].style.background != "rgb(151, 238, 151)" || inputJoueurB[2].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[3].style.background != "rgb(151, 238, 151)" || inputJoueurB[4].style.background != "rgb(151, 238, 151)" || inputJoueurB[5].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[6].style.background != "rgb(151, 238, 151)" || inputJoueurB[7].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[0].style.background = "rgb(83, 11, 11)";
                                    infoTabB[0].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 8:
                    case 9:
                    case 10:
                    case 11:
                    case 12:
                    case 13:
                    case 14:
                    case 15:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[8].style.background == "rgb(151, 238, 151)" && inputJoueurB[9].style.background == "rgb(151, 238, 151)" && inputJoueurB[10].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[11].style.background == "rgb(151, 238, 151)" && inputJoueurB[12].style.background == "rgb(151, 238, 151)" && inputJoueurB[13].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[14].style.background == "rgb(151, 238, 151)" && inputJoueurB[15].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(3, 90, 3)";
                                    infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[8].style.background != "rgb(151, 238, 151)" || inputJoueurB[9].style.background != "rgb(151, 238, 151)" || inputJoueurB[10].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[11].style.background != "rgb(151, 238, 151)" || inputJoueurB[12].style.background != "rgb(151, 238, 151)" || inputJoueurB[13].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[14].style.background != "rgb(151, 238, 151)" || inputJoueurB[15].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[1].style.background = "rgb(83, 11, 11)";
                                    infoTabB[1].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 16:
                    case 17:
                    case 18:
                    case 19:
                    case 20:
                    case 21:
                    case 22:
                    case 23:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[16].style.background == "rgb(151, 238, 151)" && inputJoueurB[17].style.background == "rgb(151, 238, 151)" && inputJoueurB[18].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[19].style.background == "rgb(151, 238, 151)" && inputJoueurB[20].style.background == "rgb(151, 238, 151)" && inputJoueurB[21].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[22].style.background == "rgb(151, 238, 151)" && inputJoueurB[23].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(3, 90, 3)";
                                    infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[16].style.background != "rgb(151, 238, 151)" || inputJoueurB[17].style.background != "rgb(151, 238, 151)" || inputJoueurB[18].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[19].style.background != "rgb(151, 238, 151)" || inputJoueurB[20].style.background != "rgb(151, 238, 151)" || inputJoueurB[21].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[22].style.background != "rgb(151, 238, 151)" || inputJoueurB[23].style.background != "rgb(151, 238, 151)") {
                                    chiffreB[2].style.background = "rgb(83, 11, 11)";
                                    infoTabB[2].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 24:
                    case 25:
                    case 26:
                    case 27:
                    case 28:
                    case 29:
                    case 30:
                    case 31:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[24].style.background == "rgb(151, 238, 151)" && inputJoueurB[25].style.background == "rgb(151, 238, 151)" && inputJoueurB[26].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[27].style.background == "rgb(151, 238, 151)" && inputJoueurB[28].style.background == "rgb(151, 238, 151)" && inputJoueurB[29].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[30].style.background == "rgb(151, 238, 151)" && inputJoueurB[31].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(3, 90, 3)";
                                    infoTabB[3].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[24].style.background != "rgb(151, 238, 151)" || inputJoueurB[25].style.background != "rgb(151, 238, 151)" || inputJoueurB[26].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[27].style.background != "rgb(151, 238, 151)" || inputJoueurB[28].style.background != "rgb(151, 238, 151)" || inputJoueurB[29].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[30].style.background == "rgb(151, 238, 151)" || inputJoueurB[31].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[3].style.background = "rgb(83, 11, 11)";
                                    infoTabB[3].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 32:
                    case 33:
                    case 34:
                    case 35:
                    case 36:
                    case 37:
                    case 38:
                    case 39:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[32].style.background == "rgb(151, 238, 151)" && inputJoueurB[33].style.background == "rgb(151, 238, 151)" && inputJoueurB[34].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[35].style.background == "rgb(151, 238, 151)" && inputJoueurB[36].style.background == "rgb(151, 238, 151)" && inputJoueurB[37].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[38].style.background == "rgb(151, 238, 151)" && inputJoueurB[39].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(3, 90, 3)";
                                    infoTabB[4].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[32].style.background != "rgb(151, 238, 151)" || inputJoueurB[33].style.background != "rgb(151, 238, 151)" || inputJoueurB[34].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[35].style.background != "rgb(151, 238, 151)" || inputJoueurB[36].style.background != "rgb(151, 238, 151)" || inputJoueurB[37].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[38].style.background == "rgb(151, 238, 151)" || inputJoueurB[39].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[4].style.background = "rgb(83, 11, 11)";
                                    infoTabB[4].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 40:
                    case 41:
                    case 42:
                    case 43:
                    case 44:
                    case 45:
                    case 46:
                    case 47:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[40].style.background == "rgb(151, 238, 151)" && inputJoueurB[41].style.background == "rgb(151, 238, 151)" && inputJoueurB[42].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[43].style.background == "rgb(151, 238, 151)" && inputJoueurB[44].style.background == "rgb(151, 238, 151)" && inputJoueurB[45].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[46].style.background == "rgb(151, 238, 151)" && inputJoueurB[47].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[5].style.background = "rgb(3, 90, 3)";
                                    infoTabB[5].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[40].style.background != "rgb(151, 238, 151)" || inputJoueurB[41].style.background != "rgb(151, 238, 151)" || inputJoueurB[42].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[43].style.background != "rgb(151, 238, 151)" || inputJoueurB[44].style.background != "rgb(151, 238, 151)" || inputJoueurB[45].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[46].style.background == "rgb(151, 238, 151)" || inputJoueurB[47].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[5].style.background = "rgb(83, 11, 11)";
                                    infoTabB[5].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                    case 48:
                    case 49:
                    case 50:
                    case 51:
                    case 52:
                    case 53:
                    case 54:
                    case 55:
                        inputJoueurB[i].addEventListener("input", function () {
                            if (inputJoueurB[i].style.background != "rgb(151, 238, 151)") {
                                inputJoueurB[i].style.background = "rgb(151, 238, 151)";
                                if (inputJoueurB[48].style.background == "rgb(151, 238, 151)" && inputJoueurB[49].style.background == "rgb(151, 238, 151)" && inputJoueurB[50].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[51].style.background == "rgb(151, 238, 151)" && inputJoueurB[52].style.background == "rgb(151, 238, 151)" && inputJoueurB[53].style.background == "rgb(151, 238, 151)"
                                    && inputJoueurB[54].style.background == "rgb(151, 238, 151)" && inputJoueurB[55].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[6].style.background = "rgb(3, 90, 3)";
                                    infoTabB[6].style.border = "rgb(115, 255, 0) solid 2px";
                                }
                            }
                            else {
                                inputJoueurB[i].style.background = "";
                                if (inputJoueurB[48].style.background != "rgb(151, 238, 151)" || inputJoueurB[49].style.background != "rgb(151, 238, 151)" || inputJoueurB[50].style.background != "rgb(151, 238, 151)"
                                    || inputJoueurB[51].style.background != "rgb(151, 238, 151)" || inputJoueurB[52].style.background != "rgb(151, 238, 151)" || inputJoueurB[53].style.background == "rgb(151, 238, 151)"
                                    || inputJoueurB[54].style.background == "rgb(151, 238, 151)" || inputJoueurB[55].style.background == "rgb(151, 238, 151)") {
                                    chiffreB[6].style.background = "rgb(83, 11, 11)";
                                    infoTabB[6].style.border = "red solid 2px";
                                }
                            }
                        });
                        break;
                }
            }
            break;
    }

    finaliste1A=document.getElementById("1A");
    finaliste1B=document.getElementById("1B");
    finaliste2A=document.getElementById("2A");
    finaliste2B=document.getElementById("2B");

    finaliste1=document.getElementById("1");
    finaliste2=document.getElementById("2");
    finaliste3=document.getElementById("3");
    finaliste4=document.getElementById("4");

    finaliste1A.addEventListener("click",function(){
        finaliste1A=document.getElementById("1A");
        finaliste1AHtml=finaliste1A.innerHTML;
        finaliste2B=document.getElementById("2B"); 
        finaliste2BHtml=finaliste2B.innerHTML;
        finaliste1.innerHTML=finaliste1AHtml;
        finaliste3.innerHTML=finaliste2BHtml;
    });
    finaliste2B.addEventListener("click",function(){
        finaliste1A=document.getElementById("1A");
        finaliste1AHtml=finaliste1A.innerHTML;
        finaliste2B=document.getElementById("2B");
        finaliste2BHtml=finaliste2B.innerHTML;
        finaliste1.innerHTML=finaliste2BHtml;
        finaliste3.innerHTML=finaliste1AHtml;
    });
    finaliste1B.addEventListener("click",function(){
        finaliste1B=document.getElementById("1B");
        finaliste1BHtml=finaliste1B.innerHTML;
        finaliste2A=document.getElementById("2A");
        finaliste2AHtml=finaliste2A.innerHTML;
        finaliste2.innerHTML=finaliste1BHtml;
        finaliste4.innerHTML=finaliste2AHtml;
    });
    finaliste2A.addEventListener("click",function(){
        finaliste1B=document.getElementById("1B");
        finaliste1BHtml=finaliste1B.innerHTML;
        finaliste2A=document.getElementById("2A");
        finaliste2AHtml=finaliste2A.innerHTML;
        finaliste2.innerHTML=finaliste2AHtml;
        finaliste4.innerHTML=finaliste1BHtml;
    });
}
