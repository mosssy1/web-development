function solve(arr) {
    if (arr[0] == '+') {
      return Number(arr[1]) + Number(arr[2]) 
    } else if (arr[0] == '-') {
      return Number(arr[1]) - Number(arr[2]) 
    } else if (arr[0] == '*') {
      return Number(arr[1]) * Number(arr[2]) 
    } else if (arr[0] == '/') {
      return Number(arr[1]) / Number(arr[2]) 
    }
  }
  
  function calc(str) {

    let inp = str.split(''); //разделяем на массив элементов
    let i = 0;

    while (i < inp.length) { //если после знака не идёт пробел -вставляем
      if ((inp[i] == '(' | inp[i] == '+' | inp[i] == '-' | inp[i] == '*' | inp[i] == '/') & inp[i + 1] != ' ') {
        inp.splice(i + 1, 0, ' ');
      }
      i++;
    }

    i = 0;
    while (i < inp.length) { //если перед знаком идёт пробел -вставляем
      if (inp[i] == ')' & inp[i - 1] != ' ') {
        inp.splice(i, 0, ' ');
      }
      i++;
    }

    inp = inp.join('').split(' '); //соединяем обратно и разделяем в массив по пробелам 

    i = 0;
    let openeningBracketsAmount = 0;
    while (i < inp.length) { //считаем количество (
      if (inp[i] == '(') {
        openeningBracketsAmount++;
      }
      i++;
    }
  
    i = 0;
    while (i < openeningBracketsAmount) {
      let pos = inp.lastIndexOf('(');
      inp[pos] = solve(inp.slice(pos + 1, pos + 4));
      inp.splice(pos + 1, 4);
      i++;
    }
  
    return solve(inp);
  }
  
  console.log('Input: + 3 5');
  console.log(calc('+ 3 5'));
  console.log('Input: * ( + (- 6 ( - 2 ( / 10 10)) 6) ( + ( / 8 ( + 2 2 )) 3)');
  console.log(calc('* ( + (- 6 ( - 2 ( / 10 10 ) ) ) 6 ) ( + ( / 8 ( + 2 2 ) ) 3 )'));
  console.log('Input: / (* (+ 3 3) 5) 3');
  console.log(calc('/ (* (+ 3 3) 5) 3'));