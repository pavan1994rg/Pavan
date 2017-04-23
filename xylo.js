  var text=[12,12,6,5,7];
  console.log(text);
  var result=countkeys(text);
  console.log(result);

function countkeys(text){
  var key=[];
  for(var i=0;i<text.length;i++){
      if(text[i]%7==text[i]){
        key.push(text[i]);
      }
      else if(text[i]%7==0){
        key.push(7);
        }
      else {
        key.push(text[i]%7);
      }
    }

var unique = key.filter(function(elem, index, self) {
    return index == self.indexOf(elem);
})
return unique.length;
}
