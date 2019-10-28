package com.kodingindonesia.mycrud;

/**
 * Created by muhammadyusuf on 01/19/2017.
 * kodingindonesia
 */

public class konfigurasi {

    //Dibawah ini merupakan Pengalamatan dimana Lokasi Skrip CRUD PHP disimpan
    //Pada tutorial Kali ini, karena kita membuat localhost maka alamatnya tertuju ke IP komputer
    //dimana File PHP tersebut berada
    //PENTING! JANGAN LUPA GANTI IP SESUAI DENGAN IP KOMPUTER DIMANA DATA PHP BERADA
    public static final String URL_ADD="http://192.168.43.43/SIDAK/Android/pegawai/tambahPgw.php";
    public static final String URL_GET_ALL = "http://192.168.43.43/SIDAK/Android/pegawai/tampilSemuaPgw.php";
    public static final String URL_GET_EMP = "http://192.168.43.43/SIDAK/Android/pegawai/tampilPgw.php?id=";
    public static final String URL_UPDATE_EMP = "http://192.168.43.43/SIDAK/Android/pegawai/updatePgw.php";
    public static final String URL_DELETE_EMP = "http://192.168.43.43/SIDAK/Android/pegawai/hapusPgw.php?id=";

    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP

    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_ID = "id";
    public static final String TAG_NAMA = "name";
    public static final String TAG_KTP = "no_ktp";
    public static final String TAG_JK = "jk";
    public static final String TAG_NOPE = "nope";
    public static final String TAG_EMAIL = "email";
    public static final String TAG_REK = "rek";
    public static final String TAG_ADD = "add";

    //ID karyawan
    //emp itu singkatan dari Employee
    public static final String EMP_ID = "emp_id";
}
