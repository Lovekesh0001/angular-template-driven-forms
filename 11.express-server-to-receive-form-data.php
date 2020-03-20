#npm init --yes                == create package.json 

#npm install --save express body-parser cors
-express(framework)
-body-parser(middleware to handle form data)
-cors(mnake request)

===============================================================
create server.js

const app = express();

app.use(bodyParser.json());

app.use(cors());

app.get('/', function(req, res){
  res.send('Hello from server');
})

app.post('/enroll', function(req, res){
  console.log(req.body);
  res.status(200).send({"message": "Data Received"});
})

app.listen(PORT, function(){
  console.log('Server is running on localhost:'+ PORT);
});


#node server.js
===============================================================