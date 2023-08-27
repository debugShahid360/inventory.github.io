
    

    function cataname(){
        let cname=document.querySelector('#cname').value;
    
        if(cname.match(/^[A-Za-z ]+$/)){
           var b= document.querySelector('#valid');
          b.style.color="green";
          b.innerHTML='Valid*';
            document.querySelector('#cdes').removeAttribute('disabled')
        }else{
            var b= document.querySelector('#valid');
          b.style.color="red";
          b.innerHTML='Not Valid*';

          
        }
        
    
    }
    function catdes(){
        
        let catades=document.querySelector('#cdes').value;
        if(catades.match(/^[A-Za-z]+$/)){
            var b= document.querySelector('#valid1');
          b.style.color="green";
          b.innerHTML='Valid*';
          
        }else{
            var b= document.querySelector('#valid1');
          b.style.color="red";
          b.innerHTML='Not Valid*';

          
        }
       
    
    }

    function subcataname(){
        
        let subcatname=document.querySelector('#subcatname').value;
    
        if(subcatname.match(/^[A-Za-z]+$/)){
           var b= document.querySelector('#v1');
          b.style.color="green";
          b.innerHTML='Valid*';
            document.querySelector('#subcatdes').removeAttribute('disabled')
           
        }else{
            var b= document.querySelector('#v1');
          b.style.color="red";
          b.innerHTML='Not Valid*';
          
          
         
        }
        
    
    }
    function subcatades(){
        if(true){
            let subcatdes=document.querySelector('#subcatdes').value;
            if(subcatdes.match(/^[A-Za-z]+$/)){
                var b= document.querySelector('#v2');
              b.style.color="green";
              b.innerHTML='Valid*';
              
            }else{
                var b= document.querySelector('#v2');
              b.style.color="red";
              b.innerHTML='Not Valid*';

              
             
            }
        }
        
    }

    function supnamee(){
        
        let suplname=document.querySelector('#supname').value;
    
        if(suplname.match(/^[A-Za-z]+$/)){
           var b= document.querySelector('#v3');
          b.style.color="green";
          b.innerHTML='Valid*';
            document.querySelector('#supemail').removeAttribute('disabled')
           
        }else{
            var b= document.querySelector('#v3');
          b.style.color="red";
          b.innerHTML='Not Valid*';
          
          
         
        }
        
    
    }
    function supemaill(){
       
            let supemail=document.querySelector('#supemail').value;
            if(supemail.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
                var b= document.querySelector('#v4');
              b.style.color="green";
              b.innerHTML='Valid*';
              document.querySelector('#supcontactno').removeAttribute('disabled');
              
            }else{
                var b= document.querySelector('#v4');
              b.style.color="red";
              b.innerHTML='Not Valid*';

              
               
               
              }
             
            }
       
        
      
  
    function supcontactnom(){
        
        let supcontactno=document.querySelector('#supcontactno').value;
    
        if(supcontactno.match(/^((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})$/gm)){
           var b= document.querySelector('#v5');
          b.style.color="green";
          b.innerHTML='Valid*';
            document.querySelector('#supcompany').removeAttribute('disabled')
           
        }else{
            var b= document.querySelector('#v5');
          b.style.color="red";
          b.innerHTML='Not Valid*';
          
         
         
        }
        
    
    }
    function supcompanye(){
        if(true){
            let supcompany=document.querySelector('#supcompany').value;
            if(supcompany.match(/^[A-Za-z ]+$/)){
                var b= document.querySelector('#v6');
              b.style.color="green";
              b.innerHTML='Valid*';
              
            }else{
                var b= document.querySelector('#v6');
              b.style.color="red";
              b.innerHTML='Not Valid*';

              
             
            }
        }
        
      
    }
    function prname(){
        
            let pname=document.querySelector('#pname').value;
            if(pname.match(/^[A-Za-z ]+$/)){
                var b= document.querySelector('#v7');
              b.style.color="green";
              b.innerHTML='Valid*';
              document.querySelector('#pcode').removeAttribute('disabled')
            }else{
                var b= document.querySelector('#v7');
              b.style.color="red";
              b.innerHTML='Not Valid*';
            }
    }
    function prcode(){
        
        let pcode=document.querySelector('#pcode').value;
        if(pcode.match(/^[A-Za-z ]+$/)){
            var b= document.querySelector('#v7');
          b.style.color="green";
          b.innerHTML='Valid*';
          document.querySelector('#quantity').removeAttribute('disabled')
        }else{
            var b= document.querySelector('#v7');
          b.style.color="red";
          b.innerHTML='Not Valid*';
        }
}
function qunamee(){
        
  let qname=document.querySelector('#quname').value;
  if(qname.match(/^[A-Za-z ]+$/)){
      var b= document.querySelector('#v8');
    b.style.color="green";
    b.innerHTML='Valid*';
    
  }else{
      var b= document.querySelector('#v8');
    b.style.color="red";
    b.innerHTML='Not Valid*';
  }
}
        
    function removespantext(){
        document.querySelector('#v7').innerHTML='';
    }
    function removespantext1(){
        document.querySelector('#valid').innerHTML='';
        document.querySelector('#valid1').innerHTML='';
    }
    function removespantext2(){
       document.querySelector('#v1').innerHTML='';
        document.querySelector('#v2').innerHTML='';
      
    }
    function removespantext3(){
         document.querySelector('#v3').innerHTML='';
        document.querySelector('#v4').innerHTML='';
        document.querySelector('#v5').innerHTML='';
        document.querySelector('#v6').innerHTML='';
       
     }
     function removespantext(){
      document.querySelector('#v8').innerHTML='';
  }
    
     function s1(){
      document.querySelector('#subcatagory').removeAttribute('disabled')
     }
     function s2(){
      document.querySelector('#supplier').removeAttribute('disabled')
     }
     function s3(){
      document.querySelector('#pname').removeAttribute('disabled')
     }
     function s4(){
      document.querySelector('#pname').removeAttribute('disabled')
     }
     function s5(){
      document.querySelector('#quantity').removeAttribute('disabled')
     }
     function s6(){
      document.querySelector('#company').removeAttribute('disabled')
     }
     function s7(){
      document.querySelector('#pprice').removeAttribute('disabled')
     }
     function s8(){
      document.querySelector('#supply').removeAttribute('disabled')
     }
     function s9(){
      document.querySelector('#img').removeAttribute('disabled')
     }
     function s10(){
      document.querySelector('#statu').removeAttribute('disabled')
     }
     function s11(){
      document.querySelector('#status').removeAttribute('disabled')
     }
     