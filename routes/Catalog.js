const express=require('express');
const db=require('../database');
const router=express.Router();


router.get('/',(req,res)=>{
    var query = "SELECT * FROM products";
    db.query(query, function (error, data) {
        if (error) {
            throw error;
        } else {
            res.render('Catalog', { title: 'RAE CATALOG', action: 'list', catalogData: data });
        }
    });
    
})
router.get('/:productName',(req,res)=>{
    var query="SELECT * FROM products WHERE productName=?";
    db.query(query,function(error){
        if(error){
            throw error;

        }else{
            res.render('catalogByName', { title: 'RAE CATALOG', action: 'list', catalogData: data });
        }
    });

})
router.get('/Bottomwear',(req,res)=>{
  
   var query="SELECT * FROM products WHERE Category='Bottom-Wear'";
   db.query=(query,function(error,data){
    if(error){
        throw error;
    }else{
        res.render('bottomwear',{title:'BOTTOM-WEAR',action:'list',catalogData:data});
    }
   });
    
})

router.get('/Tops',(req,res)=>{
  
    
    var query="SELECT * FROM products WHERE Category='Tops'";
    db.query=(query,function(error,data){
     if(error){
         throw error;
     }else{
         res.render('tops',{title:'TOPS',action:'list',catalogData:data});
     }
    });
    
})

router.get('/Dresses',(req,res)=>{
  
 
    var query="SELECT * FROM products WHERE Category='Dresses'";
    db.query=(query,function(error,data){
     if(error){
         throw error;
     }else{
         res.render('dresses',{title:'DRESSES',action:'list',catalogData:data});
     }
    });
    
})
router.get('/Bags',(req,res)=>{
   
    var query="SELECT * FROM products WHERE Category='Bags'";
    db.query=(query,function(error,data){
     if(error){
         throw error;
     }else{
         res.render('bags',{title:'BAGS',action:'list',catalogData:data});
     }
    });
})
module.exports=router;