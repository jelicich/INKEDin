<option></option>
<?php

for($i = 0; $i < sizeof($cities); $i++)
{
	if($cities[$i]['id'] == $user['city_id'])
	{
		echo '<option value="'.$cities[$i]['id'].'" selected>'.$cities[$i]['city'].'</option>';
	}
	else
	{
		echo '<option value="'.$cities[$i]['id'].'">'.$cities[$i]['city'].'</option>';
	}	
}
?>