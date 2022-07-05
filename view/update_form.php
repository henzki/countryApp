<?php include('header.php') ?>

<?php 
                if ($results) {
        ?>
            <section class="center-section">
                <h2>Update Or Delete Country Data</h2>
                <?php foreach ($results as $result) { 

                    $code = $result['Code'];
                    $country = $result['Name'];
                    $capital = $result['Capital'];
                    $codetwo = $result['Code2'];
                    $continent = $result['Continent'];
                    $gnp = $result['GNP'];
                    $gnpold = $result['GNPOld'];
                    $governmentform = $result['GovernmentForm'];
                    $headofstate = $result['HeadOfState'];
                    $indepyear = $result['IndepYear'];
                    $lifeexpectancy = $result['LifeExpectancy'];
                    $localname = $result['LocalName'];
                    $population = $result['Population'];
                    $region = $result['Region'];
                    $surfacearea = $result['SurfaceArea'];

                ?>
                    <form class="update" action="." method="POST">
                        <input type="hidden" name="action" value="update">

                        <input type="hidden" name="code" 
                            value="<?= $code ?>">

                        <label for="country-<?= $code ?>">Country Name:</label>
                        <input type="text" class="edit-form" id="country-<?= $code ?>" name="country" 
                            value="<?= $country ?>" required>

                        <label for="capital-<?= $code ?>">Capital:</label>
                        <input type="text" class="edit-form" id="capital-<?= $code ?>" name="capital"
                            value="<?= $capital ?>" required>

                            <input type="hidden" name="codetwo" 
                            value="<?= $codetwo ?>">

                        <label for="continent-<?= $code ?>">Continent:</label>
                        <input type="text" class="edit-form" id="continent-<?= $code ?>" name="continent" 
                            value="<?= $continent ?>">
                        
                        <label for="gnp-<?= $code ?>">GNP:</label>
                        <input type="text" class="edit-form" id="gnp-<?= $code ?>" name="gnp" 
                        value="<?= $gnp ?>">

                        <label for="gnpold-<?= $code ?>">GNP Old:</label>
                        <input type="text" class="edit-form" id="gnpold-<?= $code ?>" name="gnpold" 
                        value="<?= $gnpold ?>">

                        <label for="governmentform-<?= $code ?>">Government Form:</label>
                        <input type="text" class="edit-form" id="governmentform-<?= $code ?>" name="governmentform" 
                        value="<?= $governmentform ?>">

                        <label for="headofstate-<?= $code ?>">Head Of State:</label>
                        <input type="text" class="edit-form" id="headofstate-<?= $code ?>" name="headofstate" 
                        value="<?= $headofstate ?>">

                        <label for="indepyear-<?= $code ?>">Year of Independence:</label>
                        <input type="text" class="edit-form" id="indepyear-<?= $code ?>" name="indepyear" 
                            value="<?= $indepyear ?>">

                        <label for="lifeexpectancy-<?= $code ?>">Life Expectancy:</label>
                        <input type="text" class="edit-form" id="lifeexpectancy-<?= $code ?>" name="lifeexpectancy" 
                        value="<?= $lifeexpectancy ?>">

                        <label for="localname-<?= $code ?>">Local Name:</label>
                        <input type="text" class="edit-form" id="localname-<?= $code ?>" name="localname" 
                        value="<?= $localname ?>">

                        <label for="population-<?= $code ?>">Population:</label>
                        <input type="text" class="edit-form" id="population-<?= $code ?>" name="population" 
                        value="<?= $population ?>">

                        <label for="region-<?= $code ?>">Region:</label>
                        <input type="text" class="edit-form" id="region-<?= $code ?>" name="region" 
                        value="<?= $region ?>">

                        <label for="surfacearea-<?= $code ?>">Surface Area:</label>
                        <input type="text" class="edit-form" id="surfacearea-<?= $code ?>" name="surfacearea" 
                        value="<?= $surfacearea ?>">
                            
                        <button class="update-button">Update</button>     
                    </form>
                <?php } ?>
            </section>
        <?php } else { ?>
            <p>Sorry, no results.</p><br>
        <?php } ?>
<?php include('status.php') ?>
<form action="." method="GET">
                    <input type="hidden" name="action" value="search">
                    <input type="hidden" id="country" name="country" value="<?= $country ?>" required>
                    <div class="back-button"><button class="edit-back"><img src="view/images/back.png"></button></div>
                </form>

<?php include('footer.php') ?>