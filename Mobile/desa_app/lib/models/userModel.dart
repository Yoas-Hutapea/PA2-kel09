import 'dart:convert';

class User {
  User({this.nik, this.password});
  String? nik;
  String? password;

  factory User.fromJson(Map<String, dynamic> json) => User(
    nik: json["nik"],
    password: json["password"],
  );

  Map<String, dynamic> toJson() => {
    "nik": nik,
    "password": password,
  };
}
