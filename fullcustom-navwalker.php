<?php

/*
https://github.com/ricardoports/fullcustom-navwalker-wordpress
*/

// full custom wp_nav_menu walker
class full_custom_wp_nav_menu_walker5 extends Walker_Nav_menu
{
  private $current_item;

  function start_lvl(&$output, $depth = 0, $args = null)
  {

    //var_dump(func_get_args()); 

    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? $args->menu_class : $args->sub_menu_class;
    $output .= "\n$indent<ul class=\"" . $submenu . "\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {

    //var_dump(func_get_args()); 

    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? $args->items_wrap_has_children_class : ($depth == 0 ? $args->items_wrap_class : $args->items_subitem_wrap_class);

    $class_names =  join(' ', $classes);
    $class_names = ' class="' . ltrim(esc_attr($class_names)) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = empty($args->link_class) ? "" : $args->link_class;
    $attributes .= ( $args->walker->has_children ) ? ' class="'. ((!$depth) ? (empty($args->link_class) ? "" : $args->link_class ) : (empty($args->sub_link_class) ? "" : $args->sub_link_class ) ) . $active_class . '"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    if (!$depth) $item_output .= empty($args->inside_link_container) ? "" : "<$args->inside_link_container class=\"" . (empty($args->inside_link_class) ? "" : $args->inside_link_class) . "\">";
    if ($depth) $item_output .= empty($args->inside_sub_link_container) ? "" : "<$args->inside_sub_link_container class=\"" . (empty($args->inside_sub_link_class) ? "" : $args->inside_sub_link_class) . "\">";
    if (!$depth) $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    if ($depth) $item_output .= $args->sub_link_before . apply_filters('the_title', $item->title, $item->ID) . $args->sub_link_after;
    if (!$depth) $item_output .= empty($args->inside_link_container) ? "" : "</$args->inside_link_container>";
    if ($depth) $item_output .= empty($args->inside_sub_link_container) ? "" : "</$args->inside_sub_link_container>";
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
