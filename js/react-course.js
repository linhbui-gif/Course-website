const courseJsContent = [

    {
        "name": "Getting Started",
        "child": [
            "What is React",
            "Setting Up the Development Environment",
            "Your First React App",
            "Hello World",
            "Custom Configs",
            "Full-stack Architecture",
            "Redux?"
        ]
    },
    {
        "name": "ES6 Refresher",
        "child": [
            "Let vs Var vs Const",
            "Objects",
            "The this Keyword",
            "Binding this",
            "Arrow Functions",
            "Arrow Functions and this",
            "Array.map Method",
            "Object Destructuring",
            "Spread Operator",
            "Modules",
            "Named and Default Exports",
        ]
    },
    {
        "name": "Components",
        "child": [
            "Setting Up the Project",
            "Your First React Component",
            "Class vs Function Components",
            "Specifying Children",
            "Embedding Expressions",
            "Setting Attributes",
            "Rendering Classes Dynamically",
            "Rendering Lists",
            "Conditional Rendering",
            "Handling Events",
            "Updating the State",
            "What Happens When State Changes",
            "Passing Event Arguments",
            "Setting Up the Vidly Project",
            "Exercises",
            "Building the Movies Component",
            "Deleting a Movie",
            "Conditional Rendering",
        ]
    },
    {
        "name": "Composing Components",
        "child": [
            "Composing Components",
            "Passing Data to Components",
            "Passing Children",
            "Debugging React Apps",
            "Props vs State",
            "Raising and Handling Events",
            "Updating the State",
            "Single Source of Truth",
            "Removing the Local State",
            "Multiple Components in Sync",
            "Lifting the State Up",
            "Stateless Functional Components",
            "Destructuring Arguments",
            "Exercise- Decrement Button",
            "Solution - Decrement Button",
            "Exercise- Like Component",
            "Solution- Like Component",
        ]
    },
    {
        "name": "Pagination, Filtering, and Sorting",
        "child": [
            "Exercise- Pagination Component",
            "Pagination- Component Interface",
            "Pagination- Displaying Pages",
            "Pagination- Handling Page Changes",
            "Pagination- Paginating Data",
            "Pagination- Type Checking with PropTypes",
            "Exercise- ListGroup Component",
            "Filtering- Component Interface",
            "Filtering- Displaying Items",
            "Filtering- Default Props",
            "Filtering- Handling Selection",
            "Filtering- Implementing Filtering",
            "Filtering- Adding All Genres",
            "Sorting- Extracting MoviesTable",
            "Sorting- Raising the Sort Event",
            "Sorting- Implementing Sorting",
            "Sorting- Moving Responsibility",
            "Sorting- Extracting TableHeader",
            "Sorting- Extracting TableBody",
            "Sorting- Rendering Cell Content",
            "Sorting- Unique Keys - Final",
            "Sorting- Adding the Sort Icon",
            "Sorting- Extracting Table",
            "Sorting- Extracting a Method",
            "Destructuring Arguments",
        ]
    },
    {
        "name": "Routing",
        "child": [
            "Setup",
            "Adding Routing",
            "Switch",
            "Link",
            "Route Props",
            "Passing Props",
            "Route Parameters",
            "Optional Parameters",
            "Query String Parameters",
            "Redirects",
            "Programmatic Navigation",
            "Nested Routing",
            "Exercises- NavBar and Routing",
            "Adding React Router",
            "Adding Routes",
            "Adding the NavBar",
            "Linking to the MovieForm",
        ]
    },
    {
        "name": "Forms",
        "child": [
            "Building a Bootstrap Form",
            "Handling Form Submission",
            "Refs",
            "Controlled Elements",
            "Handling Multiple Inputs",
            "Common Errors",
            "Extracting a Reusable Input",
            "Validation",
            "A Basic Validation Implementation",
            "Displaying Validation Errors",
            "Validation on Change",
            "Joi",
            "Validating a Form Using Joi",
            "Validating a Field Using Joi",
            "Disabling the Submit Button",
            "Extracting a Reusable Form",
            "Extracting Helper Rendering Methods",
            "Register Form",
            "Exercise 2- Movie Form",
            "Exercise 3- Search Movies",
        ]
    },
    {
        "name": "Calling Backend Services",
        "child": [
            "JSON Placeholder",
            "Http Clients",
            "Getting Data",
            "Creating Data",
            "Lifecycle of a Request",
            "Updating Data",
            "Deleting Data",
            "Optimistic vs Pessimistic Updates",
            "Expected vs Unexpected Errors",
            "Handling Unexpected Errors Globally",
            "Extracting a Reusable Http Service",
            "Extracting a Config Module",
            "Displaying Toast Notifications",
            "Logging Errors",
            "Extracting a Logger Service",
            "Vidly Backend",
            "Installing MongoDB",
            "Setting Up the Node Backend",
            "Disabling Authentication",
            "Exercise- Connect Movies Page to the Backend",
            "Adding Http and Log Services",
            "Replacing FakeGenreService",
            "Replacing FakeMovieService",
            "Extracting a Config File",
            "Exercise- Connect Movie Form to the Backend",
            "Populating the Form",
            "Refactoring",
            "Saving the Movie",
        ]
    },
    {
        "name": "Authentication and Authorization",
        "child": [
            "Registering a New User",
            "Submitting the Registration Form",
            "Handling Registration Errors",
            "Logging in a User",
            "Submitting the Login Form",
            "Handling Login Errors",
            "Storing the JWT",
            "Logging in the User upon Registration",
            "JSON Web Tokens (JWT)",
            "Getting the Current User",
            "Displaying the Current User on NavBar",
            "Logging out a User",
            "Refactoring",
            "Calling Protected API Endpoints",
            "Fixing Bi-directional Dependencies",
            "Authorization",
            "Showing or Hiding Elements based on the User",
            "Protecting Routes",
            "Extracting ProtectedRoute",
            "Redirecting after Login",
            "Exercise",
            "Hiding the Delete Column",
        ]
    },
    {
        "name": "Deployment",
        "child": [
            "Environment Variables",
            "Production Builds",
            "Getting Started with Heroku",
            "MongoDB in the Cloud",
            "Adding Code to a Git Repository",
            "Deploying to Heroku",
            "Viewing Logs",
            "Setting Environment Variables on Heroku",
            "Preparing the Font-end for Deployment",
            "Deploying the Front-end",
        ]
    },
    {
        "name": "Advanced Topics Build Hook",
        "child": [
            "Setting Up the Development Environment",
            "Higher Order Components",
            "Implementing a Higher Order Component",
            "Hooks",
            "The useState Hook",
            "The useEffect Hook",
            "Custom Hooks",
            "Fetching Data with Hooks",
            "Context",
            "Context in Functional Components",
            "Updating the Context",
            "Consuming Multiple Contexts",
        ]
    },
    {
        "name": "Redux Fundamentals",
        "child": [
            "Redux Architecture",
            "Your First Redux App",
            "Designing the Store",
            "Defining the Actions",
            "Creating a Reducer",
            "Creating the Store",
            "Dispatching Actions",
            "Subscribing to the Store",
            "Action Types",
            "Action Creators",
            "Exercise",
        ]
    },
    {
        "name": "Building Redux from Scratch",
        "child": [
            "Redux Store",
            "Private Properties",
            "Dispatching Actions",
            "Subscribing to the Store",
        ]
    },
    {
        "name": "Debugging Redux Applications",
        "child": [
            "Installing Redux DevTools",
            "The Basics",
            "Inspector Monitor",
            "Tracing",
            "Exporting and Importing"
        ]
    },
    {
        "name": "Writing Clean Redux Code",
        "child": [
            "Structuring Files and Folders",
            "Ducks Pattern",
            "Redux Toolkit",
            "Creating the Store",
            "Creating Actions",
            "Creating Reducers",
            "Creating Slices",
            "Exercise"
        ]
    },
    {
        "name": "Designing the Store",
        "child": [
            "Redux State vs Local State",
            "Structuring a Redux Store",
            "Combining Reducers",
            "Normalization",
            "Selectors",
            "Memoizing Selectors with Reselect",
            "Exercise",
        ]
    },
    {
        "name": "Middleware",
        "child": [
            "What is Middleware",
            "Creating Middleware",
            "Parameterizing Middleware",
            "Dispatching Functions",
            "Exercise"
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

