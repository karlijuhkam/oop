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

$menuItemTmpl->set('menu_item_name','esimene');
$menuItemTmpl->add('menu_item_name','teine');

$menuItem = $menuItemTmpl->parse();
$menuTmpl->set('menu_items',$menuItem);

$menu = $menuTmpl->parse();

