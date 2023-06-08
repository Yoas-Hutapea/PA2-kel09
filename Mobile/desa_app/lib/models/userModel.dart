import 'dart:convert';

class User {
  User
      ({
        this.nama,
        this.nik,
        this.no_telp,
        this.tempat_lahir,
        this.tanggal_lahir,
        this.usia,
        this.jenis_kelamin,
        this.pekerjaan,
        this.agama,
        this.kk,
        this.alamat,
        this.gambar,
        this.password
      });

  String? nama;
  String? nik;
  String? no_telp;
  String? tempat_lahir;
  String? tanggal_lahir;
  String? usia;
  String? jenis_kelamin;
  String? pekerjaan;
  String? agama;
  String? kk;
  String? alamat;
  String? gambar;
  String? password;

  factory User.fromJson(Map<String, dynamic> json) => User(
    nik: json["nik"],
    password: json["password"],
    nik: json["nik"],
    password: json["password"],
    nik: json["nik"],
    password: json["password"],
    nik: json["nik"],
    password: json["password"],
    nik: json["nik"],
    password: json["password"],
    nik: json["nik"],
    password: json["password"],
  );

  Map<String, dynamic> toJson() => {
    "nik": nik,
    "password": password,
  };
}
