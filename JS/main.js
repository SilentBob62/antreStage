/******************************************************************************************************************************************************
 * ************************************************************************************variables */
poolB = document.getElementsByClassName("poolB");
if (poolB.length == 1) {
    numJoueurB = document.getElementsByClassName("numJoueurB");
    nombreJoueurB = document.getElementById("poolB").attributes.nombre.value;
    nombreJoueurB = parseInt(nombreJoueurB);
    tourB = document.getElementsByClassName("tourB");
    infoTabB = document.getElementsByClassName("infoTabB");
    nombreTourB = infoTabB.length;
    numJoueurB1 = document.getElementsByClassName("numJoueurB1");
    numJoueurB2 = document.getElementsByClassName("numJoueurB2");
    numJoueurB3 = document.getElementsByClassName("numJoueurB3");
    numJoueurB4 = document.getElementsByClassName("numJoueurB4");
    numJoueurB5 = document.getElementsByClassName("numJoueurB5");
    numJoueurB6 = document.getElementsByClassName("numJoueurB6");
    numJoueurB7 = document.getElementsByClassName("numJoueurB7");

    finaliste1A = document.getElementById("1A");
    finaliste1B = document.getElementById("1B");
    finaliste2A = document.getElementById("2A");
    finaliste2B = document.getElementById("2B");

    finaliste1 = document.getElementById("1");
    finaliste2 = document.getElementById("2");
    finaliste3 = document.getElementById("3");
    finaliste4 = document.getElementById("4");
    tabJoueurB = [];

    for (i = 0; i < nombreJoueurB; i++) {
        tabJoueurB[i] = "score" + numJoueurB[i].attributes.joueur.value;
    }
}

numJoueurA = document.getElementsByClassName("numJoueurA");
nombreJoueurA = document.getElementById("poolA").attributes.nombre.value;
nombreJoueurA = parseInt(nombreJoueurA);
tourA = document.getElementsByClassName("tourA");
infoTabA = document.getElementsByClassName("infoTabA");
nombreTourA = infoTabA.length;
numJoueurA1 = document.getElementsByClassName("numJoueurA1");
numJoueurA2 = document.getElementsByClassName("numJoueurA2");
numJoueurA3 = document.getElementsByClassName("numJoueurA3");
numJoueurA4 = document.getElementsByClassName("numJoueurA4");
numJoueurA5 = document.getElementsByClassName("numJoueurA5");
numJoueurA6 = document.getElementsByClassName("numJoueurA6");
numJoueurA7 = document.getElementsByClassName("numJoueurA7");

scoreTotal = document.getElementsByClassName("scoreTotal");

tabJoueur = [];

for (i = 0; i < nombreJoueurA; i++) {
    tabJoueur[i] = "score" + numJoueurA[i].attributes.joueur.value;
}




for (let a = 0; a < numJoueurA.length; a++) {
    numJoueurA[a].addEventListener("change", function () {
        numJoueurA[a].style.background = "rgb(151, 238, 151)";
        nombreA1 = 0;
        nombreA2 = 0;
        nombreA3 = 0;
        nombreA4 = 0;
        nombreA5 = 0;
        nombreA6 = 0;
        nombreA7 = 0;
        score1 = [];
        score2 = [];
        score3 = [];
        score4 = [];
        score5 = [];
        score6 = [];
        score7 = [];
        tot = [];
        for (i = 0; i < numJoueurA1.length; i++) {
            if (numJoueurA1[i].value != '')
                score1[i] = parseInt(numJoueurA1[i].value);
            else
                score1[i] = 0
        }
        for (i = 0; i < numJoueurA2.length; i++) {
            if (numJoueurA2[i].value != '')
                score2[i] = parseInt(numJoueurA2[i].value);
            else
                score2[i] = 0
        }
        for (i = 0; i < numJoueurA3.length; i++) {
            if (numJoueurA3[i].value != '')
                score3[i] = parseInt(numJoueurA3[i].value);
            else
                score3[i] = 0
        }
        for (i = 0; i < numJoueurA4.length; i++) {
            if (numJoueurA4[i].value != '')
                score4[i] = parseInt(numJoueurA4[i].value);
            else
                score4[i] = 0
        }
        for (i = 0; i < numJoueurA5.length; i++) {
            if (numJoueurA5[i].value != '')
                score5[i] = parseInt(numJoueurA5[i].value);
            else
                score5[i] = 0
        }
        for (i = 0; i < numJoueurA6.length; i++) {
            if (numJoueurA6[i].value != '')
                score6[i] = parseInt(numJoueurA6[i].value);
            else
                score6[i] = 0
        }
        for (i = 0; i < numJoueurA7.length; i++) {
            if (numJoueurA7[i].value != '')
                score7[i] = parseInt(numJoueurA7[i].value);
            else
                score7[i] = 0
        }

        /***********************************************************************************************************************************************************************************************************************************
         * *********************************************************changement de couleur */


        for (let b = 0; b < numJoueurA1.length; b++) {
            if (numJoueurA1[b].style.background == "rgb(151, 238, 151)") {
                nombreA1++;
            }
        }
        if (nombreA1 == nombreJoueurA && tourA[0].style.background != "rgb(3, 90, 3)") {
            tourA[0].style.background = "rgb(3, 90, 3)";
            infoTabA[0].style.border = "rgb(115, 255, 0) solid 2px";
        }
        for (let b = 0; b < numJoueurA2.length; b++) {
            if (numJoueurA2[b].style.background == "rgb(151, 238, 151)") {
                nombreA2++;
            }
        }
        if (nombreA2 == nombreJoueurA && tourA[1].style.background != "rgb(3, 90, 3)") {
            tourA[1].style.background = "rgb(3, 90, 3)";
            infoTabA[1].style.border = "rgb(115, 255, 0) solid 2px";
        }
        for (let b = 0; b < numJoueurA3.length; b++) {
            if (numJoueurA3[b].style.background == "rgb(151, 238, 151)") {
                nombreA3++;
            }
        }
        if (nombreA3 == nombreJoueurA && tourA[2].style.background != "rgb(3, 90, 3)") {
            tourA[2].style.background = "rgb(3, 90, 3)";
            infoTabA[2].style.border = "rgb(115, 255, 0) solid 2px";
        }
        for (let b = 0; b < numJoueurA4.length; b++) {
            if (numJoueurA4[b].style.background == "rgb(151, 238, 151)") {
                nombreA4++;
            }
        }
        if (nombreA4 == nombreJoueurA && tourA[3].style.background != "rgb(3, 90, 3)") {
            tourA[3].style.background = "rgb(3, 90, 3)";
            infoTabA[3].style.border = "rgb(115, 255, 0) solid 2px";
        }
        for (let b = 0; b < numJoueurA5.length; b++) {
            if (numJoueurA5[b].style.background == "rgb(151, 238, 151)") {
                nombreA5++;
            }
        }
        if (nombreA5 == nombreJoueurA && tourA[4].style.background != "rgb(3, 90, 3)") {
            tourA[4].style.background = "rgb(3, 90, 3)";
            infoTabA[4].style.border = "rgb(115, 255, 0) solid 2px";
        }
        for (let b = 0; b < numJoueurA6.length; b++) {
            if (numJoueurA6[b].style.background == "rgb(151, 238, 151)") {
                nombreA6++;
            }
        }
        if (nombreA6 == nombreJoueurA && tourA[5].style.background != "rgb(3, 90, 3)") {
            tourA[5].style.background = "rgb(3, 90, 3)";
            infoTabA[5].style.border = "rgb(115, 255, 0) solid 2px";
        }
        for (let b = 0; b < numJoueurA7.length; b++) {
            if (numJoueurA7[b].style.background == "rgb(151, 238, 151)") {
                nombreA7++;
            }
        }
        if (nombreA7 == nombreJoueurA && tourA[6].style.background != "rgb(3, 90, 3)") {
            tourA[6].style.background = "rgb(3, 90, 3)";
            infoTabA[6].style.border = "rgb(115, 255, 0) solid 2px";
        }


        /***********************************************************************************************************************************************************************************************************************************
         * ********************************************************* gestion des scores */
        switch (nombreJoueurA) {
            /***************************************************************************************************************case 3 */
            case 3:
                tot[0] = score1[0] + score2[0] + score3[2];
                scoreTotal[0].innerHTML = tot[0];
                tot[1] = score1[1] + score2[2] + score3[0];
                scoreTotal[1].innerHTML = tot[1];
                tot[2] = score1[2] + score2[1] + score3[1];
                scoreTotal[2].innerHTML = tot[2];
                if (tourA[0].style.background == "rgb(3, 90, 3)" && tourA[1].style.background == "rgb(3, 90, 3)" && tourA[2].style.background == "rgb(3, 90, 3)") {
                    score0 = parseInt(scoreTotal[0].innerHTML);
                    score1 = parseInt(scoreTotal[1].innerHTML);
                    score2 = parseInt(scoreTotal[2].innerHTML);
                    if (score0 >= score1 && score0 >= score2) {
                        id = "1" + tabJoueur[0];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score1 >= score2) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score1 >= score0 && score1 >= score2) {
                        id = "1" + tabJoueur[1];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score2) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else {
                        id = "1" + tabJoueur[2];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                }
                break;
                /***************************************************************************************************************case 4 */
            case 4:
                tot[0] = score1[0] + score2[0] + score3[0];
                scoreTotal[0].innerHTML = tot[0];
                tot[1] = score1[1] + score2[2] + score3[2];
                scoreTotal[1].innerHTML = tot[1];
                tot[2] = score1[2] + score2[1] + score3[3];
                scoreTotal[2].innerHTML = tot[2];
                tot[3] = score1[3] + score2[3] + score3[1];
                scoreTotal[3].innerHTML = tot[3];
                if (tourA[0].style.background == "rgb(3, 90, 3)" && tourA[1].style.background == "rgb(3, 90, 3)" && tourA[2].style.background == "rgb(3, 90, 3)") {
                    score0 = parseInt(scoreTotal[0].innerHTML);
                    score1 = parseInt(scoreTotal[1].innerHTML);
                    score2 = parseInt(scoreTotal[2].innerHTML);
                    score3 = parseInt(scoreTotal[3].innerHTML);
                    if (score0 >= score1 && score0 >= score2 && score0 >= score3) {
                        id = "1" + tabJoueur[0];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score1 >= score2 && score1 >= score3) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score1 && score2 >= score3) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score1 >= score0 && score1 >= score2 && score1 >= score3) {
                        id = "1" + tabJoueur[1];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score2 && score0 >= score3) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score3) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score2 >= score0 && score2 >= score1 && score2 >= score3) {
                        id = "1" + tabJoueur[2];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score3) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score3) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else {
                        id = "1" + tabJoueur[3];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                }
                break;
                /***************************************************************************************************************case 5 */
            case 5:
                tot[0] = score1[0] + score2[0] + score3[0] + score4[0] + score5[4];
                scoreTotal[0].innerHTML = tot[0];
                tot[1] = score1[1] + score2[2] + score3[2] + score4[4] + score5[0];
                scoreTotal[1].innerHTML = tot[1];
                tot[2] = score1[2] + score2[1] + score3[4] + score4[2] + score5[1];
                scoreTotal[2].innerHTML = tot[2];
                tot[3] = score1[3] + score2[4] + score3[3] + score4[1] + score5[2];
                scoreTotal[3].innerHTML = tot[3];
                tot[4] = score1[4] + score2[3] + score3[1] + score4[3] + score5[3];
                scoreTotal[4].innerHTML = tot[4];
                if (tourA[0].style.background == "rgb(3, 90, 3)" && tourA[1].style.background == "rgb(3, 90, 3)" && tourA[2].style.background == "rgb(3, 90, 3)" && tourA[3].style.background == "rgb(3, 90, 3)" && tourA[4].style.background == "rgb(3, 90, 3)") {
                    score0 = parseInt(scoreTotal[0].innerHTML);
                    score1 = parseInt(scoreTotal[1].innerHTML);
                    score2 = parseInt(scoreTotal[2].innerHTML);
                    score3 = parseInt(scoreTotal[3].innerHTML);
                    score4 = parseInt(scoreTotal[4].innerHTML);
                    if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4) {
                        id = "1" + tabJoueur[0];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score1 >= score2 && score1 >= score3 && score1 >= score4) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score1 && score2 >= score3 && score2 >= score4) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score1 && score3 >= score2 && score3 >= score4) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4) {
                        id = "1" + tabJoueur[1];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score2 && score0 >= score3 && score0 >= score4) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score3 && score2 >= score4) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score2 && score3 >= score4) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4) {
                        id = "1" + tabJoueur[2];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score3 && score0 >= score4) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score3 && score1 >= score4) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score4) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4) {
                        id = "1" + tabJoueur[3];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score4) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score4) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score4) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else {
                        id = "1" + tabJoueur[4];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                }
                break;
                /***************************************************************************************************************case 6 */
            case 6:
                tot[0] = score1[0] + score2[0] + score3[0] + score4[0] + score5[4];
                scoreTotal[0].innerHTML = tot[0];
                tot[1] = score1[1] + score2[2] + score3[2] + score4[4] + score5[0];
                scoreTotal[1].innerHTML = tot[1];
                tot[2] = score1[2] + score2[1] + score3[4] + score4[2] + score5[1];
                scoreTotal[2].innerHTML = tot[2];
                tot[3] = score1[3] + score2[4] + score3[3] + score4[1] + score5[2];
                scoreTotal[3].innerHTML = tot[3];
                tot[4] = score1[4] + score2[3] + score3[1] + score4[3] + score5[3];
                scoreTotal[4].innerHTML = tot[4];
                tot[5] = score1[5] + score2[5] + score3[5] + score4[5] + score5[5];
                scoreTotal[5].innerHTML = tot[5];
                if (tourA[0].style.background == "rgb(3, 90, 3)" && tourA[1].style.background == "rgb(3, 90, 3)" && tourA[2].style.background == "rgb(3, 90, 3)" && tourA[3].style.background == "rgb(3, 90, 3)" && tourA[4].style.background == "rgb(3, 90, 3)") {
                    score0 = parseInt(scoreTotal[0].innerHTML);
                    score1 = parseInt(scoreTotal[1].innerHTML);
                    score2 = parseInt(scoreTotal[2].innerHTML);
                    score3 = parseInt(scoreTotal[3].innerHTML);
                    score4 = parseInt(scoreTotal[4].innerHTML);
                    score5 = parseInt(scoreTotal[5].innerHTML);
                    if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                        id = "1" + tabJoueur[0];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                        id = "1" + tabJoueur[1];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score2 >= score0 && score1 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                        id = "1" + tabJoueur[2];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score4 && score3 >= score5) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score3 && score4 >= score5) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                        id = "1" + tabJoueur[3];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score4 && score0 >= score5) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score4 && score1 >= score5) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score4 && score2 >= score5) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score5) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                        id = "1" + tabJoueur[4];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score5) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score5) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= 3 && score2 >= score5) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score5) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else {
                        id = "1" + tabJoueur[5];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }

                }
                break;
                /***************************************************************************************************************case 7 */
            case 7:
                tot[0] = score1[0] + score2[0] + score3[0] + score4[0] + score5[0] + score6[0] + score7[6];
                scoreTotal[0].innerHTML = tot[0];
                tot[1] = score1[1] + score2[2] + score3[2] + score4[4] + score5[2] + score6[6] + score7[0];
                scoreTotal[1].innerHTML = tot[1];
                tot[2] = score1[2] + score2[1] + score3[3] + score4[2] + score5[6] + score6[2] + score7[2];
                scoreTotal[2].innerHTML = tot[2];
                tot[3] = score1[3] + score2[4] + score3[1] + score4[6] + score5[3] + score6[4] + score7[4];
                scoreTotal[3].innerHTML = tot[3];
                tot[4] = score1[4] + score2[3] + score3[6] + score4[1] + score5[4] + score6[3] + score7[5];
                scoreTotal[4].innerHTML = tot[4];
                tot[5] = score1[5] + score2[6] + score3[4] + score4[5] + score5[1] + score6[5] + score7[3];
                scoreTotal[5].innerHTML = tot[5];
                tot[6] = score1[6] + score2[5] + score3[5] + score4[3] + score5[5] + score6[1] + score7[1];
                scoreTotal[6].innerHTML = tot[6];
                if (tourA[0].style.background == "rgb(3, 90, 3)" && tourA[1].style.background == "rgb(3, 90, 3)" && tourA[2].style.background == "rgb(3, 90, 3)" && tourA[3].style.background == "rgb(3, 90, 3)" && tourA[4].style.background == "rgb(3, 90, 3)"
                    && tourA[5].style.background == "rgb(3, 90, 3)" && tourA[6].style.background == "rgb(3, 90, 3)") {
                    score0 = parseInt(scoreTotal[0].innerHTML);
                    score1 = parseInt(scoreTotal[1].innerHTML);
                    score2 = parseInt(scoreTotal[2].innerHTML);
                    score3 = parseInt(scoreTotal[3].innerHTML);
                    score4 = parseInt(scoreTotal[4].innerHTML);
                    score5 = parseInt(scoreTotal[5].innerHTML);
                    score6 = parseInt(scoreTotal[6].innerHTML);
                    if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                        id = "1" + tabJoueur[0];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                        id = "1" + tabJoueur[1];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                        id = "1" + tabJoueur[2];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                        id = "1" + tabJoueur[3];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score5 && score4 >= score6) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score4 && score5 >= score6) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                        id = "1" + tabJoueur[4];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score5 && score0 >= score6) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score5 && score1 >= score6) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score5 && score2 >= score6) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score5 && score3 >= score6) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score6) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                        id = "1" + tabJoueur[5];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score6) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score6) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score6) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score6) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score6) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else {
                        id = "1" + tabJoueur[6];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                }
                break;
                /***************************************************************************************************************case 8 */
            case 8:
                tot[0] = score1[0] + score2[0] + score3[0] + score4[0] + score5[0] + score6[0] + score7[6];
                scoreTotal[0].innerHTML = tot[0];
                tot[1] = score1[1] + score2[2] + score3[2] + score4[4] + score5[2] + score6[6] + score7[0];
                scoreTotal[1].innerHTML = tot[1];
                tot[2] = score1[2] + score2[1] + score3[3] + score4[2] + score5[6] + score6[2] + score7[2];
                scoreTotal[2].innerHTML = tot[2];
                tot[3] = score1[3] + score2[4] + score3[1] + score4[6] + score5[3] + score6[4] + score7[4];
                scoreTotal[3].innerHTML = tot[3];
                tot[4] = score1[4] + score2[3] + score3[6] + score4[1] + score5[4] + score6[3] + score7[5];
                scoreTotal[4].innerHTML = tot[4];
                tot[5] = score1[5] + score2[6] + score3[4] + score4[5] + score5[1] + score6[5] + score7[3];
                scoreTotal[5].innerHTML = tot[5];
                tot[6] = score1[6] + score2[5] + score3[5] + score4[3] + score5[5] + score6[1] + score7[1];
                scoreTotal[6].innerHTML = tot[6];
                tot[7] = score1[7] + score2[7] + score3[7] + score4[7] + score5[7] + score6[7] + score7[7];
                scoreTotal[7].innerHTML = tot[7];
                if (tourA[0].style.background == "rgb(3, 90, 3)" && tourA[1].style.background == "rgb(3, 90, 3)" && tourA[2].style.background == "rgb(3, 90, 3)" && tourA[3].style.background == "rgb(3, 90, 3)" && tourA[4].style.background == "rgb(3, 90, 3)"
                    && tourA[5].style.background == "rgb(3, 90, 3)" && tourA[6].style.background == "rgb(3, 90, 3)") {
                    score0 = parseInt(scoreTotal[0].innerHTML);
                    score1 = parseInt(scoreTotal[1].innerHTML);
                    score2 = parseInt(scoreTotal[2].innerHTML);
                    score3 = parseInt(scoreTotal[3].innerHTML);
                    score4 = parseInt(scoreTotal[4].innerHTML);
                    score5 = parseInt(scoreTotal[5].innerHTML);
                    score6 = parseInt(scoreTotal[6].innerHTML);
                    score7 = parseInt(scoreTotal[7].innerHTML);
                    if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                        id = "1" + tabJoueur[0];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else if (score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                        id = "1" + tabJoueur[1];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else if (score6 >= score0 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                        id = "1" + tabJoueur[2];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else if (score6 >= score0 && score6 >= score1 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                        id = "1" + tabJoueur[3];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                        id = "1" + tabJoueur[4];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score6 && score5 >= score7) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score5 && score6 >= score7) {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                        id = "1" + tabJoueur[5];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score6 && score1 >= score7) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score6 && score2 >= score7) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score6 && score3 >= score7) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score6 && score4 >= score7) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score7) {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                        id = "1" + tabJoueur[6];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score7) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score7) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score7) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score7) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score7) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score7) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[7];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                    else {
                        id = "1" + tabJoueur[7];
                        joueur = document.getElementById(id);
                        finaliste1A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                            id = "1" + tabJoueur[0];
                            joueur = document.getElementById(id);
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                            id = "1" + tabJoueur[1];
                            joueur = document.getElementById(id);
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                            id = "1" + tabJoueur[2];
                            joueur = document.getElementById(id);
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                            id = "1" + tabJoueur[3];
                            joueur = document.getElementById(id);
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                            id = "1" + tabJoueur[4];
                            joueur = document.getElementById(id);
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                            id = "1" + tabJoueur[5];
                            joueur = document.getElementById(id);
                        }
                        else {
                            id = "1" + tabJoueur[6];
                            joueur = document.getElementById(id);
                        }
                        finaliste2A.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                    }
                }
                break;

        }


    });
}
/*******************************************************************************************************************************************************************************************************************
 * ****************************************************************************************************2 pool*/
if (poolB.length == 1) {

    for (let a = 0; a < numJoueurB.length; a++) {
        numJoueurB[a].addEventListener("change", function () {
            numJoueurB[a].style.background = "rgb(151, 238, 151)";
            nombreB1 = 0;
            nombreB2 = 0;
            nombreB3 = 0;
            nombreB4 = 0;
            nombreB5 = 0;
            nombreB6 = 0;
            nombreB7 = 0;
            scoreB1 = [];
            scoreB2 = [];
            scoreB3 = [];
            scoreB4 = [];
            scoreB5 = [];
            scoreB6 = [];
            scoreB7 = [];
            totB = [];
            for (i = 0; i < numJoueurB1.length; i++) {
                if (numJoueurB1[i].value != '')
                    scoreB1[i] = parseInt(numJoueurB1[i].value);
                else
                    scoreB1[i] = 0
            }
            for (i = 0; i < numJoueurB2.length; i++) {
                if (numJoueurB2[i].value != '')
                    scoreB2[i] = parseInt(numJoueurB2[i].value);
                else
                    scoreB2[i] = 0
            }
            for (i = 0; i < numJoueurB3.length; i++) {
                if (numJoueurB3[i].value != '')
                    scoreB3[i] = parseInt(numJoueurB3[i].value);
                else
                    scoreB3[i] = 0
            }
            for (i = 0; i < numJoueurB4.length; i++) {
                if (numJoueurB4[i].value != '')
                    scoreB4[i] = parseInt(numJoueurB4[i].value);
                else
                    scoreB4[i] = 0
            }
            for (i = 0; i < numJoueurB5.length; i++) {
                if (numJoueurB5[i].value != '')
                    scoreB5[i] = parseInt(numJoueurB5[i].value);
                else
                    scoreB5[i] = 0
            }
            for (i = 0; i < numJoueurB6.length; i++) {
                if (numJoueurB6[i].value != '')
                    scoreB6[i] = parseInt(numJoueurB6[i].value);
                else
                    scoreB6[i] = 0
            }
            for (i = 0; i < numJoueurB7.length; i++) {
                if (numJoueurB7[i].value != '')
                    scoreB7[i] = parseInt(numJoueurB7[i].value);
                else
                    scoreB7[i] = 0
            }
            /************************************************************************************************************************************************************************************************************************
             * ************************************************************************************************************************************couleur*/
            for (let c = 0; c < numJoueurB1.length; c++) {
                if (numJoueurB1[c].style.background == "rgb(151, 238, 151)") {
                    nombreB1++;
                }
            }
            if (nombreB1 == nombreJoueurB && tourB[0].style.background != "rgb(3, 90, 3)") {
                tourB[0].style.background = "rgb(3, 90, 3)";
                infoTabB[0].style.border = "rgb(115, 255, 0) solid 2px";
            }
            for (let c = 0; c < numJoueurB2.length; c++) {
                if (numJoueurB2[c].style.background == "rgb(151, 238, 151)") {
                    nombreB2++;
                }
            }
            if (nombreB2 == nombreJoueurB && tourB[1].style.background != "rgb(3, 90, 3)") {
                tourB[1].style.background = "rgb(3, 90, 3)";
                infoTabB[1].style.border = "rgb(115, 255, 0) solid 2px";
            }
            for (let c = 0; c < numJoueurB3.length; c++) {
                if (numJoueurB3[c].style.background == "rgb(151, 238, 151)") {
                    nombreB3++;
                }
            }
            if (nombreB3 == nombreJoueurB && tourB[2].style.background != "rgb(3, 90, 3)") {
                tourB[2].style.background = "rgb(3, 90, 3)";
                infoTabB[2].style.border = "rgb(115, 255, 0) solid 2px";
            }
            for (let c = 0; c < numJoueurB4.length; c++) {
                if (numJoueurB4[c].style.background == "rgb(151, 238, 151)") {
                    nombreB4++;
                }
            }
            if (nombreB4 == nombreJoueurB && tourB[3].style.background != "rgb(3, 90, 3)") {
                tourB[3].style.background = "rgb(3, 90, 3)";
                infoTabB[3].style.border = "rgb(115, 255, 0) solid 2px";
            }
            for (let c = 0; c < numJoueurB5.length; c++) {
                if (numJoueurB5[c].style.background == "rgb(151, 238, 151)") {
                    nombreB5++;
                }
            }
            if (nombreB5 == nombreJoueurB && tourB[4].style.background != "rgb(3, 90, 3)") {
                tourB[4].style.background = "rgb(3, 90, 3)";
                infoTabB[4].style.border = "rgb(115, 255, 0) solid 2px";
            }
            for (let c = 0; c < numJoueurB6.length; c++) {
                if (numJoueurB6[c].style.background == "rgb(151, 238, 151)") {
                    nombreB6++;
                }
            }
            if (nombreB6 == nombreJoueurB && tourB[5].style.background != "rgb(3, 90, 3)") {
                tourB[5].style.background = "rgb(3, 90, 3)";
                infoTabB[5].style.border = "rgb(115, 255, 0) solid 2px";
            }
            for (let c = 0; c < numJoueurB7.length; c++) {
                if (numJoueurB7[c].style.background == "rgb(151, 238, 151)") {
                    nombreB7++;
                }
            }
            if (nombreB7 == nombreJoueurB && tourB[6].style.background != "rgb(3, 90, 3)") {
                tourB[6].style.background = "rgb(3, 90, 3)";
                infoTabB[6].style.border = "rgb(115, 255, 0) solid 2px";
            }


            /******************************************************************************************************************************************************************************************************
             * ******************************************************************************************************************************score*/
            switch (nombreJoueurB) {
                /***************************************************************************************************************case 3 */
                case 3:
                    totB[0] = scoreB1[0] + scoreB2[0] + scoreB3[2];
                    scoreTotal[(nombreJoueurA + 0)].innerHTML = totB[0];
                    totB[1] = scoreB1[1] + scoreB2[2] + scoreB3[0];
                    scoreTotal[(nombreJoueurA + 1)].innerHTML = totB[1];
                    totB[2] = scoreB1[2] + scoreB2[1] + scoreB3[1];
                    scoreTotal[(nombreJoueurA + 2)].innerHTML = totB[2];
                    if (tourB[0].style.background == "rgb(3, 90, 3)" && tourB[1].style.background == "rgb(3, 90, 3)" && tourB[2].style.background == "rgb(3, 90, 3)") {
                        score0 = parseInt(scoreTotal[(nombreJoueurA + 0)].innerHTML);
                        score1 = parseInt(scoreTotal[(nombreJoueurA + 1)].innerHTML);
                        score2 = parseInt(scoreTotal[(nombreJoueurA + 2)].innerHTML);
                        if (score0 >= score1 && score0 >= score2) {
                            id = "1" + tabJoueurB[0];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score1 >= score2) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score1 >= score0 && score1 >= score2) {
                            id = "1" + tabJoueurB[1];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score2) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else {
                            id = "1" + tabJoueurB[2];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                    }
                    break;
                    /***************************************************************************************************************case 4 */
                case 4:
                    totB[0] = scoreB1[0] + scoreB2[0] + scoreB3[0];
                    scoreTotal[(nombreJoueurA + 0)].innerHTML = totB[0];
                    totB[1] = scoreB1[1] + scoreB2[2] + scoreB3[2];
                    scoreTotal[(nombreJoueurA + 1)].innerHTML = totB[1];
                    totB[2] = scoreB1[2] + scoreB2[1] + scoreB3[3];
                    scoreTotal[(nombreJoueurA + 2)].innerHTML = totB[2];
                    totB[3] = scoreB1[3] + scoreB2[3] + scoreB3[1];
                    scoreTotal[(nombreJoueurA + 3)].innerHTML = totB[3];
                    if (tourB[0].style.background == "rgb(3, 90, 3)" && tourB[1].style.background == "rgb(3, 90, 3)" && tourB[2].style.background == "rgb(3, 90, 3)") {
                        score0 = parseInt(scoreTotal[(nombreJoueurA + 0)].innerHTML);
                        score1 = parseInt(scoreTotal[(nombreJoueurA + 1)].innerHTML);
                        score2 = parseInt(scoreTotal[(nombreJoueurA + 2)].innerHTML);
                        score3 = parseInt(scoreTotal[(nombreJoueurA + 3)].innerHTML);
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3) {
                            id = "1" + tabJoueurB[0];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score1 >= score2 && score1 >= score3) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score1 && score2 >= score3) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3) {
                            id = "1" + tabJoueurB[1];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score2 && score0 >= score3) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score3) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3) {
                            id = "1" + tabJoueurB[2];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score3) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score3) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else {
                            id = "1" + tabJoueurB[3];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                    }
                    break;
                    /***************************************************************************************************************case 5 */
                case 5:
                    totB[0] = scoreB1[0] + scoreB2[0] + scoreB3[0] + scoreB4[0] + scoreB5[4];
                    scoreTotal[(nombreJoueurA + 0)].innerHTML = totB[0];
                    totB[1] = scoreB1[1] + scoreB2[2] + scoreB3[2] + scoreB4[4] + scoreB5[0];
                    scoreTotal[(nombreJoueurA + 1)].innerHTML = totB[1];
                    totB[2] = scoreB1[2] + scoreB2[1] + scoreB3[4] + scoreB4[2] + scoreB5[1];
                    scoreTotal[(nombreJoueurA + 2)].innerHTML = totB[2];
                    totB[3] = scoreB1[3] + scoreB2[4] + scoreB3[3] + scoreB4[1] + scoreB5[2];
                    scoreTotal[(nombreJoueurA + 3)].innerHTML = totB[3];
                    totB[4] = scoreB1[4] + scoreB2[3] + scoreB3[1] + scoreB4[3] + scoreB5[3];
                    scoreTotal[(nombreJoueurA + 4)].innerHTML = totB[4];
                    if (tourB[0].style.background == "rgb(3, 90, 3)" && tourB[1].style.background == "rgb(3, 90, 3)" && tourB[2].style.background == "rgb(3, 90, 3)" && tourB[3].style.background == "rgb(3, 90, 3)" && tourB[4].style.background == "rgb(3, 90, 3)") {
                        score0 = parseInt(scoreTotal[(nombreJoueurA + 0)].innerHTML);
                        score1 = parseInt(scoreTotal[(nombreJoueurA + 1)].innerHTML);
                        score2 = parseInt(scoreTotal[(nombreJoueurA + 2)].innerHTML);
                        score3 = parseInt(scoreTotal[(nombreJoueurA + 3)].innerHTML);
                        score4 = parseInt(scoreTotal[(nombreJoueurA + 4)].innerHTML);
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4) {
                            id = "1" + tabJoueurB[0];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score1 >= score2 && score1 >= score3 && score1 >= score4) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score1 && score2 >= score3 && score2 >= score4) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score1 && score3 >= score2 && score3 >= score4) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4) {
                            id = "1" + tabJoueurB[1];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score2 && score0 >= score3 && score0 >= score4) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score3 && score2 >= score4) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score2 && score3 >= score4) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4) {
                            id = "1" + tabJoueurB[2];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score3 && score0 >= score4) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score3 && score1 >= score4) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score4) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4) {
                            id = "1" + tabJoueurB[3];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score4) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score4) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score4) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else {
                            id = "1" + tabJoueurB[4];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                    }
                    break;
                    /***************************************************************************************************************case 6 */
                case 6:
                    totB[0] = scoreB1[0] + scoreB2[0] + scoreB3[0] + scoreB4[0] + scoreB5[4];
                    scoreTotal[(nombreJoueurA + 0)].innerHTML = totB[0];
                    totB[1] = scoreB1[1] + scoreB2[2] + scoreB3[2] + scoreB4[4] + scoreB5[0];
                    scoreTotal[(nombreJoueurA + 1)].innerHTML = totB[1];
                    totB[2] = scoreB1[2] + scoreB2[1] + scoreB3[4] + scoreB4[2] + scoreB5[1];
                    scoreTotal[(nombreJoueurA + 2)].innerHTML = totB[2];
                    totB[3] = scoreB1[3] + scoreB2[4] + scoreB3[3] + scoreB4[1] + scoreB5[2];
                    scoreTotal[(nombreJoueurA + 3)].innerHTML = totB[3];
                    totB[4] = scoreB1[4] + scoreB2[3] + scoreB3[1] + scoreB4[3] + scoreB5[3];
                    scoreTotal[(nombreJoueurA + 4)].innerHTML = totB[4];
                    totB[5] = scoreB1[5] + scoreB2[5] + scoreB3[5] + scoreB4[5] + scoreB5[5];
                    scoreTotal[(nombreJoueurA + 5)].innerHTML = totB[5];
                    if (tourB[0].style.background == "rgb(3, 90, 3)" && tourB[1].style.background == "rgb(3, 90, 3)" && tourB[2].style.background == "rgb(3, 90, 3)" && tourB[3].style.background == "rgb(3, 90, 3)" && tourB[4].style.background == "rgb(3, 90, 3)") {
                        score0 = parseInt(scoreTotal[(nombreJoueurA + 0)].innerHTML);
                        score1 = parseInt(scoreTotal[(nombreJoueurA + 1)].innerHTML);
                        score2 = parseInt(scoreTotal[(nombreJoueurA + 2)].innerHTML);
                        score3 = parseInt(scoreTotal[(nombreJoueurA + 3)].innerHTML);
                        score4 = parseInt(scoreTotal[(nombreJoueurA + 4)].innerHTML);
                        score5 = parseInt(scoreTotal[(nombreJoueurA + 5)].innerHTML);
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                            id = "1" + tabJoueurB[0];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                            id = "1" + tabJoueurB[1];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score2 >= score0 && score1 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                            id = "1" + tabJoueurB[2];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score4 && score3 >= score5) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score3 && score4 >= score5) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                            id = "1" + tabJoueurB[3];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score4 && score0 >= score5) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score4 && score1 >= score5) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score4 && score2 >= score5) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score5) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                            id = "1" + tabJoueurB[4];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score5) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score5) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= 3 && score2 >= score5) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score5) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else {
                            id = "1" + tabJoueurB[5];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
    
                    }
                    break;
                    /***************************************************************************************************************case 7 */
                case 7:
                    totB[0] = scoreB1[0] + scoreB2[0] + scoreB3[0] + scoreB4[0] + scoreB5[0] + scoreB6[0] + scoreB7[6];
                    scoreTotal[(nombreJoueurA + 0)].innerHTML = totB[0];
                    totB[1] = scoreB1[1] + scoreB2[2] + scoreB3[2] + scoreB4[4] + scoreB5[2] + scoreB6[6] + scoreB7[0];
                    scoreTotal[(nombreJoueurA + 1)].innerHTML = totB[1];
                    totB[2] = scoreB1[2] + scoreB2[1] + scoreB3[3] + scoreB4[2] + scoreB5[6] + scoreB6[2] + scoreB7[2];
                    scoreTotal[(nombreJoueurA + 2)].innerHTML = totB[2];
                    totB[3] = scoreB1[3] + scoreB2[4] + scoreB3[1] + scoreB4[6] + scoreB5[3] + scoreB6[4] + scoreB7[4];
                    scoreTotal[(nombreJoueurA + 3)].innerHTML = totB[3];
                    totB[4] = scoreB1[4] + scoreB2[3] + scoreB3[6] + scoreB4[1] + scoreB5[4] + scoreB6[3] + scoreB7[5];
                    scoreTotal[(nombreJoueurA + 4)].innerHTML = totB[4];
                    totB[5] = scoreB1[5] + scoreB2[6] + scoreB3[4] + scoreB4[5] + scoreB5[1] + scoreB6[5] + scoreB7[3];
                    scoreTotal[(nombreJoueurA + 5)].innerHTML = totB[5];
                    totB[6] = scoreB1[6] + scoreB2[5] + scoreB3[5] + scoreB4[3] + scoreB5[5] + scoreB6[1] + scoreB7[1];
                    scoreTotal[(nombreJoueurA + 6)].innerHTML = totB[6];
                    if (tourB[0].style.background == "rgb(3, 90, 3)" && tourB[1].style.background == "rgb(3, 90, 3)" && tourB[2].style.background == "rgb(3, 90, 3)" && tourB[3].style.background == "rgb(3, 90, 3)" && tourB[4].style.background == "rgb(3, 90, 3)"
                    && tourB[5].style.background == "rgb(3, 90, 3)" && tourB[6].style.background == "rgb(3, 90, 3)") {
                        score0 = parseInt(scoreTotal[(nombreJoueurA + 0)].innerHTML);
                        score1 = parseInt(scoreTotal[(nombreJoueurA + 1)].innerHTML);
                        score2 = parseInt(scoreTotal[(nombreJoueurA + 2)].innerHTML);
                        score3 = parseInt(scoreTotal[(nombreJoueurA + 3)].innerHTML);
                        score4 = parseInt(scoreTotal[(nombreJoueurA + 4)].innerHTML);
                        score5 = parseInt(scoreTotal[(nombreJoueurA + 5)].innerHTML);
                        score6 = parseInt(scoreTotal[(nombreJoueurA + 6)].innerHTML);
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                            id = "1" + tabJoueurB[0];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                            id = "1" + tabJoueurB[1];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                            id = "1" + tabJoueurB[2];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                            id = "1" + tabJoueurB[3];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score5 && score4 >= score6) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score4 && score5 >= score6) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{

                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                            id = "1" + tabJoueurB[4];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score5 && score0 >= score6) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score5 && score1 >= score6) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score5 && score2 >= score6) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score5 && score3 >= score6) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score6) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                            id = "1" + tabJoueurB[5];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score6) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score6) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score6) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score6) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score6) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else{
                            id = "1" + tabJoueurB[6];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                    }
                    break;
                    /***************************************************************************************************************case 8 */
                case 8:
                    totB[0] = scoreB1[0] + scoreB2[0] + scoreB3[0] + scoreB4[0] + scoreB5[0] + scoreB6[0] + scoreB7[6];
                    scoreTotal[(nombreJoueurA + 0)].innerHTML = totB[0];
                    totB[1] = scoreB1[1] + scoreB2[2] + scoreB3[2] + scoreB4[4] + scoreB5[2] + scoreB6[6] + scoreB7[0];
                    scoreTotal[(nombreJoueurA + 1)].innerHTML = totB[1];
                    totB[2] = scoreB1[2] + scoreB2[1] + scoreB3[3] + scoreB4[2] + scoreB5[6] + scoreB6[2] + scoreB7[2];
                    scoreTotal[(nombreJoueurA + 2)].innerHTML = totB[2];
                    totB[3] = scoreB1[3] + scoreB2[4] + scoreB3[1] + scoreB4[6] + scoreB5[3] + scoreB6[4] + scoreB7[4];
                    scoreTotal[(nombreJoueurA + 3)].innerHTML = totB[3];
                    totB[4] = scoreB1[4] + scoreB2[3] + scoreB3[6] + scoreB4[1] + scoreB5[4] + scoreB6[3] + scoreB7[5];
                    scoreTotal[(nombreJoueurA + 4)].innerHTML = totB[4];
                    totB[5] = scoreB1[5] + scoreB2[6] + scoreB3[4] + scoreB4[5] + scoreB5[1] + scoreB6[5] + scoreB7[3];
                    scoreTotal[(nombreJoueurA + 5)].innerHTML = totB[5];
                    totB[6] = scoreB1[6] + scoreB2[5] + scoreB3[5] + scoreB4[3] + scoreB5[5] + scoreB6[1] + scoreB7[1];
                    scoreTotal[(nombreJoueurA + 6)].innerHTML = totB[6];
                    totB[7] = scoreB1[7] + scoreB2[7] + scoreB3[7] + scoreB4[7] + scoreB5[7] + scoreB6[7] + scoreB7[7];
                    scoreTotal[(nombreJoueurA + 7)].innerHTML = totB[7];
                    if (tourB[0].style.background == "rgb(3, 90, 3)" && tourB[1].style.background == "rgb(3, 90, 3)" && tourB[2].style.background == "rgb(3, 90, 3)" && tourB[3].style.background == "rgb(3, 90, 3)" && tourB[4].style.background == "rgb(3, 90, 3)"
                    && tourB[5].style.background == "rgb(3, 90, 3)" && tourB[6].style.background == "rgb(3, 90, 3)") {
                        score0 = parseInt(scoreTotal[(nombreJoueurA + 0)].innerHTML);
                        score1 = parseInt(scoreTotal[(nombreJoueurA + 1)].innerHTML);
                        score2 = parseInt(scoreTotal[(nombreJoueurA + 2)].innerHTML);
                        score3 = parseInt(scoreTotal[(nombreJoueurA + 3)].innerHTML);
                        score4 = parseInt(scoreTotal[(nombreJoueurA + 4)].innerHTML);
                        score5 = parseInt(scoreTotal[(nombreJoueurA + 5)].innerHTML);
                        score6 = parseInt(scoreTotal[(nombreJoueurA + 6)].innerHTML);
                        score7 = parseInt(scoreTotal[(nombreJoueurA + 7)].innerHTML);
                        if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueurB[0];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else if (score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id); 
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueurB[1];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else if (score6 >= score0 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueurB[2];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else if (score6 >= score0 && score6 >= score1 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id);    
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueurB[3];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score4 && score0 >= score5 && score0 >= score6 && score0 >= score7) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score4 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score4 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score5 && score4 >= score6 && score4 >= score7) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score4 && score5 >= score6 && score5 >= score7) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score4 && score6 >= score5 && score6 >= score7) {
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueurB[4];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score6 && score0 >= score7) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score5 && score1 >= score6 && score1 >= score7) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score5 && score2 >= score6 && score2 >= score7) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score5 && score3 >= score6 && score3 >= score7) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score6 && score5 >= score7) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score5 && score6 >= score7) {
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id);  
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6 && score0 >= score7) {
                            id = "1" + tabJoueurB[5];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score6 && score0 >= score7) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score6 && score1 >= score7) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score6 && score2 >= score7) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score6 && score3 >= score7) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score6 && score4 >= score7) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score7) {
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else if(score6 >= score0 && score6 >= score1 && score6 >= score2 && score6 >= score3 && score6 >= score4 && score6 >= score5 && score6 >= score7){
                            id = "1" + tabJoueurB[6];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score7) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score7) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score7) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score7) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score7) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score7) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[7];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                        else{
                            id = "1" + tabJoueurB[7];
                            joueur = document.getElementById(id);
                            finaliste1B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                            if (score0 >= score1 && score0 >= score2 && score0 >= score3 && score0 >= score4 && score0 >= score5 && score0 >= score6) {
                                id = "1" + tabJoueurB[0];
                                joueur = document.getElementById(id);
                            }
                            else if (score1 >= score0 && score1 >= score2 && score1 >= score3 && score1 >= score4 && score1 >= score5 && score1 >= score6) {
                                id = "1" + tabJoueurB[1];
                                joueur = document.getElementById(id);
                            }
                            else if (score2 >= score0 && score2 >= score1 && score2 >= score3 && score2 >= score4 && score2 >= score5 && score2 >= score6) {
                                id = "1" + tabJoueurB[2];
                                joueur = document.getElementById(id);
                            }
                            else if (score3 >= score0 && score3 >= score1 && score3 >= score2 && score3 >= score4 && score3 >= score5 && score3 >= score6) {
                                id = "1" + tabJoueurB[3];
                                joueur = document.getElementById(id);
                            }
                            else if (score4 >= score0 && score4 >= score1 && score4 >= score2 && score4 >= score3 && score4 >= score5 && score4 >= score6) {
                                id = "1" + tabJoueurB[4];
                                joueur = document.getElementById(id);
                            }
                            else if (score5 >= score0 && score5 >= score1 && score5 >= score2 && score5 >= score3 && score5 >= score4 && score5 >= score6) {
                                id = "1" + tabJoueurB[5];
                                joueur = document.getElementById(id);
                            }
                            else{
                                id = "1" + tabJoueurB[6];
                                joueur = document.getElementById(id);
                            }
                            finaliste2B.innerHTML = joueur.attributes.prenomJoueur.value + " " + joueur.attributes.nomJoueur.value;
                        }
                    }
                    break;

            }
        });
    }

/***********************************************************************************************************************************************************************************************
 * *******************************************************************************************************************************************phase final */

    finaliste1A.addEventListener("click", function () {
        finaliste1A = document.getElementById("1A");
        finaliste1AHtml = finaliste1A.innerHTML;
        finaliste2B = document.getElementById("2B");
        finaliste2BHtml = finaliste2B.innerHTML;
        finaliste1.innerHTML = finaliste1AHtml;
        finaliste3.innerHTML = finaliste2BHtml;
    });
    finaliste2B.addEventListener("click", function () {
        finaliste1A = document.getElementById("1A");
        finaliste1AHtml = finaliste1A.innerHTML;
        finaliste2B = document.getElementById("2B");
        finaliste2BHtml = finaliste2B.innerHTML;
        finaliste1.innerHTML = finaliste2BHtml;
        finaliste3.innerHTML = finaliste1AHtml;
    });
    finaliste1B.addEventListener("click", function () {
        finaliste1B = document.getElementById("1B");
        finaliste1BHtml = finaliste1B.innerHTML;
        finaliste2A = document.getElementById("2A");
        finaliste2AHtml = finaliste2A.innerHTML;
        finaliste2.innerHTML = finaliste1BHtml;
        finaliste4.innerHTML = finaliste2AHtml;
    });
    finaliste2A.addEventListener("click", function () {
        finaliste1B = document.getElementById("1B");
        finaliste1BHtml = finaliste1B.innerHTML;
        finaliste2A = document.getElementById("2A");
        finaliste2AHtml = finaliste2A.innerHTML;
        finaliste2.innerHTML = finaliste2AHtml;
        finaliste4.innerHTML = finaliste1BHtml;
    });
}