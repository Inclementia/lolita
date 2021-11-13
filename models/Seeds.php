<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seeds".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $mass
 * @property string|null $quantity
 * @property string|null $description
 */
class Seeds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seeds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mass', 'quantity'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'mass' => 'Масса',
            'quantity' => 'Количество',
            'description' => 'Описание',
        ];
    }
}
