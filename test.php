<?php
		//ถ้าใช้งานบน ssl หรือ HTTPS แล้วให้เอา @ ออกได้เลยจ้า เพราะตัว API Request SSL 
		    $url = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces');
    $covid19 = json_decode($url);

				
		echo "<pre>";
        echo "$covid19";
        echo "</pre>";




		?>
