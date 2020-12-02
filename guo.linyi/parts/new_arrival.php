<div class="container">
	<h2 style="text-align: left;">New Arrival</h2>
	<div class="grid gap card white soft">
		
		<?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  ORDER BY date_create DESC
                  LIMIT 3
               "),
               'makeProductList'
            );

        ?>

        <a href="product_list.php" class="col-sm-12" style="text-align: right;margin-right: 15px;font-size:larger;"></a>

	</div>
</div>
