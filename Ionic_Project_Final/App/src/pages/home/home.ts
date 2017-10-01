import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { BLE } from '@ionic-native/ble';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})

export class HomePage {
  

  Device1 = [];
  Device2 = [];

  count = 0;
  count1 = 0;
  count2 = 0;

  DeviceALL = ["88:4A:EA:6C:34:E8","50:8C:B1:75:23:9D"];

  Distance1 = 0.0;
  Distance2 = 0.0;
  constructor(public navCtrl: NavController,private ble: BLE) {

    setInterval(()=>
        this.scanBLE()
    ,1000);

    
  }
  
  scanBLE() {
    var v = 0;
    while(v<1){
  
      this.ble.startScan([]).subscribe(device => {
        switch(device.id) {
            case "88:4A:EA:6C:34:E8" : this.count1++;
                                       this.Device1.push(device.rssi);
                                       break;
            case "50:8C:B1:75:23:9D" : this.count2++ ;
                                       this.Device2.push(device.rssi);
                                       break;              
        }     
      })
           v++;
    }
    v=0;
    if(this.Device1.length == 3){
        var sum1 = (this.Device1[0]+this.Device1[1]+this.Device1[2])/3;
        this.Distance1 = (Math.pow(10, ( ( (-59) - (sum1) ) / (10 * 2) )) );
        this.Device1 = [];
    }
    if(this.Device2.length == 3){
        var sum2 = (this.Device2[0]+this.Device2[1]+this.Device2[2])/3;
        this.Distance2 = (Math.pow(10, ( ( (-59) - (sum2) ) / (10 * 2) )) );
        this.Device2 = [];
    }
    this.count++
  }
}


/*
 88:4A:EA:6C:34:E8 
 50:8C:B1:75:23:9D
 this.Distance = (Math.pow(10, ( ( (-59) - (device.rssi) ) / (10 * 2) )) );

this.ble.scan([],1).subscribe(device => {
        switch(device.id) {
          case "88:4A:EA:6C:34:E8" : this.RssiOfDevice1.push(device.rssi) ;
                                    break;

          case "88:4A:EA:6C:34:E8" : this.RssiOfDevice2.push(device.rssi) ;
                                    break;              

        }      

       this.count++;  
    
    }

           this.ble.scan([],0).subscribe(device => {
              switch(device.id) {
                case "88:4A:EA:6C:34:E8" : 
                                            break;

                case "88:4A:EA:6C:34:E8" :
                                            break;              

              }
            this.Device.push(device) ;
            })
*/