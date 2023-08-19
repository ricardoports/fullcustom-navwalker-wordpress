# fullcustom-navwalker-wordpress
Full and customizable nav-walker to wordpress

Full example of use:
```php
<?php wp_nav_menu(array(


                    'menu'                 => '',
                    'container'            => false,
                    'container_class'      => '',
                    'container_id'         => '',
                    'container_aria_label' => '',

                    'menu_class'           => 'main-menu nav',
                    'sub_menu_class'       => 'submenu-nav',
                    'menu_id'              => '',
                    'echo'                 => true,
                    'fallback_cb'          => '__return_false',

                    'before'               => '',
                    'after'                => '',

                    'link_class' => '',
                    'link_before'          => '',
                    'link_after'           => '',

                    'sub_link_class' => '',
                    'sub_link_before' => '',
                    'sub_link_after' => '',

                    'inside_link_class' => '',
                    'inside_link_container' => 'span',
                    'inside_sub_link_class' => '',
                    'inside_sub_link_container' => 'span',

                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'items_wrap_class'     => '',
                    'items_wrap_has_children_class'     => 'has-submenu',
                    'items_subitem_wrap_class' => 'has-submenu',
                    'item_spacing'         => 'preserve',

                    'depth'                => 2,
                    'walker'               => new full_custom_wp_nav_menu_walker5(),
                    'theme_location' => 'main-menu'
                  )); ?>

```
Output:

```html

<ul id="menu-topo" class="main-menu nav">
  <li  id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item ">
      <a href="https://yourdomain.com/" class="active"><span class="">Início</span></a>
  </li>
  <li  id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://yourdomain.com/sobre-nos/" class=""><span class="">Sobre Nós</span></a></li>
  <li  id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://yourdomain.com/loja/" class=""><span class="">Nossa Loja</span></a></li>
  <li  id="menu-item-52" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-submenu"><a href="#/" class=""><span class="">Blog</span></a>
    <ul class="submenu-nav">
	    <li  id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page has-submenu">
        <a href="https://yourdomain.com/blog/" class="">
          <span class="">Blog</span>
        </a>
      </li>
	    <li  id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page has-submenu">
        <a href="https://yourdomain.com/novidades/" class="">
          <span class="">Novidades</span>
        </a>
      </li>
	    <li  id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page has-submenu">
        <a href="https://yourdomain.com/categorias/" class="">
          <span class="">Categorias</span>
        </a>
      </li>
    </ul>
</li>
<li  id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-submenu">
  <a href="#/" class=""><span class="">Páginas</span></a>
    <ul class="submenu-nav">
	    <li  id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page has-submenu">
        <a href="https://yourdomain.com/encontrei-um-pet/" class="">
          <span class="">Encontrei um PET</span>
        </a>
      </li>
	    <li  id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page has-submenu">
        <a href="https://yourdomain.com/minha-conta/" class=""><span class="">Minha conta</span>
        </a>
      </li>
	    <li  id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page has-submenu">
        <a href="https://yourdomain.com/active/" class=""><span class="">Ative sua TAG</span>
        </a>
      </li>
    </ul>
  </li>
  <li  id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page ">
    <a href="https://yourdomain.com/contato/" class="">
      <span class="">Contato</span>
    </a>
  </li>
</ul>
</code>

```
