createMatrix(3)

function createMatrix(length)
{
  	var arr = [[1,2,3],[4,5,6],[7,8,9]];
	var n = length;
    var diag1 = 0;
    var diag2 = 0;    
  	for(var i=0; i < n; i++)
    {        	 
      for(var j=0; j < n;j++)
      {
        if(i === j) { 
            diag1 += arr[i][j];
        }           
        if(i + j === n - 1){
            diag2 += arr[i][j];
        }
      }    
    }
  
   const result = diag1 + diag2;
   console.log(result);
}