var input="bobo";
var result=isSquareFree(input);
alert(result);
function isSquareFree (text){
  for(var i=0;i<text.length;i++){
    for(var j=i+1;j<text.length;j++){
      if(text[i]==text[j]){
      return  'not square free';
      }
    }
   }
return 'square free';
}
