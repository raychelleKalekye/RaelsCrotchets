const express=require('express');
const mysql=require('mysql2');

const connection=mysql.createConnection({
    host:'localhost',
    user: 'root',
    password:'',
    database:'website_data'
});
connection.connect((err) => {
    if (err) {
        console.error('Error connecting to database:', err);
    } else {
        console.log('Connected to database');
    }
});

module.exports = connection;