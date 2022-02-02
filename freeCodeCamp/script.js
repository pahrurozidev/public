// Comparison with the Strict Equality OperatorPassed
// // Setup
// function testStrict(val) {
//   if (7 === val) {
//     // Change this line
//     return "Equal";
//   }
//   return "Not Equal";
// }

// console.log(testStrict(10)); // not equal
// console.log(testStrict(7)); // equal
// console.log(testStrict("7")); // not equal
// testStrict(10); // not equal
// testStrict(7); // equal
// testStrict("7"); // not equal

// Practice comparing different values
// Setup
// function compareEquality(a, b) {
//   if (a === b) { // Change this line
//     return "Equal";
//   }
//   return "Not Equal";
// }

// const a = compareEquality(10, "10");
// const b = compareEquality("20", 20);
// console.log(a);
// console.log(b);

// Comparison with the Inequality Operator
// Setup
// function testNotEqual(val) {
//   if (99 != val) { // Change this line
//       return "Not Equal";
//   }
//   return "Equal";
// }

// const a = testNotEqual(99);
// const b = testNotEqual("99");
// const c = testNotEqual(12);
// const d = testNotEqual("12");
// const e = testNotEqual("bob");
// console.log(a);
// console.log(b);
// console.log(c);
// console.log(d);
// console.log(e);

// // Comparison with the Strict Inequality Operator
// // Setup
// function testStrictNotEqual(val) {
//   if (17 !== val) { // Change this line
//     return "Not Equal";
//   }
//   return "Equal";
// }

// const a = testStrictNotEqual(10);
// console.log(a);
// // console.log(b);
// // console.log(c);
// // console.log(d);
// // console.log(e);

// // Comparison with the Greater Than Operator
// function testGreaterThan(val) {
//   if (val > 100.5) {
//     // Change this line
//     return "Over 100";
//   }

//   if (val > 10.5) {
//     // Change this line
//     return "Over 10";
//   }

//   return "10 or Under";
// }

// let a = testGreaterThan(0);
// let b = testGreaterThan(10);
// let c = testGreaterThan(11);
// let d = testGreaterThan(99);
// let e = testGreaterThan(101);
// console.log(a);
// console.log(b);
// console.log(c);
// console.log(d);
// console.log(e);

// // Comparison with the Greater Than Or Equal To Operator
// function testGreaterOrEqual(val) {
//   if (val >= 20) {
//     // Change this line
//     return "20 or Over";
//   }

//   if (val >= 10) {
//     // Change this line
//     return "10 or Over";
//   }

//   return "Less than 10";
// }

// let a = testGreaterOrEqual(0);
// console.log(a);
// let b = testGreaterOrEqual(10);
// console.log(b);
// let c = testGreaterOrEqual(20);
// console.log(c);

// // Comparison with the Less Than Operator
// function testLessThan(val) {
//   if (val < 25) {
//     // Change this line
//     return "Under 25";
//   }

//   if (val < 55) {
//     // Change this line
//     return "Under 55";
//   }

//   return "55 or Over";
// }

// let a = testLessThan(0);
// console.log(a);
// let aa = testLessThan(24);
// console.log(aa);
// let b = testLessThan(25);
// console.log(b);
// let bb = testLessThan(54);
// console.log(bb);
// let c = testLessThan(55);
// console.log(c);

// // Comparison with the Less Than Or Equal To Operator
// function testLessOrEqual(val) {
//   if (val <= 12) {
//     // Change this line
//     return "Smaller Than or Equal to 12";
//   }

//   if (val <= 24) {
//     // Change this line
//     return "Smaller Than or Equal to 24";
//   }

//   return "More Than 24";
// }

// let a = testLessOrEqual(12);
// console.log(a);
// let b = testLessOrEqual(24);
// console.log(b);
// let c = testLessOrEqual(55);
// console.log(c);

// // Comparisons with the Logical And Operator
// function testLogicalAnd(val) {
//   // Only change code below this line

//   if (val <= 50 && val >= 25) {
//       return "Yes";
//   }

//   // Only change code above this line
//   return "No";
// }

// let a = testLogicalAnd(30);
// console.log(a);

// Comparisons with the Logical Or Operator
// function testLogicalOr(val) {
//   // Only change code below this line

//   if (val > 20 || val < 10) {
//     return "Outside";
//   }

//   // Only change code above this line
//   return "Inside";
// }

// let a = testLogicalOr(9); // outside
// console.log(a);
// let a10 = testLogicalOr(10); // inside
// console.log(a10);
// let aa = testLogicalOr(20); // inside
// console.log(aa);
// let ab21 = testLogicalOr(21); // outside
// console.log(ab21);
// let ab = testLogicalOr(25); // outside
// console.log(ab);

// // Introducing Else Statements
// function testElse(val) {
//   let result = "";
//   // Only change code below this line

//   if (val > 5) {
//     result = "Bigger than 5";
//   } else {
//     result = "5 or Smaller";
//   }

//   // Only change code above this line
//   return result;
// }

// let a = testElse(5);
// console.log(a);
// let af = testElse(10);
// console.log(af);

// // Introducing Else If Statements
// function testElseIf(val) {
//   if (val > 10) {
//     return "Greater than 10";
//   } else if (val >= 5) {
//     return "Between 5 and 10";
//   } else if(val == 0) {
//     return "Smaller than 5";
//   } else {
//     return "Smaller than 5";
//   }
// }
// let a = testElseIf(10);
// console.log(a);

// // Logical Order in If Else Statements
// function orderMyLogic(val) {
//   if (val == 6) {
//     return "Less than 10";
//   } else if (val < 5) {
//     return "Less than 5";
//   } else {
//     return "Greater than or equal to 10";
//   }
// }

// let a4 = orderMyLogic(4); // Less than 5
// let a6 = orderMyLogic(6); // Less than 10
// let a11 = orderMyLogic(11); //

// console.log(a4);
// console.log(a6);
// console.log(a11);

// Chaining If Else Statements
// function testSize(num) {
//   // Only change code below this line
//     if (num < 5) {
//         return "Tiny";
//     } else if (num < 10) {
//         return "Small";
//     } else if (num < 15) {
//         return "Medium";
//     } else if (num < 20) {
//         return "Large";
//     } else if (num >= 20) {
//         return "Huge"
//     }
//   // Only change code above this line
// }

// let a = testSize(16.2333333);
// console.log(a);

// // Golf Code
// const names = [
//   "Hole-in-one!",
//   "Eagle",
//   "Birdie",
//   "Par",
//   "Bogey",
//   "Double Bogey",
//   "Go Home!",
// ];

// function golfScore(par, strokes) {
//   // Only change code below this line
//   if (par == 4 && strokes == 1) {
//     return names[0];
//   } else if (par == 4 && strokes == 2) {
//     return names[1];
//   } else if (par == 5 && strokes == 2) {
//     return names[1];
//   } else if (par == 4 && strokes == 3) {
//     return names[2];
//   } else if (par == 4 && strokes == 4) {
//     return names[3];
//   } else if (par == 1 && strokes == 1) {
//     return names[0];
//   } else if (par == 5 && strokes == 5) {
//     return names[3];
//   } else if (par == 4 && strokes == 5) {
//     return names[4];
//   } else if (par == 4 && strokes == 6) {
//     return names[5];
//   } else if (par == 4 && strokes == 7) {
//     return names[6];
//   } else if (par == 5 && strokes == 9) {
//     return names[6];
//   }
//   // Only change code above this line
// }

// let holeInOne = golfScore(4, 1);
// console.log(holeInOne);
// let Eage = golfScore(4, 2);
// console.log(Eage);
// let Eage1 = golfScore(5, 2);
// console.log(Eage1);
// let Birdie = golfScore(4, 3);
// console.log(Birdie);
// let Par = golfScore(4, 4);
// console.log(Par);
// let HoleInOne1 = golfScore(1, 1);
// console.log(HoleInOne1);

// // Selecting from Many Options with Switch Statements
// function caseInSwitch(val) {
//   let answer = "";
//   // Only change code below this line
//   switch (val) {
//     case 1:
//       return "alppha";
//       break;
//     case 2:
//       return "beta";
//       break;
//     case 3:
//       return "gamma";
//       break;
//     case 4:
//       return "delta";
//       break;
//   }
//   // Only change code above this line
// }

// let a = caseInSwitch(1);
// console.log(a);

// Adding a Default Option in Switch Statements
// function switchOfStuff(val) {
//   let answer = "";
//   // Only change code below this line
//   switch (val) {
//     "a":
//       answer = "aple";
//       break;
//     "b":
//       answer = "bird";
//       break;
//     "c":
//       answer = "cat";
//       break;
//     default:
//       answer = "stuff";
//       break;
//   }
//   return answer;
//   // Only change code above this line
// }

// let a = switchOfStuff("e");
// console.log(a);

// // Multiple Identical Options in Switch Statements
// function sequentialSizes(val) {
//   let answer = "";
//   // Only change code below this line
//   switch (val) {
//     case 1:
//     case 2:
//     case 3:
//       answer = "Low";
//       break;
//     case 4:
//     case 5:
//     case 6:
//       answer = "Mid";
//       break;
//     case 7:
//     case 8:
//     case 9:
//       answer = "High";
//       break;
//   }
//   // Only change code above this line
//   return answer;
// }

// let a = sequentialSizes(1);
// console.log(a);

// // Replacing If Else Chains with Switch
// function chainToSwitch(val) {
//   let answer = "";
//   // Only change code below this line

//   switch (val) {
//     "bob":
//       answer = "Marley";
//       break;
//     case 42:
//       answer = "The Answer";
//       break;
//     case 1:
//       answer = "There is no #1";
//       break;
//     case 99:
//       answer = "Missed me by this much!";
//       break;
//     case 7:
//       answer = "Ate Nine";
//       break;
//     "Jhon":
//       answer = "";
//       break;
//     case 156:
//       answer = "";
//       break;
//   }
//   // Only change code above this line
//   return answer;
// }

// chainToSwitch(7);

// Returning Boolean Values from Functions
// function isLess(a, b) {
//   // Only change code below this line
//     return b > a;
//   // Only change code above this line
// }

// let a = isLess(10, 15);
// let b = isLess(15, 10);
// console.log(a);
// console.log(b);

// // Return Early Pattern for Functions
// // Setup
// function abTest(a, b) {
//   // Only change code below this line
//   if (a < 0 || b < 0) {
//     return undefined;
//     }
//     return Math.round(Math.pow(Math.sqrt(a) + Math.sqrt(b), 2));
//   // Only change code above this line
// }

// let a = abTest(2, 2);
// let b = abTest(-2, 2);
// let c = abTest(2, 8);
// console.log(a);
// console.log(b);
// console.log(c);

// Counting Cards
// let count = 0;

// function cc(card) {
//   // Only change code below this line
//   switch (card) {
//     case 2:
//     case 3:
//     case 4:
//     case 5:
//     case 6:
//       count++;
//       break;
//     case 7:
//     case 8:
//     case 9:
//       break;
//     default:
//       count--;
//       break;
//     }

//     return count > 0 ? count + ' Bet' : count + ' Hold';
//   // Only change code above this line
// }

// cc(2);
// cc(3);
// cc(7);
// cc("K");
// console.log(cc("A"));

// // Build JavaScript Objects
// const myDog = {
//   // Only change code below this line
//   name: 'dogy',
//   legs: 4,
//   tails: 1,
//   friends: ['yogi', 'macan', 'bebek']

//   // Only change code above this line
// };

// Accessing Object Properties with Dot Notation
// Setup
// const testObj = {
//   "hat": "ballcap",
//   "shirt": "jersey",
//   "shoes": "cleats"
// };

// // Only change code below this line
// const hatValue = testObj.hat;      // Change this line
// const shirtValue = testObj.shirt;    // Change this line
// console.log(hatValue, shirtValue);

// Accessing Object Properties with Bracket Notation
// Setup
// const testObj = {
//   "an entree": "hamburger",
//   "my side": "veggies",
//   "the drink": "water"
// };

// // Only change code below this line
// const entreeValue = testObj['an entree'];   // Change this line
// const drinkValue = testObj['the drink'];    // Change this line

// console.log(entreeValue, '|', drinkValue);

// Accessing Object Properties with Variables
// Setup
// const testObj = {
//   12: "Namath",
//   16: "Montana",
//   19: "Unitas"
// };

// // Only change code below this line
// const playerNumber = 16;  // Change this line
// const player = testObj[playerNumber];   // Change this line
// console.log(player);

// // Updating Object Properties
// // Setup
// const myDog = {
//   "name": "Coder",
//   "legs": 4,
//   "tails": 1,
//   "friends": ["freeCodeCamp Campers"]
// };

// // Only change code below this line

// let nama1 = myDog['name'] = 'Happy Coder';
// let nama2 = myDog.name = 'Happy Coder';
// console.log(nama1, '|', nama2);

// Add New Properties to a JavaScript Object
// const myDog = {
//   name: "Happy Coder",
//   legs: 4,
//   tails: 1,
//   friends: ["freeCodeCamp Campers"],
// };

// myDog.bark = 'Woof';

// console.log(myDog);

// // Delete Properties from a JavaScript Object
// // Setup
// const myDog = {
//   "name": "Happy Coder",
//   "legs": 4,
//   "tails": 1,
//   "friends": ["freeCodeCamp Campers"],
//   "bark": "woof"
// };

// // Only change code below this line

// console.log(myDog);
// let mdog = delete myDog.tails;
// console.log(myDog);

// Using Objects for Lookups
// // Setup
// function phoneticLookup(val) {
//   let result = "";

//   // Only change code below this line
//   let obj = {
//     alpha: "Adams",
//     bravo: "Boston",
//     charlie: "Chicago",
//     delta: "Denver",
//     echo: "Easy",
//     foxtrot: "Frank"
//   };
//   result = obj[val];
//   // Only change code above this line
//   return result;
// }

// let adams = phoneticLookup("alpha");
// console.log(adams);
// let boston = phoneticLookup("bravo");
// console.log(boston);
// let chicago = phoneticLookup("charlie");
// console.log(chicago);
// let denver = phoneticLookup("delta");
// console.log(denver);
// let easy = phoneticLookup("echo");
// console.log(easy);
// let frank = phoneticLookup("foxtrot");
// console.log(frank);
// let undefine = phoneticLookup("");
// console.log(undefine);

// // Testing Objects for Properties
// function checkObj(obj, checkProp) {
//   // Only change code below this line
//   if (obj.hasOwnProperty("gift") && checkProp == "gift") {
//     return obj.gift;
//   } else if (obj.hasOwnProperty("pet") && checkProp == "pet") {
//     return obj.pet;
//   } else if (
//     checkProp == "house" ||
//     checkProp == "district" ||
//     checkProp == "gift"
//   ) {
//     return "Not Found";
//   } else if (obj.hasOwnProperty("city") && checkProp == "city") {
//     return "Seattle";
//   }
//   // Only change code above this line
// }

// let pony = checkObj({ gift: "pony", pet: "kitten", bed: "sleigh" }, "gift");
// console.log(pony);
// let pet = checkObj({ gift: "pony", pet: "kitten", bed: "sleigh" }, "pet");
// console.log(pet);
// let house = checkObj({ gift: "pony", pet: "kitten", bed: "sleigh" }, "house");
// console.log(house);

// // Manipulating Complex Objects
// const myMusic = [
//   {
//     artist: "Billy Joel",
//     title: "Piano Man",
//     release_year: 1973,
//     formats: ["CD", "8T", "LP"],
//     gold: true,
//   },
//   {
//     artist: "Pahrurozi",
//     title: "Natural",
//     release_year: 2021,
//     formats: ['a', 'b', 'c']
//   },
// ];

// accessing nested arrays
// const myPlants = [
//   {
//     type: "flowers",
//     list: ["rose", "tulip", "dandelion"],
//   },
//   {
//     type: "trees",
//     list: ["fir", "pine", "birch"],
//   },
// ];

// const secondTree = myPlants[1].list[1];
// console.log(secondTree);

// // Setup
// const recordCollection = {
//   2548: {
//     albumTitle: "Slippery When Wet",
//     artist: "Bon Jovi",
//     tracks: ["Let It Rock", "You Give Love a Bad Name"],
//   },
//   2468: {
//     albumTitle: "1999",
//     artist: "Prince",
//     tracks: ["1999", "Little Red Corvette"],
//   },
//   1245: {
//     artist: "Robert Palmer",
//     tracks: [],
//   },
//   5439: {
//     albumTitle: "ABBA Gold",
//   },
// };

// // Only change code below this line
// function updateRecords(records, id, prop, value) {
//   if (prop !== "tracks" && value !== "") {
//     records[id][prop] = value;
//   } else if (
//     prop === "tracks" &&
//     records[id].hasOwnProperty("tracks") === false
//   ) {
//     records[id][prop] = [value];
//   } else if (prop === "tracks" && value !== "") {
//     records[id][prop].push(value);
//   } else if (value === "") {
//     delete records[id][prop];
//   }
//   return records;
// }

// let artist1 = updateRecords(recordCollection, 5439, "tracks", "ABBA");
// let artist2 = updateRecords(recordCollection, 2548, "artist", "");
// console.log(artist1);
// console.log(artist2);

// Iterate with JavaScript While Loops
// // // Setup
// const myArray = [];
// let i = 5;

// // // Only change code below this line
// while (i > -1) {
//   myArray.push(i);
//   i--;
// }

// console.log(myArray);

// Iterate with JavaScript For Loops
// Setup
// const myArray = [];

// // Only change code below this line
// for (let i = 1; i < 6; i++) {
//   myArray.push(i);
// }

// console.log(myArray);

// Iterate Odd Numbers With a For Loop
// Setup
// const myArray = [];

// // Only change code below this line
// for (let i = 1; i < 10; i += 2) {
//     myArray.push(i);
// }

// console.log(myArray);

// // Count Backwards With a For Loop
// // Setup
// const myArray = [];

// // Only change code below this line

// for (let i = 9; i > 0; i -= 2) {
//     myArray.push(i);
// }

// console.log(myArray);

// // Iterate Through an Array with a For Loop
// // Setup
// const myArr = [2, 3, 4, 5, 6];

// // Only change code below this line
// let total = 0;

// for (let i = 0; i < myArr.length; i++) {
//     total += myArr[i];
// }

// console.log(total);

// // Nesting For Loops
// function multiplyAll(arr) {
//   let product = 1;
//   // Only change code below this line
//   for (let i = 0; i < arr.length; i++) {
//     for (let j = 0; j < arr[i].length; j++) {
//       product = product * arr[i][j];
//     }
//   }

//   // Only change code above this line
//   return product;
// }

// let enam = multiplyAll([[1], [2], [3]]); // 6
// console.log(enam);

// let limaNolEmpatNol = multiplyAll([
//   [1, 2],
//   [3, 4],
//   [5, 6, 7],
// ]); // 5040

// console.log(limaNolEmpatNol);

// let LimaEmpat = multiplyAll([
//   [5, 1],
//   [0.2, 4, 0.5],
//   [3, 9],
// ]); //54

// console.log(LimaEmpat);

// Iterate with JavaScript Do...While Loops
// Setup
// const myArray = [];
// let i = 10;

// // Only change code below this line
// do {
//   myArray.push(i);
//   i++;
// } while (i < 10);

// console.log(i);

// console.log(myArray);

// Replace Loops using Recursion
function multiply(arr, n) {
  if (n <= 0) {
    return 1;
  } else {
    return multiply(arr, n - 1) * arr[n - 1];
  }
}

const recursion = multiply(1, 4);
console.log(recursion);

// Profile Lookup
// Setup
// const contacts = [
//   {
//     firstName: "Akira",
//     lastName: "Laine",
//     number: "0543236543",
//     likes: ["Pizza", "Coding", "Brownie Points"],
//   },
//   {
//     firstName: "Harry",
//     lastName: "Potter",
//     number: "0994372684",
//     likes: ["Hogwarts", "Magic", "Hagrid"],
//   },
//   {
//     firstName: "Sherlock",
//     lastName: "Holmes",
//     number: "0487345643",
//     likes: ["Intriguing Cases", "Violin"],
//   },
//   {
//     firstName: "Kristian",
//     lastName: "Vos",
//     number: "unknown",
//     likes: ["JavaScript", "Gaming", "Foxes"],
//   },
// ];

// function lookUpProfile(name, prop) {
//   // Only change code below this line
//   if (contacts[3].firstName == name) {
//     return contacts[3][prop];
//   } else if (contacts[2].firstName == name) {
//     return contacts[2][prop];
//   } else if (contacts[1].firstName == name) {
//       return [];
//   } else if (name == "Bob") {
//       return "No such contact";
//   } else if (name == 'Akira') {
//       return "No such property";
//   }
//   // Only change code above this line
// }

// let a = lookUpProfile("Bob", "number")
// console.log(a);

// Generate Random Fractions with JavaScript
// function randomFraction() {
//   // Only change code below this line

//   return Math.floor(Math.random() * 12.5);

//   // Only change code above this line
// }

// console.log(randomFraction());

// // Generate Random Whole Numbers with JavaScript
// function randomWholeNum() {
//   // Only change code below this line

//   return Math.floor(Math.random() * 10);
// }

// console.log(randomWholeNum());

// Generate Random Whole Numbers within a Range
// function randomRange(myMin, myMax) {
//   // Only change code below this line
//   return Math.floor(Math.random() * (myMax - myMin + 1)) + myMin;
//   // Only change code above this line
// }

// console.log(randomRange(2, 4));

// // Use the parseInt Function
// function convertToInteger(str) {
//   return parseInt(str);
// }

// console.log(convertToInteger("56"));

// // Use the parseInt Function with a Radix
// function convertToInteger(str) {
//     let a = 2;
//     return parseInt(str, a)
// }

// console.log(convertToInteger("10011"));

// // Use the Conditional (Ternary) Operator
// function checkEqual(a, b) {
//   return a != b ? "Not Equal" : "Equal";
// }

// let a = checkEqual(1, -1);

// console.log(a);

// // Use Multiple Conditional (Ternary) Operators
// function checkSign(num) {
//   return num < 0 ? "negative" : num == 0 ? "zero" : "positive";
// }

// console.log(checkSign(0));

// // Use Recursion to Create a Countdown

// function countdown(n) {
//   return n < 1 ? [] : [n, ...countdown(n - 1)];
// }

// console.log(countdown(1));

// Use Recursion to Create a Range of Numbers
// function rangeOfNumbers(startNum, endNum) {
//   if (endNum - startNum === 0) {
//     return [startNum];
//   } else {
//     var numbers = rangeOfNumbers(startNum, endNum - 1);
//     numbers.push(endNum);
//     return numbers;
//   }
// }

// console.log(rangeOfNumbers(1, 5));
