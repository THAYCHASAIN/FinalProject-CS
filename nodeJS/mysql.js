var mysql = require('mysql');
var connection = mysql.createConnection({
    host: '192.168.137.1',
    user: 'root',
    password: '',
    database: 'project_final'
});
connection.connect();

module.exports = connection
