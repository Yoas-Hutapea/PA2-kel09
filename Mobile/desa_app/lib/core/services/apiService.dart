import 'dart:convert';
import 'dart:io';

import 'package:desa_app/models/userModel.dart';
import 'package:desa_app/models/kegiatanModel.dart';
import 'package:http/http.dart' as http;

class ApiService {
  static final ApiService _apiService = ApiService._init();

  factory ApiService() {
    return _apiService;
  }

  ApiService._init();

  Future<dynamic> loginUser(User user) async {
    final request = await http.post(
      Uri.parse('http://192.168.151.166:8000/api/login'),
      headers: {
        "Content-type": "application/json",
        "Accept": "application/json", // Add Accept header
      },      body: jsonEncode(user.toJson()),
    );

    if (request.statusCode == 200) {
      return jsonDecode(request.body);
    } else {
      throw Exception('Failed to login user');
    }
  }
  Future<dynamic> getKegiatan(Kegiatan kegiatan) async {
    final request = await http.get(
      Uri.parse('http://192.168.151.166:8000/api/kegiatan'),
      headers: {
        "Content-type": "application/json",
        "Accept": "application/json", // Add Accept header
      },
    );

    if (request.statusCode == 200) {
      return jsonDecode(request.body);
    } else {
      print('Response body: ${request.body}');
      throw Exception('Failed to get kegiatan');
    }
  }
}
