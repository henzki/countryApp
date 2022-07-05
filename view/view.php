<?php include('header.php') ?>

<?php 
                if ($results) {
        ?>
            <section>
                <h2><?= $country ?></h2>
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
                    <p class="center-text">
                    <?= $localname ?>,
                    <?= $code ?><br>
                    <?= $codetwo ?></p>

                    <div class="flex-container">
                    
                    

                    <div>
                        <h3>Geography</h3>
                        <p>Surface area: <?= $surfacearea ?></p>
                        <p>Region: <?= $region ?></p>
                        <p>Continent: <?= $continent ?></p>
                    </div>

                    <div>
                        <h3>Facts</h3>
                        <p>Independance: <?= $indepyear ?></p>
                        <p>Governement form: <?= $governmentform ?></p>
                        <p>Head of state: <?= $headofstate ?></p>

                    </div>

                    <div>
                        <h3>Economy</h3>
                        <p>Capital: <?= $capital ?></p>
                        <p>GNP: <?= $gnp ?></p>
                        <p>GNP Old: <?= $gnpold ?></p>
                    </div>
    
                    <div>
                        <h3>Life Expectancy</h3>
                        <p><?= $lifeexpectancy ?> years</p>
                    </div>

                    </div>
                    <div class="flex-container-buttons">
                    <div>
                    <section>
                        <form action="." method="GET">
                            <input type="hidden" name="action" value="select">
                            <input type="hidden" name="country" 
                            value="<?php echo $country ?>">
                            <button class="edit-button">Edit</button>
                        </form>
                    </section></div>
                        
                    <div>
                    <form class="delete" action="delete_record.php" method="POST">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" 
                        value="<?php echo $code ?>">
                    <button class="delete-button">Delete</button>
                    </form></div>
                    </div>
                <?php } ?>
            </section>
        <?php } else { ?>
            <p>Sorry, no results.</p><br>
        <?php } ?>
<?php include('status.php') ?>

<div class="back-button"><a href="."><img src="view/images/back.png"></a></div>

<?php include('footer.php') ?>