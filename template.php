<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 
 function simpleblogtheme_form_comment_form_alter(&$form, &$form_state) {
 
 drupal_add_js(drupal_get_path('theme', 'simpleblogtheme') . '/js/comment_form_alter.js');
 drupal_add_js(drupal_get_path('theme', 'simpleblogtheme') . '/js/jquery.infieldlabel.js'); 
 drupal_add_js(drupal_get_path('theme', 'simpleblogtheme') . '/js/lanche_infieldlabel.js');  
 

 $form['author']['homepage'] = NULL;
 $form['author']['name']['#title']='Name';
 $form['author']['mail']['#title']='Email';
 $form['author']['mail']['#description']='Email Will not published';
 $form['actions']['submit']['#value']='Post';
} 


 function simpleblogtheme_form_contact_site_form_alter(&$form, &$form_state) {
 
 drupal_add_js(drupal_get_path('theme', 'simpleblogtheme') . '/js/jquery.infieldlabel.js'); 
 drupal_add_js(drupal_get_path('theme', 'simpleblogtheme') . '/js/lanche_infieldlabel.js');  
 

} 


function simpleblogtheme_preprocess_page(&$variables) {
drupal_add_js(drupal_get_path('theme', 'simpleblogtheme') . '/js/mobile_menu.js');
}