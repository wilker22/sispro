<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $client_id
 * @property int $category_id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $url
 * @property \Cake\I18n\FrozenTime|null $launch
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Note[] $notes
 * @property \App\Model\Entity\Tag[] $tags
 */
class Project extends Entity
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
        'user_id' => true,
        'client_id' => true,
        'category_id' => true,
        'title' => true,
        'description' => true,
        'url' => true,
        'launch' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'client' => true,
        'category' => true,
        'notes' => true,
        'tags' => true,
    ];
}
