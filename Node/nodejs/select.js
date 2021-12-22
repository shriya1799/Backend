var mysql = require('mysql');


var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "Shriya"
});


con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM Accessories", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
