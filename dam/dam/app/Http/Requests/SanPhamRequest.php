<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
           'ma_san_pham' => 'required|string|unique:san_phams,ma_san_pham',
            'ten_san_pham' => 'required|string',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gia' => 'required|numeric|min:0',
            'gia_khuyen_mai' => 'nullable|numeric|min:0|lt:gia',
            'mo_ta_ngan' => 'nullable|string',
            'noi_dung' => 'nullable|string',
            'so_luong' => 'required|integer|min:0',
            'ngay_nhap' => 'required|date',
            'danh_muc_id' => 'required|exists:danh_mucs,id', // Hoặc tên bảng danh mục tương ứng
        ];
    }
    public function messages(): array
    {
        return [
            'ma_san_pham.required' => 'Mã sản phẩm là bắt buộc.',
            'ma_san_pham.unique' => 'Mã sản phẩm đã tồn tại.',
            'ten_san_pham.required' => 'Tên sản phẩm là bắt buộc.',
            'hinh_anh.image' => 'Hình ảnh phải là một file hình.',
            'hinh_anh.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'hinh_anh.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'gia.required' => 'Giá là bắt buộc.',
            'gia.numeric' => 'Giá phải là số.',
            'gia.min' => 'Giá không được nhỏ hơn 0.',
            'gia_khuyen_mai.numeric' => 'Giá khuyến mãi phải là số.',
            'gia_khuyen_mai.min' => 'Giá khuyến mãi không được nhỏ hơn 0.',
            'gia_khuyen_mai.lt' => 'Giá khuyến mãi phải nhỏ hơn giá gốc.',
            'so_luong.required' => 'Số lượng là bắt buộc.',
            'so_luong.integer' => 'Số lượng phải là số nguyên.',
            'so_luong.min' => 'Số lượng không được nhỏ hơn 0.',
            'ngay_nhap.required' => 'Ngày nhập là bắt buộc.',
            'ngay_nhap.date' => 'Ngày nhập không hợp lệ.',
            'danh_muc_id.required' => 'Danh mục là bắt buộc.',
            'danh_muc_id.exists' => 'Danh mục không tồn tại.',
        ];
    }
}
