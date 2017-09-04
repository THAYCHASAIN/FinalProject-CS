'use strict';
const app = require('express')();
console.log('testtttt');
const mysql = require('mysql');
var Weight_def = 0;
var con = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'project_final'
});
var Distance_def = 1;


con.connect(function(err) {
    if (err) throw err;
    
    const Hapi = require('hapi');

    const server = new Hapi.Server();
    server.connection({ port: 4000, host: '192.168.137.1' });



    server.route({
        method: 'GET',
        path: '/',
        handler: function (request, reply) {
            reply('Wellcome');
            console.log('Hello, world!');
        }
    });

    server.route({
        method: 'GET',
        path: '/formArduino/{sen1}/{sen2}/{time}',
        handler: function (request, reply) {
            var status = 0;
            

            var  sensor_Weight = encodeURIComponent(request.params.sen1);
            var  sensor_Distance = encodeURIComponent(request.params.sen2);
            var  time_stamp = encodeURIComponent(request.params.time);

            
            if(sensor_Distance < 130){
                status += 25; 
            }
            if(sensor_Weight >= -10 && sensor_Weight <= 10){
                Weight_def = 0;
            }
            if((Weight_def - sensor_Weight)  > 50){
                status += 25;
                Weight_def = sensor_Weight; //set 
            }
            
  
      

            console.log('Sensor Distance : ' + sensor_Distance + '\nSensor Weight : '+ sensor_Weight );
            console.log('Weight def : '+Weight_def);
            console.log('result : '+(Weight_def - sensor_Weight));
            console.log('Time : '+time_stamp);
            console.log('Status : '+ status);
            reply('OKAY');

            /*
            con.query('INSERT INTO tb_log (SEN_W,SEN_R,status,time) VALUES ("'+sensor_Weight+'","'+sensor_Distance+'","1","'+time_stamp+'")',function(err,result,field){
                if(err) throw err;
                console.log('isert success');
            })
            */

            console.log('\n\n');
        }
    });


    server.start((err) => {
        if (err) {
            throw err;
        }
        
        console.log(`Server running at: ${server.info.uri}`);
    });
});
