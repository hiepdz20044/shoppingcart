<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'hinh_anh' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'email' => ['required', 'email', 'unique:users,email'],
            'dia_chi' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // Thêm quy tắc xác thực cho password
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên là bắt buộc.',
            'hinh_anh.image' => 'Hình ảnh phải là một tệp hình ảnh.',
            'hinh_anh.mimes' => 'Hình ảnh phải có định dạng: jpg, jpeg, png.',
            'hinh_anh.max' => 'Hình ảnh không được lớn hơn 2MB.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã được sử dụng.',
            'dia_chi.required' => 'Địa chỉ là bắt buộc.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ];
    }
}
