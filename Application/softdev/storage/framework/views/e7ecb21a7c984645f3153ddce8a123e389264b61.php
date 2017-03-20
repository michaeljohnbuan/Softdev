<!DOCTYPE html>
<html>
    <head>
        <title>Search alternatives for food</title>
        
		<link rel="stylesheet" type="text/css" href="assetsAlternativeFood/styles.css">
    </head>
    <body>
        
        <form class="searchbox_1" action="search_alternatives.blade.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Alternative to search..."><br><br>
			<input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Place</th>
                    <th>Alternative</th>
                    
                </tr>

        </form>
		
		
		 <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['place'];?></td>
                    <td><?php echo $row['alternative'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        
    </body>
</html>