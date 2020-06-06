<?php

use Illuminate\Database\Seeder;

class categoryJob extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 'atld', 'name' => 'An toàn lao động'],
            ['id' => 'bhkt', 'name' => 'Bán hàng kỹ thuật'],
            ['id' => 'blbs', 'name' => 'Bán lẻ / bán sỉ'],
            ['id' => 'bcth', 'name' => 'Báo chí / truyền hình'],
            ['id' => 'bh', 'name' => 'Bảo hiểm'],
            ['id' => 'btsc', 'name' => 'Bảo trì / sửa chửa'],
            ['id' => 'bds', 'name' => 'Bất động sản'],

            ['id' => 'pbd', 'name' => 'Phiên biên dịch'],
            ['id' => 'bcvt', 'name' => 'Bưu chính viễn thông'],
            ['id' => 'ckvnt', 'name' => 'Chứng khoán / vàng / ngoại tệ'],
            ['id' => 'ckcttdh', 'name' => 'Cơ khí / chế tạo / tự động hóa'],
            ['id' => 'cnc', 'name' => 'Công nghệ cao'],
            ['id' => 'cnot', 'name' => 'Công nghệ ô tô'],
            ['id' => 'dkhc', 'name' => 'Dầu khí hóa chất'],

            ['id' => 'dmdg', 'name' => 'Dệt may / Da giày'],
            ['id' => 'dcks', 'name' => 'Đại chất khoán sản'],
            ['id' => 'dvkh', 'name' => 'Dịch vụ khách hàng'],
            ['id' => 'ddtdl', 'name' => 'Điện / điện tử / điện lạnh'],
            ['id' => 'dtvt', 'name' => 'Điện tử viễn thông'],
            ['id' => 'dl', 'name' => 'Du lịch'],
            ['id' => 'dpcnsh', 'name' => 'Dược phẩm / công nghệ sin học'],

            ['id' => 'gddt', 'name' => 'Giáo dục / đào tạo'],
            ['id' => 'hcc', 'name' => 'Hàng cao cấp'],
            ['id' => 'hgd', 'name' => 'Hàng gia dụng'],
            ['id' => 'hh', 'name' => 'Hàng hải'],
            ['id' => 'hk', 'name' => 'Hàng không'],
            ['id' => 'htd', 'name' => 'Hàng tiêu dùng'],
            ['id' => 'hcvp', 'name' => 'Hành chính / văn phòng'],

            ['id' => 'hhsh', 'name' => 'Hóa học / sinh học'],
            ['id' => 'hdda', 'name' => 'Hoạch định / dự án'],
            ['id' => 'iaxb', 'name' => 'In ấn / xuất bản'],
            ['id' => 'itpcm', 'name' => 'IT phần cứng / mạng'],
            ['id' => 'ippm', 'name' => 'IT phần mềm'],
            ['id' => 'ktkt', 'name' => 'Kế toán / kiểm toán'],
            ['id' => 'ksnh', 'name' => 'Khách sạn / nhà hàng'],

            ['id' => 'kt', 'name' => 'Kiến trúc'],
            ['id' => 'kdbh', 'name' => 'Kinh doanh / bán hàng'],
            ['id' => 'logis', 'name' => 'Logistics'],
            ['id' => 'lpl', 'name' => 'Luật / pháp lý'],
            ['id' => 'mttqc', 'name' => 'Marketing / truyền thông / quảng cáo'],
            ['id' => 'mtxlct', 'name' => 'Môi trường / xử lý chất thải'],
            ['id' => 'mptx', 'name' => 'Mỹ phẩm / trang sức'],

            ['id' => 'mtntda', 'name' => 'Mỹ thuật / nghệ thuật / điện ảnh'],
            ['id' => 'nhtc', 'name' => 'Ngân hàng tài chính'],
            ['id' => 'nnk', 'name' => 'Ngành nghề khác'],
            ['id' => 'ns', 'name' => 'Nhân sự'],
            ['id' => 'nlnn', 'name' => 'Nông / lâm / ngư nghiệp'],
            ['id' => 'pcppln', 'name' => 'Phi chính phủ / phi lợi nhuận'],
            ['id' => 'qlcl', 'name' => 'Quảng lý chất lượng'],

            ['id' => 'qldh', 'name' => 'Quản lý điều hành'],
            ['id' => 'spcn', 'name' => 'Sản phẩm công nghiệp'],
            ['id' => 'sx', 'name' => 'Sản xuất'],
            ['id' => 'tcdt', 'name' => 'Tài chính / đầu tư'],
            ['id' => 'tkdh', 'name' => 'Thiết kế đồ họa'],
            ['id' => 'tv', 'name' => 'Tư vấn'],
            ['id' => 'vtkv', 'name' => 'Vận tải / kho vận'],

            ['id' => 'xd', 'name' => 'Xây dựng'],
            ['id' => 'xnk', 'name' => 'Xuất nhập khẩu'],
            ['id' => 'ytd', 'name' => 'Y tế / dược'],
        ];
        DB::table('jobcategories')->insert($data);
    }
}
