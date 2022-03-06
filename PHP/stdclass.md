https://www.geeksforgeeks.org/what-is-stdclass-in-php/

	$data1 = $this->owner->lists();

		//	echo $data1[0]->id;
		//	echo sizeof($data1);
			for($i=0;$i<sizeof($data1);$i++){
			    echo $data1[$i]->id.'<br>';
				if($data1[$i]->id==$id){
					$data["owner_name"]= $data1[$i]->owner_name;	
					$data["pet_type_name"] = $data1[$i]->pet_type_name;	
					break;

				}		
			} 

            