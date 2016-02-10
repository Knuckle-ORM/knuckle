<?php
/**
 * Created by PhpStorm.
 * User: Ironman
 * Date: 8/19/2015
 * Time: 2:46 PM
 */

    trait KnklAppsCategoryTrait
    {
        /** @var  KnklTablesBase | KnklTablesNestedbase
        protected $_table = false; */

        protected $_key = 'id';
        protected $_table_alias = 'category';


        /**
         * @return bool|\KnklTablesBase
         */
        public function getTable()
        {
            return
                $this->_table
                    ?
                    $this->_table
                    :
                    $this->_table = new KnklTablesNestedbase('#__knkl_category_items','id', $this->_table_alias);
        }

        public static function getInstance( Joomla\Registry\Registry $state = null)
        {
            return new self($state);
        }

        /**
         * @param \Joomla\Registry\Registry | null $state
         *
         * @return \KnklAppsCategoryItem
         *
         */
        public function getItemInstance( Joomla\Registry\Registry $state = null)
        {
            return KnklAppsCategoryItem::getInstance( $state );
        }

        /**
         * @param  Joomla\Registry\Registry $state
         *
         * @return KnklAppsCategoryItems
         */
        public function getItemsInstance( Joomla\Registry\Registry $state = NULL )
        {
            return KnklAppsCategoryItems::getInstance($state);
        }

        /**
         * @return \Joomla\Registry\Registry
         */
        protected function getState()
        {
            return Joomla\Registry\Registry::getInstance($this->_statekey);
        }
    }