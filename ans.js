

// // 	Write a program which can minimize the duplicates value of an array.. 
// // You have to minimize code not array .. 
// // For example... 
// // Input : 
// // a=['a67', 'b68', 'j24', 'k25', 'a67', 'b68' ,'a67', 'b68', 'j24', 'k25', 'a67', 'b68'];
// // output :
// // needs to return 
// // a[0],a[4],a[6],a[10]=a67
// // a[1],a[5],a[7],a[11]=b68
// // a[2],a[8]=j24
// // a[3],a[9]=k25


//Solution in Javascript

var a=['a67', 'b68', 'j24', 'k25', 'a67', 'b68' ,'a67', 'b68', 'j24', 'k25', 'a67', 'b68'];

var result = new Array();

result['a67'] = 0;
result['b68'] = 0;
result['j24'] = 0;
result['k25'] = 0;

a.forEach(function (value) {
	result[value]++; 
}); 

console.log(result);
for(key in result){
	console.log(result);
	for (val in a) {
		if (key === a[val]) {
			x = 0;
			f = key;
			position = f[0]+"["+val+"]";
			console.log(position);
			result[key] = result[key] - 1;
			if (x < result[key]){
				console.log(',');
			}
		}
	}
	console.log('='+key+'<br>');
}

