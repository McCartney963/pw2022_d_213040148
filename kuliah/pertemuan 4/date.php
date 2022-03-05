<?php
    // Date
    // untuk menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-Y");

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    //echo time();
    // mengetahui 100 hari kedepan echo date("d-M-Y", time()+60*60*24*100);
    // mengetahui 100 hari kebelakang echo date("d-M-Y", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo mktime(0,0,0,24,03,2004);
    // echo date("l", mktime(0,0,0,3,24,2004));

    // strtotime
    // echo strtotime("24 maret 2004");
    // echo date ("l", strtotime("24 03 2004"));
?>
© 2022 GitHub, Inc.
Terms
Privacy
Sec