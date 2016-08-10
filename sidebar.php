<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Direach
 */
/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, or if we're not on the front, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
        return;

if( ! is_front_page() )
{
	return;
	}

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="widget-area" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <div class="first front-widgets">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div><!-- .first -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
        <div class="second front-widgets">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div><!-- .second -->
        <?php endif; ?>
</div><!-- #secondary -->
