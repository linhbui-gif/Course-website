const courseJsContent = [
    {
        "name": "Getting Started",
        "child": [
            "Welcome",
            "What is Node",
            "Node Architecture",
            "How Node Works",
            "Installing Node",
            "Your First Node Program",          
        ]
    },
    {
        "name": "Node Module System",
        "child": [
            "Introduction",
            "Global Object",
            "Modules",
            "Creating a Module",
            "Loading a Module",
            "Module Wrapper Function",
            "Path Module",
            "OS Module",
            "File System Module",
            "Events Module",
            "Event Arguments",
            "Extending EventEmitter",
            "HTTP Module",
        ]
    },
    {
        "name": "Node Package Manager (NPM)",
        "child": [
            "Package.json",
            "Installing a Node Package",
            "Using a Package",
            "Package Dependencies",
            "NPM Packages and Source Control",
            "Semantic Versioning",
            "Listing the Installed Packages",
            "Viewing Registry Info for a Package",
            "Installing a Specific Version of a Package",
            "Updating Local Packages",
            "DevDependencies",
            "Uninstalling a Package",
            "Working with Global Packages",
            "Publishing a Package",
            "Updating a Published Package",
        ]
    },
    {
        "name": "Building RESTful API's Using Express",
        "child": [
            "RESTful Services",
            "Introducing Express",
            "Building Your First Web Server",
            "Nodemon",
            "Environment Variables",
            "Route Parameters",
            "Handling HTTP GET Requests",
            "Handling HTTP POST Requests",
            "Calling Endpoints Using Postman",
            "Input Validation",
            "Handling HTTP PUT Requests",
            "Handling HTTP Delete Requests",
            "Project- Build the Genres API",
        ]
    },
    {
        "name": "Express- Advanced Topics",
        "child": [
            "Middleware",
            "Creating Custom Middleware",
            "Built-in Middleware",
            "Third-party Middleware",
            "Environments",
            "Configuration",
            "Debugging",
            "Templating Engines",
            "Database Integration",
            "Authentication",
            "Structuring Express Applications",
            "Project- Restructure the App",
        ]
    },
    {
        "name": "Asynchronous JavaScript",
        "child": [
            "Synchronous vs Asynchronous Code",
            "Patterns for Dealing with Asynchronous Code",
            "Callbacks",
            "Callback Hell",
            "Named Functions to Rescue",
            "Promises",
            "Replacing Callbacks with Promises",
            "Consuming Promises",
            "Creating Settled Promises",
            "Running Promises in Parallel",
            "Async and Await",
            "Exercise",         
        ]
    },
    {
        "name": "CRUD Operations Using Mongoose",
        "child": [
            "Introducing MongoDB",
            "Installing MongoDB",
            "Connecting to MongoDB",
            "Schemas",
            "Models",
            "Saving a Document",
            "Querying Documents",
            "Comparison Query Operators",
            "Logical Query Operators",
            "Regular Expressions",
            "Counting",
            "Pagination",
            "Exercise 1",
            "Exercise 2",
            "Exercise 3",
            "Updating a Document- Query First",
            "Updating a Document- Update First",
            "Removing Documents",
            "CRUD Operations with Mongoose and MongoDB",
        ]
    },
    {
        "name": "Mongo - Data Validation",
        "child": [
            "Validation",
            "Built-in Validators",
            "Custom Validators",
            "Async Validators",
            "Validation Errors",
            "SchemaType Options",
            "Project- Add Persistence to Genres API",
            "Project- Build the Customers API",
            " Restructuring the Project",
        ]
    },
    {
        "name": "Mongoose- Modeling Relationships between Connected Data",
        "child": [
            "Modelling Relationships",
            "Referencing Documents",
            "Population",
            "Embedding Documents",
            "Using an Array of Sub-documents",
            "Project- Build the Movies API",
            "Transactions",
            "ObjectID",
            "Validating ObjectIDs",
            "A Better Implementation",
            "Mongoose- Modelling Relationships between Connected Data Recap",
        ]
    },
    {
        "name": "Authentication and Authorization",
        "child": [
            "Creating the User Model",
            "Registering Users",
            "Using Lodash",
            "Hashing Passwords",
            "Authenticating Users",
            "Testing the Authentication",
            "JSON Web Tokens",
            "Generating Authentication Tokens",
            "Storing Secrets in Environment Variables",
            "Setting Response Headers",
            "Encapsulating Logic in Mongoose Models",
            "Authorization Middleware",
            "Protecting Routes",
            "Getting the Current User",
            "Logging Out Users",
            "Role-based Authorization",
            "Testing the Authorization",
        ]
    },
    {
        "name": "Handling and Logging Errors ",
        "child": [
            "Handling Rejected Promise",
            "Express Error Middleware",
            "Removing Try Catch Blocks",
            "Express Async Errors",
            "Logging Errors",
            "Logging to MongoDB",
            "Uncaught Exceptions",
            "Unhandled Promise Rejections",
            "Error Handling Recap",
            "Extracting Routes",
            "Extracting the Db Logic",
            "Extracting the Logging Logic",
            "Extracting the Config Logic",
            "Extracting the Validation Logic",
            "Showing Unhandled Exceptions on the Console",
            "Handling and Logging Errors Recap",
        ]
    },
    {
        "name": "Deployment ",
        "child": [
            "Preparing the App for Production",
            "Getting Started with Heroku",
            "Preparing the App for Heroku",
            "Adding the Code to a Git Repository",
            "Deploying to Heroku",
            "Viewing Logs",
            "Setting Environment Variables",
            "MongoDB in the Cloud",
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

