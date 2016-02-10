<?php
    /**
     * Created by PhpStorm.
     * User: Ironman
     * Date: 8/19/2015
     * Time: 3:03 PM
     */

    interface KnklAppsInterfacesItems
    {
        /**
         *
         * @return KnklAppsAbstractItem
         *
         */
        public function getItemInstance();

        /**
         *
         * @return KnklAppsAbstractItems
         *
         */
        public function getItemsInstance();


        /**
         *
         * @return KnklTablesBase
         *
         */
        public function getTable();
    }
