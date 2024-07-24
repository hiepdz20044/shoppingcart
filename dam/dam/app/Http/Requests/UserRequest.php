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
            'name' => 'required|string|max:255', // Tên khách hàng, không vượt quá 255 ký tự
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],// Email, phải là định dạng email hợp lệ và duy nhất trong bảng 'users', ngoại trừ người dùng hiện tại
            'dia_chi' => 'nullable|string|max:255', // Địa chỉ, không bắt buộc và không vượt quá 255 ký tự
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Hình ảnh, không bắt buộc và phải là hình ảnh với kích thước tối đa 2MB
            'password' => 'nullable|string|min:6', // Mật khẩu, không bắt buộc nhưng phải có ít nhất 6 ký tự nếu có
            'ngay_sinh' => 'required|date', // Ngày sinh, phải là định dạng ngày hợp lệ
            'so_dien_thoai' => 'required|string|max:15', // Số điện thoại, không vượt quá 15 ký tự
            'gioi_tinh' => 'required|in:Nam,Nữ', // Giới tính, phải là 'Nam' hoặc 'Nữ'
        ];
    }
    public function messages()
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
            'ngay_sinh.required' => 'Ngày sinh là bắt buộc.',
            'ngay_sinh.date' => 'Ngày sinh phải là định dạng ngày hợp lệ.',
            'so_dien_thoai.required' => 'Số điện thoại là bắt buộc.',
            'so_dien_thoai.string' => 'Số điện thoại phải là chuỗi ký tự.',
            'so_dien_thoai.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
            'gioi_tinh.required' => 'Giới tính là bắt buộc.',
            'gioi_tinh.in' => 'Giới tính phải là Nam hoặc Nữ.',
        ];
    }
}
