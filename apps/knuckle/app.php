<?php
    /**
     * Created by PhpStorm.
     * User: Ironman
     * Date: 8/12/2015
     * Time: 3:56 PM
     */


    class KnklAppsCategoryApp extends KnklAbstractApp
    {
        use KnklAppsCategoryTrait;

        /** @var  KnklAppsCategoryItem */
        public $item;

        /** @var  KnklAppsCategoryItems */
        public $items;

        protected $_statekey = 'KnklAppsCategoryApp';
    }