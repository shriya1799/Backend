var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "Shriya"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "UPDATE Accessories SET Brand = 'Puma' WHERE Id = '639'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log(result.affectedRows + " record(s) updated");  
});  
}); 
