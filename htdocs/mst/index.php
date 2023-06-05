<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page d'acceuil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100&family=Manrope:wght@200&display=swap" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body>
    <?php include('header.php');?>
    <?php include('menu.php');?>
    <main>
        <div class="principale">
            <div class="box">
                <h1>Information sur les MST</h1>
                <ol>
                    <li><a href="index.php">Definition</a></li>
                    <li><a href="#cau">Cause et exemple d'mst</a></li>
                    <li><a href="#prev">Mode de prevention</a></li>
                </ol>
            </div>
            <div id="def">
                <h2> I- Definition</h2>
                <p>Les MST (maladies sexuellement transmissibles), communément appelées maladies vénériennes ou MST
                    , sont des maladies infectieuses transmises d'un individu à l'autre exclusivement lors des
                     rapports sexuels. Contrairement à une croyance répandue, il n'y a pas de risque de contracter
                     une MST aux toilettes
                </p>
                <p>
                    Il en existe de nombreuses formes, propagées par : 
                </p>
                <ul>
                    <li>des bactéries (gonocoques par exemple pour les blennorragies, Treponema pallidum pour la syphilis, Chlamydia trachomatis pour les chlamydiases) ;</li>
                    <li>des virus (HIV pour le Sida, VHB pour l'hépatite B, HSV pour l'herpès, etc.) ;</li>
                    <li>des champignons (Candida albicans pour les candidoses) ;</li>
                    <li>des protozoaires (Trichomonas vaginalis pour les trichomonoses).</li>
                </ul>
            </div>
            <div id="cau">
                <h2>II- cause et exemple d'mst</h2>
                <p>
                    Une IST (ou infection sexuellement transmissible) est une infection qui se transmet le plus souvent lors de rapports
                    sexuels non protégés.
                    Si certaines se traitent désormais très bien à l’aide d’antibiotiques, d'autres restent graves.
                </p>
            </div>
            <div id="prev">
                <h2>III-Mode de prevention</h2>
                <p>
                    <ul>
                        <li>Lorsqu’ils sont utilisés correctement et avec constance, les préservatifs constituent l’une des méthodes de protection
                            les plus efficaces contre les IST, y compris le VIH. Bien qu’ils soient très efficaces, les préservatifs n’offrent pas
                            de protection contre les IST qui causent des ulcères extra-génitaux (c’est-à-dire, la syphilis ou l’herpès génital).
                            Quand c’est possible, les préservatifs devraient être utilisés pour tout rapport sexuel vaginal ou anal.
                        </li>
                        <li>

                            On dispose de vaccins sûrs et particulièrement efficaces contre deux IST virales : l’hépatite B et l’infection à PVH.
                            Ces vaccins représentent une avancée majeure dans la prévention des IST. À la fin de 2020, 111 pays, principalement
                            des pays à revenu intermédiaire ou élevé, ont commencé à utiliser le vaccin contre le PVH dans le cadre de programmes de
                            vaccination systématique. Pour éliminer le cancer du col de l’utérus en tant que problème de santé publique à l’échelle mondiale,
                            des cibles visant à obtenir un niveau de couverture élevé par la vaccination contre le VPH, par le dépistage et le traitement des
                            lésions précancéreuses, et par la prise en charge du cancer doivent impérativement être atteintes d’ici 2030 et maintenues à ce niveau
                            élevé pendant plusieurs décennies. 
                        </li>
                        <li>
                            La recherche sur les vaccins contre le virus de l’herpès génital et le VIH a bien progressé, la phase clinique ayant
                            débuté pour plusieurs vaccins candidats. Des données de plus en plus nombreuses semblent indiquer que le vaccin administré
                            pour prévenir la méningite (MenB) offre une certaine protection croisée contre la gonorrhée. Il faut davantage de travaux 
                            de recherche sur les vaccins contre la chlamydiose, la gonorrhée, la syphilis et la trichomonase.
                       </li>
                       <li>
                            La circoncision masculine médicalisée volontaire, l’utilisation d’antimicrobiens et le traitement
                            des partenaires font partie des autres interventions biomédicales visant à prévenir certaines IST
                            . Des essais sont en cours pour évaluer les avantages de la prophylaxie pré et post-exposition pour
                            les IST et son innocuité potentielle par rapport à la résistance aux antimicrobiens (RAM).
                      </li>
                      </ul>
                </p>
            </div>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>