<?php 

function search_country_by_name($country) {
    global $db;
    $query = 'SELECT * FROM country 
            WHERE Name = :country 
            ORDER BY Population DESC';
    $statement = $db->prepare($query);
    $statement->bindValue(':country', $country);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}

    function select_country_by_name($country) {
        global $db;
        $query = 'SELECT * FROM country 
                WHERE Name = :country 
                ORDER BY Population DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':country', $country);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function update_country($code, $country, $capital, $codetwo, $continent, $gnp, $gnpold, $governmentform, $headofstate, $indepyear, $lifeexpectancy, $localname, $population, $region, $surfacearea ) {
        global $db;
        $count = 0;
        $query = 'UPDATE country 
                SET Name = :country, 
                Capital = :capital, 
                Code2 = :codetwo, 
                Continent = :continent, 
                GNP = :gnp, 
                GNPOld = :gnpold, 
                GovernmentForm = :governmentform, 
                HeadOfState = :headofstate,
                IndepYear = :indepyear,
                LifeExpectancy = :lifeexpectancy,
                LocalName = :localname,
                Population = :population,
                Region = :region,
                SurfaceArea = :surfacearea
                     WHERE Code = :code';
        $statement = $db->prepare($query);
        $statement->bindValue(':code', $code);
        $statement->bindValue(':country', $country);
        $statement->bindValue(':capital', $capital);
        $statement->bindValue(':codetwo', $codetwo);
        $statement->bindValue(':continent', $continent);
        $statement->bindValue(':gnp', $gnp);
        $statement->bindValue(':gnpold', $gnpold);
        $statement->bindValue(':governmentform', $governmentform);
        $statement->bindValue(':headofstate', $headofstate);
        $statement->bindValue(':indepyear', $indepyear);
        $statement->bindValue(':lifeexpectancy', $lifeexpectancy);
        $statement->bindValue(':localname', $localname);
        $statement->bindValue(':population', $population);
        $statement->bindValue(':region', $region);
        $statement->bindValue(':surfacearea', $surfacearea);
        
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();
        return $count;
    }

    function delete_country($code) {
        global $db;
        $count = 0;
        $query = 'DELETE FROM country 
                WHERE Code = :code';
        $statement = $db->prepare($query);
        $statement->bindValue(':code', $code);
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();
        return $count;
    }