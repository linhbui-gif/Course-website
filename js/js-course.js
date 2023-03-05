const courseJsContent = [
    {
        "name": "Getting Started",
        "child": [
            "What is JavaScript",
            "Setting Up the Development Environment",
            "JavaScript in Browsers",
            "Separation of Concerns",
            "JavaScript in Node",
            "JavaScript in Node"          
        ]
    },
    {
        "name": "Basics",
        "child": [
            "Variables",
            "Constants",
            "Primitive Types",
            "Dynamic Typing",
            "Objects",
            "Arrays",
            "Functions",
            "Types of Functions",
        ]
    },
    {
        "name": "Operators",
        "child": [
            "JavaScript Operators",
            "Arithmetic Operators",
            "Assignment Operators",
            "Comparison Operators",
            "Equality Operators",
            "Ternary Operator",
            "Logical Operators",
            "Logical Operators with Non-booleans",
            "Bitwise Operators",
            "Operators Precedence",
            "Exercise - Swapping Variables",
        ]
    },
    {
        "name": "Control Flow",
        "child": [
            "If...else",
            "Switch...case",
            "For",
            "While",
            "Do...while",
            "Infinite Loops",
            "For...in",
            "For...off",
            "Break and Continue",
            "Exercise 1- Max of Two Numbers",
            "Exercise 2- Landscape or Portrait",
            "Exercise 3- FizzBuzz",
            "Exercise 4- Demerit Points",
            "Exercise 5- Even and Odd Numbers",
            "Exercise 6- Count Truthy",
            "Exercise 7- String Properties",
            "Exercise 8- Sum of Multiples of 3 and 5",
            "Exercise 9- Grade",
            "Exercise 10- Stars",
            "Exercise- Prime Numbers",
        ]
    },
    {
        "name": "Object",
        "child": [
            "Basics",
            "Factory Functions",
            "Constructor Functions",
            "Dynamic Nature of Objects",
            "Constructor Property",
            "Functions are Objects",
            "Value vs Reference Types",
            "Enumerating Properties of an Object",
            "Cloning an Object",
            "Garbage Collection",
            "Math",
            "String",
            "Template Literals",
            "Date",
            "Exercise 1- Address Object",
            "Exercise 2- Factory and Constructor Functions",
            "Exercise 3- Object Equality",
            "Exercise 4- Blog Post Object",
            "Exercise 5- Constructor Functions",
            "Exercise 6- Price Range Object",
        ]
    },
    {
        "name": "Arrays",
        "child": [
            "Introduction",
            "Adding Elements",
            "Finding Elements (Primitives)",
            "Finding Elements (Reference Types)",
            "Arrow Functions",
            "Removing Elements",
            "Emptying an Array",
            "Combining and Slicing Arrays",
            "The Spread Operator",
            "Iterating an Array",
            "Joining Arrays",
            "Sorting Arrays",
            "Testing the Elements of an Array",
            "Filtering an Array",
            "Mapping an Array",
            "Reducing an Array",
            "Exercise 1- Array from Range",
            "Exercise 2- Includes",
            "Exercise 3- Except",
            "Exercise 4- Moving an Element",
            "Exercise 5- Count Occurrences",
            "Exercise 6- Get Max",
            "Exercise 7- Movies",          
        ]
    },
    {
        "name": "Functions",
        "child": [
            "Function Declarations vs Expressions",
            "Hoisting",
            "Arguments",
            "The Rest Operator",
            "Default Parameters",
            "Getters and Setters",
            "Try and Catch",
            "Local vs Global Scope",
            "Let vs Var",
            "The this Keyword",
            "Changing this",
            "Exercise 1- Sum of Arguments",
            "Exercise 2- Area of Circle",
            "Exercise 3- Error Handling",
        ]
    },
    {
        "name": "Projects",
        "child": [
            "Color Flipper",
            "Counter",
            "Reviews Slider",
            "Navbar Menu",
            "Questions Step",
            "Video",
            "Scroll",
            "Tabs",
            "Countdown",
            "Lorem Ipsum",
            "GroceryBud",
            "Slider",
            "Modal"
        ]
    },
];


let courseContent = '';
for (let i = 0; i < courseJsContent.length; i++) {
    courseContent += ` <div class='col-sm-12 course-section'>
            <div class='section-title'>
                <span class="section-lock">
                    <i class="fa fa-lock"></i>&nbsp;
                </span>
                Chapter ${i + 1}: ${courseJsContent[i].name}
            </div>`
    courseContent += `<ul class='section-list'>`;
    for (let j = 0; j < courseJsContent[i].child.length; j++) {
        courseContent += `
        <li class='section-item'>
            <a class='item'
                <span class='lecture-icon'>
                    <i class='fa fa-youtube-play'></i>
                </span>
                ${j+1}- ${courseJsContent[i].child[j]}
            </a>
        </li>`;
    }

    courseContent +=  '</ul></div>';
}

document.getElementById("content_wrapper").innerHTML = courseContent;

