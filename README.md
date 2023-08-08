1. Install salah satu Ubuntu server 64 bit berikut:
   Ubuntu Lunar 23.04
   Ubuntu Kinetic 22.10
   Ubuntu Jammy 22.04 (LTS)
   Ubuntu Focal 20.04 (LTS)
2. download file install-docker-ubuntu.sh
   wget https://raw.githubusercontent.com/sudarko/simdondar/master/install-docker-ubuntu.sh
4. Install docker dengan perintah (sh ./install-docker-ubuntu.sh)
5. buat folder simdondar
6. cd simdondar
7. download docker-compose.yaml
   wget https://raw.githubusercontent.com/sudarko/simdondar/master/docker-compose.yaml
8. docker-compose up -d
9. download cron-simdondar.sh
   wget https://raw.githubusercontent.com/sudarko/simdondar/master/cron-simdondar.sh
   sudo cp cron-simdondar.sh /etc/cron.daily/
   sudo service cron restart
