const fs = require('fs');
const express = require('express');
const cors = require('cors');
const multer = require('multer');

const port = process.env.PORT || 5000;

const app = express();

// var email = document.getElementById('email').value;
// var pass = document.getElementById('pass').value;

// const content = 'endse';

// const content = "hello"
app.use(cors());


app.use(express.json());
app.use(express.urlencoded({
    extended: false,
    limit: 10000,
    parameterLimit: 2,
}));




app.get('/form', (req,res)=>{
    res.sendFile(__dirname + 'home.html');

})

const upload = multer({ dest: 'file/'});

app.post('/form', upload.any(), (req,res)=>{
    console.log(req.body);
    console.log(req.file);

    var lastt = JSON.stringify(req.body)
    fs.appendFileSync('info.txt',  lastt+"\n", 'utf8');

})







// fs.writeFile('info.txt',  content, err => {
//     if (err) {
//         console.err;
//         return;
//     }
// });



app.listen(port,()=>{
    console.log(`Server started at http://localhost${port}`);
})