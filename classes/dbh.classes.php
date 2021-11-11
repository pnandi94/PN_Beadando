<?php
class Dbh{
	
	protected function connect(){
		try{
			$username="root";
			$password="";
			$host="localhost";
			$dbName="hatoslotto";
			$dbh=new PDO('mysql:host=localhost;dbname=hatoslotto', $username, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			//$dbh = new PDO('mysql:host=localhost;dbname=hatoslotto', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			//$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
			return $dbh;
		}
		catch (PDOException $e){
			print "Error!: " . $e->getMessage(). "<br/>";
			die();
		}
	}
}
class DbhQuery extends Dbh{
	public function legutobbi(){
		$select= 'SELECT ev, max(het), ertek from nyeremeny INNER JOIN huzas ON huzasid=huzas.id WHERE ev=2013';
		$result = $this->connect()->prepare($select);
		$result->execute();
		$row=$result->fetch();
		$legutobbi="<h3>A legutóbbi nyeremény $row[0]. $row[1]. hetében: $row[2] Ft";
		echo($legutobbi);
	}
	
	public function legnagyobb(){
		$select= 'SELECT ertek, ev, het from nyeremeny INNER JOIN huzas ON huzasid=huzas.id
			ORDER BY ertek DESC LIMIT 1';
		$result = $this->connect()->prepare($select);
		$result->execute();
		$row=$result->fetch();
		$legnagyobb="<br>Az eddigi legnagyobb nyereményt: $row[0] Ft-ot, $row[1]. $row[2]. hetében sorsolták ki.</h3>";
		echo($legnagyobb);
	}
	
	public function hirek($newsCount){
		$count=$newsCount;
		$select='SELECT * from news ORDER BY postdate DESC LIMIT '.$count;
		$result = $this->connect()->prepare($select);
		$result->execute();
		if ($result==null){
			echo "Nincs több hír!";
		} else {
			while($row=$result->fetch()){
				echo "<p>";
				echo "<h3>".$row['title']." - ".$row['author']." - ".$row['postdate']."</h3>";
				echo $row['content'];
				echo "</p>";
			}
		}
	}
	
	public function feltolt(){
		if($_POST['content']!=null and $_POST['title']!=null){
			$sqlInsert = "insert into news(id, content, title, author, postdate)
                          values(0, :content, :title, :author, :postdate)";
			$stmt = $this->connect()->prepare($sqlInsert); 
			$author=$_SESSION['uid'];
			$postdate=date("Y-m-d");
			$stmt->execute(array(':content' => $_POST['content'], ':title' => $_POST['title'],
							   ':author' => $author, ':postdate' => $postdate));
			echo "<br>Sikeres feltöltés";
		} else{
			echo "<br>Hiányzó cím vagy tartalom";
		}

		return 0;
	}
}	
?>