const express=require('express');
const db=require('../database');
const router=express.Router();


router.get('/',(req,res)=>{
    var query = "SELECT * FROM products";
    db.query(query, function (error, data) {
        if (error) {
            console.error(error);
        } else {
            res.render('Catalog', { title: 'RAE CATALOG', action: 'list', catalogData: data });
        }
    });
    
})
router.get('/newItem',(req,res)=>{
    res.render('Catalog',{title:'NEW ITEM',action:'add'});
})
router.post('/newItem',upload.single('productImage'),(req,res)=>{
    console.log('File upload:', req.productImage);
    var proId=req.body.productId;
    var proName=req.body.productName;
    var category=req.body.Category;
    var price=req.body.Price;
    var proImage;
    if (req.productImage) {
        proImage = req.file.buffer.toString('base64');
    } else {
       
        console.error("No image file uploaded");
        res.status(400).send("No image file uploaded");
      
    }
    var query=`INSERT INTO products(productId,productName,Category,Price,productImage)
                VALUES(?,?,?,?,?)`;
    db.query(query,[proId,proName,category,price,proImage],(req,res)=>{
        if(error){
            console.error("Error adding item: ",error);
        }else{
            alert("Item added successfully");
            res.redirect('/Catalog/');
        }
    });
    

})
router.get('/:productName',(req,res)=>{
    const proName=req.params.productName;

    var query="SELECT * FROM products WHERE productName=?";
    db.query(query,[proName],function(error){
        if(error){
            console.error(error);

        }else{
            res.render('catalogByName', { title: 'RAE CATALOG', action: 'list', catalogData: data });
        }
    });

})
router.get('/Bottomwear',(req,res)=>{
  
   var query="SELECT * FROM products WHERE Category='Bottom-Wear'";
   db.query=(query,function(error,data){
    if(error){
        console.error(error);
    }else{
        res.render('bottomwear',{title:'BOTTOM-WEAR',action:'list',catalogData:data});
    }
   });
    
})

router.get('/Tops',(req,res)=>{
  
    
    var query="SELECT * FROM products WHERE Category='Tops'";
    db.query=(query,function(error,data){
     if(error){
        console.error(error);
     }else{
         res.render('tops',{title:'TOPS',action:'list',catalogData:data});
     }
    });
    
})

router.get('/Dresses',(req,res)=>{
  
 
    var query="SELECT * FROM products WHERE Category='Dresses'";
    db.query=(query,function(error,data){
     if(error){
        console.error(error);
     }else{
         res.render('dresses',{title:'DRESSES',action:'list',catalogData:data});
     }
    });
    
})
router.get('/Bags',(req,res)=>{
   
    var query="SELECT * FROM products WHERE Category='Bags'";
    db.query=(query,function(error,data){
     if(error){
        console.error(error);
     }else{
         res.render('bags',{title:'BAGS',action:'list',catalogData:data});
     }
    });
})
module.exports=router;