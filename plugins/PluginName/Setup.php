<?php

namespace Plugins\PluginName;

class Setup
{
    public static $name = 'Test Plugin Name';
    public static $description = 'Test Plugin Description';
    public static $version = '3.9.0';
    public static $minSystemVersion = '1.0.0';
    public static $author = 'Test Author Name';
    public static $authorUrl = 'https://example.com';
    public static $authorEmail = 'test@example.com';

    public static function install()
    {
        // check if the plugin has a valid purchase code, after that install the plugin
        if (request()->purchase_code === '123456') {

            // run the database migrations
            \Artisan::call('migrate');

            // update the sidebar sections
            $sidebar_sections = \File::json(config('laragine.root_dir') . '/Base/config/sidebar_sections.json');
            $sidebar_sections['leads_management'] = [
                'title' => 'Leads Management',
                'items' => [
                    [
                        'title' => 'Leads',
                        'url'   => 'admin/leads',
                        'icon'  => 'fas fa-headset',
                        'permissions' => '*',
                        'items' => [
                            [
                                'title' => 'List',
                                'url'   => 'admin/leads',
                                'route' => 'admin.leads.index',
                            ],
                            [
                                'title' => 'Create',
                                'url'   => 'admin/leads/create',
                                'route' => 'admin.leads.create',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Customers',
                        'url'   => 'admin/customers',
                        'icon'  => 'fas fa-receipt',
                        'permissions' => '*',
                        'items' => [
                            [
                                'title' => 'List',
                                'url'   => 'admin/customers',
                                'route' => 'admin.customers.index',
                            ],
                            [
                                'title' => 'Create',
                                'url'   => 'admin/customers/create',
                                'route' => 'admin.customers.create',
                            ],
                        ]
                    ],
                ]
            ];

            \File::put(config('laragine.root_dir') . '/Base/config/sidebar_sections.json', json_encode($sidebar_sections));
        } else {
            throw new \Exception('Invalid purchase code.');
        }
    }

    public static function uninstall()
    {
        // rollback the database migrations
        $path = str_replace(base_path(), '', __DIR__) . '/Database/Migrations';
        \Artisan::call("migrate:rollback --path={$path}");

        // rollback the sidebar sections
        $sidebar_sections = \File::json(config('laragine.root_dir') . '/Base/config/sidebar_sections.json');
        unset($sidebar_sections['leads_management']);
        \File::put(config('laragine.root_dir') . '/Base/config/sidebar_sections.json', json_encode($sidebar_sections));
    }
}
