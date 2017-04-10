<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Link Entity
 *
 * @property int $id
 * @property int $menu_id
 * @property string $title
 * @property string $url
 * @property string $slug
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 *
 * @property \App\Model\Entity\Menu $menu
 */
class Link extends Entity
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
        'id' => false
    ];
}