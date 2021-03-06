<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 * @version   OXID eShop CE
 */

/**
 * Admin voucherserie list manager.
 * Collects voucherserie base information (serie no., discount, valid from, etc.),
 * there is ability to filter them by deiscount, serie no. or delete them.
 * Admin Menu: Shop Settings -> Vouchers.
 */
class VoucherSerie_List extends oxAdminList
{

    /**
     * Name of chosen object class (default null).
     *
     * @var string
     */
    protected $_sListClass = 'oxvoucherserie';

    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'voucherserie_list.tpl';

    /**
     * Deletes selected Voucherserie.
     */
    public function deleteEntry()
    {
        // first we remove vouchers
        $oVoucherSerie = oxNew("oxvoucherserie");
        $oVoucherSerie->load($this->getEditObjectId());
        $oVoucherSerie->deleteVoucherList();

        parent::deleteEntry();
    }
}
