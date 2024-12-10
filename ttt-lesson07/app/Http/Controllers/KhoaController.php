<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KhoaController extends Controller
{
    public function index()
{
// Truy vấn đọc dữ liệu từ bảng khoa
$khoa = DB::select('select * from tttkhoa ');
return view('khoa.index',['khoas'=>$khoa]);
}
}
