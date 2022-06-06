// Récupération des données


let ligneback = //getelement du back ? en array ?

// Se placer dans le DOM

let table = document.getElementsByTagName("tbody")

// Logique

/* Pour chaque ligne back (foreach)
je veux récupérer les données (get ??),
puis les incrémenter dans mon tableau et passer à la ligne suivante (create puis Node.appendChild) */

ligneback.forEach(element => {
    var newtr = document.createElement("tr")
    // foreach données de la ligneback
    newtr.appendChild(document.createElement("td"))
    table.appendChild(newtr)
});

