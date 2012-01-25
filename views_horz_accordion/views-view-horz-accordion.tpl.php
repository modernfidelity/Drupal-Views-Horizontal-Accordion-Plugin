<?php
/**
 * @file
 * Displays the items of the views horizontal accordion.
 *
 * @ingroup views_templates
 *
 * Note that the accordion NEEDS <?php print $row ?> to be wrapped by an
 * element, or it will hide all fields on all rows under the first field.
 *
 * Also, if you use field grouping and use the headers of the groups as the
 * accordion headers, these NEED to be inside h3 tags exactly as below
 * (though you can add classes).
 *
 *
 */
?>

<?php if ($use_group_header): ?><div><?php endif; ?>



<!-- views-view-horz-accordion.tpl -->
<div id="hero-horz-accordion">
	<ol>
		<?php foreach ($rows as $id => $row): ?>
		<li>
			<h2>
				<span><?php print $accordion_headers[$id]; ?></span>
			</h2>
				
			<div>
				<?php print $row; ?>
			</div>	
		</li>			
		<?php endforeach; ?>
	</ol>
</div>
<!-- // views-view-horz-accordion.tpl -->

<?php if ($use_group_header): ?></div><?php endif; ?>



