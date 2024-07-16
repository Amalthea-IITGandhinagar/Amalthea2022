require('dotenv').config()
const express = require('express')
const app = express()
// const port = 5000

// Static Files
app.use(express.static('public'));
// Specific folder example
app.use('/css', express.static(__dirname + 'public/css'))
app.use('/js', express.static(__dirname + 'public/js'))
app.use('/img', express.static(__dirname + 'public/images'))
app.use('/fonts', express.static(__dirname + 'public/fonts'))

// Set View's
app.set('views', './views');
app.set('view engine', 'ejs');

// Navigation
app.get('', (req, res) => {
    res.render('index', { text: 'Hey' })
})

app.get('/Events', (req, res) => {
   res.sendFile(__dirname + '/views/events.html')
})

app.get('/Sponsors', (req, res) => {
  res.sendFile(__dirname + '/views/spons.html')
})

app.get('/Conclave', (req, res) => {
  res.sendFile(__dirname + '/views/conclave.html')
})

app.get('/Symposium', (req, res) => {
  res.sendFile(__dirname + '/views/symposium.html')
})

app.get('/ContactUs', (req, res) => {
  res.sendFile(__dirname + '/views/team.html')
})

app.get('/TechExpo', (req, res) => {
  res.sendFile(__dirname + '/views/tech.html')
})

app.get('/ReachUs', (req, res) => {
  res.sendFile(__dirname + '/views/reachus.html')
})

app.get('/CAportal', (req, res) => {
  res.sendFile(__dirname + '/views/caportal.html')
})

app.get('/Register', (req, res) => {
  res.sendFile(__dirname + '/views/caform.html')
})


// app.listen(port, () => console.info(`App listening on port ${port}`))
app.listen((process.env.PORT || PORT), () => {
	console.log(`The application started successfully on port ${PORT}`);
});