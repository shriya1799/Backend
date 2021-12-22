var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "Shriya"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO Employee (SR. No, Name, Surname, Number, Mail-id	) VALUES ('11', 'Ram', 'Shah', '123456789', 'r@gmail.com')";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("1 record inserted");  
}); 
});



