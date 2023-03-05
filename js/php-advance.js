const coursePhpContent = [
    {
        "name": "Starting the TShirtShop Project",
        "child": [
            "Implementing the Site Skeleton",
            "Preparing the Database",
        ]
    },
    {
        "name": "Creating the Product Catalog",
        "child": [
            "Showing Your Visitors What You’ve Got",
            "Storing Catalog Information",
            "Communicating with the Database",
            "Adding Logic to the Site",
            "Displaying the List of Departments",
            "Creating the Link Factory",
            "Storing the New Data",
            "Querying the New Data",
            "Writing the New Database Stored Procedures",
            "Completing the Business Tier Code",
            "Implementing the Presentation Tier",
        ]
    },
    {
        "name": "Product Attributes",
        "child": [
            "Implementing the Data Tier",
            "Implementing the Business Tier",
            "Implementing the Presentation Tier",
        ]
    },
    {
        "name": "Search Engine Optimization",
        "child": [
            "Optimizing TShirtShop",
            "Supporting Keyword-Rich URLs",
            "mod_rewrite and Regular Expressions",
            "Building Keyword-Rich URLs",
            "URL Correction with 301 Redirects",
            "Customizing Page Titles",
            "Updating Catalog Pagination",
            "Correctly Signaling 404 and 500 Errors",
        ]
    },
    {
        "name": "Searching the Catalog",
        "child": [
            "Choosing How to Search the Catalog",
            "Teaching the Database to Search Itself",
            "Implementing the Business Tier",
            "Implementing the Presentation Tier",
        ]
    },
    {
        "name": "Receiving Payments",
        "child": [
            "Considering Internet Payment Service Providers",
            "Getting Started with PayPal",
            "Integrating the PayPal Shopping Cart and Checkout",
            "Using the PayPal Single Item Purchases Feature",
        ]
    },
    {
        "name": "Catalog Administration: Departments and Categories",
        "child": [
            "Previewing the Catalog Administration Page",
            "Setting Up the Catalog Administration Page",
            "Administering Departments",
            "Administering Categories",
        ]
    },
    {
        "name": "Creating Your Own Shopping Cart",
        "child": [
            "Designing the Shopping Cart",
            "Storing Shopping Cart Information",
            "Administering the Shopping Cart",
        ]
    },
    {
        "name": "Implementing AJAX Features",
        "child": [
            "AJAX Quick Start",
            "Creating the AJAX Shopping Cart",
        ]
    },
    {
        "name": "Accepting Customer Orders",
        "child": [
            "Implementing an Order-Placement System",
            "Administering Orders",
            "Displaying Pending Orders",
            "Displaying Order Details",
        ]
    },
    {
        "name": "Product Recommendations",
        "child": [
            "Increasing Sales with Dynamic Recommendations",
            "Selecting Recommendations from the Database",
            "Implementing Product and Shopping Cart Recommendations",
            "Storing Customer Accounts",
            "Implementing the Security Classes",
            "Adding Customer Accounts Functionality to TShirtShop",
            "Creating the Checkout Page",
            "Enforcing SSL Connections",
        ]
    },
    {
        "name": "Storing Customer Orders",
        "child": [
            "Adding Orders to Customer Accounts",
            "Administering Customer Orders",
            "Handling Tax and Shipping Charges",
            "Tax Issues",
            "Shipping Issues",
        ]
    },
    {
        "name": "Implementing the Order Pipeline",
        "child": [
            "What Is an Order Pipeline?",
            "Designing the Order Pipeline",
            "Laying the Groundwork",
            "Updating the Orders Processing Code",
            "Implementing the Pipeline Sections",
            "Testing the Pipeline",
            "Updating the Checkout Page",
            "Updating the Orders Administration Page",
        ]
    },
    {
        "name": "Processing Credit Card Transactions",
        "child": [
            "Credit Card Transaction Fundamentals",
            "Working with DataCash",
            "Working with Authorize.net",
            "Integrating Authorize.net with TShirtShop",
        ]
    },
    {
        "name": "Product Reviews",
        "child": [
            "Planning the Product Reviews Feature",
            "Implementing Product Reviews",
        ]
    },
    {
        "name": "Using Amazon.com Web Services",
        "child": [
            "Introducing Web Services",
            "Accessing the Amazon Web Services",
            "Creating Your Amazon.com Web Services Account",
            "Obtaining an Amazon.com Associate ID",
            "Accessing Amazon.com E-Commerce Service Using REST",
            "Accessing Amazon.com E-Commerce Service Using SOAP",
            "Integrating A2S with TShirtShop",
            "Implementing the Business Tier",
            "Implementing the Presentation Tier",
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

