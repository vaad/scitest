<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<?php 
/*
    Do not show this content. it will be displayed along with the titel
		[field_lnk_sub_title]|[field_disp_side]|[field_link_url]|[field_new_page]
*/
	 $origin = $output;
   $content = explode('|', $output);

   $title = '';
   $new_page = '';
   $link = '';
	 $side = 'left';

   if (isset($content[0])) $title = $content[0];
	 if(isset($content[1])) {
					 $side = $content[1];
	 				 $side = $side == '' ? 'right' : $side;
	 }
   if(isset($content[2])) $link = $content[2];
   if(isset($content[3])) $new_page = $content[3];


   if (($new_page == 'כן') or ($new_page == 'Yes')){
           $new_page = 'target="_blank"';
   } else {
           $new_page = '';
   }

	$pos = strpos($title, 'none');
	if ($pos === false) {
				print "<a class='link-sub-item pull-$side' href='$link' $new_page >$title</a>";
	} else {
					print "";
	}
?>
