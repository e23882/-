<title>新增規則</title>
<?php
require_once 'ConnectionFactory.php';
try
	{
		$conn = ConnectionFactory::getFactory()->getConnection();
		$stmt = $conn->prepare('INSERT INTO rule(rule, r_class, trust) VALUES ("'.$_POST['rule'].'","' . $_POST['r_class'] . '","'.$_POST['trust'].'") ');
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS);
		$conn = null;
}
catch (PDOException $e) 
	{
		
		echo "add rule success";

	}
	
	
?>

