<?php
if (!class_exists('GHVertriebspartner')) {

    class GHVertriebspartner
    {
        private static $initiated = false;

        public static function init()
        {
            if (!self::$initiated) {
                self::init_hooks();
            }
        }

        /**
         * Initializes WordPress hooks
         */
        private static function init_hooks()
        {
            self::$initiated = true;

            self::setup_post_type();

        }

        static function activation()
        {
            self::setup_post_type();
            flush_rewrite_rules();
        }
        static function deactivation()
        {
            unregister_post_type('gh_vertriebspartner');
            flush_rewrite_rules();
        }
        static function uninstall()
        {
        }
        static function setup_post_type()
        {
            register_post_type('gh_vertriebspartner', [
                'labels' => [
                    'name' => __('Vertriebspartner'),
                    'singular_name' => __('Vertriebspartner')
                ],
                'rewrite' => ['slug' => 'vertriebspartner'],
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-id'
            ]);
        }
    }
}
