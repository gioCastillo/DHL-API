<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        Pickup.php
 * Project:     DHL API
 *
 * @author      Jacob van Dam
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Pickup Request model for DHL API
 */
class Pickup extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'PickupDate' => array(
            'type' => 'dateTime',
            'required' => true,
            'subobject' => false,
            'comment' => 'The date at which the pick up has been scheduled',
        ), 
        'ReadyByTime' => array(
            'type' => 'time',
            'required' => true,
            'subobject' => false,
            'comment' => 'The time by which the pick will be ready.',
            'length' => '5',
        ), 
        'CloseTime' => array(
            'type' => 'time',
            'required' => true,
            'subobject' => false,
            'comment' => 'Closing time of the pickup location.',
            'length' => '5',
        ),
        'AfterHoursLocation' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'After hour location palce. This field is required if the "After Hours Closing Time" field is defined.',
        ), 
        'Pieces' => array(
            'type' => 'positiveInteger',
            'required' => true,
            'subobject' => false,
            'comment' => 'No of pieces scheduled for pickup. This value should not be less than the sum of the values of NumberOfPieces element in ShipmentDetails element.',
        ),
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'The weight of the shipment.',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ),
        'SpecialInstructions' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Specail instructions for pickup.',
        ),
    );
}
