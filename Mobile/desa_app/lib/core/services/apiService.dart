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

  String? authToken; // Add the authToken property

  Future<dynamic> loginUser(User user) async {
    final request = await http.post(
      Uri.parse('https://afdb-140-213-158-209.ngrok-free.app/api/login'),
      headers: {
        "Content-type": "application/json",
        "Accept": "application/json", // Add Accept header
      },
      body: jsonEncode(user.toJson()),
    );

    if (request.statusCode == 200) {
      final response = jsonDecode(request.body);
      authToken = response['access_token']; // Set the authToken property
      return response;
    } else {
      print('Response body: ${request.body}');
      throw Exception('Failed to login user');
    }
  }

  Future<dynamic> getUser(String nik) async {
    if (authToken == null) {
      throw Exception('Auth token is not set');
    }

    final request = await http.get(
      Uri.parse('https://afdb-140-213-158-209.ngrok-free.app/api/penduduk/$nik'),
      headers: {
        "Content-type": "application/json",
        "Accept": "application/json",
        "Authorization": "Bearer $authToken",
      },
    );

    if (request.statusCode == 200) {
      print('Response body: ${request.body}');
      return jsonDecode(request.body);
    } else {
      throw Exception('Failed to get user data');
    }
  }

  Future<dynamic> getKegiatan(Kegiatan kegiatan) async {
    if (authToken == null) {
      throw Exception('Auth token is not set');
    }

    final request = await http.get(
      Uri.parse('https://afdb-140-213-158-209.ngrok-free.app/api/kegiatan'),
      headers: {
        "Content-type": "application/json",
        "Accept": "application/json",
        "Authorization": "Bearer $authToken", // Include the auth token in the request headers
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
