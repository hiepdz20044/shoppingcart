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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:khachhangs,email,' . $this->route('khachhang'),
            'dia_chi' => 'nullable|string|max:255',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|string|min:8',
            'ngay_sinh' => 'nullable|date',
            'so_dien_thoai' => 'nullable|string|max:15',
            'gioi_tinh' => 'required|in:Nam,Nữ',
            'trang_thai' => 'required|boolean',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên khách hàng là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email này đã được sử dụng.',
            'hinh_anh.image' => 'File phải là một hình ảnh.',
            'hinh_anh.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif, svg.',
            'hinh_anh.max' => 'Hình ảnh không được lớn hơn 2MB.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'gioi_tinh.required' => 'Giới tính là bắt buộc.',
            'gioi_tinh.in' => 'Giới tính không hợp lệ.',
            'trang_thai.required' => 'Trạng thái là bắt buộc.',
            'trang_thai.boolean' => 'Trạng thái không hợp lệ.',
        ];
    }
}
