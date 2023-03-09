const coursePhpContent = [
    {
        "name": "Laravel 9 Breeze Authentication Setup",
        "child": [
            "Laravel 9 Breeze Authentication install",
            "Discuss on Laravel Breeze File Structure",
            "Forgot Password & Password Reset",
            "Email Verify in Laravel",
            "Changing our Logo Component-",
            "Logging in with Username",
        ]
    },
    {
        "name": "Frontend Template Setup",
        "child": [
            "Frontend Template Setup Part 1",
            "Frontend Template Setup Part 2",
            "Admin Panel Setup",
            "Admin Profile & Image Update"
        ]
    },
    {
        "name": "Multi Auth with Breeze Create Auth for User / Seller / Admin",
        "child": [
            "Install Laravel in your system",
            "Install Breeze in laravel",
            "Multi Auth With Admin Guard Part 1",
            "Multi Auth With Admin Guard Part 2",
            "Admin Login & Logout Guard Part 1",
            "Admin Login & Logout Guard Part 2",
            "Admin Login & Logout Guard Part 3",
            "Admin Login & Logout Guard Part 4",
            "Admin Register",
            "Multi Auth With Seller Guard Part 1",
            "Multi Auth With Seller Guard Part 2",
            "Multi Auth With Seller Guard Part 3",
            "Multi Auth With Seller Guard Part 4",            
        ]
    },
    {
        "name": "Multi Auth with Laravel Jetstream",
        "child": [
           " Create Database and Migrate",
            "Default Auth System Profile Update",
            "Setup Admin Table and Seed Data",
           " Create Guards for Admin",
            "Laravel 9 Multi Auth Part 1",
        ]
    },
    {
        "name": "Manage User",
        "child": [
            "Routing Controller and Manage Users",
            "View User Data from Database",
            "Insert User Data in Database",
            "Adding Toastr In Project",
            "Edit and Update User Data into Database Part 1",
            "Edit and Update User Data into Database Part 2",
            "Delete User Data From Database",
            "Adding Sweet Alert In Project-",            
        ]
    },
    {
        "name": "Manage User Profile",
        "child": [
            "User Profile Image Upload Edit Update Database Part 1",
            "User Profile Image Upload Edit Update Database Part 2",
            "User Profile Image Upload Edit Update Database Part 3",
            "User Profile Image Upload Edit Update Database Part 4",
            "User Profile Change Password Option Part 1",
            "User Profile Change Password Option Part 2",
        ]
    },
    {
        "name": "Student PDF Generate",
        "child": [
            "Student PDF Generate Part 1",
            "Student PDF Generate Part 2"
        ]
    },
    {
        "name": "Student Roll Generate",
        "child": [
            
        ]
    },
    {
        "name": "Students Registration Fee",
        "child": [
            
        ]
    },
    {
        "name": "Students Monthly Fee Option",
        "child": [
            
        ]
    },
    {
        "name": "Students Exam Fee Option",
        "child": [
            
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

