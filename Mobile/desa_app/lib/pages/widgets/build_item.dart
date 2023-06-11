import 'package:flutter/material.dart';
import 'package:desa_app/pages/informasi/details.dart';
import 'package:velocity_x/velocity_x.dart';
import 'package:desa_app/models/informasiModel.dart';
import 'package:get/get.dart';

// ignore: non_constant_identifier_names
Widget buildItem({required List<InformationModel> items, required int index}) {
  return Hero(
    tag: 'Detail',
    child: InkWell(
      onTap: () {
        Get.off(() => DetailsScreen(
          detail_item: items[index],
        ));
      },
      child: Card(
        margin: const EdgeInsets.symmetric(horizontal: 5, vertical: 10),
        shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(20)),
        elevation: 10,
        child: Container(
          padding: const EdgeInsets.only(top: 10, left: 12,bottom: 12),
          decoration: BoxDecoration(
            borderRadius: BorderRadius.circular(20),
            color: items[index].color,
          ),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              items[index]
                  .name
                  .text
                  .maxFontSize(32)
                  .minFontSize(20)
                  .bold
                  .make(),
              SizedBox(height: 10),
              Row(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  SizedBox(
                    width: Get.width * 0.3,
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        items[index]
                            .location
                            .text
                            .minFontSize(8)
                            .fontWeight(FontWeight.w700)
                            .make(),
                        SizedBox(height: 10),
                        items[index]
                            .description
                            .text
                            .minFontSize(12)
                            .fontWeight(FontWeight.w700)
                            .make(),
                      ],
                    ),
                  ),
                  SizedBox(width: 10),
                  ClipRRect(
                    borderRadius: BorderRadius.circular(12),
                    child: Image.asset(
                      items[index].img,
                      width: 150,
                      height: 150,
                      fit: BoxFit.cover,
                    ),
                  ),
                ],
              ),
            ],
          ),
        ),
      ),
    ),
  );
}
