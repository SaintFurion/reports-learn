<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "template".
 *
 * @property int $id
 * @property string $name
 * @property string $deadline
 */
class Template extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'deadline'], 'required'],
            [['deadline'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'deadline' => 'Deadline',
        ];
    }
}
