<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div class="row">
	<div class="nav-wrapper">
				<form>
					<div class="input-field">
					 <input id="search" type="search" placeholder="Pesquisa" value="<?php echo get_search_query(); ?>" name="s"/>
					 <label class="label-icon active" for="search"><i class="material-icons right">search</i></label>
					 <i class="material-icons">close</i>
					 </div>
				 </form>
	</div>
</div>
