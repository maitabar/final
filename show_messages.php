<?php
	$result = $data -> query("SELECT * FROM chat WHERE (from_mess='".$_SESSION['from_mess']."' and to_mess='".$_SESSION['to_mess']."') or (from_mess='".$_SESSION['to_mess']."' and to_mess='".$_SESSION['from_mess']."') ; ");
	

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	if($row['from_mess']==$_SESSION['from_mess']){ 
	    		echo "<div class = show_mess_from>" .$row['message']. "</div>";
	    	} else{
	    		echo "<div class = show_mess_to>" .$row['message']. "</div>";
	    	};
	        	
	    }
	}

?>