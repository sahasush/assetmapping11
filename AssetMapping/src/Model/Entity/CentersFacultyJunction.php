<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CentersFacultyJunction Entity
 *
 * @property int $Centers_Faculty_Junction_ID
 * @property int $Labs_Centers_ID
 * @property int $Faculty_ID
 */
class CentersFacultyJunction extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'Centers_Faculty_Junction_ID' => false
    ];
}
