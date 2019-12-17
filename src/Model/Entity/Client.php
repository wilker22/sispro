<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string|null $company
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $info
 * @property string|null $website
 * @property string $email
 * @property string $phone
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Project[] $projects
 */
class Client extends Entity
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
        'company' => true,
        'first_name' => true,
        'last_name' => true,
        'info' => true,
        'website' => true,
        'email' => true,
        'phone' => true,
        'created' => true,
        'modified' => true,
        'projects' => true,
    ];
}
