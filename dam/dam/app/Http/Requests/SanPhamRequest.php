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
            'ten_san_pham' => 'required|max:100',
            'gia' => 'required|numeric|min:1|max:99999999',
            'so_luong' => 'required|numeric|min:1',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Quy tắc cho hình ảnh
            'id_danh_muc' => 'required|exists:danh_mucs,id' // Ví dụ nếu có danh mục
        ];
    }
    public function messages(): array
    {
        return [
            'ten_san_pham.required' => 'Tên sản phẩm bắt buộc điền',
            'ten_san_pham.max' => 'Tên sản phẩm không được quá 100 ký tự',
            'gia.required' => 'Giá sản phẩm bắt buộc điền',
            'gia.numeric' => 'Giá sản phẩm phải là số',
            'gia.min' => 'Giá sản phẩm không hợp lệ',
            'gia.max' => 'Giá sản phẩm phải nhỏ hơn 99.999.999đ',
            'so_luong.required' => 'Số lượng bắt buộc điền',
            'so_luong.numeric' => 'Số lượng phải là số',
            'so_luong.min' => 'Số lượng không hợp lệ',
        ];
    }
}
