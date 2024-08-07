<?php defined('BASEPATH') or exit('No direct script access allowed');

trait MY_Tables
{
    //table users 
    public $_table_users_password_resets = 'users_password_resets';
    public $_table_users = 'users';
    public $_table_users_detail = 'users_detail';
    public $_table_blog = 'blog';
    public $_table_contact_us = 'contact_us';

    public $_table_log_activity = 'log_activity';

    //Menus
    public $_table_master_menus = 'master_menus';
    public $_table_master_users_access_menu = 'master_users_access_menu';
    public $_table_social_media = 'social_media';
    public $_table_terms_condition = 'terms_condition';
    public $_table_privacy = 'privacy';
    public $_table_menu_frontend = 'menu_frontend';


    public $_table_admin = 'admins';
}
