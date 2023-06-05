import 'package:flutter/material.dart';
import 'package:hexcolor/hexcolor.dart';
import 'package:flutter/painting.dart';

import 'pages/splash_screen.dart';

void main() {
  runApp(LoginUiApp());
}

class LoginUiApp extends StatelessWidget {
  Color _primaryColor = HexColor('#DC54FE');
  Color _accentColor = HexColor('#5AD3BC');

  @override
  Widget build(BuildContext context) {
    final ColorScheme colorScheme = ColorScheme.fromSwatch(
      primarySwatch: Colors.grey,
    ).copyWith(
      primary: _primaryColor,
      secondary: _accentColor,
    );

    return MaterialApp(
      title: 'Flutter Login UI',
      theme: ThemeData(
        colorScheme: colorScheme,
        scaffoldBackgroundColor: Colors.grey.shade100,
      ),
      home: SplashScreen(title: 'Go Plan'),
    );
  }
}


