**Cara install simdondar docker di server udd (langkah-langkah hanya perlu dilakukan 1 X diawal saja)**
1. Install salah satu Ubuntu server 64 bit berikut:
   - Ubuntu Lunar 23.04
   - Ubuntu Kinetic 22.10
   - Ubuntu Jammy 22.04 (LTS)
   - Ubuntu Focal 20.04 (LTS)
2. download file install-docker-ubuntu.sh
   - wget https://raw.githubusercontent.com/sudarko/simdondar/master/install-docker-ubuntu.sh
3. Install docker dengan perintah:
   - sh ./install-docker-ubuntu.sh
4. buat folder simdondar:
   - mkdir simdondar
5. pindah ke folder simdondar
   - cd simdondar
6. download docker-compose.yaml
   - wget https://raw.githubusercontent.com/sudarko/simdondar/master/docker-compose.yaml   
7. jalankan docker-compose untuk deploy simdondar:
   - docker-compose up -d
8. download cron-simdondar.sh
   - wget https://raw.githubusercontent.com/sudarko/simdondar/master/cron-simdondar.sh
   - sudo cp cron-simdondar.sh /etc/cron.daily/
   - sudo service cron restart

**Cara update simdondar oleh tim developer**
1. lakukan perbaikan sorcecode kemudian push ke github
2. build image baru:
   - docker build -t sudarko/simdondar:latest https://github.com/sudarko/simdondar.git
3. push image baru ke docker registry:
   - docker login
   - docker push sudarko/simdondar:latest
4. pada server udd secara otomatis akan terjadi update sesuai dengan jadwal cron harian (**setelah langkah nomor 8 dilakukan**)

**Cara install dan konfigurasi https/ssl reverse proxy dengan caddy di SERVER dengan IP PUBLIC:**
1. buat directory caddy:
   - mkdir caddy
   - cd caddy
2. download caddy_docker-compose.yaml dan contoh file konfigurasi caddy
   - wget https://raw.githubusercontent.com/sudarko/simdondar/master/caddy_docker-compose.yaml
   - mv caddy_docker-compose.yaml docker-compose.yaml
   - wget https://raw.githubusercontent.com/sudarko/simdondar/master/Caddyfile
3. edit Caddyfile (sesuaikan nama subdomain dan IP server simdondar)
4. Jalankan caddy
   - docker-compose up -d
