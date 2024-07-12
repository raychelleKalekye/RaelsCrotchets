const express=require('express')
const db=require('../database')
const router = express.Router()

router.get('/Signup',(req,res)=>{
    res.render('Signup',{title:'SIGN UP',action:'add'});
})
router.post('/Signup',(req,res)=>{
    var fname=req.body.fname;
    var sname=req.body.sname;
    var usname=req.body.us_name;
    var phoneNo= req.body.phoneNo;
    var email=req.body.Email;
    var password=req.body.Password;
    var sePassword=req.body.Confirm_password;

    if(length(password)<8){
        alert("Passowrd must be atleast 8 characaters")
    }
    if(password!==sePassword){
        alert("Passwords do not match.Try again!")

    }
    var query=`INSERT INTO users(fname,sname,us_name,phoneNo,
        email,Password)VALUES(?,?,?,?,?,?))`;
    db.query(QUERY,[fname,sname,usname,phoneNo,email,Password],(req,res)=>{
        if(error){
            console.error("Error adding user:",error);
        }else{
            alert("HAPPY SHOPPING " + usname +"!");
            res.redirect('/Catalog');
        }
    });

})
module.exports=router;