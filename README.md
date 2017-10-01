# FinalProject-CS

ALL FILE PROJRCT


##ขั้นตอนการติดตั้ง ionic famework  https://ionicframework.com/
1. ติดตั้งโปรแกรม gitbash 
2. ติดตั้ง JDK ของ java 
3. ติดตั้งโปรแกรม Android studio
4. ติดตั้ง nodeJS
5. ตั้งค่า path สองอันคือ  
    * ANDROID_HOME ให้ชี้ไปที่  C:\Users\RaonbowMAN\AppData\Local\Android\sdk\platform-tools;C:\Users\RaonbowMAN\AppData\Local\Android\sdk\tools;
    * JAVA_HOME ให้ชี้ไป C:\Program Files\Java\jdk1.8.0_144 
6. เปิดใช้งาน gitbash และใช้คำสั่ง npm install -g cordova ionic เพื่อทำการตั้งติด ionic 
7. ทำการสร้าง Folder และทำการเปิด gitbash ที่ Dir นั้น
8. ใช้คำสั่ง  ionic start {{ชื่อapp}} {{ประเภทการตั้งค่าเดิม}}  เพื่อสร้างโปรเจ็คขึ้นมา
9. เมื่อสร้างเสร็จให้ใช้คำสั่ง cd {{ชื่อapp}} เพื่อเปลี่ยน Dir ไปยัง Dir ของ app
10. ใช้คำสั่ง ionic serve เพื่อทำการรัน app ผ่าน simulator || หรือใช้คำสั่ง ionic cordova run android เพื่อรัน app  ผ่าน  โทรศัพท์มือถือ(ต้องต่อเข้ากับคอมและเปิดโหมดนักพัฒนาแล้วเท่านั้น)

##ขั้นตอนการลง native plugin ionic famework (ตัวอย่างนี้คือ BLE plugin)
1. เปิด gitbash ใน folder ของโปรเจ็ค   
2. ใช้คำสั่ง ติดตั้ง Cordova และ Ionic Native plugins โดยใช้คำสั้งต่อไปนี้
    * ionic cordova plugin add cordova-plugin-ble-central เพื่อติดตั้ง
    * npm install --save @ionic-native/ble
3. import plugin ในไฟล์ \App\src\app\app.module.ts
4. เพิ่ม plugin ใน providers
5. import plugin ในไฟล์ \App\src\pages\home\home.scss

