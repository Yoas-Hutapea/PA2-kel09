import 'package:flutter/material.dart';
import 'package:intl/intl.dart';
import 'package:image_picker/image_picker.dart';

class SettingsUI extends StatelessWidget {
  final dynamic authenticatedUser;

  const SettingsUI({required this.authenticatedUser});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: "Setting UI",
      home: EditProfilePage(authenticatedUser: authenticatedUser),
    );
  }
}

class EditProfilePage extends StatefulWidget {
  final dynamic authenticatedUser;

  const EditProfilePage({Key? key, required this.authenticatedUser})
      : super(key: key);

  @override
  _EditProfilePageState createState() => _EditProfilePageState();
}

class _EditProfilePageState extends State<EditProfilePage> {
  bool showPassword = false;
  TextEditingController _tanggalLahirController = TextEditingController();
  DateTime? _selectedDate;
  String? _selectedGender;

  @override
  void initState() {
    super.initState();
    _initializeFields();
  }

  @override
  void dispose() {
    _tanggalLahirController.dispose();
    super.dispose();
  }

  void _initializeFields() {
    _tanggalLahirController.text = widget.authenticatedUser['tanggal_lahir'] ?? '';
    _selectedGender = widget.authenticatedUser['jenis_kelamin'];
  }

  Future<void> _selectDate(BuildContext context) async {
    final DateTime? pickedDate = await showDatePicker(
      context: context,
      initialDate: DateTime.now(),
      firstDate: DateTime(1900),
      lastDate: DateTime.now(),
    );

    if (pickedDate != null && pickedDate != _selectedDate) {
      setState(() {
        _selectedDate = pickedDate;
        _tanggalLahirController.text = DateFormat('yyyy-MM-dd').format(pickedDate);
      });
    }
  }

  void _openGalleryPicker() async {
    final picker = ImagePicker();
    final pickedImage = await picker.getImage(source: ImageSource.gallery);

    if (pickedImage != null) {
      // Handle the selected image
      // You can store the image path or display the selected image in the UI
    }
  }

  @override
  Widget build(BuildContext context) {
    final String? nama = widget.authenticatedUser['nama'];
    final String? nik = widget.authenticatedUser['nik'];
    final String? no_telp = widget.authenticatedUser['no_telp'];
    final String? tempat_lahir = widget.authenticatedUser['tempat_lahir'];
    final String? tanggal_lahir = _tanggalLahirController.text;
    final String? usia = widget.authenticatedUser['usia'];
    final String? pekerjaan = widget.authenticatedUser['pekerjaan'];
    final String? agama = widget.authenticatedUser['agama'];
    final String? kk = widget.authenticatedUser['kk'];
    final String? alamat = widget.authenticatedUser['alamat'];

    return Scaffold(
      body: Container(
        padding: EdgeInsets.only(left: 16, top: 25, right: 16),
        child: GestureDetector(
          onTap: () {
            FocusScope.of(context).unfocus();
          },
          child: ListView(
            children: [
              Text(
                "Edit Profile",
                style: TextStyle(fontSize: 20, fontWeight: FontWeight.w500),
              ),
              SizedBox(height: 15),
              buildProfileImage(),
              SizedBox(height: 35),
              buildTextField("Nama", nama),
              buildTextField("NIK", nik),
              buildTextField("No Telepon", no_telp),
              buildTextField("Tempat Lahir", tempat_lahir),
              GestureDetector(
                onTap: () => _selectDate(context),
                child: AbsorbPointer(
                  child: buildTextField("Tanggal Lahir", tanggal_lahir),
                ),
              ),
              buildTextField("Usia", usia),
              buildDropdownFormField("Jenis Kelamin", _selectedGender),
              buildTextField("Pekerjaan", pekerjaan),
              buildTextField("Agama", agama),
              buildTextField("No KK", kk),
              buildTextField("Alamat", alamat),
              SizedBox(height: 35),
              buildActionButtons(),
            ],
          ),
        ),
      ),
    );
  }

  Widget buildProfileImage() {
    final String? imageUrl = widget.authenticatedUser['gambar'];

    return Center(
      child: Stack(
        children: [
          Container(
            width: 130,
            height: 130,
            decoration: BoxDecoration(
              border: Border.all(
                width: 4,
                color: Theme.of(context).scaffoldBackgroundColor,
              ),
              boxShadow: [
                BoxShadow(
                  spreadRadius: 2,
                  blurRadius: 10,
                  color: Colors.black.withOpacity(0.1),
                  offset: Offset(0, 10),
                ),
              ],
              shape: BoxShape.circle,
              image: DecorationImage(
                fit: BoxFit.cover,
                image: imageUrl != null
                    ? NetworkImage(imageUrl)
                    : NetworkImage("https://img.freepik.com/free-icon/user_318-159711.jpg"),
              ),
            ),
          ),
          Positioned(
            bottom: 0,
            right: 0,
            child: GestureDetector(
              onTap: _openGalleryPicker,
              child: Container(
                height: 40,
                width: 40,
                decoration: BoxDecoration(
                  shape: BoxShape.circle,
                  border: Border.all(
                    width: 4,
                    color: Theme.of(context).scaffoldBackgroundColor,
                  ),
                  color: Colors.indigo,
                ),
                child: Icon(
                  Icons.photo_library,
                  color: Colors.white,
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }

  Widget buildTextField(String labelText, String? value) {
    return Padding(
      padding: const EdgeInsets.only(bottom: 35.0),
      child: TextField(
        controller: TextEditingController(text: value),
        obscureText: labelText == "Password",
        decoration: InputDecoration(
          suffixIcon: labelText == "Password"
              ? IconButton(
            onPressed: () {
              setState(() {
                showPassword = !showPassword;
              });
            },
            icon: Icon(
              Icons.remove_red_eye,
              color: Colors.grey,
            ),
          )
              : null,
          contentPadding: EdgeInsets.only(bottom: 3),
          labelText: labelText,
          floatingLabelBehavior: FloatingLabelBehavior.always,
          hintText: '',
          hintStyle: TextStyle(
            fontSize: 16,
            fontWeight: FontWeight.bold,
            color: Colors.black,
          ),
        ),
      ),
    );
  }

  Widget buildDropdownFormField(String labelText, String? value) {
    return Padding(
      padding: const EdgeInsets.only(bottom: 35.0),
      child: DropdownButtonFormField<String>(
        decoration: InputDecoration(
          labelText: labelText,
          floatingLabelBehavior: FloatingLabelBehavior.always,
        ),
        value: value,
        onChanged: (newValue) {
          setState(() {
            _selectedGender = newValue;
          });
        },
        items: [
          DropdownMenuItem(
            value: 'Laki-laki',
            child: Text('Laki-laki'),
          ),
          DropdownMenuItem(
            value: 'Wanita',
            child: Text('Wanita'),
          ),
        ],
      ),
    );
  }

  Widget buildActionButtons() {
    return Row(
      mainAxisAlignment: MainAxisAlignment.spaceBetween,
      children: [
        OutlinedButton(
          style: OutlinedButton.styleFrom(
            padding: EdgeInsets.symmetric(horizontal: 50),
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(20),
            ),
          ),
          onPressed: () {},
          child: Text(
            "CANCEL",
            style: TextStyle(
              fontSize: 14,
              letterSpacing: 2.2,
              color: Colors.black,
            ),
          ),
        ),
        ElevatedButton(
          onPressed: () {},
          style: ElevatedButton.styleFrom(
            primary: Colors.indigo,
            padding: EdgeInsets.symmetric(horizontal: 50),
            elevation: 2,
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(20),
            ),
          ),
          child: Text(
            "SAVE",
            style: TextStyle(
              fontSize: 14,
              letterSpacing: 2.2,
              color: Colors.white,
            ),
          ),
        ),
      ],
    );
  }
}
