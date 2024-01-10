<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'record.date' => 'required|string|max:100',
            'record.record' => 'required|string|max:100',
            'record.comment' => 'required|string|max:100',
        ];
    }
}
