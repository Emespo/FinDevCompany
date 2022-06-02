            <div>

            <div><h2 class="repartitionCharges center-h2">Répartition des charges</h2></div>

            <table class="table-striped table-hover">
                <tr>
                    <td width="600px">Kilométrage annuel moyen du véhicule moteur <strong>(km)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Dont kilométrage en charge <strong>(km)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Nombre de <strong>véhicules tractés</strong> pour un véhicule moteur</td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Nombre de <strong>jours</strong> d'exploitation du véhicule moteur par an</td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Unité de chargement <strong>(texte libre)</strong></td>
                    <td><input class="inputRepartition" type="text" placeholder="Unité"></td>
                </tr>
                <tr>
                    <td width="600px">Capacité de chargement <strong>correspondant à l'unité ci-dessus</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Coefficient d'utilisation de cette capacité <strong>(%)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Nombre d'ensemble (véhicule moteur + tracté)</td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Kilométrage total du parc</td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Kilométrage total du parc N-1</td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Consommation de Gazole aux 100 km <strong>(litres pour 100 km)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Prix moyen du litre de Gazole route (hors toutes taxes récupérables) <strong>(€)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Part de l'approvisionnement citerne <strong>(%)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Prix moyen du litre de Gazole citerne (hors toutes taxes récupérables) <strong>(€)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Coûts carburant <strong>(€/km)</strong></td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>
                <tr>
                    <td width="600px">Achat pneumatiques</td>
                    <td><input class="inputRepartition" type="number" placeholder="0.0"></td>
                </tr>


            </table>
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
          <a href = "index.php?controller=page&task=menuCG" class="backLink">Retour au menu principal</a>
        </span>
        <span>
        <button type="button" id="repartitionCharges" class="btn btn-success">Valider Répartition des charges</button>
        </span>
      </div>
      </div>