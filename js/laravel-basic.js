const coursePhpContent = [
    {
        "name": "Setting Up a Laravel Development Environment",
        "child": [
            "System Requirements",
            "Composer",
            "Local Development Environments",
            "Laravel Valet",
            "Laravel Homestead",
            "Creating a New Laravel Project",
            "Laravel’s Directory Structure The Folders",
        ]
    },
    {
        "name": "Routing and Controllers",
        "child": [
            "Route Definitions",
            "Route Groups",
            "Views",
            "Controllers",
            "Route Model Binding",
            "Route Caching",
            "Form Method Spoofing",
            "CSRF Protection",
            "Redirects",
            "Aborting the Request",
            "Custom Responses",
        ]
    },
    {
        "name": "Blade Templating",
        "child": [
            "Echoing Data",
            "Control Structures",
            "Template Inheritance",
            "View Composers and Service Injection",
            "Custom Blade Directives"
        ]
    },
    {
        "name": "Frontend Components",
        "child": [
            "Elixir",
            "Pagination",
            "Message Bags",
            "String Helpers, Pluralization, and Localization",
            "Testing",
        ]
    },
    {
        "name": "Collecting and Handling User Data",
        "child": [
            "Injecting a Request Object",
            "Route Data",
            "Uploaded Files",
            "Validation",
            "Form Requests",
            "Eloquent Model Mass Assignment",
        ]
    },
    {
        "name": "Artisan and Tinker",
        "child": [
            "An Introduction to Artisan",
            "Basic Artisan Commands",
            "Writing Custom Artisan Commands",
            "Calling Artisan Commands in Normal Code",
        ]
    },
    {
        "name": "Database and Eloquent",
        "child": [
            "Configuration",
            "Migrations",
            "Seeding",
            "Query Builder",
            "Introduction to Eloquent",
            "Eloquent Events",
        ]
    },
    {
        "name": "User Authentication and Authorization ",
        "child": [
            "The User Model and Migration",
            "Using the auth() Global Helper and the Auth Facade",
            "The Auth Controllers",
            "Auth::routes()",
            "The Auth Scaffold",
            "“Remember Me”",
            "Manually Authenticating Users",
            "Auth Middleware",
            "Guards",
            "Auth Events",
            "Authorization (ACL) and Roles",
        ]
    },
    {
        "name": "Requests and Responses",
        "child": [
            "Laravel’s Request Lifecycle",
            "The Request Object",
            "The Response Object",
            "Laravel and Middleware",
        ]
    },
    {
        "name": "The Container",
        "child": [
            "A Quick Introduction to Dependency Injection",
            "Dependency Injection and Laravel",
            "The app() Global Helper    ",
            "How the Container Is Wired",
            "Binding Classes to the Container ",
            "Constructor Injection",
            "Method Injection",
            "Facades and the Container",
            "Service Providers",
        ]
    },
    {
        "name": "Testing",
        "child": [
            "Testing Basics ",
            "Naming Tests",
            "The Testing Environment",
            "The Testing Traits",
            "Application Testing",
            "Artisan and Seed",
            "Mocking",
        ]
    },
    {
        "name": "Writing APIs",
        "child": [
            "The Basics of REST-Like JSON APIs",
            "Controller Organization and JSON Returns",
            "Reading and Sending Headers",
            "Eloquent Pagination",
            "Sorting and Filtering",
            "Transforming Results",
            "Nesting and Relationships",
            "API Authentication with Laravel Passport",
            "Laravel API Token Authentication ",
        ]
    },
    {
        "name": "Storage and Retrieval",
        "child": [
            "Local and Cloud File Managers",
            "Basic File Uploads and Manipulation",
            "Sessions",
            "Cache",
            "Cookies",
            "Full-Text Search with Laravel Scout",
        ]
    },
    {
        "name": "Mail and Notifications",
        "child": [
            "Mail",
            "Notifications",
            "Testing",
        ]
    },
    {
        "name": "Queues, Jobs, Events, Broadcasting, and the Scheduler",
        "child": [
            "Queues",
            "Events",
            "Broadcasting Events over WebSockets, and Laravel Echo",
            "Scheduler"
        ]
    },
    {
        "name": "Helpers and Collections",
        "child": [
            "Helpers",
            "Collections",
        ]
    },
    
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

