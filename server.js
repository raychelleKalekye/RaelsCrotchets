const express = require('express');
const app=express();

app.set('view engine','ejs')

app.get('/',(req,res)=>{
    console.log('Here')
    res.render('render')
    //sends data
  
    
})
const catalogRouter=require('./routes/Catalog');
app.use('/Catalog',catalogRouter)
app.listen(3000)
