var express = require('express');
 
var app = express();

app.get('/argi', function(req, res) {
  res.send(JSON.stringify([{slug:'name', name:'argi'}, {slug:'lang',name:'scala'}]));
});
 
app.listen(3000);
console.log('Listening on port 3000...');
