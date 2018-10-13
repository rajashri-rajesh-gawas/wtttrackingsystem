<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbladmin".
 *
 * @property integer $admin_id
 * @property string $email
 * @property string $password
 * @property string $contact_no
 */
class Tbladmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbladmin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'contact_no'], 'required'],
            [['email'], 'string', 'max' => 100],
            [['email'],'email'],
            [['email'],'unique'],
            [['password'], 'string', 'max' => 50],
            [['contact_no'], 'string', 'max' => 15],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'email' => 'Email',
            'password' => 'Password',
            'contact_no' => 'Contact No',
        ];
    }
}
