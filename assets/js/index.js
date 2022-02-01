let myString = "My First String";

let myNumber = 10;
let myNumber2 = 5;

let result = myNumber + myNumber2;


console.log(result);


console.log("hello world")
let totaal = 1 + 3


if (1 + 1 === 2) {
    console.log("it just works")
}

let random =Math.random();

for (let i = 1; i <= 10; i++) {
    console.log("hallo daar")
    console.log(i)
}

for (let aftellen = 100; aftellen >= 0; aftellen -= 10){
    console.log(aftellen)
}

for (let raar = 10; raar <= 1000; raar *= 3) {
    console.log(raar)
}

const people = ["Scooby", "Velma", "Daphne", "Shaggy", "Fred"]; //DONT TOUCH THIS LINE!

for (let i = 0; i < people.length; i++) {
    console.log(i, people[i].toUpperCase())
}

for (let i = 0; i < people.length; i++) {
    console.log(people[i].toUpperCase())
}

for (let a = 1; a <= 15; a++) {
    console.log(`a is: ${a}`)
    for (let b = 1; b < 9; b++){
        console.log(`     b is: ${b}`)
    }
}



const allLinks = document.querySelectorAll("a");

// for(let link of allLinks){
//     link.innerText = "I AM A LINK"
// }


let count = 5;
while (count <22) {
    count++
    console.log(count)
}


// const GEHEIM = "ABC";

// let guess = prompt("enter de geheime code....");
// while (guess !== GEHEIM) {
//     guess = prompt ("enter de geheime code.... nog een keer");
// }
// console.log("gefeliciteerd")



// let input = prompt("hallo daar!")
// while (true) {
//     input = prompt(input);
//     if (input.toLowerCase() === "stop met kopieren aub")
//     break
// }

for(let optellen = 111; optellen < 222; optellen++) {
    console.log(optellen);
    if(optellen === 202) break;
}



// const stijgen = [1,2,3,4,5,6,7,8,9];
// for(stijg of stijgen);{
//     console.log(stijg$({stijgen[stijg]}));
//     console.log(stijg++);
// }
// // //     link.innerText = "I AM A LINK"
// // }


// let count = 5;
// while (count <22) {
//     count++
//     console.log(count)
// // }

// uitkomst 
// 1
// 4
// 9
// 16
// 25
// 36
// 49
// 64
// 81

for (let i = 1; i <= 10; i++) {
    console.log("hallo daar")
}

function rant(str, numTimes) {
    let result = '';
    for (let i = 0; i <  numTimes; i++) {
        result += str;

    }
    console.log(result);
}

// function rant(str) {
//     console.log(str.toUpperCase());
//     console.log(str.toUpperCase());
//     console.log(str.toUpperCase());
// }

// function isSnakeEyes(str)



const fullNames = [{first: 'Albus', last: 'Dumbledore'}, {first: 'Harry', last: 'Potter'}, {first: 'Hermione', last: 'Granger'}, {first: 'Ron', last: 'Weasley'}, {first: 'Rubeus', last: 'Hagrid'}, {first: 'Minerva', last: 'McGonagall'}, {first: 'Severus', last: 'Snape'}];
// const firstNames = fullNames.map(function (firstNames ) {
//     return fullNames.first;
// })
fullNames.forEach(function (firstNames) {
    console.log('${firstNames}')
})





// const movies = [
//     { 
//         title: 'Amadeus',
//         score: 99

//     },
// ]
// const titles = movies.map(function (movie ) {
//     return movie.title.toUpperCase();
// })


// var app = new Vue({
//     el: '#app',
//     data: {
//         product: 'Yoga mat'
//         image,: "home/cg9/sites/webshop/assets/images/yogamat.jpeg"
//     }
// })

// Vue.config.devtools = true
// Vue.config.productionTip = false
