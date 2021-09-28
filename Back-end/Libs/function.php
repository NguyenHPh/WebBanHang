	<?php
		function validatePass ($s){
			for($i = 0; $i < str_word_count($s); $i++){
				if($s[$i] == '-' || $s[$i] == '\''){
					return false;
				}
			}
			return true;
		}
	?>