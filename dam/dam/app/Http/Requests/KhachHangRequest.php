<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangRequest extends FormRequest
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
            'name' => 'required|string|max:255', // Tên khách hàng, không vượt quá 255 ký tự
            'email' => 'required|email|unique:users,email', // Email, phải là định dạng email hợp lệ và duy nhất trong bảng 'users'
            'dia_chi' => 'nullable|string|max:255', // Địa chỉ, không bắt buộc và không vượt quá 255 ký tự
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Hình ảnh, không bắt buộc và phải là hình ảnh với kích thước tối đa 2MB
            'password' => 'required|string|min:6', // Mật khẩu, phải có ít nhất 6 ký tự
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên khách hàng là bắt buộc.',
            'name.string' => 'Tên khách hàng phải là chuỗi ký tự.',
            'name.max' => 'Tên khách hàng không được vượt quá 255 ký tự.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải là định dạng email hợp lệ.',
            'email.unique' => 'Email đã được sử dụng.',
            'dia_chi.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'dia_chi.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
            'hinh_anh.image' => 'Tập tin phải là hình ảnh.',
            'hinh_anh.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'hinh_anh.max' => 'Hình ảnh không được vượt quá 2MB.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ];
    }
}
