//================ 1
document.write("Привет пользователь!");
br();
//================ /1


//================ 2
var firstName =  "Alex";
var lastName = firstName;

document.write(lastName);
br();
//================ /2


//================ 3
var name = 'Максим';
var surname = 'Дорошенко';
var age = 23;
var levelOfEducation = 'Master';
var hobby = 'js';
//================ /3


//================ 4
/*
    Неопределённая переменная X, вызовет ошибку.
    Скрипт не выполнится.
    
    Без неё на экран выведется 1, 4, 4.
*/
//================ /4


//================ 5
var inputOne = prompt('Введите первое число:');
var inputTwo = prompt('Введите второе число:');

alert('Ваш ответ: ' + (Number(inputOne) + Number(inputTwo)));
//================ /5

//================ Functions
function br(){
    document.write("<br><hr>");
}
//================ /Functions