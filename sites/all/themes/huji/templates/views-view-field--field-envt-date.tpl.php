
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
*/
	 $origin = $output;
   $content = explode(',', $output);

	 $mmdd = $content[1];
   $content = explode(' ', $mmdd);

	 $mm = mb_substr($content[1], 0,3);
	 $dd = $content[2];

	print "<div class='event-date'> <div class='event-day'>$dd</div><div class='event-month'>$mm</div></div>";
?>
