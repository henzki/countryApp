<?php include('header.php') ?>
            <div class="search-form">
                <h2>Search for a country</h2>
                <form action="." method="GET">
                    <input type="hidden" name="action" value="search">
                    <label for="country">Country Name:</label>
                    <input type="text" id="country" name="country" class="search-input" required>
                    <div class="center"><button class="submit">Submit</button></div>
                </form>
            </div>
<?php include('status.php') ?>
<?php include('footer.php') ?>