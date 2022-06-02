            <section>

                <h2 class="formSaisie">Formulaire de saisie</h2>

                <h3 class="titre3">Description de l'opération</h3>
                <p class="abc">A = base de départ du véhicule ; B = point de chargement ; C = point de déchargement.
                    Le véhicule opère des navettes entre B et C sur une journée.
                    Après le dernier déchargement de la journée en C, il retourne directement à sa base A.</p>

                <table class="table-striped table-hover tableForm">
                    <thead>
                        <tr>
                            <th class="thForm">Poste</th>
                            <th class="thForm">Distance</th>
                            <th class="thForm">Péage</th>
                            <th class="thForm">Temps</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="500px">Parcours d'approche jusqu'au point de chargement : relation AB</td>
                            <td><input class="inputForm" id="relationABDistance" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" id="relationABTemps" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Temps de chargement en B</td>
                            <td></td>
                            <td></td>
                            <td><input class="inputForm" id="tempsB" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Transport en charge : relation BC</td>
                            <td><input class="inputForm" id="relationBCDistance" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" id="relationBCTemps" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Temps de déchargement en C</td>
                            <td></td>
                            <td></td>
                            <td><input class="inputForm" id="tempsC" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Retour au point de chargement : relation CB</td>
                            <td><input class="inputForm" id="relationCBDistance" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" id="relationCBTemps" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Retour après le dernier déchargement à la base de départ : relation CA</td>
                            <td><input class="inputForm" id="relationCADistance" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                            <td><input class="inputForm" id="relationCATemps" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Unité de chargement</td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Chargement d'un tour (correspondant à l'Option ci-dessus)</td>
                            <td><input class="inputForm" id="chargementTour" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Temps de travail journalier pouvant être effectué</td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                        </tr>
                        <tr>
                            <td width="500px">Autre coût, lié au transport ou non, à inclure dans le calcul de coût d'un tour le cas échéant</td>
                            <td><input class="inputForm" type="number" placeholder="0.0"></td>
                        </tr>

                    </tbody>
                </table>

                <h3 class="titre3">Journée d'exploitation optimale</h3>

                <table class="table-striped table-hover tableForm">
                    <tr>
                        <td width="500px">Nombre de tour(s) ou déchargement(s) possible(s)</td>
                        <td id="nbToursPossibles"></td>
                    </tr>
                    <tr>
                        <td width="500px">Kilométrage total parcouru</td>
                        <td id="kmTotal"></td>
                    </tr>
                    <tr>
                        <td width="500px">Chargement total transporté</td>
                        <td id="charTotal"></td>
                    </tr>
                    <tr>
                        <td width="500px">Temps de service nécessaire</td>
                        <td id="tpsService"></td>
                    </tr>
                    <tr id="tpsServiceJ">
                        <td id="dataTpsServiceJ"></td>
                    </tr>
                </table>

                <h3 class="titre3">Coût de revient de la simulation effectuée</h3>
                <p>Au choix du commercial</p>

                <table class="table-striped table-hover tableForm">
                    <tr>
                        <td width="500px">Terme kilométique pour 1 km parcouru - <strong>Hors péages</strong></td>
                        <td id="termeKmHP"></td>
                        <td><input class="inputForm" type="text" placeholder="Option"></td>
                    </tr>
                    <tr>
                        <td width="500px">Terme kilométique pour 1 km parcouru - <strong>Avec péages</strong></td>
                        <td id="termeKmAP"></td>
                        <td><input class="inputForm" type="text" placeholder="Option"></td>
                    </tr>
                    <tr>
                        <td width="500px">Terme journalier <strong>par journée d'exploitation</strong> du véhicule</strong></td>
                        <td id="termeJ"></td>
                        <td><input class="inputForm" type="text" placeholder="Option"></td>
                    </tr>
                    <tr>
                        <td width="500px">Terme horaire <strong>pour une heure de temps de service</strong></td>
                        <td id="termeH"></td>
                        <td><input class="inputForm" type="text" placeholder="Option"></td>
                    </tr>
                    <tr>
                        <td width="500px">Autres coûts à renseigner si nécessaire</td>
                        <td id="autresCouts"></td>
                        <td><input class="inputForm" type="text" placeholder="Option"></td>
                    </tr>
                    <tr>
                        <td width="500px">Coût de revient par jour si utilisation du trinôme</td>
                        <td id="coutRTrinome"></td>
                    </tr>
                    <tr>
                        <td width="500px">Coût de revient par jour si saisie par le commercial</td>
                        <td id="coutRCommercial"></td>
                    </tr>
                    <tr>
                        <td width="500px">Marge</td>
                        <td><input class="inputForm" type="number" placeholder="0.0"></td>
                    </tr>
                    <tr>
                        <td width="500px">Coût d'une journée à facturer</td>
                        <td id="coutJournee"></td>
                    </tr>
                </table>
            </section>
           
            <div class="space-evenly">
        <span class="returnMenu">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-arrow-left"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
            />
          </svg>
          <i class="bi bi-arrow-left"></i>
          <a href = "index.php?controller=page&task=menuC" class="backLink">Retour au menu principal</a>
        </span>
        <span>
        <button type="button" id="devisAccepte" class="btn btn-success">Valider formulaire</button>
        </span>

        
        
         
     