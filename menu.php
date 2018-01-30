<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 23.01.2018
 * Time: 11:05
 */

//loome menüü objektile

$menuTmpl = new template('menu.menu');
$menuItemTmpl = new template('menu.menu_item');
$menuItemTmpl->set('menu_item_name', 'esimene');
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
$menuItemTmpl->set('menu_item_name', 'teine');
$menuItem = $menuItemTmpl->parse();
$menuTmpl->add('menu_items', $menuItem);
$menu = $menuTmpl->parse();
$mainTmpl->set('menu', $menu);

