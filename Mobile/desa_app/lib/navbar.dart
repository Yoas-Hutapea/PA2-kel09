import 'package:desa_app/pages/home/home.dart';
import 'package:desa_app/pages/Profile/settings_editprofile.dart';
import 'package:desa_app/pages/informasi/information_list.dart';
import 'package:draggable_customized_btn_navy_bar/draggable_customized_btn_navy_bar.dart';
import 'package:flutter/material.dart';
import 'package:get/get.dart';

import 'dart:math';

import 'package:hexcolor/hexcolor.dart';

class NavbarPage extends StatefulWidget {
  final String authenticatedUserName;
  final dynamic authenticatedUser;

  const NavbarPage({required this.authenticatedUserName, required this.authenticatedUser});

  @override
  NavbarPageState createState() => NavbarPageState();
}

class NavbarPageState extends State<NavbarPage>  {
  String _itemSelected = 'item-1';
  bool _enableAnimation = true;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        bottom: false,
        child: Stack(
          children: <Widget>[
            AnimatedSwitcher(
              duration: const Duration(milliseconds: 700),
              switchOutCurve: const Interval(0.0, 0.0),
              transitionBuilder: (Widget child, Animation<double> animation) {
                final revealAnimation = Tween(begin: 0.0, end: 1.0).animate(
                    CurvedAnimation(parent: animation, curve: Curves.ease));
                return AnimatedBuilder(
                  builder: (BuildContext context, Widget? _) {
                    return _buildAnimation(
                        context, _itemSelected, child, revealAnimation.value);
                  },
                  animation: animation,
                );
              },
              child: _buildPage(_itemSelected),
            ),
            DraggableCustomizedBtnNavyBar(
              width: (MediaQuery.of(context).size.width > 600) ? 500.0 : null,
              keyItemSelected: _itemSelected,
              doneText: 'Done',
              settingTitleText: 'Your Menu',
              settingSubTitleText: 'Drag and drop',
              hiddenItems: <DraggableCustomizedDotBarItem>[
                DraggableCustomizedDotBarItem('item-6',
                    icon: Icons.message,
                    name: 'Saran',
                    onTap: (itemSelected) => _changePage(itemSelected)),
                DraggableCustomizedDotBarItem('item-7',
                    icon: Icons.notifications_active,
                    name: 'Pengumuman',
                    onTap: (itemSelected) => _changePage(itemSelected)),
                ],
              items: <DraggableCustomizedDotBarItem>[
                DraggableCustomizedDotBarItem('item-1',
                    icon: Icons.home,
                    name: 'Beranda',
                    onTap: (itemSelected) => _changePage(itemSelected)),
                DraggableCustomizedDotBarItem('item-2',
                    icon: Icons.calendar_month_outlined,
                    name: 'Kegiatan',
                    onTap: (itemSelected) => _changePage(itemSelected)),
                DraggableCustomizedDotBarItem('item-3',
                    icon: Icons.add_box_rounded,
                    name: 'Pengajuan',
                    onTap: (itemSelected) => _changePage(itemSelected)),
                DraggableCustomizedDotBarItem('item-4',
                    icon: Icons.face,
                    name: 'Profil',
                    onTap: (itemSelected) => _changePage(itemSelected)),
                DraggableCustomizedDotBarItem('item-5',
                    icon: Icons.message,
                    name: 'Saran',
                    onTap: (itemSelected) => _changePage(itemSelected)),
              ],
            ),
          ],
        ),
      ),
    );
  }

  void _changePage(String itemSelected) {
    if (_itemSelected != itemSelected && _enableAnimation) {
      _enableAnimation = false;
      setState(() => _itemSelected = itemSelected);
      Future.delayed(
          const Duration(milliseconds: 700), () => _enableAnimation = true);
    }
  }

  Widget _buildAnimation(BuildContext context, String itemSelected,
      Widget child, double valueAnimation) {
    switch (itemSelected) {
      case 'item-1':
        return Transform.translate(
            offset: Offset(
                .0,
                -(valueAnimation - 1).abs() *
                    MediaQuery.of(context).size.width),
            child: child);
      case 'item-2':
        return PageReveal(revealPercent: valueAnimation, child: child);
      case 'item-3':
        return Opacity(opacity: valueAnimation, child: child);
      case 'item-4':
        return Transform.translate(
            offset: Offset(
                -(valueAnimation - 1).abs() * MediaQuery.of(context).size.width,
                .0),
            child: child);
      case 'item-5':
        return Transform.translate(
            offset: Offset(
                (valueAnimation - 1).abs() * MediaQuery.of(context).size.width,
                .0),
            child: child);
      case 'item-6':
        return Transform.translate(
            offset: Offset(
                .0,
                (valueAnimation - 1).abs() *
                    MediaQuery.of(context).size.width),
            child: child);
      case 'item-7':
        return Transform.scale(scale: valueAnimation, child: child);
      default:
        return Transform.translate(
            offset: Offset(
                .0,
                -(valueAnimation - 1).abs() *
                    MediaQuery.of(context).size.width),
            child: child);
    }
  }

  Widget _buildPage(String itemSelected) {
    switch (itemSelected) {
      case 'item-1':
        return Information(key: UniqueKey());
      case 'item-2':
        return HomePage(
            key: UniqueKey(),
            authenticatedUserName: widget.authenticatedUserName);
      case 'item-3':
        return FlutterPage(
            key: UniqueKey(),
            title: 'NUBE',
            urlAsset: 'assets/images/flutter-img-3.png',
            backgroundColor: HexColor('#F7F7F7'));
      case 'item-4':
        return SettingsUI(authenticatedUser: widget.authenticatedUser);
      case 'item-5':
        return FlutterPage(
            key: UniqueKey(),
            title: 'ALARMA',
            urlAsset: 'assets/images/flutter-img-4.png',
            backgroundColor: HexColor('#F7F7F7'));
      case 'item-6':
        return FlutterPage(
            key: UniqueKey(),
            title: 'MENSAJE',
            urlAsset: 'assets/images/flutter-img-5.png',
            backgroundColor: HexColor('#F7F7F7'));
      case 'item-7':
        return FlutterPage(
            key: UniqueKey(),
            title: 'ALERTA',
            urlAsset: 'assets/images/flutter-img-6.png',
            backgroundColor: HexColor('#F7F7F7'));
      default:
        return FlutterPage(key: UniqueKey(), backgroundColor: Colors.white);
    }
  }
}

class FlutterPage extends StatelessWidget {
  final Color? backgroundColor;
  final String? urlAsset;
  final String? title;

  const FlutterPage({Key? key, this.backgroundColor, this.urlAsset, this.title})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        elevation: 0,
        backgroundColor: backgroundColor,
      ),
      body: Container(
        width: double.infinity,
        height: double.infinity,
        alignment: Alignment.center,
        color: backgroundColor,
        padding: EdgeInsets.symmetric(
            horizontal: MediaQuery.of(context).size.width * 0.1, vertical: 120.0),
        child: Column(
          children: <Widget>[
            Text(title!,
                style: const TextStyle(
                  color: Color(0xBB000000),
                  fontSize: 35.0,
                  fontWeight: FontWeight.w700,
                )),
            Expanded(child: Image.asset(urlAsset!, fit: BoxFit.contain)),
          ],
        ),
      ),
    );
  }
}

class PageReveal extends StatelessWidget {
  final double? revealPercent;
  final Widget? child;

  const PageReveal({Key? key, this.revealPercent, this.child})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    return ClipOval(
      clipper: CircleRevealClipper(revealPercent!),
      child: child,
    );
  }
}

class CircleRevealClipper extends CustomClipper<Rect> {
  final double revealPercent;

  CircleRevealClipper(this.revealPercent);

  @override
  Rect getClip(Size size) {
    final epicenter = Offset(size.width / 2, size.height * 0.5);
    double theta = atan(epicenter.dy / epicenter.dx);
    final distanceToCorner = epicenter.dy / sin(theta);

    final radius = distanceToCorner * revealPercent;

    final diameter = 2 * radius;

    return Rect.fromLTWH(
        epicenter.dx - radius, epicenter.dy - radius, diameter, diameter);
  }

  @override
  bool shouldReclip(CustomClipper<Rect> oldClipper) {
    return true;
  }
}
