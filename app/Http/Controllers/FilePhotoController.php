<?php

namespace App\Http\Controllers;

use DirectoryIterator;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Str;
use ImageOptimizer;
use Illuminate\Support\Facades\Storage;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveTreeIterator;

class FilePhotoController extends Controller
{
    public function index()
    {
        return view('home-coconut');
    }
    public function sosanh()
    {
        $link = "images";

        $array_file = array();
        $url1 = "C:\Users\ChuVănHuy(10116199)\Desktop\Du an Vitettel\Nen anh\New folder\\";
        $files = glob($url1 . '\\' . $link . '\\*.{jpg,png,gif}', GLOB_BRACE);
        // $files = glob($url1 . '\trendy\*.{jpg,png,gif}', GLOB_BRACE);
        foreach ($files as $file) {
            $data = getimagesize($file);
            $width = $data[0];
            $height = $data[1];
            $length = $file . '-' . $width . '-' . $height;
            $tampp = Str::after($length, $url1 . '\\' . $link . '\\');
            // $tampp = Str::after($length, $url1 . '\trendy\\');
            $array_file[] = $tampp;
        }
        $array_file_edit = array();
        $url2 = "C:\Users\ChuVănHuy(10116199)\Desktop\Du an Vitettel\Nen anh\img viettel_v1\\";
        $files_edit = glob($url2 . '\\' . $link . '\\*.{jpg,png,gif}', GLOB_BRACE);
        // $files_edit = glob($url2 . 'trendy\*.{jpg,png,gif}', GLOB_BRACE);
        foreach ($files_edit as $file) {
            $data = getimagesize($file);
            $width = $data[0];
            $height = $data[1];
            $length = $file . '-' . $width . '-' . $height;
            $tampp = Str::after($length, $url2 . '\\' . $link . '\\');
            // $tampp = Str::after($length, $url2 . 'trendy\\');
            $array_file_edit[] = $tampp;
        }
        // dd(array_diff($array_file, $array_file_edit));
        // dd(array_diff($array_file_edit, $array_file));
        // dd($array_file_edit);



        // $filePath1 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\img viettel\images_content');
        // $array_check1 = array();
        // foreach ($filePath1 as $file) {
        //     $array_check1[] = $file;
        // }
        // $filePath2 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\New folder (2)\images_content');
        // $array_check2 = array();
        // foreach ($filePath2 as $file) {
        //     $array_check2[] = $file;
        // }
        // dd(array_diff($array_check1, $array_check2));
    }
    public function imgResize(Request $request)
    {

        $image = $request->file('imgFile');
        // dd($image);
        $name = Str::before($image->getClientOriginalName(), '.');
        $height = Image::make($image)->height();
        $width = Image::make($image)->width();
        $input['imagename'] = $name . '.' . $image->extension();
        $filePath = public_path('\thumbnails');
        $img = Image::make($image->path());
        $img->resize($width, $height, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '\\' . $input['imagename']);
        $filePath = public_path('\images');
        $image->move($filePath, $input['imagename']);
        $optime = ImageOptimizer::optimize('C:\Users\ChuVănHuy(10116199)\Desktop\img viettel\images_content\pexels-photo-583842.jpg');
        // dd($optime);
        return back()->with('success', 'Image uploaded')->with('fileName', $input['imagename']);
    }
    public function sosanh_filevue()
    {
        // sosanh2();
        // sosanh_anh();
        // f1
        $folder_list2 = array();
        $file_vue_thu_muc_cap1 = array();
        $file_vue_thu_muc_cap2 = array();
        $size_kb_f1_path2 = '';
        $url_path = 'C:\Users\ChuVănHuy(10116199)\Desktop\Du an Vitettel\Nén ảnh\img vietel goc\\';
        $path_1 = scandir($url_path);
        foreach ($path_1 as $path_1_item) {
            if ($path_1_item != '..') {
                if (is_dir($url_path . $path_1_item)) {
                    if ($path_1_item != '.') {
                        if ($path_1_item != '..') {
                            $folder_list2[] = $path_1_item;
                        }
                    }
                }
            }

            if (!is_dir($url_path . $path_1_item)) {
                $file_vue_thu_muc_cap1[] = $path_1_item;
            }
        }
        // Ket thuc path 1
        foreach ($folder_list2 as $folder_list_item) {
            $path_2 = scandir($url_path . $folder_list_item);
            foreach ($path_2 as $path_2_item) {
                if (is_dir($url_path . $folder_list_item . '\\' . $path_2_item)) {
                    if ($path_2_item != '.') {
                        if ($path_2_item != '..') {
                            $folder_list3[] = $folder_list_item . '\\' . $path_2_item;
                        }
                    }
                }
            }
            foreach ($path_2 as $path_2_item) {

                if (!is_dir($url_path . $folder_list_item . '\\' . $path_2_item)) {
                    $size_byte = filesize($url_path . $folder_list_item . '\\' . $path_2_item);
                    $size_kb_f1_path2 = round($size_byte / 1024, 4) . 'KB';
                    list($width, $height, $type) = getimagesize($url_path . $folder_list_item . '\\' . $path_2_item);
                    $file_vue_thu_muc_cap2[$folder_list_item][] = $folder_list_item . '\\' . $path_2_item . ' - Size: ' . $size_kb_f1_path2 . ' - WidthHeight: ' . $width . ' x ' . $height;
                    $data_file_f1[] = $path_2_item;
                }
            }
        }
        // Ket thuc path 2
        foreach ($folder_list3 as $folder_list_item) {
            $path_3 = scandir($url_path . $folder_list_item);
            foreach ($path_3 as $path_3_item) {
                if (is_dir($url_path . $folder_list_item . '\\' . $path_3_item)) {
                    if ($path_3_item != '.') {
                        if ($path_3_item != '..') {
                            $folder_list4[] = $folder_list_item . '\\' . $path_3_item;
                        }
                    }
                }
            }
            foreach ($path_3 as $path_3_item) {
                if (!is_dir($url_path . $folder_list_item . '\\' . $path_3_item)) {
                    $size_byte = filesize($url_path . $folder_list_item . '\\' . $path_3_item);
                    $size_kb = round($size_byte / 1024, 4) . 'KB';
                    list($width, $height, $type) = getimagesize($url_path . $folder_list_item . '\\' . $path_3_item);

                    $file_vue_thu_muc_cap3[$folder_list_item][] = $folder_list_item . '\\' .
                        $path_3_item . ' - Size: ' . $size_kb . ' - WidthHeight: ' . $width . ' x ' . $height;
                    $data_file_f1[] = $path_3_item;
                }
            }
        }
        // Ket thuc path 3
        foreach ($folder_list4 as $folder_list_item) {
            $path_4 = scandir($url_path . $folder_list_item);
            foreach ($path_4 as $path_4_item) {
                if (is_dir($url_path . $folder_list_item . '\\' . $path_4_item)) {
                    if ($path_4_item != '.') {
                        if ($path_4_item != '..') {
                            $folder_list5[] = $folder_list_item . '\\' . $path_4_item;
                        }
                    }
                }
            }
            foreach ($path_4 as $path_4_item) {
                if (!is_dir($url_path . $folder_list_item . '\\' . $path_4_item)) {
                    $size_byte = filesize($url_path . $folder_list_item . '\\' . $path_4_item);
                    $size_kb = round($size_byte / 1024, 4) . 'KB';
                    list($width, $height, $type) = getimagesize($url_path . $folder_list_item . '\\' . $path_4_item);
                    $file_vue_thu_muc_cap5[$folder_list_item][] = $folder_list_item . '\\' .
                        $path_4_item . ' - Size: ' . $size_kb . '- WidthHeight: ' . $width . ' x ' . $height;
                    $data_file_f1[] = $path_4_item;
                }
            }
        }
        // dd($file_vue_thu_muc_cap5);
        // f2
        $folder_list2_f2 = array();
        $file_vue_thu_muc_cap1_f2 = array();
        $file_vue_thu_muc_cap2_f2 = array();
        $url_path2 = 'C:\Users\ChuVănHuy(10116199)\Desktop\Du an Vitettel\Nén ảnh\img viettel_v2\\';
        $path_1_f2 = scandir($url_path2);
        foreach ($path_1_f2 as $path_1_f2_item) {
            if ($path_1_f2_item != '..') {
                if (is_dir($url_path2 . $path_1_f2_item)) {
                    if ($path_1_f2_item != '.') {
                        if ($path_1_f2_item != '..') {
                            $folder_list2_f2[] = $path_1_f2_item;
                        }
                    }
                }
            }

            if (!is_dir($url_path2 . $path_1_f2_item)) {
                $file_vue_thu_muc_cap1_f2[] = $path_1_f2_item;
            }
        }

        // Ket thuc path 1
        foreach ($folder_list2_f2 as $folder_list_item) {
            $path_2_f2 = scandir($url_path2 . $folder_list_item);
            foreach ($path_2_f2 as $path_2_item) {
                if (is_dir($url_path2 . $folder_list_item . '\\' . $path_2_item)) {
                    if ($path_2_item != '.') {
                        if ($path_2_item != '..') {
                            $folder_list3_f2[] = $folder_list_item . '\\' . $path_2_item;
                        }
                    }
                }
            }
            foreach ($path_2_f2 as $path_2_item) {
                if (!is_dir($url_path2 . $folder_list_item . '\\' . $path_2_item)) {
                    $size_byte = filesize($url_path2 . $folder_list_item . '\\' . $path_2_item);
                    $size_kb = round($size_byte / 1024, 4) . 'KB';
                    list($width, $height, $type) = getimagesize($url_path2 . $folder_list_item . '\\' . $path_2_item);
                    $file_vue_thu_muc_cap2_f2[$folder_list_item][] = $folder_list_item . '\\' .
                        $path_2_item . ' - Size: ' . $size_kb . '- WidthHeight: ' . $width . ' x ' . $height;
                    $data_file_f2[] = $path_2_item;
                }
            }
        }
        // Ket thuc path 2
        foreach ($folder_list3_f2 as $folder_list_item) {
            $path_3 = scandir($url_path2 . $folder_list_item);
            foreach ($path_3 as $path_3_item) {
                if (is_dir($url_path2 . $folder_list_item . '\\' . $path_3_item)) {
                    if ($path_3_item != '.') {
                        if ($path_3_item != '..') {
                            $folder_list4_f2[] = $folder_list_item . '\\' . $path_3_item;
                        }
                    }
                }
            }
            foreach ($path_3 as $path_3_item) {
                if (!is_dir($url_path2 . $folder_list_item . '\\' . $path_3_item)) {
                    $size_byte = filesize($url_path2 . $folder_list_item . '\\' . $path_3_item);
                    $size_kb = round($size_byte / 1024, 4) . 'KB';
                    list($width, $height, $type) = getimagesize($url_path2 . $folder_list_item . '\\' . $path_3_item);
                    $file_vue_thu_muc_cap3_f2[$folder_list_item][] = $folder_list_item . '\\' . $path_3_item
                        . ' - Size: ' . $size_kb . '- WidthHeight: ' . $width . ' x ' . $height;
                    $data_file_f2[] = $path_3_item;
                }
            }
        }
        // Ket thuc path 3
        foreach ($folder_list4_f2 as $folder_list_item) {
            $path_4_f2 = scandir($url_path2 . $folder_list_item);
            foreach ($path_4_f2 as $path_4_item) {
                if (is_dir($url_path2 . $folder_list_item . '\\' . $path_4_item)) {
                    if ($path_4_item != '.') {
                        if ($path_4_item != '..') {
                            $folder_list5_f2[] = $folder_list_item . '\\' . $path_4_item;
                        }
                    }
                }
            }
            foreach ($path_4_f2 as $path_4_item) {
                if (!is_dir($url_path2 . $folder_list_item . '\\' . $path_4_item)) {

                    $size_byte = filesize($url_path2 . $folder_list_item . '\\' . $path_4_item);
                    $size_kb = round($size_byte / 1024, 4) . 'KB';
                    list($width, $height, $type) = getimagesize($url_path2 . $folder_list_item . '\\' . $path_4_item);
                    $file_vue_thu_muc_cap5_f2[$folder_list_item][] = $folder_list_item . '\\' . $path_4_item
                        . ' - Size: ' . $size_kb . '- WidthHeight: ' . $width . ' x ' . $height;
                    $data_file_f2[] = $path_4_item;
                }
            }
        }
        // dd($file_vue_thu_muc_cap5_f2);
        $data_json['file_da_xoa'] = array_diff($data_file_f1, $data_file_f2);
        $data_json['file_da_them'] = array_diff($data_file_f2, $data_file_f1);
        $data_total = json_encode($data_json);
        $bytes = file_put_contents("C:\Users\ChuVănHuy(10116199)\Desktop\data.json", $data_total); //generate json file
        // $data_total = json_encode($file_da_them);
        echo $data_total;
        // so sanh 2 folder CAP 2
        // dd($file_vue_thu_muc_cap2);
        // dd($file_vue_thu_muc_cap2_f2);

        foreach ($file_vue_thu_muc_cap2 as $key => $value) {
            foreach ($file_vue_thu_muc_cap2_f2 as $key2 => $value2) {
                if ($key == $key2) {
                    $tamp_f1[$key] = array_diff($value, $value2); // thu muc f1 == f2 roi nen null
                    $tamp_f2[$key] = array_diff($value2, $value);
                }
            }
        }
        // so sanh 2 folder CAP 3
        foreach ($file_vue_thu_muc_cap3 as $key => $value) {
            foreach ($file_vue_thu_muc_cap3_f2 as $key2 => $value2) {
                if ($key == $key2) {
                    $kq_cap3_f1_f2[$key] = array_diff($value, $value2);
                    $kq_cap3_f2_f1[$key] = array_diff($value2, $value);
                }
            }
        }
        // so sanh 2 folder CAP 4
        foreach ($file_vue_thu_muc_cap5 as $key => $value) {
            foreach ($file_vue_thu_muc_cap5_f2 as $key2 => $value2) {
                if ($key == $key2) {
                    $kq_cap4_f1_f2[$key] = array_diff($value, $value2);
                    $kq_cap4_f2_f1[$key] = array_diff($value2, $value);
                }
            }
        }
        // gan key - value CAP 2

        foreach ($tamp_f1 as $key => $value_tamp) {
            if ($value_tamp != null) {

                $kq_file_bi_xoa[$key] = $value_tamp;
            } else {
                $kq_file_bi_xoa[$key] = null;
            }
        }
        foreach ($tamp_f2 as $key => $value_tamp) {
            if ($value_tamp != null) {
                $file_them_moi[$key] = $value_tamp;
            }
        }





        // foreach ($kq_file_bi_xoa as $key => $value) {
        //     foreach ($value as $key => $value_arr) {
        //         $slice = Str::between($value_arr, '* ', '*');
        //         foreach ($file_them_moi as $key_1 => $file_them_moi_arr) {
        //             foreach ($file_them_moi_arr as $key => $file_them_moi_item) {
        //                 $data_array[] = $file_them_moi_item . ' --- old size: ' . $slice;
        //             }
        //         }
        //     }
        // }
        // dd($kq_file_bi_xoa);





        // gan key - value CAP 3
        foreach ($kq_cap3_f1_f2 as $key => $value_tamp) {
            if ($value_tamp != null) {
                $kq_file_bi_xoa_cap3[$key] = $value_tamp;
            } else {
                $kq_file_bi_xoa_cap3[$key] = null;
            }
        }
        foreach ($kq_cap3_f2_f1 as $key => $value_tamp) {
            if ($value_tamp != null) {
                $file_them_moi_cap3[$key] = $value_tamp;
            } else {
                $file_them_moi_cap3[$key] = null;
            }
        }
        // gan key - value CAP 4
        foreach ($kq_cap4_f1_f2 as $key => $value_tamp) {
            if ($value_tamp != null) {
                $kq_file_bi_xoa_cap4[$key] = $value_tamp;
            } else {
                $kq_file_bi_xoa_cap4[$key] = null;
            }
        }
        foreach ($kq_cap4_f2_f1 as $key => $value_tamp) {
            if ($value_tamp != null) {
                $file_them_moi_cap4[$key] = $value_tamp;
            } else {
                $file_them_moi_cap4[$key] = null;
            }
        }
        // dd($file_them_moi_cap4);
        $data['cay_thu_muc_2'] = 'cay 2';
        $data['file_truoc_khi_toi_uu_2'] = $kq_file_bi_xoa;
        $data['file_sau_khi_toi_uu_2'] = $file_them_moi;

        $data['cay_thu_muc_3'] = 'cap3';
        $data['file_truoc_khi_toi_uu_3'] = $kq_file_bi_xoa_cap3;
        $data['file_sau_khi_toi_uu_3'] = $file_them_moi_cap3;

        $data['cay_thu_muc_4'] = 'cap4';
        $data['file_truoc_khi_toi_uu_4'] = $kq_file_bi_xoa_cap4;
        $data['file_sau_khi_toi_uu_4'] = $file_them_moi_cap4;

        // $data['cay_thu_muc_5'] = 'cap5';
        // $data['file_bi_xoa_5'] = $kq_file_bi_xoa_cap5;
        // $data['file_them_moi_5'] = "UsingVATItem.vue";

        $data_truoctoiuu['cay_thu_muc_2'] = 'cay 2';
        $data_truoctoiuu['file_truoc_khi_toi_uu_2'] = $kq_file_bi_xoa;
        $data_truoctoiuu['cay_thu_muc_3'] = 'cap3';
        $data_truoctoiuu['file_truoc_khi_toi_uu_3'] = $kq_file_bi_xoa_cap3;
        $data_truoctoiuu['cay_thu_muc_4'] = 'cap4';
        $data_truoctoiuu['file_truoc_khi_toi_uu_4'] = $kq_file_bi_xoa_cap4;

        $data_sautoiuu['cay_thu_muc_2'] = 'cay 2';
        $data_sautoiuu['file_sau_khi_toi_uu_2'] = $file_them_moi;
        $data_sautoiuu['cay_thu_muc_3'] = 'cap3';
        $data_sautoiuu['file_sau_khi_toi_uu_3'] = $kq_file_bi_xoa_cap3;
        $data_sautoiuu['cay_thu_muc_4'] = 'cap4';
        $data_sautoiuu['file_sau_khi_toi_uu_4'] = $file_them_moi_cap4;


        $truoctoiuu1 = json_encode($data_truoctoiuu);
        $sautoiuu1 = json_encode($data_sautoiuu);
        $truoctoiuu = file_put_contents("C:\Users\ChuVănHuy(10116199)\Desktop\data1.json", $truoctoiuu1);
        $sautoiuu = file_put_contents("C:\Users\ChuVănHuy(10116199)\Desktop\data2.json", $sautoiuu1);
        echo ($truoctoiuu1);
        // dd($sautoiuu1);
        // dd($data);
    }
}