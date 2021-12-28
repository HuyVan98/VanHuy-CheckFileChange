<?php
function sosanh()
{
    // f1
    $folder_list2 = array();
    $file_vue_thu_muc_cap1 = array();
    $file_vue_thu_muc_cap2 = array();
    $url_path = 'C:\Users\ChuVănHuy(10116199)\Desktop\\f1';
    $path_1 = scandir($url_path);
    foreach ($path_1 as $path_1_item) {
        if ($path_1_item != '..') {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $path_1_item)) {
                if ($path_1_item != '.') {
                    if ($path_1_item != '..') {
                        $folder_list2[] = $path_1_item;
                    }
                }
            }
        }

        if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $path_1_item)) {
            $file_vue_thu_muc_cap1[] = $path_1_item;
        }
    }
    // Ket thuc path 1
    foreach ($folder_list2 as $folder_list_item) {
        $path_2 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item);
        foreach ($path_2 as $path_2_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_2_item)) {
                if ($path_2_item != '.') {
                    if ($path_2_item != '..') {
                        $folder_list3[] = $folder_list_item . '\\' . $path_2_item;
                    }
                }
            }
        }
        foreach ($path_2 as $path_2_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_2_item)) {
                $file_vue_thu_muc_cap2[$folder_list_item][] = $path_2_item;
            }
        }
    }
    // Ket thuc path 2
    foreach ($folder_list3 as $folder_list_item) {
        $path_3 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item);
        foreach ($path_3 as $path_3_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_3_item)) {
                if ($path_3_item != '.') {
                    if ($path_3_item != '..') {
                        $folder_list4[] = $folder_list_item . '\\' . $path_3_item;
                    }
                }
            }
        }
        foreach ($path_3 as $path_3_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_3_item)) {
                $file_vue_thu_muc_cap3[$folder_list_item][] = $path_3_item;
            }
        }
    }
    // Ket thuc path 3
    foreach ($folder_list4 as $folder_list_item) {
        $path_4 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item);
        foreach ($path_4 as $path_4_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_4_item)) {
                if ($path_4_item != '.') {
                    if ($path_4_item != '..') {
                        $folder_list5[] = $folder_list_item . '\\' . $path_4_item;
                    }
                }
            }
        }
        foreach ($path_4 as $path_4_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_4_item)) {
                $file_vue_thu_muc_cap5[$folder_list_item][] = $path_4_item;
            }
        }
    }
    // Ket thuc path 4
    foreach ($folder_list5 as $folder_list_item) {
        $path_5 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item);
        foreach ($path_5 as $path_5_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_5_item)) {
                if ($path_5_item != '.') {
                    if ($path_5_item != '..') {
                        $folder_list6[] = $folder_list_item . '\\' . $path_5_item;
                    }
                }
            }
        }
        foreach ($path_5 as $path_5_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f1\\' . $folder_list_item . '\\' . $path_5_item)) {
                $file_vue_thu_muc_cap6[$folder_list_item][] = $path_5_item;
            }
        }
    }
    // f2
    $folder_list2_f2 = array();
    $file_vue_thu_muc_cap1_f2 = array();
    $file_vue_thu_muc_cap2_f2 = array();
    $url_path = 'C:\Users\ChuVănHuy(10116199)\Desktop\\f2';
    $path_1_f2 = scandir($url_path);
    foreach ($path_1_f2 as $path_1_f2_item) {
        if ($path_1_f2_item != '..') {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $path_1_f2_item)) {
                if ($path_1_f2_item != '.') {
                    if ($path_1_f2_item != '..') {
                        $folder_list2_f2[] = $path_1_f2_item;
                    }
                }
            }
        }

        if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $path_1_f2_item)) {
            $file_vue_thu_muc_cap1_f2[] = $path_1_f2_item;
        }
    }
    // Ket thuc path 1
    foreach ($folder_list2_f2 as $folder_list_item) {
        $path_2_f2 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item);
        foreach ($path_2_f2 as $path_2_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_2_item)) {
                if ($path_2_item != '.') {
                    if ($path_2_item != '..') {
                        $folder_list3_f2[] = $folder_list_item . '\\' . $path_2_item;
                    }
                }
            }
        }
        foreach ($path_2_f2 as $path_2_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_2_item)) {
                $file_vue_thu_muc_cap2_f2[$folder_list_item][] = $path_2_item;
            }
        }
    }
    // Ket thuc path 2
    foreach ($folder_list3_f2 as $folder_list_item) {
        $path_3 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item);
        foreach ($path_3 as $path_3_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_3_item)) {
                if ($path_3_item != '.') {
                    if ($path_3_item != '..') {
                        $folder_list4_f2[] = $folder_list_item . '\\' . $path_3_item;
                    }
                }
            }
        }
        foreach ($path_3 as $path_3_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_3_item)) {
                $file_vue_thu_muc_cap3_f2[$folder_list_item][] = $path_3_item;
            }
        }
    }
    // Ket thuc path 3
    foreach ($folder_list4_f2 as $folder_list_item) {
        $path_4_f2 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item);
        foreach ($path_4_f2 as $path_4_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_4_item)) {
                if ($path_4_item != '.') {
                    if ($path_4_item != '..') {
                        $folder_list5_f2[] = $folder_list_item . '\\' . $path_4_item;
                    }
                }
            }
        }
        foreach ($path_4_f2 as $path_4_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_4_item)) {
                $file_vue_thu_muc_cap5_f2[$folder_list_item][] = $path_4_item;
            }
        }
    }
    // Ket thuc path 4

    foreach ($folder_list5_f2 as $folder_list_item) {
        $path_5_f2 = scandir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item);
        foreach ($path_5_f2 as $path_5_item) {
            if (is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_5_item)) {
                if ($path_5_item != '.') {
                    if ($path_5_item != '..') {
                        $folder_list6_f2[] = $folder_list_item . '\\' . $path_5_item;
                    }
                }
            }
        }
        foreach ($path_5_f2 as $path_5_item) {
            if (!is_dir('C:\Users\ChuVănHuy(10116199)\Desktop\\f2\\' . $folder_list_item . '\\' . $path_5_item)) {
                $file_vue_thu_muc_cap6_f2[$folder_list_item][] = $path_5_item;
            }
        }
    }


    // so sanh 2 folder CAP 2
    foreach ($file_vue_thu_muc_cap2 as $key => $value) {
        foreach ($file_vue_thu_muc_cap2_f2 as $key2 => $value2) {
            if ($key == $key2) {
                $tamp_f1[$key] = array_diff($value, $value2);
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
    // // so sanh 2 folder CAP 5
    foreach ($file_vue_thu_muc_cap6 as $key => $value) {
        foreach ($file_vue_thu_muc_cap6_f2 as $key2 => $value2) {
            if ($key == $key2) {
                $kq_cap5_f1_f2[$key] = array_diff($value, $value2);
                $kq_cap5_f2_f1[$key] = array_diff($value2, $value);
            } else {
                $kq_cap5_f1_f2[$key] = array_diff($value, $value2);
                $kq_cap5_f2_f1[$key] = array_diff($value2, $value);
            }
        }
    }
    // gan key - value CAP 2
    foreach ($tamp_f1 as $key => $value_tamp) {
        if ($value_tamp != null) {
            $kq_file_bi_xoa[$key] = $value_tamp;
        }
    }
    foreach ($tamp_f2 as $key => $value_tamp) {
        if ($value_tamp != null) {
            $file_them_moi[$key] = $value_tamp;
        }
    }

    // gan key - value CAP 3
    foreach ($kq_cap3_f1_f2 as $key => $value_tamp) {
        if ($value_tamp != null) {
            $kq_file_bi_xoa_cap3[$key] = $value_tamp;
        }
    }
    foreach ($kq_cap3_f2_f1 as $key => $value_tamp) {
        if ($value_tamp != null) {
            $file_them_moi_cap3[$key] = $value_tamp;
        }
    }
    // gan key - value CAP 4
    foreach ($kq_cap4_f1_f2 as $key => $value_tamp) {
        if ($value_tamp != null) {
            $kq_file_bi_xoa_cap4[$key] = $value_tamp;
        }
    }
    foreach ($kq_cap4_f2_f1 as $key => $value_tamp) {
        $file_them_moi_cap4[$key] = $value_tamp;
    }
    // gan key - value CAP 5
    foreach ($kq_cap5_f1_f2 as $key => $value_tamp) {
        $kq_file_bi_xoa_cap5[$key] = $value_tamp;
    }
    foreach ($kq_cap5_f2_f1 as $key => $value_tamp) {
        $file_them_moi_cap5[$key] = $value_tamp;
    }
    $data['cay_thu_muc_2'] = 'cay 2';
    $data['file_bi_xoa_2'] = $kq_file_bi_xoa;
    $data['file_them_moi_2'] = $file_them_moi;

    $data['cay_thu_muc_3'] = 'cap3';
    $data['file_bi_xoa_3'] = $kq_file_bi_xoa_cap3;
    $data['file_them_moi_3'] = $file_them_moi_cap3;

    $data['cay_thu_muc_4'] = 'cap4';
    $data['file_bi_xoa_4'] = $kq_file_bi_xoa_cap4;
    $data['file_them_moi_4'] = $file_them_moi_cap4;

    $data['cay_thu_muc_5'] = 'cap5';
    $data['file_bi_xoa_5'] = $kq_file_bi_xoa_cap5;
    $data['file_them_moi_5'] = "UsingVATItem.vue";

    dd($data);
}