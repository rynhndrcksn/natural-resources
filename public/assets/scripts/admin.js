
//Add red background color when showing rejected filtered table
$('#rejected').click(function () {
    $('#rejected').css('background-color', '#b00000ba')
    $('#waitlisted').css('background-color', 'white')
    $('#accepted').css('background-color', 'white')
    $('#all').css('background-color', 'white')
});

//Add yellow background color when showing waitlisted filtered table
$('#waitlisted').click(function () {
    $('#waitlisted').css('background-color', '#eeb304c2')
    $('#rejected').css('background-color', 'white')
    $('#accepted').css('background-color', 'white')
    $('#all').css('background-color', 'white')
});

//Add green background color when showing accepted filtered table
$('#accepted').click(function () {
    $('#accepted').css('background-color', '#2f8d46ed')
    $('#waitlisted').css('background-color', 'white')
    $('#rejected').css('background-color', 'white')
    $('#all').css('background-color', 'white')
});

//Add blue background color when showing all filtered table
$('#all').click(function () {
    $('#all').css('background-color', 'blue')
    $('#waitlisted').css('background-color', 'white')
    $('#accepted').css('background-color', 'white')
    $('#rejected').css('background-color', 'white')
});

document.getElementById("rejectedApplications").onclick = rejectedApplications;
document.getElementById("waitlistedApplications").onclick = waitlistedApplications;
document.getElementById("allApplications").onclick = allApplications;
document.getElementById("acceptedApplications").onclick = acceptedApplications;


//This function will show rejected apps table and hide the others
function rejectedApplications() {
    let all = document.getElementById("allApplicationsTable");
    let waitlisted = document.getElementById("waitlistedApplicationsTable");
    let rejected = document.getElementById("rejectedApplicationsTable");
    let accepted = document.getElementById("acceptedApplicationsTable");
    rejected.classList.remove("d-none");
    waitlisted.classList.add("d-none");
    accepted.classList.add("d-none");
    all.classList.add("d-none");
}

//This function will show waitlisted apps table and hide the others
function waitlistedApplications() {
    let all = document.getElementById("allApplicationsTable");
    let waitlisted = document.getElementById("waitlistedApplicationsTable");
    let rejected = document.getElementById("rejectedApplicationsTable");
    let accepted = document.getElementById("acceptedApplicationsTable");
    rejected.classList.add("d-none");
    waitlisted.classList.remove("d-none");
    accepted.classList.add("d-none");
    all.classList.add("d-none");
}

//This function will show all apps table and hide the others
function allApplications() {
    let all = document.getElementById("allApplicationsTable");
    let waitlisted = document.getElementById("waitlistedApplicationsTable");
    let rejected = document.getElementById("rejectedApplicationsTable");
    let accepted = document.getElementById("acceptedApplicationsTable");
    rejected.classList.add("d-none");
    waitlisted.classList.add("d-none");
    accepted.classList.add("d-none");
    all.classList.remove("d-none");
}

//This function will show accepted apps table and hide the others
function acceptedApplications() {
    let all = document.getElementById("allApplicationsTable");
    let waitlisted = document.getElementById("waitlistedApplicationsTable");
    let rejected = document.getElementById("rejectedApplicationsTable");
    let accepted = document.getElementById("acceptedApplicationsTable");
    rejected.classList.add("d-none");
    waitlisted.classList.add("d-none");
    accepted.classList.remove("d-none");
    all.classList.add("d-none");
}

