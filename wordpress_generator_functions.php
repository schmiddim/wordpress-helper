<?php
/***********************************
*GENERATOR FOR WORDPRESS FIELDS
*@see: also usable for own project
*
*************************************/
/**** Checkbox function ***
A superb function that generates a radio button incl. the options management

*/
function schmie_generate_radio_button ($option) {
	$checked="";

	if (get_option($option)==$option)
		$checked= 'checked="checked"';
	echo "<input type=\"checkbox\" name=\"$option\" id=\"$option\" value=\"$option\" $checked/>";
}//function

/**** Select function ****
A superb function that generates a select field incl. the options management
@todo: if options field is empty, the default field is empty:(
*/
function schmie_generate_selecter($option, $values_arr){
$selected=get_option($option);
echo "<select name=\"$option\"=\"$selected\", size=\"1\">";
		echo "<option>$selected</option>";
		foreach($values_arr as $val) {
			if ($val!=$selected)
				echo "<option>$val</option>";
		

		}//each


echo "</select>";
}//function
?>
<!--example******************************************-->
	<tr valign="top">
	<th scope="row">Use </th>
	<td>
	<?php
	/*** which shortener should be used ??*/
	$values=array('is.gd', 'bit.ly', 'i2h.de','tinyurl.com');
	schmie_generate_selecter('schmie_tw_shortener_select',$values);
	?>
	</td>
        </tr>

