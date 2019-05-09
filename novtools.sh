#!bin/bash
#Version 1.0 (Beta)
clear
figlet NOV TOOLS | lolcat
echo "----------------------------------------------------
| # Author    : NOV                               |
| # Email     : trianov1506@gmail.com             |
| # Instagram : @trianovwidyandaru                |
| # Website   : www.3anovproduction.wordpress.com |
| # Facebook  : www.facebook.com/rianfarhanfaiz   |
| # Version   : V 1.0 (Beta)                      |
--------------------------------------------------" | lolcat
sleep 0.5
echo
echo "Selamat Datang, Nama Anda Siapa?"
read -p "Masukkan Nama Anda : "nama
echo
read -p "Hai $nama, Semoga Kabarmu Baik-Baik Saja <enter>"
sleep 0.5
echo "[#]> Tools Sudah Di Aktifkan" | lolcat
echo "[#]> Exit 00 | lolcat
sleep 0.5
echo ""
echo -e $b "1. Tools Nmap${enda}";
echo
echo -e $b "2. Tools Tools Project${enda}";
echo
echo -e $b "3. Tools Troll Project${enda}";
echo
echo -e $b "4. Tools SMS Bomb${enda}";
echo
echo -e $b "5. Tools Check CCTV${enda}";
echo
echo -e $b "6. Tools A-Rat${enda}";
echo
echo -e $b "7. Tools OSIF${enda}";
echo
echo -e $b "8. Tools Menampilkan Tombol${enda}";
echo
echo -e $b "9. Tools GPS Tracking${enda}";
read -p "Pilih Nomor : " no
if [ $no = 1 ]
then
pkg install nmap
fi
if [ $no = 2 ] 
then
git clone https://github.com/zlucifer/trap_project.git
cd trap_project
chmod +x trap.sh
bash trap.sh
fi
if [ $no = 3 ]
then
git clone https://github.com/zlucifer/troll_project.git
cd troll_project
chmod +X troll.sh
bash troll.sh
fi
if [ $no = 4 ]
then
git clone https://github.com/zlucifer/sms_bomb.git
cd sms_bomb
chmod +x bom.sh
bash bom.sh
fi
if [ $no = 5 ]
then 
git clone https://github.com/zlucifer/all_seeing.git
cd all_seeing
chmod +x cctv.sh
bash cctv.sh
fi
if [ $no = 6 ]
then
git clone https://github.com/Xi4u7/A-Rat.git
cd A-Rat
chmod +x A-Rat.py
python2 A-Rat.py
fi
if [ $no = 7 ]
then 
git clone https://github.com/CiKu370/OSIF.git
cd OSIF
pip install -r requirements.txt
chmod +x osif.py
python2 osif.py
fi
if [ $no = 8 ]
then
git clone https://github.com/karjok/terkey.git
cd terkey
chmod +x terkey.py
python terkey.py
fi
if [ $no = 9 ] 
then 
git clone https://github.com/indosecid/gps_tracking.git
cd gps_tracking
chmod +x gps.php
php gps.php
fi
