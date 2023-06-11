import 'package:flutter/material.dart';
import 'package:desa_app/models/informasiModel.dart';

List<InformationModel> daftarTempatIbadah = [
  InformationModel(
      name: 'Rumah Ibadah 1',
      img: 'assets/images/tempatIbadah1.jpg',
      location: 'Rusun',
      description: 'Rumah Ibadah Kita Bersama',
      isSelected: false,
      color: Colors.redAccent),
  InformationModel(
      name: 'Rumah Ibadah 2',
      img: 'assets/images/tempatIbadah2.jpg',
      location: 'Rusun',
      description: 'Rumah Ibadah Kita Bersama',
      isSelected: false,
      color: Colors.amber.shade700),
  InformationModel(
      name: 'Rumah Ibadah 3',
      img: 'assets/images/tempatIbadah3.jpg',
      location: 'Rusun',
      description: 'Rumah Ibadah Kita Bersama',
      isSelected: false,
      color: Colors.blueAccent),
  InformationModel(
      name: 'Rumah Ibadah 4',
      img: 'assets/images/tempatIbadah4.jpg',
      location: 'Rusun',
      description: 'Rumah Ibadah Kita Bersama',
      isSelected: false,
      color: Colors.redAccent),
  InformationModel(
      name: 'Rumah Ibadah 5',
      img: 'assets/images/tempatIbadah5.jpg',
      location: 'Rusun',
      description: 'Rumah Ibadah Kita Bersama',
      isSelected: false,
      color: Colors.amber.shade700),
  InformationModel(
      name: 'Gereja Advent Bukit Zaitun',
      img: 'assets/images/tempatIbadah6.jpg',
      location: 'Rusun',
      description: 'Rumah Ibadah Kita Bersama',
      isSelected: false,
      color: Colors.blueAccent),
];

List<InformationModel> daftarWisataBudaya = [
  InformationModel(
      name: 'Wisata Budaya 1',
      img: 'assets/images/wisataBudaya1.jpg',
      location: 'Rusun',
      description: 'Wisata kita bersama',
      isSelected: false,
      color: Colors.redAccent),
  InformationModel(
      name: 'Wisata Budaya 2',
      img: 'assets/images/wisataBudaya2.jpg',
      location: 'Rusun',
      description: 'Wisata kita bersama',
      isSelected: false,
      color: Colors.amber.shade700),
  InformationModel(
      name: 'Wisata Budaya 3',
      img: 'assets/images/wisataBudaya3.jpg',
      location: 'Rusun',
      description: 'Wisata kita bersama',
      isSelected: false,
      color: Colors.blueAccent),
  InformationModel(
      name: 'Gapura',
      img: 'assets/images/gapura.jpg',
      location: 'Rusun',
      description: 'Wisata kita bersama',
      isSelected: false,
      color: Colors.redAccent),
];

List<InformationModel> semuaInformasi = daftarTempatIbadah + daftarWisataBudaya;

List sizes = [40, 41, 42, 43, 44];

List<InformationModel> favouriteitems = [];

