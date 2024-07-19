<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
            'dia_chi' => ['nullable', 'string', 'max:255'],
            'hinh_anh' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Họ và tên là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã được sử dụng.',
            'dia_chi.string' => 'Địa chỉ phải là một chuỗi ký tự.',
            'dia_chi.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
            'hinh_anh.image' => 'Tệp ảnh không hợp lệ.',
            'hinh_anh.mimes' => 'Chỉ chấp nhận các định dạng ảnh: jpeg, png, jpg, gif.',
            'hinh_anh.max' => 'Ảnh phải nhỏ hơn 2MB.'
        ];
    }
}
