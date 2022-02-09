<?php

add_action('widgets_init', 'gurenando_init_sidebar');

function gurenando_init_sidebar(){
    register_sidebar(array(
        'name' => __('haut gauche', 'gurenando'), 'id'=>__('haut gauche'), 'description'=>__('Zone en haut à gauche','gurenando')
        )
    );
}