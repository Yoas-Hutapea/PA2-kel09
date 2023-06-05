import 'package:flutter/cupertino.dart';
import 'package:flutter/gestures.dart';
import 'package:flutter/material.dart';
import 'package:desa_app/common/theme_helper.dart';
import 'package:desa_app/core/services/apiService.dart';
import 'package:desa_app/models/userModel.dart';
import 'package:rflutter_alert/rflutter_alert.dart';
import 'forgot_password_page.dart';
import 'profile_page.dart';
import 'registration_page.dart';
import 'widgets/header_widget.dart';
import 'package:google_sign_in/google_sign_in.dart';

GoogleSignIn _googleSignIn = GoogleSignIn(
  // Optional clientId
  // clientId: '479882132969-9i9aqik3jfjd7qhci1nqf0bm2g71rm1u.apps.googleusercontent.com',
  scopes: <String>[
    'email',
    'https://www.googleapis.com/auth/contacts.readonly',
  ],
);

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
      backgroundColor: Colors.white,
      body: SingleChildScrollView(
        child: Column(
          children: [
            Container(
              height: _headerHeight,
              child: HeaderWidget(_headerHeight, true, Icons.person),
            ),
            SafeArea(
              child: Container(
                  padding: EdgeInsets.fromLTRB(20, 10, 20, 10),
                  margin: EdgeInsets.fromLTRB(
                      20, 10, 20, 10), // This will be the login form
                  child: Column(
                    children: [
                      Text(
                        'Login',
                        style: TextStyle(
                            fontSize: 60,
                            color: Colors.indigoAccent,
                            fontWeight: FontWeight.bold),
                      ),
                      Text(
                        '',
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
                                      'NIK', 'Masukkan Nik Anda'),
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
                                      'Password', 'Masukkan Password Anda'),
                                ),
                                decoration:
                                    ThemeHelper().inputBoxDecorationShaddow(),
                              ),
                              SizedBox(height: 15.0),
                              Container(
                                margin: EdgeInsets.fromLTRB(10, 0, 10, 20),
                                alignment: Alignment.topRight,
                                child: GestureDetector(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(
                                          builder: (context) =>
                                              ForgotPasswordPage()),
                                    );
                                  },
                                  child: Text(
                                    "Forgot your password?",
                                    style: TextStyle(
                                      color: Colors.lightBlue,
                                    ),
                                  ),
                                ),
                              ),
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
                                          color: Colors.white),
                                    ),
                                  ),
                                  onPressed: () async {
                                    final nik = _nikController.text;
                                    final password = _passwordController.text;

                                    try {
                                      final response = await ApiService().loginUser(User(nik: nik, password: password));

                                      if (response['access_token'] != null) {
                                        Navigator.pushReplacement(
                                          context,
                                          MaterialPageRoute(builder: (context) => ProfilePage()),
                                        );
                                      } else {
                                        Alert(context: context, title: response['msg']).show();
                                      }
                                    } catch (e) {
                                      Alert(context: context, title: 'Failed to login').show();
                                    }
                                  },
                                ),
                              ),
                              Container(
                                margin: EdgeInsets.fromLTRB(10, 20, 10, 20),
                                //child: Text('Don\'t have an account? Create'),
                                child: Text.rich(TextSpan(children: [
                                  TextSpan(text: "Don\'t have an account? "),
                                  TextSpan(
                                    text: 'signup',
                                    recognizer: TapGestureRecognizer()
                                      ..onTap = () {
                                        Navigator.push(
                                            context,
                                            MaterialPageRoute(
                                                builder: (context) =>
                                                    RegistrationPage()));
                                      },
                                    style: TextStyle(
                                        fontWeight: FontWeight.bold,
                                        color: Theme.of(context).colorScheme.secondary),
                                  ),
                                ])),
                              ),
                            ],
                          )),
                    ],
                  )),
            ),
          ],
        ),
      ),
    );
  }
}
