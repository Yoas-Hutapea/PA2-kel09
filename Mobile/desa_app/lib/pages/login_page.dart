import 'package:desa_app/home_page.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:desa_app/common/theme_helper.dart';
import 'package:desa_app/core/services/apiService.dart';
import 'package:desa_app/models/userModel.dart';
import 'package:hexcolor/hexcolor.dart';
import 'package:rflutter_alert/rflutter_alert.dart';
import '../../Core/Animation/Fade_Animation.dart';

class LoginPage extends StatefulWidget {
  const LoginPage({Key? key}) : super(key: key);

  @override
  _LoginPageState createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  double _headerHeight = 250;
  Key _formKey = GlobalKey<FormState>();
  late TextEditingController _nikController;
  late TextEditingController _passwordController;

  @override
  void initState() {
    super.initState();
    _nikController = TextEditingController();
    _passwordController = TextEditingController();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: HexColor('#F7F7F7'),
      body: SingleChildScrollView(
        child: Column(
          children: [
            FadeAnimation(
              delay: 1,
              child: SafeArea(
                child: Container(
                  padding: EdgeInsets.fromLTRB(20, 10, 20, 10),
                  margin: EdgeInsets.fromLTRB(20, 200, 20, 10), // This will be the login form
                  child: Column(
                    children: [
                      Text(
                        'Login',
                        style: TextStyle(
                          fontSize: 60,
                          color: Colors.indigo,
                          fontWeight: FontWeight.bold,
                        ),
                      ),
                      Text(
                        'Silahkan Login dengan Akun anda',
                        style: TextStyle(color: Colors.grey),
                      ),
                      SizedBox(height: 30.0),
                      Form(
                        key: _formKey,
                        child: Column(
                          children: [
                            Container(
                              child: TextField(
                                controller: _nikController,
                                decoration: ThemeHelper().textInputDecoration(
                                  'NIK',
                                  'Masukkan Nik Anda',
                                ),
                              ),
                              decoration:
                              ThemeHelper().inputBoxDecorationShaddow(),
                            ),
                            SizedBox(height: 30.0),
                            Container(
                              child: TextField(
                                controller: _passwordController,
                                obscureText: true,
                                decoration: ThemeHelper().textInputDecoration(
                                  'Password',
                                  'Masukkan Password Anda',
                                ),
                              ),
                              decoration:
                              ThemeHelper().inputBoxDecorationShaddow(),
                            ),
                            SizedBox(height: 15.0),
                            Container(
                              decoration:
                              ThemeHelper().buttonBoxDecoration(context),
                              child: ElevatedButton(
                                style: ThemeHelper().buttonStyle(),
                                child: Padding(
                                  padding:
                                  EdgeInsets.fromLTRB(40, 10, 40, 10),
                                  child: Text(
                                    'Sign In'.toUpperCase(),
                                    style: TextStyle(
                                      fontSize: 20,
                                      fontWeight: FontWeight.bold,
                                      color: Colors.white,
                                    ),
                                  ),
                                ),
                                onPressed: () async {
                                  final nik = _nikController.text;
                                  final password = _passwordController.text;

                                  try {
                                    final response = await ApiService()
                                        .loginUser(User(
                                      nik: nik,
                                      password: password,
                                    ));

                                    if (response['access_token'] != null) {
                                      final accessToken =
                                      response['access_token'];
                                      ApiService().authToken = accessToken;
                                      Navigator.pushReplacement(
                                        context,
                                        MaterialPageRoute(
                                          builder: (context) => MyHomePage(),
                                        ),
                                      );
                                    } else {
                                      Alert(
                                        context: context,
                                        title: response['msg'],
                                      ).show();
                                    }
                                  } catch (e) {
                                    Alert(
                                      context: context,
                                      title: 'Failed to login',
                                    ).show();
                                  }
                                },
                              ),
                            ),
                          ],
                        ),
                      ),
                    ],
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}