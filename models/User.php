<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER".
 *
 * @property integer $ID
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $CREATED_DATE
 * @property integer $ROLE
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'USER';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'ROLE'], 'integer'],
            [['CREATED_DATE'], 'safe'],
            [['USERNAME', 'PASSWORD'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'USERNAME' => 'Username',
            'PASSWORD' => 'Password',
            'CREATED_DATE' => 'Created  Date',
            'ROLE' => 'Role',
        ];
    }
}
