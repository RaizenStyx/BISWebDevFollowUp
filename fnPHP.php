 <?php
 include_once 'index.php';

 $fnQuery = $_POST['fnQuery'];
 
		$query = "SELECT * FROM customers WHERE first_name LIKE '$fnQuery'";
		$stmt = $db->prepare($query);
		$stmt->execute();
		
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print "ID: ".($row['id']); ?></td><br/>
                <td><?php print "First Name: ".($row['first_name']); ?></td><br/>
                <td><?php print "Last Name: ".($row['last_name']); ?></td><br/>
                <td><?php print "City: ".($row['city']); ?></td><br/>
                <td><?php print "State: ".($row['state']); ?></td><br/>
                
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
?>