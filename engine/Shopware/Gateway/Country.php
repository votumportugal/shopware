<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */
namespace Shopware\Gateway;

use Shopware\Struct;

/**
 * @package Shopware\Gateway
 */
interface Country
{
    /**
     * The \Shopware\Struct\Country\State requires the following data:
     * - Country area base data
     *
     * @param int $id
     * @param Struct\Context $context
     * @return Struct\Country\Area
     */
    public function getArea($id, Struct\Context $context);

    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see \Shopware\Gateway\Country::getState()
     *
     * @param array $ids
     * @param Struct\Context $context
     * @return Struct\Country\State[]
     */
    public function getStates(array $ids, Struct\Context $context);

    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see \Shopware\Gateway\Country::getCountry()
     *
     * @param array $ids
     * @param Struct\Context $context
     * @return Struct\Country[]
     */
    public function getCountries(array $ids, Struct\Context $context);

    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see \Shopware\Gateway\Country::getArea()
     *
     * @param array $ids
     * @param Struct\Context $context
     * @return Struct\Country\Area[]
     */
    public function getAreas(array $ids, Struct\Context $context);

    /**
     * The \Shopware\Struct\Country requires the following data:
     * - Country base data
     * - Core attribute
     *
     * Required translation in the provided context language:
     * - Country base data
     *
     * @param int $id
     * @param Struct\Context $context
     * @return \Shopware\Struct\Country
     */
    public function getCountry($id, Struct\Context $context);

    /**
     * The \Shopware\Struct\Country\State requires the following data:
     * - Country state base data
     * - Core attribute
     *
     * Required translation in the provided context language:
     * - Country state base data
     *
     * @param $id
     * @param Struct\Context $context
     * @return Struct\Country\State
     */
    public function getState($id, Struct\Context $context);
}
