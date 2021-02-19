<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Validation\Rule;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'protocol';
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'finish_education',
        'discharge',
        'certificates',
        'evidence',
        'protocol'
    ];

    public static function rules()
    {
        return [
            'name' => "required",
            'surname' => 'required',
            'patronymic' => 'required',
            'finish_education' => 'required',
            'discharge' => 'required',
            'certificates' => 'required',
            'evidence' => 'required',
            'protocol' => 'required',
        ];
    }

    public static function attributesName() {

        return [
            'name' => "Имя",
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'finish_education' => 'Дата окончания обучения',
            'discharge' => 'Разряд',
            'certificates' => 'Сертификат',
            'evidence' => 'Свидетельство',
            'protocol' => 'Протокол',
        ];
    }
}
