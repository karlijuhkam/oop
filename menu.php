<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 23.01.2018
 * Time: 11:05
 */

// loome menüü peamalli objekti template klassist
$menu = new template('menu.menu');
// loome menüü elemendi malli objekti
$menuItem = new template('menu.menu_item');
// ###############################################


//koostame päringu menüü ja sisu ülesehitsamiseks
$sql = 'SELECT content_id, content, title FROM content where parent_id='.fixDb(0).' AND show_in_menu='.fixDb(1);
//kontrollime päringu kuju
$result = $db->getData($sql);

//ehitame menüü
if($result != false){
    foreach ($result as $page){
        $menuItem->set('menu_item_name',$page['title']);
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $menuItem->set('menu_item_url',$link);
        $http->set('page_id',$page['content_id']);
        $menu->add('menu_items',$menuItem->parse());
}
$mainTmpl->add('menu',$menu->parse());}
