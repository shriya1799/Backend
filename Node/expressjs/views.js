var express = require('express');
var app = express();
var bodyParser = require('body-parser');


app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/form.html');
});


app.post('/show', (req, res) => {
    const id = req.body.id;
    const name = req.body.name;
    res.send('Id: ' + id + ', Name:' + name);
    console.log("Id " + req.body.id);
    console.log("name " + req.body.name);
});


const port = 3000;
app.listen(port, () => console.log('This app is listening on port 3000'));
