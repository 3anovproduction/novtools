#!bin/bash
#Version 1.1 (Beta)
clear
figlet NOV TOOLS | lolcat
echo "---------------------------------------------------
| # Author    : NOV                               |
| # Email     : trianov1506@gmail.com             |
| # Instagram : @trianovwidyandaru                |
| # Website   : www.3anovproduction.wordpress.com |
| # Facebook  : www.facebook.com/rianfarhanfaiz   |
| # Version   : V 1.1 (Beta)                      |
---------------------------------------------------" | lolcat
sleep 1
echo
echo "Selamat Datang, Nama Anda Siapa?"
read -p "Masukkan Nama Anda : " nama
echo
read -p "Hai $nama, Semoga Kabarmu Baik-Baik Saja <enter>"
sleep 0.3
echo
}
load(){
    echo -e "\n"
    bar=" ==================================================== "
    barlength=${#bar}
    i=0
    while((i<100)); do
        n=$((i*barlength / 100))
        printf "\e[00;32m\r[%-${barlength}s]\e[00m" "${bar:0:n}"
        ((i += RANDOM%5+2))
        sleep 0.2
    done
}

#
clear
echo "[#]> Tools Sudah Di Aktifkan" | lolcat
echo "[#]> Exit 00" | lolcat
sleep 1
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
echo
echo -e $b "10.Tools IPGeolocation${enda}";
echo
echo -e $b "11.Tools Lazymux${enda}";
echo
echo -e $b "12.Tools ShellPhish${enda}";
echo 
echo -e $b "13.Tools Xshell${enda}";
echo
echo -e $b "14.Tools Websploit${enda}";
echo 
echo -e $b "15.Tools Hammer (DDOS)${enda}";
echo
echo -e $b "16.Tools KK & KTP${enda}";
echo
echo -e $b "17.Tools Uninnstall Tools${enda}";
echo
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

if [ $no = 10 ] 
then 
git clone https://github.com/maldevel/IPGeolocation.git
cd IPGeolocation
chmod +x ipgeolocation.py
pip install -r requirements.txt
python ipgeolocation.py -m
python ipgeolocation.py -h
python ipgeolocation.py -t
fi

if [ $no = 11 ]
then 
git clone https://github.com/Gameye98/Lazymux.git
cd Lazymux
chmod +x lazymux.py
python2 lazymux.py
fi

if [ $no = 12 ]
then 
git clone https://github.com/thelinuxchoice/shellphish.git
cd shellphish
chmod +x shellphish.sh
bash shell.sh
fi

if [ $no = 13 ]
then 
git clone https://github.com/Ubaii/Xshell.git
cd Xshell
chmod +x xshell.py
python xshell.py
fi

if [ $no = 14 ] 
then
git clone https://github.com/websploit/websploit
cd websploit
chmod +x *
pip2 install scapy
python2 websploit
fi

if [ $no = 15 ]
then
git clone https://github.com/cyweb/hammer.git
cd hammer
chmod +x hammer.py
python hammer.py
fi

if [ $no = 16 ]
then
git clone https://github.com/IndonesianSecurity/kkktp.git
cd kkktp
chmod +x kkktp.php
php kkktp.php
fi

if [ $no = 17 ]
then
pkg install mc
fi
