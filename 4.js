printWords('ARKADEMY');

function printWords(text) 
{
	const words = text.split("");
    const newFirst = 'A';
    const newSentence = [newFirst].concat(words); 

  	for(let i = 0; i < newSentence.length; i++)
    {
        newSentence[i];
    }
  	for(let z = 0; z < newSentence.length; z++)
    { 
      console.log(newSentence[z]);
    }
}
