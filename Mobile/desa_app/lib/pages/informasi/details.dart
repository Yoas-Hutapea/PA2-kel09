import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:desa_app/models/informasiModel.dart';
import 'package:desa_app/pages/informasi/information_list.dart';
import 'package:desa_app/pages/widgets/choice_chip.dart';
import 'package:velocity_x/velocity_x.dart';

class DetailsScreen extends StatefulWidget {
  const DetailsScreen({Key? key, required this.detail_item}) : super(key: key);

  final InformationModel detail_item;

  @override
  State<DetailsScreen> createState() => _DetailsScreenState();
}

class _DetailsScreenState extends State<DetailsScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SizedBox(
        child: Column(
          children: [
            Stack(
              children: [
                Container(
                  padding: const EdgeInsets.symmetric(horizontal: 40),
                  color: Colors.white,
                  height: Get.height,
                  width: double.infinity,
                  child: Column(
                    mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      SizedBox(
                        height: Get.height * 0.5,
                      ),
                      widget.detail_item.name.text.minFontSize(32).bold.make(),
                      widget.detail_item.location.text.minFontSize(20).bold.make(),
                      Column(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Padding(
                            padding: const EdgeInsets.symmetric(vertical: 10),
                            child: 'Deskripsi'
                                .text
                                .minFontSize(18)
                                .fontWeight(FontWeight.w400)
                                .make(),
                          ),
                          Row(
                            crossAxisAlignment: CrossAxisAlignment.start,
                            children: [
                              widget.detail_item.description.text.minFontSize(12).make(),
                            ],
                          ),
                        ],
                      ),
                      InkWell(
                        onTap: () {
                          Get.offAll(() => const Information());
                        },
                        child: Container(
                          height: Get.height * 0.07,
                          decoration: BoxDecoration(
                            color: widget.detail_item.color,
                            borderRadius: BorderRadius.circular(12),
                          ),
                          child: Row(
                            mainAxisAlignment: MainAxisAlignment.center,
                            children: [
                              const Icon(
                                Icons.arrow_back,
                                size: 25,
                                color: Colors.white,
                              ),
                              SizedBox(
                                width: Get.width * 0.05,
                              ),
                              'Kembali'
                                  .text
                                  .minFontSize(20)
                                  .color(Colors.white)
                                  .fontWeight(FontWeight.w600)
                                  .make(),
                            ],
                          ),
                        ),
                      ),
                    ],
                  ),
                ),
                Container(
                  height: Get.height * 0.55,
                  width: double.infinity,
                  decoration: BoxDecoration(
                    color: widget.detail_item.color,
                    borderRadius: const BorderRadius.only(
                      bottomLeft: Radius.circular(25),
                      bottomRight: Radius.circular(25),
                    ),
                  ),
                  child: SafeArea(
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.start,
                      children: [
                        SizedBox(
                          height: Get.height * 0.5,
                          child: Padding(
                            padding: const EdgeInsets.only(top: 40),
                            child: AspectRatio(
                              aspectRatio: 1.0,
                              child: Container(
                                decoration: BoxDecoration(
                                  borderRadius: const BorderRadius.all(
                                    Radius.circular(10),
                                  ),
                                  boxShadow: [
                                    BoxShadow(
                                      color: Colors.black.withOpacity(0.2),
                                      blurRadius: 6.0,
                                      offset: const Offset(0, 3),
                                    ),
                                  ],
                                ),
                                child: ClipRRect(
                                  borderRadius: const BorderRadius.all(
                                    Radius.circular(20),
                                  ),
                                  child: Hero(
                                    tag: 'shoepic',
                                    child: Image.asset(
                                      widget.detail_item.img,
                                      fit: BoxFit.cover,
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
