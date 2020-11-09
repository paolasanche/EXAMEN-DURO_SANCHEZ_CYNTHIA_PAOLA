<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class detalle_factura extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //

            'num-detalle' => 'required',
            'numero-factura' => 'required',
            'id_producto' => 'required',
            'cantidad' => 'required'


        ];
    }
}
