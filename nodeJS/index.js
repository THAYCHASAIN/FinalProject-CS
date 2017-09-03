'use strict';
const app = require('express')();
const bodyParser = require('body-parser');
const mysql = require('mysql');

var connection = mysql.createConnection({
    host: '192.168.137.1',
    user: 'root',
    password: '',
    database: 'project_final'
});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));

connection.connect();

module.exports = connection

const Hapi = require('hapi');

const server = new Hapi.Server();
server.connection({ port: 4000, host: '192.168.137.1' });



server.route({
    method: 'GET',
    path: '/',
    handler: function (request, reply) {
        reply('Hello, world!');
        console.log('Hello, world!');
    }
});

server.route({
    method: 'GET',
    path: '/formArduino/{sen1}/{sen2}/{time}',
    handler: function (request, reply) {
        var  sensor_Weight = encodeURIComponent(request.params.sen1);
        var  sensor_Distance = encodeURIComponent(request.params.sen2);
        var time_stamp = encodeURIComponent(request.params.time);

        console.log('Sensor Distance : ' + sensor_Distance + '\nSensor Weight : '+sensor_Weight );
        console.log('time : ' + encodeURIComponent(request.params.time));
        console.log('\n\n');
        reply('OKAY');
    }
});


server.route({
    method: 'GET',
    path: '/{name}',
    handler: function (request, reply) {
        console.log('Hello, ' + encodeURIComponent(request.params.name) + '!');
    }
});

server.start((err) => {

    if (err) {
        throw err;
    }
    console.log(`Server running at: ${server.info.uri}`);
});