const express=require('express');
const db=require('../database');
const router=express.Router();


router.get('/',(req,res)=>{
    var query = "SELECT * FROM products";
    db.query(query, function (error, data) {
        if (error) {
            console.error(error);
        } else {
            res.render('CATALOG', { title: 'RAE CATALOG', action: 'list', Catalog: data });
        }
    });
    
})

router.get('/Bottomwear',(req,res)=>{
  
    res.send('bottomwear');
    
})

router.get('/Tops',(req,res)=>{
  
    res.send('SHIRTS/SWEATERS');
    
})

router.get('/Dresses',(req,res)=>{
  
    res.send('dresses');
    
})
router.get('/Bags',(req,res)=>{
  
    res.send('totes/Backpacks/Purses');
    
})
module.exports=router;