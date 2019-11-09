thirdhighest([1,2,3,4,5,6,7])

function thirdhighest(param)
{
 	if(typeof param != "object")
    {
      alert("Parameter should be an array!")
    }
    else
    {
       if(param.length < 3)
       {
          alert("Minimal array length is 3!")
       }
   	
       const max = Math.max.apply(null, param); 
       param.splice(param.indexOf(max), 1);
       param.splice(param.indexOf(max), 1);
       const result = Math.max.apply(null, param);
  	 
       if(result !== result)
       {
         console.log(0)
       }
       else
       {
         console.log(result)
       }
    } 
}