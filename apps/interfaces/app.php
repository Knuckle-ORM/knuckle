<?php
/**
 * Created by PhpStorm.
 * User: Ironman
 * Date: 8/19/2015
 * Time: 3:19 PM
 */

    interface KnklAppsInterfacesApp
    {


        /**         *
         * @return KnklAppsAbstractItem
         */
        public function getItemInstance();

        /**
         * @return KnklAppsAbstractItems
         */
        public function getItemsInstance();
    }