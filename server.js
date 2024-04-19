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
const indexRouter=require('./routes/index')
app.use('/RaePatterns',indexRouter)
const usersRouter=require('./routes/Users');
app.use('/Users',usersRouter);
app.listen(3000)
