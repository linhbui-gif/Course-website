const coursePhpContent = [
    {
        "name": "PHP Basics",
        "child": [
            "Embedding PHP Code in Your Web Pages",
            "Commenting Your Code",
            "Outputting Data to the Browser",
            "PHP’s Supported Data Types",
            "Identifiers",
            "Variables",
            "Constants",
            "Expressions",
            "String Interpolation",
            "Control Structures",
        ]
    },
    {
        "name": "Functions",
        "child": [
            "Invoking a Function",
            "Creating a Function",
            "Passing Arguments by Value",
            "Passing Arguments by Reference",
            "Default Argument Values",
            "Using Type Hinting",
            "Returning Values from a Function",
            "Recursive Functions"
        ]
    },
    {
        "name": "Arrays",
        "child": [
            "What Is an Array?",
            "Creating an Array",
            "Outputting an Array",
            "Adding and Removing Array Elements",
            "Locating Array Elements",
            "Traversing Arrays",
            "Determining Array Size and Uniqueness",
            "Sorting Arrays",
            "Merging, Slicing, Splicing, and Dissecting Arrays",
            "Other Useful Array Functions"
        ]
    },
    {
        "name": "Object-Oriented PHP",
        "child": [
            "The Benefits of OOP",
            "Key OOP Concepts",
            "Constructors and Destructors",
            "Static Class Members",
            "The instanceof Keyword",
            "Helper Functions",
            "Autoloading Objects",
        ]
    },
    {
        "name": "Advanced OOP Features",
        "child": [
            "Advanced OOP Features Not Supported by PHP",
            "Object Cloning",
            "Inheritance",
            "Interfaces",
            "Abstract Classes",
            "Introducing Namespaces"
        ]
    },
    {
        "name": "Error and Exception Handling",
        "child": [
            "Configuration Directives",
            "Error Logging",
            "Exception Handling",
            "Why Exception Handling Is Handy",
            "PHP’s Exception-Handling Implementation",
            "SPL’s Exceptions",
        ]
    },
    {
        "name": "Strings and Regular Expressions",
        "child": [
            "Regular Expression Syntax",
            "PHP’s Regular Expression Functions",
            "Other String-Specific Functions",
            "Alternatives for Regular Expression Functions",
        ]
    },
    {
        "name": "Working with the File and Operating System",
        "child": [
            "Learning About Files and Directories",
            "Working with Files",
            "Executing Shell Commands",
            "System-Level Program Execution",
        ]
    },
    {
        "name": "Date and Time",
        "child": [
            "The Unix Timestamp",
            "PHP’s Date and Time Library",
            "Validating Dates",
            "Formatting Dates and Times",
            "Converting a Timestamp to User-Friendly Values",
            "Working with Timestamps"
        ]
    },
    {
        "name": "Working with HTML Forms",
        "child": [
            "PHP and Web Forms",
            "Validating Form Data",
            "File Deletion",
            "Cross-Site Scripting",
            "Sanitizing User Input",
            "Validating and Sanitizing Data with the Filter Extension",
        ]
    },
    {
        "name": "Authenticating Your Users",
        "child": [
            "HTTP Authentication Concepts",
            "Authenticating Your Users with PHP",
            "User Login Administration",
        ]
    },
    {
        "name": "Handling File Uploads",
        "child": [
            "Uploading Files via HTTP",
            "Uploading Files with PHP",
            "PHP’s File Upload/Resource Directives",
            "The $_FILES Array",
            "PHP’s File-Upload Functions",
            "Upload Error Messages",
        ]
    },
    {
        "name": "Session Handlers",
        "child": [
            "What Is Session Handling? ",
            "Configuration Directives",
            "Working with Sessions",
            "Practical Session-Handling Examples",
            "Creating Custom Session Handlers",
        ]
    },
    {
        "name": "Web Services",
        "child": [
            "Why Web Services?",
            "Really Simple Syndication",
            "SimpleXML",
            "Json"
        ]
    },
    {
        "name": "Securing Your Web Site",
        "child": [
            "Configuring PHP Securely?",
            "Hiding Configuration Details",
            "Hiding Sensitive Data",
            "Data Encryption"
        ]
    },
    {
        "name": "Creating Ajax-enhanced Features with js and PHP",
        "child": [
            "Introducing Ajax",
            "Introducing jQuery",
            "Creating a Username Existence Validator"
        ]
    },
    {
        "name": "mysql",
        "child": [
            "Retrieving Data From a Single Table: Select, Where, Linlit, Order by...",
            "Retrieving Data From Multiple Tables",
            "Inserting, Updating, and Deleting Data ",
            "Summarizing Data",
            "Writing Complex Query"
        ]
    },
    {
        "name": "Build Ecommerce Web",
        "child": [
            "E-commerce System Frontend",
            "Product Module Frontend",
            "User Module",
            "Shopping Cart",
            "Payment Module",
            "BACK END: ADMIN",
            "Reports Functionality",
            "Orders in Admin",
            "Products in Admin",
            "Categories in admin",
            "Users  in Admin",
            "Reports in Admin"
        ]
    }
];

let courseContent = '';
for (let i = 0; i < coursePhpContent.length; i++) {
    courseContent += ` <div class='col-sm-12 course-section'>
            <div class='section-title'>
                <span class="section-lock">
                    <i class="fa fa-lock"></i>&nbsp;
                </span>
                Chapter ${i + 1}: ${coursePhpContent[i].name}
            </div>`
    courseContent += `<ul class='section-list'>`;
    for (let j = 0; j < coursePhpContent[i].child.length; j++) {
        courseContent += `
        <li class='section-item'>
            <a class='item'
                <span class='lecture-icon'>
                    <i class='fa fa-youtube-play'></i>
                </span>
                ${j+1}- ${coursePhpContent[i].child[j]}
            </a>
        </li>`;
    }

    courseContent +=  '</ul></div>';
}

document.getElementById("content_wrapper").innerHTML = courseContent;

