const courseMysqlContent = [
    "Getting Started",
    "Retrieving Data From a Single Table",
    "Retrieving Data From Multiple Tables",
    "Inserting, Updating, and Deleting Data",
    "Summarizing Data",
    "Writing Complex Query",
    "Essential MySQL Functions",
    "Views",
    "Stored Procedures",
    "Triggers and Events",
    "Transactions and Concurrency",
    "Data Types",
    "Designing Databases",
    "Indexing for High Performance",
    "Securing Databases",
];

let courseContent = '';
for (const [index, course] of courseMysqlContent.entries()) {
    courseContent += ` <div class='col-sm-12 course-section'>
            <div class='section-title'>
                <span class="section-lock">
                    <i class="fa fa-lock"></i>&nbsp;
                </span>
                Chapter ${index + 1}: ${course}
            </div>
        </div>`;
}

document.getElementById("content_wrapper").innerHTML = courseContent;

