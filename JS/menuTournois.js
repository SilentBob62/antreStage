evenement = document.getElementById("evenement");
poolA = document.getElementById("poolA");
poolB = document.getElementById("poolB");
nbPool=document.getElementById("nbPool");
boutonTournois = document.getElementById("boutonTournois");

evenement.addEventListener("change", function () {
    optionValue = evenement.value;
    option = document.getElementById(optionValue);
    nombreInscrit = option.attributes.nombreInscrit;
    nombreInscrit = parseInt(nombreInscrit.value);
    if (nombreInscrit == nombrePool) {
        boutonTournois.innerHTML='<button class="menuListe marge" type="submit">valider</button>';
    }
    else{
        boutonTournois.innerHTML="";
    }
});
nbPool.addEventListener("change", function () {
    nombrePoolA = poolA.value
    nombrePoolA = parseInt(nombrePoolA);
    nombrePoolB = poolB.value
    nombrePoolB = parseInt(nombrePoolB);
    if (nbPool.value=="2")
    {
        nombrePool = nombrePoolA + nombrePoolB;
    }
    else{
        nombrePool = nombrePoolA
        poolB.value="0";
    }    
    if (nombreInscrit == nombrePool) {
        boutonTournois.innerHTML='<button class="menuListe marge" type="submit">valider</button>';
    }
    else{
        boutonTournois.innerHTML="";
    }
});
poolA.addEventListener("change", function () {
    nombrePoolA = poolA.value
    nombrePoolA = parseInt(nombrePoolA);
    nombrePoolB = poolB.value
    nombrePoolB = parseInt(nombrePoolB);
    if (nbPool.value=="2")
    {
        nombrePool = nombrePoolA + nombrePoolB;
    }
    else{
        nombrePool = nombrePoolA
        poolB.value="0";
    }    
    if (nombreInscrit == nombrePool) {
        boutonTournois.innerHTML='<button class="menuListe marge" type="submit">valider</button>';
    }
    else{
        boutonTournois.innerHTML="";
    }
});
poolB.addEventListener("change", function () {
    nombrePoolA = poolA.value
    nombrePoolA = parseInt(nombrePoolA);
    nombrePoolB = poolB.value
    nombrePoolB = parseInt(nombrePoolB);
    if (nbPool.value=="2")
    {
        nombrePool = nombrePoolA + nombrePoolB;
    }
    else{
        nombrePool = nombrePoolA
        poolB.value="0";
    }    
    if (nombreInscrit == nombrePool) {
        boutonTournois.innerHTML='<button class="menuListe marge" type="submit">valider</button>';
    }
    else{
        boutonTournois.innerHTML="";
    }
});
