<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('admin_path'))
{
    function admin_path()
    {
        return 'admin';
    }
}

if ( ! function_exists('admin_assets'))
{
    function admin_assets($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('public/admin').'/'.$link;
    }
}

if ( ! function_exists('home_assets'))
{
    function home_assets($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('public/homepage').'/'.$link;
    }
}

if ( ! function_exists('assets_url'))
{
    function assets_url($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('assets').'/'.$link;
    }
}

if ( ! function_exists('admin_url'))
{
    function admin_url($url = NULL)
    {
        $link = ($url)? '/'.$url : '';
        return site_url(admin_path()).$link;
    }
}

if ( ! function_exists('login_url'))
{
    function login_url($url = NULL)
    {
        $link = ($url)? '/'.$url : '';
        return site_url('login').$link;
    }
}

if ( ! function_exists('upload_path'))
{
    function upload_path($path = NULL)
    {
        $link = ($path)? $path.'/' : '';
        return 'public/uploads/'.$link;
    }
}

if ( ! function_exists('upload_url'))
{
    function upload_url($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return site_url(upload_path()).$link;
    }
}
