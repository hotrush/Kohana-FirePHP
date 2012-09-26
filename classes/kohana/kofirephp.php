<?php defined('SYSPATH') or die('Denied');

    /**
     * FirePHP Module for Kohana 3.2
     * @author  Rush
     * @year    2012
     * @www     http://blog.annetlab.ru
     */

    class Kohana_KoFirephp {

        protected $config = array();

        /**
         * factory function
         * @param array $config
         * @return KoFirephp Obj
         */
        public static function factory(array $config = array()) {
            $kofirephp = new KoFirephp($config);
            return $kofirephp->init();
        }

        /**
         * @param array $config
         * @return FirePHP obj
         */
        public function __construct(array $config = array()) {
            $this->config = array_merge(Kohana::$config->load('kofirephp')->as_array(), $config);
        }

        /**
         * FirePHP class init
         * @param null
         * @return FirePHP Obj
         */
        public function init() {
            require Kohana::find_file('vendor', 'FirePHP.class');
            $firephp = FirePHP::getInstance(true);
            $firephp->setEnabled($this->config['enabled']);
            return $firephp;
        }

    }